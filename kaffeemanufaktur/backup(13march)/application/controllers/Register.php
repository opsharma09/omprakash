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
            // if(isset($data['address']) && !empty($data['address'])){
            //     $data1['address']=$data['address'];
            // }
            
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
               

                
            $body =  '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Email Template</title>
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
                    </head>

                    <body style="font-size: 13px; max-width: 600px; margin: auto; color: #000; font-family: \'poppins\',sans-serif">
                        <table style="width: 100%;padding: 40px;">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <div style="display: inline-table; width: 33%; vertical-align:middle; text-align: center;">
                                            <img src="'.base_url().'public/images/email-logo.jpg" style="margin: 0 0 80px" alt="">
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Hello "'.$data['firstname'].' '.$data['lastname'].'",</h2>
                                         <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Sie haben sich soeben bei der <a href="' . base_url().'">Hannoverschen Kaffeemanufaktur</a> registriert.Bitte bestätigen Sie Ihre Anmeldung durch Klicken des folgenden Links: </p>

                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;"><a href="' . base_url() . 'verify?v=' . $token . '">Klicken Sie hier, um Ihre E-Mail zu bestätigen</a></p>

                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Wenn Sie den Link nicht aktivieren, erhalten Sie keine weiteren Mitteilungen von uns. Ihre E-Mail-Adresse wird automatisch aus unserem Verteiler gelöscht.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Freundliche Grüße,</p>
                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">Ihre Hannoversche Kaffeemanufaktur</h3>
                    </body>
                </html>';

                    
            $subject = "Bitte bestätigen Sie Ihre Registrierung bei der Hannoverschen Kaffeemanufaktur";
            $body1 =  '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Email Template</title>
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
                    </head>
                    <body style="font-size: 13px; max-width: 600px; margin: auto; color: #000; font-family: \'poppins\',sans-serif">
                        <table style="width: 100%;padding: 40px;">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <div style="display: inline-table; width: 33%; vertical-align:middle; text-align: center;">
                                            <img src="'.base_url().'public/images/email-logo.jpg" style="margin: 0 0 80px" alt="">
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Hello admin,</h2>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Ein Benutzer hat sich registriert. Es gibt folgende Details des Benutzers:</p>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">User Name: "'.$data['firstname'].' '.$data['lastname'].'"</p>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">User Email ID: "'.$data['email'].'"</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Freundliche Grüße,</p>
                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">Ihre Hannoversche Kaffeemanufaktur</h3>
                    </body>
                </html>';

                    
            $subject1 = "Neue Registrierungsanfrage";
            $status = $this->send_smtp_mail($body1,$subject1,'rohit@enthuons.com', 'test001.enthuons@gmail.com');
            $status = $this->send_smtp_mail($body,$subject,$data1['email_id'], 'test001.enthuons@gmail.com');
//                    print_r($status);exit;
//                $this->load->view('registrieren');
		$data['ptitle'] = 'Register';
                    $data['msg'] = "You are successfully register. You can login here";
                    $this->load->view('mein-account',$data);
               
            }
        }else{
            $this->load->view('registrieren');
        }
    }
    public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
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
        
        // Add cc or bcc 
        // $mail->addcc('cc@example.com');
        // $mail->addbcc('bcc@example.com');
        
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
    public function emailIdAlreadyExist(){
        $userName = urldecode($_POST['userName']);
        $sql="Select * from users where email_id='$userName'";
        $sqlres = $this->Common->direct_sql_query($sql);
        if(!empty($sqlres)){
            echo 'ok';
        }else{
            echo 'notok';
        }
    }
    
}
