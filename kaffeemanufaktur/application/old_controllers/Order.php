<?php 
class Order extends CI_Controller
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
        $data['all_data']=$this->Common->select_data('user_order','*',array());
        
        $data['page_title']="Order List";
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/order',$data);
        $this->load->view('admin/includes/footer');
        
    }
    public function update_status($param=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($param != ''){
            $order=$this->db->query("SELECT * FROM user_order where id = $param")->row();
            $status = $order->status;
            if($status=='REQUESTED'){
            	$status = 'CONFIRM';
            }else{
            	$status = 'REQUESTED';
            }
        	$data = array (
            'status'=>$status
            );
        	$resp=$this->Common->update('user_order',$data,array('id'=>$param));
            redirect(base_url('order'));
            
        }
    }
    public function update_status($param=''){
        $session_data=$this->session->userdata('user');
        // if($session_data->user_type != 3)
        // {
        //         redirect(base_url().'login');exit;
        // }
        if($param == 'user'){
            $order=$this->db->query("SELECT * FROM user_order where id = $param")->row();
            $status = $order->status;
            if($status=='REQUESTED'){
                $status = 'CONFIRM';
            }else{
                $status = 'REQUESTED';
            }
            $data = array (
            'status'=>$status
            );
            $resp=$this->Common->update('user_order',$data,array('id'=>$param));
            redirect(base_url('order'));
            
        }
    }
    

}
?>