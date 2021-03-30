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
    
    // public function geschenke()
    // {
    //     $this->load->view('gifts/geschenke');
    // }
    public function forgot_password(){
        $this->load->view('forgot_p');
    }
    public function philosophie()
    {
		$this->load->view('philosophy/unsere-philosophie');
    }
    public function subscription()
    {
		$this->load->view('coffee-subscription');
    }public function terms()
    {
        $this->load->view('agb');
    }public function policy()
    {
        $this->load->view('widerrufsbelehrung');
    }public function data_protection()
    {
        $this->load->view('datenschutz');
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
    public function gutschein()
    {
        $data = array();
        if($this->input->get('attribute_art')=='Wertgutschein'){

            if($this->input->get('attribute_wert',TRUE)){
                $per = explode(',', $this->input->get('attribute_wert',TRUE))[0];
                // echo $per ;die();
                $data['rate'] = $per;
                $product_info1 = $this->db->query("SELECT * FROM products WHERE e_name LIKE '%GUTSCHEINE%'")->row_array();
                $data['product'] = $product_info1;
                $id = $product_info1['id'];
                $per = $per.',00';
                $availability = $this->db->query("select id,size,quantity,price,product_id,variation_id FROM availability where product_id = $id and size = '$per' order by price asc,size asc")->row_array();
                if(!empty($availability)){
                    $data['product_details'] = $availability;
                    if($product_info1['category']==20){
                        $vid = $availability['variation_id'];
                        $pd_id = $availability['product_id'];
                        $data['type'] = $this->Common->select_data('availability','*',array('variation_id'=>$vid,'product_id'=>$pd_id));
                    }
                }
                $product_info = $this->db->query("SELECT * FROM products WHERE e_name LIKE '%GUTSCHEINE%'")->row();
                $availability = $this->db->query("select id,size,quantity,price,product_id,variation_id FROM availability where product_id = $product_info->id order by price asc,size asc")->result_array();
                $data['availability'] = $availability;
                $data['product_info'] = $product_info;
            }else{
                $product_info = $this->db->query("SELECT * FROM products WHERE e_name LIKE '%GUTSCHEINE%'")->row();
                $availability = $this->db->query("select id,size,quantity,price,product_id,variation_id FROM availability where product_id = $product_info->id order by price asc,size asc")->result_array();
                $data['availability'] = $availability;
                $data['product_info'] = $product_info;
                $data['rate'] ='attribute_art';
                $data['product_details'] ='';
            }
        $this->load->view('gutschein',$data);
        }else{
            $idd =21;
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
            // $limit= 6;
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $sort_var = $this->input->get("orderby", TRUE);
            // echo $sort_var;
            // exit();  

            $search_var = $this->input->get("q", TRUE);

            $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
            $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>1));;
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());
            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $data['is_package']= $data['psubcategory'][0]['is_package'];
            $cat_iddd = $id[0]['id'];
            $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
            if(isset($search_var)){
                $search_var = trim($search_var);
                if($cat_iddd == '0'){
                    $query = $primary_query."AND products.name LIKE '%$search_var%' group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
                } else {
                    $query = $primary_query."AND products.name LIKE '%$search_var%' AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
                }
                
             }elseif(isset($sort_var)){

                $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
                if($sort_var=='date'){
                     $sort_var = 'created_at asc';
                }elseif($sort_var=='std'){
                    $sort_var = 'id asc';
                }elseif($sort_var=='asc'){
                    $sort_var = 'minid asc';
                }else{
                    $sort_var = 'minid desc';
                }
                $query =$primary_query."AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id  order by products.$sort_var";

             }else{
                // echo 'hello2';die();
                $total_data = $this->Common->get_totaldata('products','*');
                $flag = $this->input->post('view_all');
                if($_POST){
                    if($flag ==''){
                        $products = $this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
                        $data["flag"] = false;
                    }
                }else{

                $query =$primary_query."AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id  order by products.id asc";
                }
             }
             // $query .=$pri" group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id"; 
            $query = '('.$query.')as table1';
            $products = op_pagination_simple($query,$limit,$pageno);
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = $products['item_count'];
            $products = $products['data'];
            $data["flag"] = true;
             // echo $this->db->last_query();
            $data['pproducts'] = $products;
             
            $data["total_page"] = $total_pages;
            $data["active_pageno"] = $i;
            $data["total_row"] = $item_count;
            $data["pageno"] = $current_page;
            $data['option'] = 'Gutscheine';
            $this->load->view('gifts/gutschein',$data);
        }
        // echo '<pre>';
        // var_dump($product_info);die();

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
            if(isset($_POST['is_gift'])){
                $resp=$this->Common->select_data('add_to_cart','*',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'status'=>'1','is_subscription'=>0,'is_gift'=>1));
                if($resp)
                {
                    $qty=$resp[0]['qty']+$_POST['qty'];
                    $resp=$this->Common->update_data('add_to_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'price'=>$_POST['price'],'status'=>'1')); 
                }
                else 
                {
                    $resp=$this->Common->insert_data('add_to_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'qty'=>$_POST['qty'],'price'=>$_POST['price'],'status'=>'1', 'is_gift'=>1));
                }
            }else{
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
                $resp=$this->Common->update_data('sub_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'status'=>'1'));  
            }
            else 
            {
                $resp=$this->Common->insert_data('sub_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$_POST['product_details_id'],'qty'=>$_POST['qty'],'status'=>'1','price'=>$_POST['price']));
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
    public function add_sub_cart_weak(){   
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $resp=$this->Common->select_data('sub_cart','*',array('user_id'=>$session_data->user_id,'status'=>'1'));
            if($resp)
            {
                $resp=$this->Common->update_data('sub_cart',array('weak_schedule'=>$_POST['idd'],'start_date'=>date('Y-m-d')),array('user_id'=>$session_data->user_id,'status'=>'1'));  
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
            $resp=$this->Common->select_data('sub_cart','*',array('user_id'=>$session_data->user_id,'status'=>'1'));
            // var_dump($resp);die();
            if(!empty($resp)){
                foreach ($resp as $key => $value) {
                    $res=$this->Common->select_data('add_to_cart','*',array('user_id'=>$session_data->user_id,'availability_details_id'=>$value['availability_details_id'],'status'=>'1','is_subscription'=>1));
                    if($res){
                        $qty=$resp[0]['qty']+$value['qty'];
                        $res=$this->Common->update_data('add_to_cart',array('qty'=>$qty),array('user_id'=>$session_data->user_id,'availability_details_id'=>$value['availability_details_id'],'status'=>'1','weak_schedule'=>$weak_schedule,'start_date'=>$date));  
                    }else {
                        
                        $res=$this->Common->insert_data('add_to_cart',array('user_id'=>$session_data->user_id,'availability_details_id'=>$value['availability_details_id'],'qty'=>$value['qty'],'price'=>$value['price'],'status'=>'1','weak_schedule'=>$weak_schedule,'start_date'=>$date,'is_subscription'=>1));  
                    }
                }
                $this->Common->delete_data('sub_cart',array('user_id'=>$session_data->user_id));
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
    public function subscription_cart()
    {
        $sdate='';
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id,"event_booking.is_booked" => 0], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
            $data['cart'] = $this->Common->join_mult_table('sub_cart',
            ['availability','products','product_variation'], 
            ['sub_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["sub_cart.user_id" => $session_data->user_id], 
            'sub_cart.*,sub_cart.qty as myQuan,sub_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            foreach ($data['cart'] as $key => $value) {
                $sdate= $value['start_date'];
            }
        }
        $html = $this->load->view('subscription_cart',$data,true);
            echo json_encode(array('view_html'=>trim($html),'date'=>$sdate));
        
    }
    public function cart()
    {

        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $totalPrice = 0;
            $totalsubPrice = 0;
            $shipPrice = 2.9;
            $coupon_discount = 0;
            $coupon_value=0;
            $coupon_type='';
            $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id,"event_booking.is_booked" => 0], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            ['availability','products','product_variation'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');

            if(!empty($res['cart'])){
                foreach ($res['cart'] as $key => $val) {
                    if($val['is_subscription']==1){
                        $totalsubPrice = $totalsubPrice+($val['myQuan']*$val['price']);
                    }
                    $totalPrice = $totalPrice+($val['myQuan']*$val['price']);
                }
            }
            if(!empty($res['event_cart'])){
                foreach ($res['event_cart'] as $key => $val) {
                    $totalPrice = $totalPrice+($val['acprice']);
                }
            }
            if($_POST){
                $coupon_text = $_POST['coupon_text'];
                $offers = $this->db->get_where('offers',array('offer_code'=>strtoupper($coupon_text)))->row();
                $html = '';
                if( $offers->offer_value < $totalPrice || $offers->offer_type == 'PERCENTAGE'){
                    // echo 'hello';
                    if($offers->min_cart_value <=$totalPrice){
                        // echo 'hello1'.$totalPrice;
                    $coupon_value = $offers->offer_value;
                    $coupon_code = $offers->offer_code;
                    $coupon_type = $offers->offer_type;
                    if($coupon_type == 'FIXED'){
                        $coupon_discount = $coupon_value;
                    }else{
                        $coupon_discount = ($totalPrice*$coupon_value)/100;
                    }
                $data['actual'] = $totalPrice;
                $totalPrice = $totalPrice - $coupon_discount;
                $data['totalPrice'] = $totalPrice;
                $data['shipPrice'] = $shipPrice;
                $data['coupon_discount'] = $coupon_discount;
                $data['coupon_type'] = $coupon_type;
                $data['coupon_code'] = $coupon_code;
                $res['totalsubPrice'] = $totalsubPrice;
                $html = $this->load->view('total_cart',$data,true);
                    echo json_encode(array('view_html'=>trim($html),'msg'=>'success'));
                }else{
                    echo json_encode(array('view_html'=>$html, 'msg'=> 'Dieser Gutschein gilt, wenn der Gesamtwert des Warenkorbs mehr als 50 beträgt'));
                }
            }else{
                    echo json_encode(array('view_html'=>$html,'msg'=>'This coupon is not valid'));
                }
            }else{
                $res['totalPrice'] = $totalPrice;
                $res['shipPrice'] = $shipPrice;
                $res['totalsubPrice'] = $totalsubPrice;
                $this->load->view('cart',$res);
            }
            
        }else{
            redirect(base_url().'login');
        }
    }
    public function proceed_to_checkout()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $totalPrice = $_POST['totalPrice'];
            $totalsubPrice = $_POST['totalsubPrice'];
            $shipPrice = 2.9;
            $coupon_discount = 0;
            $coupon_value=0;
            $coupon_type='';
            if(isset($_POST['coupon_discount']) && isset($_POST['coupon_value'])){
                $coupon_discount = $_POST['coupon_discount'];
                $coupon_value = $_POST['coupon_value'];
                $coupon_type = $_POST['coupon_type'];
                $coupon_code = $_POST['coupon_code'];
                $res['coupon_code'] = $coupon_code;
                $res['coupon_discount'] = $coupon_discount;
                $res['coupon_value'] = $coupon_value;
                $res['coupon_type'] = $coupon_type;
            }
            $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id,"event_booking.is_booked" => 0], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
            
            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
            ['availability','products','product_variation'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
            $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
            if(!empty($res['event_cart'])|| !empty($res['cart'])){
                $res['totalPrice'] = $totalPrice;
                $res['shipPrice'] = $shipPrice;
                $response='';
                $res['is_subscription'] = 'N';   
                $res['totalsubPrice'] = $totalsubPrice;   
                if(!empty($res['cart'])){
                    foreach ($res['cart'] as $key => $val) {
                        if($val['is_subscription']==1){
                            $res['is_subscription'] = 'Y';
                            $product = $this->create_product($val['name'],$val['e_name']);
                            $response = $this->create_plan($product->access_token,$product->id,$val['weak_schedule'],$val['myQuan']*$val['price']);
                            $plan = json_decode($response);
                            $response = $this->Common->update_data('add_to_cart',array('plan_id'=>$plan->id,'product_id'=>$plan->product_id), array('id'=>$val['mycart_id']));
                        }
                    }
                }
                $this->load->view('checkout',$res);
            }else{
                redirect(base_url());
            }
        }else{
            redirect(base_url().'login');
        }
    }
    public function generate_token(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/oauth2/token',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic QVd6TkFTNHhscTdhUlVLNm1vNG9uWEdoQ3JjNmgyMFN0aUZEOWZaNWpJTTBXRTFsS0dBOEs1WFoxZ2lPVkpYbkdRZFZXQTY5aGloY1FNLU46RUdXR3lFNnRPSEtoak1IMXRUZS11R2pFVEpveXFRWmdYQ2plWmZJWUJBQVBTeVZMVnZrLTYxYzBlcUN4dFdIeDdMQVdpRlBOVnRmb2RLV20=',
            'Content-Type: application/x-www-form-urlencoded',
            'Cookie: x-csrf-jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IlM2ZnlXUzkzVWZZMXpvR1ppblJlSGk2d0VjM0dEaWwtc0d0a1RNOF9tUkZGVEZQMHpOblByUkJ1dWxGZGFkRE10T1d2UTlidmdGajh1SjVkejNraFNNejlpNVFhOFhxVTFNakdFX1hIb1d4SGJza3BsVUg5MWdGcTUwZDlXeUI0amdXaHBtbkFpSFhhWkpUSHJaNXRWVEpDc1FkLXZoZ0tlaTlodFdsdkp6YmU4VGFYRzNUQUNYOEUwbjQiLCJpYXQiOjE2MTUzNDk4MTksImV4cCI6MTYxNTM1MzQxOX0.D5C-oY4i8-GGpN8ddBxzqjci3p-CQgSL4feATGmxk5k; ts=vreXpYrS%3D1710044219%26vteXpYrS%3D1615351619%26vr%3D1a5a290b1780a48f12706c19fc84a42d%26vt%3D1a5a290b1780a48f12706c19fc84a42c%26vtyp%3Dnew; ts_c=vr%3D1a5a290b1780a48f12706c19fc84a42d%26vt%3D1a5a290b1780a48f12706c19fc84a42c'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // var_dump($response);die();
        $response =  json_decode($response);

       return $response->access_token;
    }
    public function create_product($name='',$description=''){
        $token = $this->generate_token();

        $arr = array(
          "name" => $name,
          "description" => $description,
          "type" => "SERVICE",
          "category" => "SOFTWARE",
          "image_url" => "https://example.com/streaming.jpg",
          "home_url" => "https://example.com/home"
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/catalogs/products',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>json_encode($arr),
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token,
            'Content-Type: application/json',
            'Cookie: x-csrf-jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IlM2ZnlXUzkzVWZZMXpvR1ppblJlSGk2d0VjM0dEaWwtc0d0a1RNOF9tUkZGVEZQMHpOblByUkJ1dWxGZGFkRE10T1d2UTlidmdGajh1SjVkejNraFNNejlpNVFhOFhxVTFNakdFX1hIb1d4SGJza3BsVUg5MWdGcTUwZDlXeUI0amdXaHBtbkFpSFhhWkpUSHJaNXRWVEpDc1FkLXZoZ0tlaTlodFdsdkp6YmU4VGFYRzNUQUNYOEUwbjQiLCJpYXQiOjE2MTUzNDk4MTksImV4cCI6MTYxNTM1MzQxOX0.D5C-oY4i8-GGpN8ddBxzqjci3p-CQgSL4feATGmxk5k; ts=vreXpYrS%3D1710044219%26vteXpYrS%3D1615351619%26vr%3D1a5a290b1780a48f12706c19fc84a42d%26vt%3D1a5a290b1780a48f12706c19fc84a42c%26vtyp%3Dnew; ts_c=vr%3D1a5a290b1780a48f12706c19fc84a42d%26vt%3D1a5a290b1780a48f12706c19fc84a42c'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response =  json_decode($response);
        $response->access_token = $token;
       return $response;
    }
    public function create_plan($token, $product_id, $interval_unit){
        $arr = array(
         "product_id" => $product_id,
                "name" => "Basic Plan",
                "description" => "Basic plan",
                "billing_cycles" => [
                  [
                    "frequency" => [
                        "interval_unit" => "MONTH",
                        "interval_count" => 1
                    ],
                    "tenure_type" => "TRIAL",
                    "sequence" => 1,
                    "total_cycles" => $interval_unit,
                  ],
                    [
                      "frequency" => [
                        "interval_unit" => "MONTH",
                        "interval_count" => $interval_unit
                      ],
                      "tenure_type" => "REGULAR",
                      "sequence" => 2,
                      "total_cycles" =>$interval_unit,
                      "pricing_scheme" => [
                        "fixed_price" => [
                          "value" => "10",
                          "currency_code" => "USD"
                        ]
                      ]
                    ]
                  ],
                "payment_preferences" => [
                  "service_type" => "PREPAID",
                  "auto_bill_outstanding" => true,
                  "setup_fee" => [
                    "value" => "10",
                    "currency_code" => "USD"
                  ],
                  "setup_fee_failure_action" => "CONTINUE",
                  "payment_failure_threshold" => 3
                ],
                "quantity_supported" => true,
                "taxes" => [
                  "percentage" => "10",
                  "inclusive" => false
                ]
        );
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/billing/plans',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>json_encode($arr),
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token,
            'Content-Type: application/json',
            'Cookie: ts=vreXpYrS%3D1710044219%26vteXpYrS%3D1615351619%26vr%3D1a5a290b1780a48f12706c19fc84a42d%26vt%3D1a5a290b1780a48f12706c19fc84a42c%26vtyp%3Dnew; ts_c=vr%3D1a5a290b1780a48f12706c19fc84a42d%26vt%3D1a5a290b1780a48f12706c19fc84a42c'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
    public function pay_status()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $res['event_cart'] = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id,"event_booking.is_booked" => 0], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
            $res['cart'] = $this->Common->join_mult_table('add_to_cart',
                ['availability','products','product_variation'], 
                ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                ["add_to_cart.user_id" => $session_data->user_id], 
                'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
            $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
            $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
            $res['pay_status'] = 'success';
        }
    }
    public function save_address()
    {
        if($this->session->userdata('user')){
            $session_data=$this->session->userdata('user');
            $totalPrice = $_POST['totalPrice'];
            $totalsubPrice = $_POST['totalsubPrice'];
            $res['totalsubPrice'] = $totalsubPrice;
            $shipPrice = 2.9;
            $coupon_discount = 0;
            $coupon_value=0;
            $coupon_type='';
            if(isset($_POST['coupon_discount']) && isset($_POST['coupon_value'])){
                $coupon_discount = $_POST['coupon_discount'];
                $coupon_value = $_POST['coupon_value'];
                $coupon_type = $_POST['coupon_type'];
                $coupon_code = $_POST['coupon_code'];
                $res['coupon_code'] = $coupon_code;
                $res['coupon_discount'] = $coupon_discount;
                $res['coupon_value'] = $coupon_value;
                $res['coupon_type'] = $coupon_type;
            }
            $resb = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING'")->result_array();
            $resd = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY'")->result_array();
                $res['status'] = 'success';
                // var_dump($_POST);die();
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
                    'created_at' =>date('Y-m-d H:i:s'),
                    );

                    if(empty($resd)){
                        $arr1['user_id'] = $session_data->user_id;
                        $arr1['ordering_information'] = $_POST['ordering_information'];
                        $this->Common->insert_data('user_address',$arr1);
                    }else{
                        $arr1['type'] = 'DELIVERY';
                        $arr1['ordering_information'] = $_POST['ordering_information'];
                        $resp=$this->Common->update_data('user_address',$arr1,array('user_id'=>$session_data->user_id,'type'=>'DELIVERY'));
                    }
                }
            }else{
                if(empty($resd)){
                    $arr['user_id'] = $session_data->user_id;
                    $arr['type'] = 'DELIVERY';
                    $arr['ordering_information'] = $_POST['ordering_information'];
                    $resp=$this->Common->insert_data('user_address',$arr);
                }else{
                    $resp=$this->Common->update_data('user_address',$arr,array('user_id'=>$session_data->user_id,'type'=>'DELIVERY'));
                }
            }
            if(empty($resb)){
                $arr['type'] = 'BILLING';
                $arr['ordering_information'] = $_POST['ordering_information'];
                $arr['user_id'] = $session_data->user_id;
                $resp=$this->Common->insert_data('user_address',$arr);
            }else{
                $resp=$this->Common->update_data('user_address',$arr,array('user_id'=>$session_data->user_id,'type'=>'BILLING'));
            }
            if($resp){

                $res['event_cart'] = $this->Common->join_mult_table('event_booking',['event_master','event_type'], ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], ["event_booking.user_id" => $session_data->user_id,"event_booking.is_booked" => 0], 'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
                $res['cart'] = $this->Common->join_mult_table('add_to_cart',['availability','products','product_variation'], ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], ["add_to_cart.user_id" => $session_data->user_id], 'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,product_variation.name as type');
                $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
                $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
                $res['status'] = 'success';

            }
            if(!empty($res['event_cart'])|| !empty($res['cart'])){
                $res['totalPrice'] = $totalPrice;
                $res['shipPrice'] = $shipPrice;
                $res['is_subscription'] = 'N';
                foreach ($res['cart'] as $key => $val) {
                    if($val['is_subscription']==1){
                        $res['is_subscription'] = 'Y';
                    }
                }
                $this->load->view('checkout',$res);
            }else{
                redirect(base_url());
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
        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id));
        $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>$id));

        $data['maincategory']=$this->Common->select_data('product_under_category','*',array()); 

        // $data['pproducts']= $this->Common->select_data('products','*',array('category'=>$id));
        // var_dump($data['products']);
        $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
        $data['is_package']= $data['psubcategory'][0]['is_package'];
        $data['categories'] = $main_cat['name'];
        if(isset($search_var)){
            $search_var = trim($search_var);
            $cat_iddd = $main_cat['id'];
            if($cat_iddd == '0'){
                $query = $primary_query."AND products.name LIKE '%$search_var%' group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id";
            } else {
                $query = $primary_query."AND products.name LIKE '%$search_var%' AND product_join_category.category_id = $id group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id";
                
            }
         }elseif(isset($sort_var)){
            if($sort_var=='date'){
                $this->db->order_by("created_at", "desc");
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }elseif($sort_var=='asc'){
                $sort_var = 'minid asc';
            }else{
                $sort_var = 'minid desc';
            }
            if($id==20){
                $query = $primary_query."AND product_join_category.category_id = $id AND product_join_category.subcategory_id = 70 group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.$sort_var";
            }else{
                $query = $primary_query."AND product_join_category.category_id = $id group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.$sort_var";
            }
         }else{
            if($_POST){
                    if($flag ==''){
                        $products = $this->db->query("select * from product where category = $id")->result_array();
                        $data["flag"] = false;
                    }
                }else{
                    if($id==20){
                        $query = $primary_query."AND product_join_category.category_id = $id AND product_join_category.subcategory_id = 70 group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by  products.id desc";
                    }else{
                        $query = $primary_query."AND product_join_category.category_id = $id group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.id DESC";
                    }
                
                }
            }
            $query = '('.$query.')as table1';
            $products = op_pagination_simple($query,$limit,$pageno);
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = $products['item_count'];
            $products = $products['data'];
            $data["flag"] = true;
            $data['pproducts'] = $products;
            $data["total_page"] = $total_pages;
            $data["active_pageno"] = $i;
            $data["total_row"] = $item_count;
            $data["pageno"] = $current_page; 
        $data['option']= $main_cat['name'];
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
        $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['category']));
        // echo $search_var; 
        $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
        $data['is_package']= $data['psubcategory'][0]['is_package'];
        if(isset($search_var)){
            $search_var = trim($search_var);
            $cat_iddd = $id[0]['id'];
        if($cat_iddd == '0'){
            $query = $primary_query."AND products.name LIKE '%$search_var%' group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id";
        } else {
            $query = $primary_query."AND products.name LIKE '%$search_var%' AND product_join_category.subcategory_id= $cat_iddd AND products.category = $cat_iddd1 group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id";
        }
        }elseif(isset($sort_var)){
            if($sort_var=='date'){
                $this->db->order_by("created_at", "desc");
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }elseif($sort_var=='asc'){
                $sort_var = 'minid asc';
            }else{
                $sort_var = 'minid desc';
            }
        $query =$primary_query. "AND product_join_category.category_id = $cat_iddd1 AND product_join_category.subcategory_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.$sort_var";
        }else{

        $total_data = $this->Common->get_totaldata('products','*');
        $flag = $this->input->post('view_all');
        if($_POST){
            if($flag ==''){
                $products = $this->Common->select_product_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']),$limit,$page,$sort_var);
                $data["flag"] = false;
            }
        }else{
            $query = $primary_query."AND  product_join_category.category_id = $cat_iddd1 AND product_join_category.subcategory_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.id desc";
        }
        }
        $query = '('.$query.')as table1';
        $products = op_pagination_simple($query,$limit,$pageno);
        $current_page = $pageno;
        $total_pages = $products['total_page'];
        $item_count = $products['item_count'];
        $products = $products['data'];
        $data["flag"] = true;
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
            $data['category_info']=$this->Common->select_data('product_equipment','*',array('id'=>$id));
            $data['page_title']="Edit Product Variable";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_product_equipment',$data);
            $this->load->view('admin/includes/footer');
        }
    }
    
    public function update_cart(){
        if($this->session->userdata('user')){
            $count = 1;
            var_dump($_POST['cart']);
            foreach ($_POST['weakschedule'] as $key=> $value) {
                if(isset($_POST['weakschedule']['weak_schedule'.$count])){
                    $this->Common->update_data('add_to_cart',array('weak_schedule'=>$_POST['weakschedule']['weak_schedule'.$count]),array('id'=>$_POST['weakschedule']['cart_id'.$count]));
                }
                ++$count;
            }
            $count = 1;
            foreach ($_POST['cart'] as $key=> $value) {
                if(isset($_POST['cart']['cart_id'.$count])){
                    $this->Common->update_data('add_to_cart',array('qty'=>$_POST['cart']['cart_quant'.$count]),array('id'=>$_POST['cart']['cart_id'.$count]));
                }
            ++$count;
            }
            
            echo 'success';
        }
    }
    public function news_latter_email(){
        $email = $_POST['news_email'];
        $result = $this->db->query("SELECT * FROM `subscribed_user` WHERE `email`='$email'")->row();
        if(empty($result)){
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
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
                                            <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Bitte bestätigen Sie Ihre Newsletter Anmeldung</h2>
                                             <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Sie haben sich soeben bei der <a href="' . base_url().'">Hannoverschen Kaffeemanufaktur</a> Um die Anmeldung für unseren Newsletter zu bestätigen, klicken Sie bitte auf diesen Link:</p>

                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;"><a href="' . base_url() . 'newsletter/subscribe?v='.$token.'&email='.$email.'">Hier klicken zum Bestätigen</a></p>

                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Legen Sie direkt los und entdecken Sie die spannende Welt des Kaffees!</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Freundliche Grüße,</p>
                            <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">Ihre Hannoversche Kaffeemanufaktur</h3>
                        </body>
                    </html>';
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
                                            <h2 style="font-size: 20px;line-height: 33px;text-align:center; sans-serif; margin: 0; color: #e80000; font-weight: 400;">Bitte bestätigen Sie Ihre Newsletter Anmeldung</h2>
                                             <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">User Name: "'.$email.'"</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Freundliche Grüße,</p>
                            <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">Ihre Hannoversche Kaffeemanufaktur</h3>
                        </body>
                    </html>';  
            $subject1 = "Ihre Newsletter Anmeldung";            
            $subject = "Ihre Newsletter Anmeldung"; 
            $valid_result = $this->db->query("SELECT * FROM `subscribed_user` WHERE `token`= '$token' and `email`='$email'")->row();
            if(empty($valid_result)){
                $this->Common->insert_data('subscribed_user',array('email'=>$email,'token'=>$token));                       
            }
            $status = $this->send_smtp_mail($body,$subject,$email, 'test001.enthuons@gmail.com');
        }
        // $status = $this->send_smtp_mail($body1,$subject1,'rohit@enthuons.com', 'test001.enthuons@gmail.com');

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
    public function subscribe(){
        if (isset($_GET["v"]) && isset($_GET["email"])) {
              $key = $_GET["v"];
              $email = $_GET["email"];
              $curDate = date("Y-m-d H:i:s");
              $valid_result = $this->db->query("SELECT * FROM `subscribed_user` WHERE `token`= '$key' and `email`='$email'")->row();
              
              if (empty($valid_result)){
                  $data['error'] = '<h2>Invalid Link</h2>
                                    <p>The link is invalid/expired. Either you did not copy the correct link
                                    from the email, or you have already used the key in which case it is 
                                    deactivated.</p>';
                 }else{
                    $this->Common->update_data('subscribed_user',array('is_subscribed'=>1),array('token'=>$key,'email'=>$email));
                    $data['success'] ='Reset Password';
                }
            $data['email'] = $_GET["email"];
            $this->load->view('user_subscribe',$data);
                
          }
    }
    public function save_coupon_code(){
        $key = $_POST["key"];
        $email = $_POST["email"];
        
        $coupon_result = $this->db->get_where('offers',array('is_active'=>'Y','start_date <='=>date('Y-m-d'),'end_date >='=>date('Y-m-d'),'newsletter >='=> 'Y'))->row();
        $result = $this->db->query("SELECT * FROM `subscribed_user` WHERE `email` = '$email'")->row();
        if($result->coupon_code == null){
            $valid_result = $this->Common->update_data('subscribed_user',array('coupon_code'=>$coupon_result->offer_code),array('token'=>$key,'email'=>$email));
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
                                            <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Sie haben sich erfolgreich für den Newsletter der Hannoverschen Kaffeemanufaktur registriert!</h2>
                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">In Zukunft müssen Sie keine Kaffee-News mehr verpassen! Wir halten Sie auf dem Laufenden und senden Ihnen regelmäßige Updates zu neuen Kaffeesorten, Blog-Einträgen, Verkaufsaktionen, Veranstaltungen und mehr.</p>

                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;"><Als kleines Dankeschön für Ihr Interesse erhalten Sie einen Gutschein im Wert von 3,00 €. Diesen Gutschein können Sie in unserem Online Shop für alle Produkte verwenden. Legen Sie dazu Ihre gewünschten Produkte in den Warenkorb, gehen Sie zur Kasse und geben Sie im Bezahlvorgang den folgenden Coupon ein:</p>

                                            <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #615f5f; font-weight: 400;">'.$coupon_result->offer_code.'</h2>


                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Legen Sie direkt los und entdecken Sie die spannende Welt des Kaffees!</p>
                                            <a href="'.base_url().'" style=" display: inline-block;padding: 18px 29px;color: #fff;background: #bf9e6d;text-decoration: none;text-transform: uppercase;font-size: 18px;margin-bottom: 38px;">Zum Online Shop</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Freundliche Grüße,</p>
                            <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">Ihre Hannoversche Kaffeemanufaktur</h3>
                        </body>
                    </html>';
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
                                            <h2 style="font-size: 20px;line-height: 33px;text-align:center; sans-serif; margin: 0; color: #e80000; font-weight: 400;">Bitte bestätigen Sie Ihre Newsletter Anmeldung</h2>
                                             <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                            <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">User Name: "'.$email.'"</p>
                                            <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #615f5f; font-weight: 400;">Coupon code :  '.$coupon_result->offer_code.'</h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Freundliche Grüße,</p>
                            <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">Ihre Hannoversche Kaffeemanufaktur</h3>
                        </body>
                    </html>';  
            $subject1 = "Newsletter abonniert!";            
            $subject = "Newsletter abonniert!";                  
            // $status = $this->send_smtp_mail($body1,$subject1,'rohit@enthuons.com', 'test001.enthuons@gmail.com');
            $status = $this->send_smtp_mail($body,$subject,$email, 'test001.enthuons@gmail.com');
        }

              
    }
    public function geschenke()
    {
        $idd =20;
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
        // $limit= 6;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $sort_var = $this->input->get("orderby", TRUE);
        // echo $sort_var;
        // exit();  

        $search_var = $this->input->get("q", TRUE);

        $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
        $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>1));;
        $data['maincategory']=$this->Common->select_data('product_under_category','*',array());
        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
        $data['is_package']= $data['psubcategory'][0]['is_package'];
        $cat_iddd = $id[0]['id'];
        $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
        if(isset($search_var)){
            $search_var = trim($search_var);
            if($cat_iddd == '0'){
                $query = $primary_query."AND products.name LIKE '%$search_var%' group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
            } else {
                $query = $primary_query."AND products.name LIKE '%$search_var%' AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
            }
            
         }elseif(isset($sort_var)){

            $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
            if($sort_var=='date'){
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }elseif($sort_var=='asc'){
                $sort_var = 'minid asc';
            }else{
                $sort_var = 'minid desc';
            }
            $query =$primary_query."AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id  order by products.$sort_var";

         }else{
            // echo 'hello2';die();
            $total_data = $this->Common->get_totaldata('products','*');
            $flag = $this->input->post('view_all');
            if($_POST){
                if($flag ==''){
                    $products = $this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
                    $data["flag"] = false;
                }
            }else{

            $query =$primary_query."AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id  order by products.id asc";
            }
         }
         // $query .=$pri" group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id"; 
        $query = '('.$query.')as table1';
        $products = op_pagination_simple($query,$limit,$pageno);
        $current_page = $pageno;
        $total_pages = $products['total_page'];
        $item_count = $products['item_count'];
        $products = $products['data'];
        $data["flag"] = true;
         // echo $this->db->last_query();
        $data['pproducts'] = $products;
         
        $data["total_page"] = $total_pages;
        $data["active_pageno"] = $i;
        $data["total_row"] = $item_count;
        $data["pageno"] = $current_page;
        $data['option']= 'Geschenke';
        $this->load->view('gifts/geschenke',$data);
    }
    public function geschenkideen()
    {
        $idd =70;
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

        $pcategory=$this->Common->select_data('product_category','*',array('category'=>1));
        $data['pcategory']=$pcategory;
        $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>20));
        $cat_iddd = $id[0]['id'];
        $data['is_package']= $id[0]['is_package'];
        $cat_iddd1 = $pcategory[0]['id'];
        // echo $search_var; 
       $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
        if(isset($search_var)){
            $search_var = trim($search_var);
            $cat_iddd = $id[0]['id'];
            if($cat_iddd == '0'){
                $query = $primary_query."AND products.name LIKE '%$search_var%'";
            } else {
                $query = $primary_query."AND products.name LIKE '%$search_var%' AND product_join_category.subcategory_id=$cat_iddd AND product_join_category.category_id = $cat_iddd1 group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
            }
         }elseif(isset($sort_var)){
            if($sort_var=='date'){
                $this->db->order_by("created_at", "desc");
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }elseif($sort_var=='asc'){
                $sort_var = 'minid asc';
            }else{
                $sort_var = 'minid desc';
            }
            $query =$primary_query."AND product_join_category.category_id = $cat_iddd1 AND product_join_category.subcategory_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.$sort_var";

         }else{
            
            $total_data = $this->Common->get_totaldata('products','*');
            $flag = $this->input->post('view_all');
            if($_POST){
                if($flag ==''){
                    $products = $this->Common->select_product_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']),$limit,$page,$sort_var);
                    $data["flag"] = false;
                }
            }else{
                $query = $primary_query."AND product_join_category.category_id = $cat_iddd1 AND product_join_category.subcategory_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.id asc";
            }
         }
         $query = '('.$query.')as table1';
         $products = op_pagination_simple($query,$limit,$pageno);
         $current_page = $pageno;
         $total_pages = $products['total_page'];
         $item_count = $products['item_count'];
         $products = $products['data'];
         $data["flag"] = true;
         // echo $this->db->last_query();die();
        $data['pproducts'] = $products;
        $data["total_page"] = $total_pages;
        $data["active_pageno"] = $i;
        $data["total_row"] = $item_count;
        $data["pageno"] = $current_page; 
        $data['option']=$id[0]['name'];
        $this->load->view('gifts/geschenke',$data);
    }

}
