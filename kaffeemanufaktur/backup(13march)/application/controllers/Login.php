<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function index(){
        if($this->session->has_userdata('user'))
        {
            if($this->session->userdata('user')->user_type == 3){
                $data['page_title']="Dashboard";
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/admin_home');
                $this->load->view('admin/includes/footer');
            }else{
                redirect(base_url());
            }
        }else{
        if (!empty($_POST)) { 
            $data = $_POST;
            if(isset($data['username']) && !empty($data['username'])){
                $data1['email_id']=$data['username'];
            }
            if(isset($data['password']) && !empty($data['password'])){
                $data1['password']=$data['password'];
            }
            
            if(isset($data['remember'])&&!empty($data['remember'])&&$data['remember']=='on'&&isset($data1['email_id']) && !empty($data1['email_id'])&&isset($data['password']) && !empty($data['password'])){
                    $time=time()+ (10 * 365 * 24 * 60 * 60);
                    delete_cookie('email_id'); 
                    delete_cookie('password'); 
                    $cookie1= array(
                    'name'   => 'email_id',
                   'value'  => (string)$data1['email_id'],                            
                   'expire' => $time,                                                                                   
                   'secure' => FALSE
                        );
                    $cookie2= array(
                    'name'   => 'password',
                   'value'  => (string)$data['password'],                            
                   'expire' => $time,                                                                                   
                   'secure' => FALSE
                        );
                    $this->input->set_cookie($cookie1);  
                    $this->input->set_cookie($cookie2); 
                }
                
                if(!isset($data['remember'])){
                    delete_cookie('email_id'); 
                    delete_cookie('password');
                }
                
                $datareceived = ['email_id'=>$data1['email_id'],'status'=>'0'];
                $resp = $this->Common->select('users','*',$datareceived);
                if(!empty($resp)){
                    $check_password = password_verify($data1['password'],$resp->password);
                    if(isset($check_password) && !empty($check_password)){
                        unset($resp->password);
                        $this->session->set_userdata('user',$resp);
                        if($resp->user_type == 3){
                            $data['page_title']="Dashboard";
                            $this->load->view('admin/includes/header',$data);
                            $this->load->view('admin/admin_home');
                            $this->load->view('admin/includes/footer');
                           $this->load->view('admin/admin_home');
                        }else{
                            redirect('home');
                        }
                    }else{
                        $data['ptitle'] = 'login page';
                        $data['msg'] = 'The password you entered for username '.$data1['email_id'].' is incorrect.<a href="">Lost Your Password  </a>';
                        $this->load->view('mein-account',$data);
                    }
                }else{
                    $data['ptitle'] = 'login page';
                    $data['msg'] = "Please contact with admin";
                    $this->load->view('mein-account',$data);
                }
        }else{
            $data['ptitle'] = 'login page';
            $this->load->view('mein-account',$data);
        }
        // var_dump($data);die();
        
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect('login');
        exit;
    }
    public function forgot_password()
    {
        $email = $this->input->post('email');
        //resetting user password here
        $new_password = substr(md5(rand(100000000, 20000000000)), 0, 7);

        // Checking credential for admin
        $query = $this->db->get_where('users', array('email_id' => $email));
        if ($query->num_rows() > 0) {
            if($this->password_reset_email($email)){
                $data['ptitle'] = 'Register';
                $data['msg'] = ucwords('please check your email for reset password');
                $this->load->view('mein-account',$data);
            }
        } else {
            $this->session->set_flashdata('error_message', ucwords('password_reset_failed'));
            redirect(site_url('login'), 'refresh');
        }
    }
    public function password_reset_email($email = '')
    {
        $query = $this->db->get_where('users' , array('email_id' => $email));
        // $new_password = sha1(substr(md5(rand(100000000, 20000000000)), 0, 7));
        $expFormat = mktime(
        date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
        );
        $expDate = date("Y-m-d H:i:s",$expFormat);
        $key = md5((2418*2).$email);
        $addKey = substr(md5(uniqid(rand(),1)),3,10);
        $key = $key . $addKey;
        if($query->num_rows() > 0)
        {
            $this->Common->insert_data('password_reset_temp',array('email'=>$email,'key'=>$key,'expDate'=>$expDate));
            $body  =   '<html>
                            <body>
                            <p>Hey there,</p>
                            <p>Someone requested a new password for your account.</p>
                            <p><a href="'.base_url('login/reset_password?key=').$key.'&email='.$email.'&action=reset'.'" style="padding:10px;border:1px solid black,background-color:rgb(255 141 0);color:#ffffff" target="_blank">Reset Password</a></p>
                            <p>If You did not make this request then you can safely ignore this email :)</p>
                            <p>Freundliche Grüße,</p>
                            <p>Ihre Hannoversche Kaffeemanufaktur</p>
                            </body>
                        </html>';

            $subject  =   "Password reset request";
            $email_to   =   $email;
            // die();
            $this->send_smtp_mail($body,$subject,$email_to, 'test001.enthuons@gmail.com');
            return true;
        }else{
            return false;
        }
    }

    private function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
        if($from == NULL){
            $from = 'rohit@enthuons.com';
        }
        $htmlContent = $msg;
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test001.enthuons@gmail.com';
        $mail->Password = 'ZeZ0&B&8VtT^rYdlx2D0z3ke';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        
        $mail->setFrom($from, 'rohit@enthuons.com');
        $mail->addReplyTo($from, 'rohit@enthuons.com');
        
        // Add a recipient
        $mail->addAddress($to);
        // Email subject
        $mail->Subject = $sub;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = $htmlContent;
        $mail->Body = $mailContent;
        
        // Send email
        if($mail->send()){
            return;
        }else{
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        
    }
    public function reset_password(){
        if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="reset") && !isset($_POST["action"])){
              $key = $_GET["key"];
              $email = $_GET["email"];
              $curDate = date("Y-m-d H:i:s");
              $valid_result = $this->db->query("SELECT * FROM `password_reset_temp` WHERE `key`= '$key' and `email`='$email'")->row();

              if (empty($valid_result)){
                  $data['error'] = '<h2>Invalid Link</h2>
                                    <p>The link is invalid/expired. Either you did not copy the correct link
                                    from the email, or you have already used the key in which case it is 
                                    deactivated.</p>';
                 }else{
                  $expDate = $valid_result->expDate;
                  if ($expDate >= $curDate){
                        $data['success'] ='Reset Password';
                        
                    }else{
                        $data['error'] = "<h2>Link Expired</h2>
                                    <p>The link is expired. You are trying to use the expired link which 
                                    as valid only 24 hours (1 days after request).<br /><br /></p>";
                    }
                }
            $data['email'] = $_GET["email"];
            $this->load->view('reset_password',$data);
                
          }
    } 
    public function save_password(){
        if (!empty($_POST)) { 
            $data = $_POST;
            $email ='';
            if(isset($data['email_id']) && !empty($data['email_id'])){
                $email = $data['email_id'];
            }
            if(isset($data['password']) && !empty($data['password'])){
                $data1['password']=password_hash($data['password'], PASSWORD_BCRYPT);
            }
            $this->Common->update_data('users', $data1,array('email_id'=>$email));
            $this->Common->delete_data('password_reset_temp', array('email'=>$email));
            $data['ptitle'] = 'Register';
            $data['msg'] = ucwords('Your password has been reset successfully!');
            $this->load->view('mein-account',$data);
        }
    }
    public function change_password(){
        if ($_POST) { 
            $data = $_POST;
            $email ='';
            if(isset($data['email_id']) && !empty($data['email_id'])){
                $email = $data['email_id'];
            }
            if(isset($data['password']) && !empty($data['password'])){
                $data1['password']=password_hash($data['password'], PASSWORD_BCRYPT);
            }
            $this->Common->update_data('users', $data1,array('email_id'=>$email));
            $this->session->unset_userdata('user');
            $this->session->sess_destroy();
            $data['page_title']="Dashboard";
            $data['ptitle'] = 'Register';
            $data['msg'] = 'Your password has been reset successfully!';
            $this->load->view('mein-account',$data);
        }else{
            $data['page_title']="Admin New Password";
            $data['email']=$this->session->userdata('user')->email_id;
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/forgot_password');
            $this->load->view('admin/includes/footer');
        }
    }      
}
