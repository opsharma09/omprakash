<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
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
            $data['pproducts']=$this->db->query("select * from products where category =3 OR category =4 ORDER BY id DESC LIMIT 4")->result_array();
            $data['page_name']='home';
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
                $data['pproducts']=$this->db->query("select * from products where category =3 OR category =4 ORDER BY id DESC LIMIT 4")->result_array();
                $data['page_name']='home';
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
        $this->load->view('gifts/geschenke');
    }
    public function philosophie()
    {
		$this->load->view('philosophy/unsere-philosophie');
    }
    public function subscription()
    {
		$this->load->view('coffee-subscription');
    }
    public function subscription_detail()
    {
        $data['sub_products'] = $this->Common->select_data('products','*');
        $data['cart']='';
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $data['cart'] = $this->Common->join_mult_table('sub_cart',
            ['availability','products','product_variation'], 
            ['sub_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["sub_cart.user_id" => $session_data->user_id], 
            'sub_cart.*,sub_cart.qty as myQuan,sub_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
        }
        
		$this->load->view('coffee-subscription-details',$data);
    }

    public function baristakurs()
    {
        $this->load->view('events/baristakurs');
    }
    public function genussreise()
    {
        // if($this->session->userdata('user')){
            $data['event_type'] = $this->Common->select_data('event_type','*',array('status'=>1));
            $data['event_master'] = $this->Common->select_data('event_master','*');
            $this->load->view('gifts/genussreise',$data);
        // }
    }
    public function gastronomie()
    {
        $this->load->view('corporate-banking/gastronomie');
    }
    public function schulungen()
    {
        $this->load->view('corporate-banking/schulungen');
    }
    public function mehrwegsystem()
    {
        $this->load->view('corporate-banking/mehrwegsystem');
    }
    public function bestellformular()
    {
        $this->load->view('corporate-banking/bestellformular');
    }
    public function gutschein($per)
    {
        $data['rate'] = $per;
        $product_info = $this->db->query("SELECT * FROM products WHERE e_name LIKE '%GUTSCHEIN ".$per."%'")->row_array();
        $data['product'] = $product_info;
        $id = $product_info['id'];
        $availability = $this->db->query("select id,size,quantity,price,product_id,variation_id FROM availability where product_id = $id")->row_array();
        if(!empty($availability)){
            $data['product_details'] = $availability;
            if($product_info['category']==20){
                $vid = $availability['variation_id'];
                $pd_id = $availability['product_id'];
                $data['type'] = $this->Common->select_data('availability','*',array('variation_id'=>$vid,'product_id'=>$pd_id));
            }
        }
        $this->load->view('gutschein',$data);
    }
    public function veranstaltungen()
    {
		$this->load->view('events/veranstaltungen');
    }
    public function buchungstool()
    {
        $this->load->view('events/buchungstool');
    }
    
    public function roestung()
    {
        $this->load->view('philosophy/roesting');
    }
    
    public function blog()
    {
		$this->load->view('blog');
    }

    public function firmenkunden()
    {
		$this->load->view('corporate-banking/firmenkunden');
    }
    public function kontakt()
    {
        $this->load->view('kontakt');
    }
    
    public function add_to_cart()
    {   
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $resp=$this->Common->select_data('add_to_cart','*',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'status'=>'1','is_subscription'=>0));
            if($resp)
            {
                $qty=$resp[0]['qty']+$_POST['qty'];
                $resp=$this->Common->update_data('add_to_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'price'=>$_POST['price'],'status'=>'1'));	
            }
            else 
            {
                $resp=$this->Common->insert_data('add_to_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'qty'=>$_POST['qty'],'price'=>$_POST['price'],'status'=>'1'));
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
    public function add_subs_cart()
    {   
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $resp=$this->Common->select_data('sub_cart','*',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'status'=>'1'));
            if($resp)
            {
                $qty=$resp[0]['qty']+$_POST['qty'];
                $resp=$this->Common->update_data('sub_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'price'=>$_POST['price'],'status'=>'1'));  
            }
            else 
            {
                $resp=$this->Common->insert_data('sub_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'qty'=>$_POST['qty'],'price'=>$_POST['price'],'status'=>'1'));
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
     public function sub_to_cart(){   
        if($this->session->userdata('user')){
            $date = $_POST['date'];
            $weak_schedule = $_POST['weak_schedule'];
            $session_data=$this->session->userdata('user');
            $res='';
            $resp=$this->Common->select_data('sub_cart','*',array('user_id'=>$session_data->user_id,'status'=>'1'));
            // var_dump($resp);die();
            if(!empty($resp)){
                foreach ($resp as $key => $value) {
                    $res=$this->Common->select_data('add_to_cart','*',array('user_id'=>$session_data->user_id,'availability_details_id'=>$value['availability_details_id'],'status'=>'1'));
                    if($res){
                        $qty=$resp[0]['qty']+$value['qty'];
                        $res=$this->Common->update_data('add_to_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$value['availability_details_id'],'price'=>$value['price'],'status'=>'1','weak_schedule'=>$weak_schedule,'start_date'=>$date));  
                    }else {
                        
                        $res=$this->Common->insert_data('add_to_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$value['availability_details_id'],'qty'=>$value['qty'],'status'=>'1','weak_schedule'=>$weak_schedule,'price'=>$value['price'],'start_date'=>$date,'is_subscription'=>1));  
                    }
                }
                $this->Common->delete_data('sub_cart',array('user_id'=>$session_data->user_id));
            }
            if($resp){
                    $arr=array('status'=>'true','message'=>'Successfully Added');
            }else{ 
                    $arr=array('status'=>'false','message'=>'Please Try Again');
                }
        }else{
            $arr=array('status'=>'false','message'=>'Please Login');
        }
        echo json_encode($arr);
    }
    public function subscription_cart()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $data['cart'] = $this->Common->join_mult_table('sub_cart',
            ['availability','products','product_variation'], 
            ['sub_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["sub_cart.user_id" => $session_data->user_id], 
            'sub_cart.*,sub_cart.qty as myQuan,sub_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
        }
        $html = $this->load->view('subscription_cart',$data,true);
            echo json_encode(array('view_html'=>trim($html)));
        
    }
    public function cart()
    {

        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            
            $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');

            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            ['availability','products','product_variation'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
               // echo $this->db->last_query();die();
            $this->load->view('cart',$res);
        }else{
            redirect(base_url().'login');
        }
    }
    public function update_cart(){
        if($this->session->userdata('user')){
            $id=$_POST['id'];
            $idd=$_POST['idd'];
            $this->Common->update_data('add_to_cart',array('weak_schedule'=>$idd),array('id'=>$id));
            echo 'success';
        }
    }
    public function proceed_to_checkout()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            ['availability','products','product_variation'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            // $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            // ['availability','products','product_variation'], 
            // ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            // ["add_to_cart.user_id" => $session_data->user_id], 
            // 'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
            $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
            $this->load->view('checkout',$res);
        }else{
            redirect(base_url().'login');
        }
    }
    public function pay_status()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
           $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            ['availability','products','product_variation'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            // $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            //     ['availability','products','product_variation'], 
            //     ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            //     ["add_to_cart.user_id" => $session_data->user_id], 
            //     'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
            $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
            $res['pay_status'] = 'success';
        }
    }
    public function save_address()
    {
        if($this->session->userdata('user')){
            $add_to_cart = $this->db->query("SELECT * from add_to_cart")->result_array();
            if(!empty($add_to_cart )){
                $session_data=$this->session->userdata('user');
                $resb = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING'")->result_array();
                $resd = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY'")->result_array();
                    $res['status'] = 'success';
                $arr = array(
                    'user_id' =>$session_data->user_id,
                    'first_name' =>$_POST['first_name'],
                    'last_name' =>$_POST['last_name'],
                    'company' =>$_POST['company'],
                    'street' =>$_POST['street'],
                    'pincode' =>$_POST['pincode'],
                    'country' =>$_POST['country'],
                    'additional_address' =>$_POST['additional_address'],
                    'place' =>$_POST['place'],
                    'phone' =>$_POST['phone'],
                    'email' =>$_POST['email'],
                    'created_at' =>date('Y-m-d H:i:s'),
                );
                if(isset($_POST['delivery_check'])){
                    if($_POST['delivery_check'] == 'on'){
                        $arr1 = array(
                        'first_name' =>$_POST['d_first_name'],
                        'last_name' =>$_POST['d_last_name'],
                        'company' =>$_POST['d_company'],   
                        'street' =>$_POST['d_street'],
                        'pincode' =>$_POST['d_pincode'],
                        'country' =>$_POST['d_country'],
                        'type' =>'DELIVERY',
                        'additional_address' =>$_POST['d_additional_address'],
                        'place' =>$_POST['d_place'],
                        'ordering_information' => $_POST['ordering_information'],
                        'created_at' =>date('Y-m-d H:i:s'),
                        );

                        if(empty($resd)){
                            $arr1['user_id'] = $session_data->user_id;
                            $this->Common->insert_data('user_address',$arr1);
                        }else{
                            $arr1['type'] = 'DELIVERY';
                            $resp=$this->Common->update_data('user_address',$arr1,array('user_id'=>$session_data->user_id,'type'=>'DELIVERY'));
                        }
                    }
                }else{
                    if(empty($resd)){
                        $arr['user_id'] = $session_data->user_id;
                        $arr['type'] = 'DELIVERY';
                        $resp=$this->Common->insert_data('user_address',$arr);
                    }else{
                        $resp=$this->Common->update_data('user_address',$arr,array('user_id'=>$session_data->user_id,'type'=>'DELIVERY'));
                    }
                }
                if(empty($resb)){
                    $arr['type'] = 'BILLING';
                    $arr['user_id'] = $session_data->user_id;
                    $resp=$this->Common->insert_data('user_address',$arr);
                }else{
                    $resp=$this->Common->update_data('user_address',$arr,array('user_id'=>$session_data->user_id,'type'=>'BILLING'));
                }
                if($resp){
                    $res['event_cart'] = $this->Common->join_mult_table('event_booking',
                    ['event_master','event_type'], 
                    ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
                    ["event_booking.user_id" => $session_data->user_id], 
                    'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
                    $res['cart'] = $this->Common->join_mult_table('add_to_cart',
                    ['availability','products','product_variation'], 
                    ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                    ["add_to_cart.user_id" => $session_data->user_id], 
                    'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
                    // $res['cart'] = $this->Common->join_mult_table('add_to_cart',
                    // ['availability','products','product_variation'], 
                    // ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                    // ["add_to_cart.user_id" => $session_data->user_id], 
                    // 'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
                $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
                $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
                    $res['status'] = 'success';

                }

                $this->load->view('checkout',$res);
            }else{
                redirect(base_url().'home/cart');
            }
        }else{
            redirect(base_url().'login');
        }
    }
    public function delete_cart_product($id)
    {
            $this->Common->delete_data('add_to_cart',array('id'=>$id));
            redirect(base_url().'home/cart');
    }
    public function delete_event($id)
    {
            $this->Common->delete_data('event_booking',array('id'=>$id));
            redirect(base_url().'home/cart');
    }
    public function delete_sub_cart($id)
    {
        
            $this->Common->delete_data('sub_cart',array('id'=>$id));
            echo 'ok';
    }
    // public function produkt_kategorie($id,$id2)
    // {
            
    //     $main_cat=$this->db->query("select * from product_under_category where id = '$id')")->row_array();  
    //     $sub_cat=$this->db->query("select * from product_category where category = '$id2'")->row_array();
    //     return $main_cat['name'].'/'.$sub_cat['name'];
    // }
    public function produkt_kategorie($id)
    {
        // echo ucfirst($id);die();
        $limit=6;
        $total_pages=0;
        $i=0;
        $item_count=0;
        $current_page=0; 
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
          $i = $pageno;
          } else {
              $pageno = 1;
              $i = 1;
          }
        $flag = $this->input->post('view_all');
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $sort_var = $this->input->get("orderby", TRUE);
        $search_var = $this->input->get("q", TRUE);
        $main_cat=$this->db->query("select * from product_category where id = '$id'")->row_array();  
        $id =  $main_cat['id'];
        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id));
        $data['categories'] = $main_cat['name'];
        if(isset($search_var)){
            if($cat_iddd == '0'){
                $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%'";
            } else {
                $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%' AND category = $id";
                
            }
            $query = '('.$query.')as table1';
            $products = op_pagination_simple($query,$limit,$pageno);
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = $products['item_count'];
            $products = $products['data'];
            $data["flag"] = true;
         }elseif(isset($sort_var)){
            if($sort_var=='date'){
                $this->db->order_by("created_at", "desc");
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }else{
                $sort_var = 'id '.$sort_var;
            }
            if($id==20){
                $query = "SELECT * FROM products where category = $id AND subcategory = 70 order by $sort_var";
            }else{
                $query = "SELECT * FROM products where category = $id order by $sort_var";
            }
            $query = '('.$query.')as table1';
            $products = op_pagination_simple($query,$limit,$pageno);
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = $products['item_count'];
            $products = $products['data'];
            $data["flag"] = true;

         }else{
            if($_POST){
                    if($flag ==''){
                        $products = $this->db->query("select * from product where category = $id")->result_array();
                        $data["flag"] = false;
                    }
                }else{
                    if($id==20){
                        $query ="SELECT * FROM products where category = $id AND subcategory = 70 order by id desc";
                    }else{
                        $query ="SELECT * FROM products where category = $id order by id desc";
                    }
                $query = '('.$query.')as table1';
                $products = op_pagination_simple($query,$limit,$pageno);
                $current_page = $pageno;
                $total_pages = $products['total_page'];
                $item_count = $products['item_count'];
                $products = $products['data'];
                $data["flag"] = true;
                }
            }
            
            $data['pproducts'] = $products;
            $data["total_page"] = $total_pages;
            $data["active_pageno"] = $i;
            $data["total_row"] = $item_count;
            $data["pageno"] = $current_page; 

                $data['option']=$main_cat['name'];
        $this->load->view('product-categories1',$data);
        // return $main_cat['name'];
    }
    public function produkt_sub($idd)
    {
        // echo $idd;die();
        $limit=6;
        $total_pages=0;
        $i=0;
        $item_count=0;
        $current_page=0; 
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
            $i = $pageno;
        } else {
          $pageno = 1;
          $i = 1;
        }
        $flag = $this->input->post('view_all');
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $sort_var = $this->input->get("orderby", TRUE);
        $search_var = $this->input->get("q", TRUE);

        $id=$this->Common->select_data('product_sub_category','*',array('id'=>$idd));
        $cat_iddd = $id[0]['id'];

        $pcategory=$this->Common->select_data('product_category','*',array('category'=>3));
        $cat_iddd1 = $pcategory[0]['id'];
        $data['pcategory']=$pcategory;
        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['category']));
        // echo $search_var; 
        if(isset($search_var)){
            $cat_iddd = $id[0]['id'];
        if($cat_iddd == '0'){
            $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%' OR e_name";
        } else {
            $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%' AND `subcategory`='$cat_iddd' AND category = '$cat_iddd1'";
        }
        $query = '('.$query.')as table1';
        $products = op_pagination_simple($query,$limit,$pageno);
        $current_page = $pageno;
        $total_pages = $products['total_page'];
        $item_count = $products['item_count'];
        $products = $products['data'];
        $data["flag"] = true;
        }elseif(isset($sort_var)){
            if($sort_var=='date'){
                $this->db->order_by("created_at", "desc");
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }else{
            $sort_var = 'id '.$sort_var;
        }
        $query ="SELECT * FROM products where category = '$cat_iddd1' AND subcategory = '$cat_iddd' order by $sort_var";
        $query = '('.$query.')as table1';
        $products = op_pagination_simple($query,$limit,$pageno);
        $current_page = $pageno;
        $total_pages = $products['total_page'];
        $item_count = $products['item_count'];
        $products = $products['data'];
        $data["flag"] = true;

        }else{

        $total_data = $this->Common->get_totaldata('products','*');
        $flag = $this->input->post('view_all');
        if($_POST){
            if($flag ==''){
                $products = $this->Common->select_product_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']),$limit,$page,$sort_var);
                $data["flag"] = false;
            }
        }else{
            $query ="SELECT * FROM products where category = '$cat_iddd1' AND subcategory = '$cat_iddd' order by id desc";
            $query = '('.$query.')as table1';
         $products = op_pagination_simple($query,$limit,$pageno);
         $current_page = $pageno;
         $total_pages = $products['total_page'];
         $item_count = $products['item_count'];
         $products = $products['data'];
         $data["flag"] = true;
        }
        }
        
        $data['pproducts'] = $products;
        $data["total_page"] = $total_pages;
        $data["active_pageno"] = $i;
        $data["total_row"] = $item_count;
        $data["pageno"] = $current_page;
        $data['option']=$id[0]['name'];
        $this->load->view('product-categories1',$data);
    }
    
    public function country(){
        $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        if($this->input->method()=='post')
        {
            $this->form_validation->set_rules('name','Country Name','required');
                        $this->form_validation->set_rules('country_code','Country Code','required');
            if($this->form_validation->run()=='true')
            {
                $resp=$this->Common->insert_data('country',$_POST);
                if($resp)
                    $arr=array('status'=>'true','message'=>'Country Successfully Inserted','reload'=>base_url().'home/country');
                else 
                    $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                echo json_encode($arr);
            }
            else 
            {
                print_r(validation_errors());
            }
        }
        else 
        {
            $data['page_title']="Country";
            $data['country']=$this->Common->select_data('country','*',array());
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/country',$data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function delete_country($id){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        $res=$this->Common->delete_data('country',array('id'=>$id));
        if($res)
        {
            redirect(base_url().'home/country');
        }
    }
    public function edit_country($id){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($this->input->method()=='post')
        {
            $res=$this->Common->update_data('country',$_POST,array('id'=>$id));
            if($res)
                $arr=array('status'=>'true','message'=>'Country Successfully Updated','reload'=>base_url().'home/country');
            else 
                $arr=array('status'=>'false','message'=>'Country Not Updated');
            echo json_encode($arr);
        }
        else 
        {
            $data['category_info']=$this->Common->select_data('country','country_code,name,id',array('id'=>$id));
            $data['page_title']="Edit Country";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_country',$data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function product_equipment(){
        $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        if($this->input->method()=='post')
        {
            $target_dir = "public/images/product/";
            $target_file = $target_dir . time().basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $imgName = time().basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $this->form_validation->set_rules('name','Product Variable Name','required');
            if($this->form_validation->run()=='true')
            {
                $data = array(
                    'name'=>$_POST['name'],
                    'image'=>"public/images/product/".$imgName,
                    'type'=>$_POST['type'],
                );
                $resp=$this->Common->insert_data('product_equipment',$data);
                if($resp)
                    $arr=array('status'=>'true','message'=>'Product Variable Successfully Inserted','reload'=>base_url().'home/product_equipment');
                else 
                    $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                echo json_encode($arr);
            }
            else 
            {
                print_r(validation_errors());
            }
        }
        else 
        {
            $data['page_title']="Product Variable";
            $data['product_equipment']=$this->Common->select_data('product_equipment','*',array());
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/product_equipment',$data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function delete_product_equipment($id){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        $res=$this->Common->delete_data('product_equipment',array('id'=>$id));
        if($res)
        {
            redirect(base_url().'home/product_equipment');
        }
    }
    public function edit_product_equipment($id){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($this->input->method()=='post')
        {
            $target_dir = "public/images/product/";
            $target_file = $target_dir . time().basename($_FILES["image"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $imgName = time().basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $data = array(
                    'name'=>$_POST['name'],
                    'image'=>"public/images/product/".$imgName,
                    'type'=>$_POST['type'],
                );
            $res=$this->Common->update_data('product_equipment',$_POST,array('id'=>$id));
            if($res)
                $arr=array('status'=>'true','message'=>'Product Variable Successfully Updated','reload'=>base_url().'home/product_equipment');
            else 
                $arr=array('status'=>'false','message'=>'Product Variable Not Updated');
            echo json_encode($arr);
        }
        else 
        {
            $data['category_info']=$this->Common->select_data('product_equipment','image,name,id',array('id'=>$id));
            $data['page_title']="Edit Product Variable";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_product_equipment',$data);
            $this->load->view('admin/includes/footer');
        }
    }
    
    // public function geschenke(){
    //     $data['page_title']="geschenke";
    //     $this->load->view('gift/geschenke',$data);
    // }
}
