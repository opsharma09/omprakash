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
//                    $status = mail($data1['email_id'], 'rhlraiji@gmail.com', $body,$subject);
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
    
    public function emailIdAlreadyExist(){
        $userName = urldecode($_GET['userName']);
        $sql="Select * from users where email_id='$userName'";
        $sqlres = $this->Common->direct_sql_query($sql);
        echo json_encode($sqlres);
    }
    
}
