<?php 
class Users extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');

        
    }
	public function index($param='',$param2=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        $data['all_data']=$this->Common->select_data('users','*',array('user_type' => 1,'status' => '0'));
        $data['page_title']="Users";
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/users',$data);
        $this->load->view('admin/includes/footer');
        
    }
    public function add(){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($this->input->method()=='post'){
            $this->form_validation->set_rules('first_name','First Name','required');
            $this->form_validation->set_rules('last_name','Last Name','required');
            $this->form_validation->set_rules('phone_no','phone_no','required');
            $this->form_validation->set_rules('email_id','email_id','required');
        
            if($this->form_validation->run()=='true'){
                $data = array (
                        'first_name'=>$_POST['first_name'],
                        'last_name'=>$_POST['last_name'],
                        'phone_no'=>'+91'.$_POST['phone_no'],
                        'email_id'=>$_POST['email_id'],
                        'address'=>$_POST['address'],
                        'status'=>$_POST['status'],
                        'password'=>password_hash($_POST['password'], PASSWORD_BCRYPT),
                        );
                $resp=$this->Common->insert_data('users',$data);
                $insert_id = $this->db->insert_id();
                redirect(base_url('users'));
            }else{
                print_r(validation_errors());
            }
        }else{
            $data['page_title']="Add Users";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/add_users',$data);
            $this->load->view('admin/includes/footer');
        } 
    }
    public function edit($param=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($param != ''){
            if($this->input->method()=='post'){
                $this->form_validation->set_rules('first_name','First Name','required');
                $this->form_validation->set_rules('last_name','Last Name','required');
                $this->form_validation->set_rules('phone_no','phone_no','required');
                $this->form_validation->set_rules('email_id','email_id','required');
            
                if($this->form_validation->run()=='true'){
                    $data = array (
                            'first_name'=>$_POST['first_name'],
                            'last_name'=>$_POST['last_name'],

                            'phone_no'=>$_POST['phone_no'],
                            'email_id'=>$_POST['email_id'],
                            'address'=>$_POST['address'],
                            'status'=>$_POST['status'],
                            'password'=>password_hash($_POST['password'], PASSWORD_BCRYPT),
                            );
                    $resp=$this->Common->update('users',$data,array('user_id'=>$param));
                    redirect(base_url('users'));
                }else{
                    print_r(validation_errors());
                }
            }else{

                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                $data['page_title']="Edit Users";
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/edit_users',$data);
                $this->load->view('admin/includes/footer');
            } 
        }
    }
    public function delete($id)
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        $res=$this->Common->update_data('users',array('status'=>'1'),array('user_id'=>$id));
        if($res)
        {
            redirect(base_url().'users');
        }
    }
    public function user_profile($param1=''){
        $session_data=$this->session->userdata('user'); 
        // echo $session_data->user_type;die()
        // if($session_data->user_type != 3)
        // {
        //         redirect(base_url().'login');exit;
        // }
        $param = $session_data->user_id;
        if($param != ''){
            if($param1 == 'order'){
                $data['order']=$this->db->query("SELECT * FROM user_order where user_id = $param")->result();
                $data['page_title']="Users Order";
                $data['sub_page']="mein-account-after-login-order";
            }elseif($param1 == 'edit_address'){
                $data['bill_address']=$this->db->query("SELECT * FROM user_address where user_id = $param AND type='BILLING'")->result_array();
                $data['del_address']=$this->db->query("SELECT * FROM user_address where user_id = $param AND type='DELIVERY'")->result_array();
                $data['page_title']="Users address";
                $data['sub_page']="mein-account-after-login-edit-address";
            }elseif($param1 == 'subscriptions'){
                $data['page_title']="Users Subscriptions";
                $data['sub_page']="mein-account-after-login-subscriptions";
            }elseif($param1 == 'coupons'){
                $data['page_title']="Coupons";
                $data['sub_page']="mein-account-after-login-coupons";
            }elseif($param1 == 'edit_account'){
                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                $data['page_title']="User Detail";
                $data['sub_page']="mein-account-after-login-edit-account";
            }elseif($param1 == 'edit_profile'){
                if($_POST){
                    $this->common->update_data('users',$_POST,array('id'=>$param));
                    
                }
                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                $data['page_title']="User Detail";
                $data['sub_page']="mein-account-after-login-edit-account"; 

            }else{
                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                
                $data['sub_page']="dashboard";

            }
            $this->load->view('mein-account-after-login-dashboard',$data);
        }
    }

}
?>