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
    public function check_password(){
        $email = $_POST['email'] ;
        $info=$this->db->query("SELECT * FROM users where email_id = '$email'")->row();
        $check_password = password_verify($_POST['old_password'],$info->password);
        if(isset($check_password) && !empty($check_password))
        {
            unset($info->password);
            echo 'ok';
        }else{
            echo 'notok';
        }
    }
    public function user_profile($param1=''){
        $session_data=$this->session->userdata('user'); 
        if($session_data->user_type != 1)
        {
                redirect(base_url().'login');exit;
        }
        $param = $session_data->user_id;
        // echo $param;die();
        if($param){
            if($param1 == 'order'){
                $data['order']=$this->db->query("SELECT * FROM orders where user_id = $param order by id desc limit 10")->result();
                foreach ($data['order'] as $key => $value) {
                    $order_item = $this->db->query("SELECT * FROM order_items where order_id = $value->id")->result();
                    $data['order'][$key]->item_count= sizeof($order_item);
                    $type =array();
                    foreach ($order_item as $val) {
                        if($val->is_subscription==1){
                            array_push($type, "Subscription");
                       }elseif($val->is_gift==1){
                            array_push($type, "Gift");
                       }elseif($val->is_event==1){
                            array_push($type, "Events");
                       }else{
                            array_push($type, "Product");
                       }
                        # code...
                    }
                    $data['order'][$key]->type = implode(',', array_unique($type));
                    
                }
                $data['page_title']="Users Order";
                $data['sub_page']="mein-account-after-login-order";
            }elseif($param1 == 'edit_address'){
                $data['bill_address']=$this->db->query("SELECT * FROM user_address where user_id = $param AND type='BILLING'")->result_array();
                $data['del_address']=$this->db->query("SELECT * FROM user_address where user_id = $param AND type='DELIVERY'")->result_array();
                $data['page_title']="Users address";
                $data['sub_page']="mein-account-after-login-edit-address";
            }elseif($param1 == 'subscriptions'){
                $data['order']=$this->db->query("SELECT orders.* FROM orders left join order_items on orders.id = order_items.order_id where orders.user_id = $param AND order_items.is_subscription=1 order by orders.id desc ")->result();
                foreach ($data['order'] as $key => $value) {
                    $order_item = $this->db->query("SELECT * FROM order_items where order_id = $value->id AND is_subscription=1")->result();
                    $data['order'][$key]->item_count= sizeof($order_item);
                    $data['order'][$key]->type = "Subscriptions";
                }
                $data['page_title']="Users Subscriptions";
                $data['sub_page']="mein-account-after-login-subscriptions";
            }elseif($param1 == 'coupons'){
                $data['page_title']="Coupons";
                $data['sub_page']="mein-account-after-login-coupons";
            }elseif($param1 == 'edit_account'){
                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                $data['page_title']="User Detail";
                $data['sub_page']="mein-account-after-login-edit-account";
            }elseif($param1 == 'change_password'){
                if($_POST){
                    $data = $_POST;
                    $email ='';
                    $data1 = array();
                    if(isset($data['email_id']) && !empty($data['email_id'])){
                        $email = $data['email_id'];
                    }
                    if(isset($data['password']) && !empty($data['password'])){
                        $data1['password']=password_hash($data['password'], PASSWORD_BCRYPT);
                    }
                    $res = $this->Common->update_data('users', $data1,array('email_id'=>$email));
                    redirect(base_url('mein-account/edit-account'));
                }else{
                    $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                    $data['page_title']="User Detail";
                    $data['sub_page']="mein-account-after-login-change-password";
                }
            }elseif($param1 == 'edit_profile'){
                // var_dump($_POST);die();
                if($_POST){
                    $this->Common->update_data('users',$_POST,array('user_id'=>$param));
                }
                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                $data['page_title']="User Detail";
                $data['sub_page']="mein-account-after-login-edit-account"; 

            }else{
                $data['user_info']=$this->db->query("SELECT * FROM users where user_id = $param")->row();
                
                $data['sub_page']="dashboard";

            }
            $this->load->view('mein-account-after-login-dashboard',$data);
        }else{
             redirect(base_url().'login');exit;
        }
    }
    // public function value_setproduct(){
    //     $product = $this->db->query("select * from products")->result();
    //     foreach ($product as $value) {
    //         $data = array(
    //             'product_id'=>$value->id,
    //             'category_id'=>$value->category,
    //             'subcategory_id'=>$value->subcategory
    //         );
    //         $this->db->insert('product_join_category',$data);
    //     }
    // }

}
?>