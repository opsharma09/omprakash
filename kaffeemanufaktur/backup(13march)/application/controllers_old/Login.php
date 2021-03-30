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
                
                $datareceived = ['email_id'=>$data1['email_id']];
                $resp = $this->Common->select('users','*',$datareceived);
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
                }
        }else{
            $this->load->view('mein-account');
        }
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect('login');
        exit;
    }
    
}
