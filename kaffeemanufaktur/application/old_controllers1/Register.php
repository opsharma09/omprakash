<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->load->model('Common');
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
            redirect('home');exit;
        }
        if (!empty($_POST)) { 
            $data = $_POST;
            if(isset($data['privat']) && !empty($data['privat'])){
                $data1['user_type']=1;
            }
            if(isset($data['firma']) && !empty($data['firma'])){
                $data1['user_type']=2;
            }
            if(isset($data['firstname']) && !empty($data['firstname'])){
                $data1['first_name']=$data['firstname'];
            }
            if(isset($data['lastname']) && !empty($data['lastname'])){
                $data1['last_name']=$data['lastname'];
            }
            if(isset($data['password']) && !empty($data['password'])){
                $data1['password']=password_hash($data['password'], PASSWORD_BCRYPT);
            }
            if(isset($data['email']) && !empty($data['email'])){
                $data1['email_id']=$data['email'];
            }
            if(isset($data['habes']) && !empty($data['habes'])){
                $data1['option_1']=1;
            }
            if(isset($data['habe']) && !empty($data['habe'])){
                $data1['option_2']=1;
            }
            if(isset($data['ich']) && !empty($data['ich'])){
                $data1['option_3']=1;
            }
            if(isset($data['address']) && !empty($data['address'])){
                $data1['address']=$data['address'];
            }
            
            if(isset($data['number']) && !empty($data['number'])){
                $data1['phone_no']=$data['isd'].$data['number'];
            }
            
             //Generate a random string.
                $token = openssl_random_pseudo_bytes(16);

                //Convert the binary data into hexadecimal representation.
                $token = bin2hex($token);
                $data1['token']=$token;
                
            $insert = $this->Common->insert('users', $data1);
            if ($insert > 0) {
               

                $body =  '<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Sie haben sich soeben bei der <a href="' . base_url().'">Hannoverschen Kaffeemanufaktur</a> registriert.Bitte bestätigen Sie Ihre Anmeldung durch Klicken des folgenden Links: </p>
                                    <p><a href="' . base_url() . 'verify?v=' . $token . '">Klicken Sie hier, um Ihre E-Mail zu bestätigen</a></p>
                                    <p>Wenn Sie den Link nicht aktivieren, erhalten Sie keine weiteren Mitteilungen von uns. Ihre E-Mail-Adresse wird automatisch aus unserem Verteiler gelöscht.</p>
                                    <p>Freundliche Grüße,</p>
                                    <p>Ihre Hannoversche Kaffeemanufaktur</p>
                                    </body>
</html>';

                    
                    $subject = "Bitte bestätigen Sie Ihre Registrierung bei der Hannoverschen Kaffeemanufaktur";
                   $status = $this->send_smtp_mail($body,$subject,$data1['email_id'], 'rohit.enthuons@gmail.com');
//                    print_r($status);exit;
//                $this->load->view('registrieren');
		$data['title'] = 'Register';
                    $data['msg'] = "You are successfully register. You can login here";
                    $this->load->view('mein-account',$data);
               
            }
        }else{
            $this->load->view('registrieren');
        }
    }
    public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
        if($from == NULL){
            $from = 'test001.enthuons@gmail.com';
        }
        $to = 'omprakash.cloud@gmail.com';
        $htmlContent = 'eiuei';
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
        
        $mail->setFrom($from, 'test001.enthuons@gmail.com');
        $mail->addReplyTo($from, 'test001.enthuons@gmail.com');
        
        // Add a recipient
        $mail->addAddress($to);
        
        // Add cc or bcc 
        // $mail->addcc('cc@example.com');
        // $mail->addbcc('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'jdoijd';
        
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
    public function emailIdAlreadyExist(){
        $userName = urldecode($_GET['userName']);
        $sql="Select * from users where email_id='$userName'";
        $sqlres = $this->Common->direct_sql_query($sql);
        echo json_encode($sqlres);
    }
    
}
