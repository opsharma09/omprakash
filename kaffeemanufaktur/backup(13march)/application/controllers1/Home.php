<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
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
    public function index()
    {
        if (!$this->session->has_userdata('user')) {
            $data['product']=$this->Common->select_data('products','*');
            $this->load->view('index',$data);
        }else{
        $session_data=$this->session->userdata('user');
            if($session_data->user_type == 3)
            {
                    $data['page_title']="Dashboard";
                    $this->load->view('admin/includes/header',$data);
                    $this->load->view('admin/admin_home');
                    $this->load->view('admin/includes/footer');
            }else{
                $data['product']=$this->Common->select_data('products','*');
                $this->load->view('index',$data);
            }
        }
		
    }
    public function register()
    {
		$this->load->view('registrieren');
    }
    
    
    public function kafee()
    {
        $data['product']=$this->Common->select_data('products','*');
        $this->load->view('kaffee-finder',$data);
    }
    
    public function espresso()
    {
        $id=$this->Common->select_data('product_category','id',array('name'=>'Espresso'));
        $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
        $data['products']=$this->Common->select_data('products','*',array('category'=>$id[0]['id']));
	$this->load->view('product-categories',$data);
    }
    
    public function zubehor()
    {
        $this->kafee();
    }
    
    public function geschenke()
    {
		$this->index();
    }
    public function philosophie()
    {
		$this->load->view('unsere-philosophie');
    }
    
    public function veranstaltungen()
    {
		$this->load->view('veranstaltungen');
    }
    
    public function blog()
    {
		$this->load->view('blog');
    }

    public function firmenkunden()
    {
		$this->load->view('firmenkunden');
    }
    
    public function add_to_cart()
    {   
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $resp=$this->Common->select_data('add_to_cart','*',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'status'=>'1'));
            if($resp)
            {
                    $qty=$resp[0]['qty']+$_POST['qty'];
                    $resp=$this->Common->update_data('add_to_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'status'=>'1'));	
            }
            else 
            {
                    $resp=$this->Common->insert_data('add_to_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'qty'=>$_POST['qty'],'status'=>'1'));
            }
            if($resp)
                    $arr=array('status'=>'true','message'=>'Successfully Added');
            else 
                    $arr=array('status'=>'false','message'=>'Please Try Again');
        }else{
            $arr=array('status'=>'false','message'=>'Please Login');
        }
        echo json_encode($arr);
    }
    public function cart()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            ['availability','product_details','products'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_details_id = product_details.id','product_details.product_id = products.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*,product_details.*, products.*');

            $this->load->view('cart',$res);
        }else{
            redirect(base_url().'login');
        }
    }
    public function delete_cart_product($id)
    {
            $this->Common->delete_data('add_to_cart',array('id'=>$id));
            redirect(base_url().'home/cart');
    }
}
