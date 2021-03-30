<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaffee extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $this->load->helper('url');
        $this->load->library('pagination');
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
        $this->kaffee();
    }
    public function kaffee()
    { 

        $limit=6;
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
        // echo $sort_var;
        // exit();  

        $search_var = $this->input->get("q", TRUE);
        // echo $search_var; 
        if(isset($search_var)){
            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $data['pproducts']=$this->Common->select_product_searchdata('products','*',array('category'=>$id[0]['id']),$limit,$page,$search_var,$sort_var);
            // print_r($data['pproducts']); exit();
            $total_data = $this->Common->get_totaldata('products','*');
            echo $search_var;
         }elseif($sort_var !=''){
            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $products =$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            $total_page = ceil(sizeof($products)/$limit);
            $cat_iddd = $id[0]['id'];
            $flag = $this->input->post('view_all');
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = sizeof($products);
            $data["flag"] = true;
            $data['pproducts'] = $products;
            $data["total_page"] = $total_pages;
            $data["active_pageno"] = $i;
            $data["total_row"] = $item_count;
            $data["pageno"] = $current_page; 
            $data['option']='kaffee';
            $this->load->view('kaffee',$data); 

         }else{

            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            // $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            $total_data = $this->Common->get_totaldata('products','*');
            $cat_iddd = $id[0]['id'];
            $total_data = $this->Common->get_totaldata('products','*');
            $flag = $this->input->post('view_all');
            if($_POST){
                if($flag ==''){
                    $products = $$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
                    $data["flag"] = false;
                }
            }else{
                $query ="SELECT * FROM products where category = '$cat_iddd' order by id desc";
                $query = '('.$query.')as table1';
             $products = op_pagination_simple($query,$limit,$pageno);
             $current_page = $pageno;
             $total_pages = $products['total_page'];
             $item_count = $products['item_count'];
             $products = $products['data'];
             $data["flag"] = true;
            }
            $data['pproducts'] = $products;
         }
        $data["total_page"] = $total_pages;
        $data["active_pageno"] = $i;
        $data["total_row"] = $item_count;
        $data["pageno"] = $current_page;  
        
        // $id=$this->Common->select_product_data('product_category','id',array('name'=>'Kaffee'),$limit,$page);
        // $data['subcategory']=$this->Common->select_product_data('product_sub_category','*',array('category'=>$id[0]['id']),$limit,$page);
        // $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page);
        // $total_data = $this->Common->get_totaldata('products','*');
        
        // $link_product = 'http://localhost/kaffeemanufaktur/kaffee';
        // $data['pagination_product'] = $this->pagination($total_data,$limit,$link_product);

	$data['option']='kaffee';
        $this->load->view('kaffee',$data);
    }
    private function pagination($total ,$per_page ,$link) {

        $config['base_url'] = $link;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['page_query_string'] = TRUE;

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }
    public function kaffeefinder() {
        if($_POST){
            if(isset($_POST['product_equipment']) && isset($_POST['taste']) && isset($_POST['drink'])) {
                $suitable = $_POST['product_equipment'];
                $taste = $_POST['taste'];
                $drink = $_POST['drink'];
                $query = "SELECT * FROM `products` where FIND_IN_SET('$suitable',suitable) AND  FIND_IN_SET('$taste',coffee_taste) AND FIND_IN_SET('$drink',coffee_drink)";
            }
            $product_info = $this->db->query($query)->result_array();
            // echo $this->db->last_query();die();
            $data['product_details']= array();
            $data['product'] = $product_info;
            if(!empty($product_info)){
             $id =   $product_info[0]['id'];
                $availability = $this->db->query("select id,size,quantity,price,product_id FROM availability where product_id = $id")->result_array();
                if(!empty($availability)){
                foreach ($availability as $key => $value) {
                    $availability[$key]['variation_id'] = $this->db->query("select DISTINCT variation_id FROM availability where product_id = $id")->result_array();
                }
               // var_dump($availability);
                    $data['product_details'] = $availability;
                    if($product_info[0]['category']==19){
                        $id = $data['product_details'][0]['variation_id'];
                        $pd_id = $data['product_details'][0]['product_id'];
                        $data['type'] = $this->Common->select_data('availability','*',array('variation_id'=>$id,'product_id'=>$pd_id));
                    }
                }
            }else{
                $data['product'] =array();
            }
            $html = $this->load->view('finder_product',$data,true);
            echo json_encode(array('view_html'=>trim($html)));
        }else{
            $data['option']='kaffee';
            $data['product_equipment'] = $this->Common->select_data('product_equipment','*',array('type'=>'suitable'));
            $this->load->view('kaffee-finder',$data);
        }
    }
    public function kaffee_new($idd)
    { 
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
        // echo $search_var; 
        if(isset($search_var)){

            $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
            $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>2));;
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());
            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $cat_iddd = $id[0]['id'];
            // $products =$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            if($cat_iddd == '0'){
                $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%'";
            } else {
                $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%' AND `category`='$cat_iddd'";
                
            }
            $query = '('.$query.')as table1';
            $products = op_pagination_simple($query,$limit,$pageno);
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = $products['item_count'];
            $products = $products['data'];
            $data["flag"] = true;
         }elseif(isset($sort_var)){

            $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
            $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>2));;
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $cat_iddd = $id[0]['id'];
            if($sort_var=='date'){
                $this->db->order_by("created_at", "desc");
                 $sort_var = 'created_at asc';
            }elseif($sort_var=='std'){
                $sort_var = 'id asc';
            }else{
                $sort_var = 'id '.$sort_var;
            }
            $query ="SELECT * FROM products where category = '$cat_iddd' order by $sort_var";
            $query = '('.$query.')as table1';
            $products = op_pagination_simple($query,$limit,$pageno);
            $current_page = $pageno;
            $total_pages = $products['total_page'];
            $item_count = $products['item_count'];
            $products = $products['data'];
            $data["flag"] = true;
            // $data['pproducts'] = $products; 

         }else{
            // echo 'hello2';die();
            $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
            $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>2));;
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            // echo $this->db->last_query();die();
            // $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            $cat_iddd = $id[0]['id'];
            $total_data = $this->Common->get_totaldata('products','*');
            $flag = $this->input->post('view_all');
            if($_POST){
                if($flag ==''){
                    $products = $this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
                    $data["flag"] = false;
                }
            }else{
                $query ="SELECT * FROM products where category = '$cat_iddd' order by id desc";
                $query = '('.$query.')as table1';
             $products = op_pagination_simple($query,$limit,$pageno);
             $current_page = $pageno;
             $total_pages = $products['total_page'];
             $item_count = $products['item_count'];
             $products = $products['data'];
             $data["flag"] = true;
            }
         }
         // echo $this->db->last_query();
        $data['pproducts'] = $products;
         
        $data["total_page"] = $total_pages;
        $data["active_pageno"] = $i;
        $data["total_row"] = $item_count;
        $data["pageno"] = $current_page;    
        // $id=$this->Common->select_product_data('product_category','id',array('name'=>'Kaffee'),$limit,$page);
        // $data['subcategory']=$this->Common->select_product_data('product_sub_category','*',array('category'=>$id[0]['id']),$limit,$page);
        // $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page);
        // $total_data = $this->Common->get_totaldata('products','*');
        
        // $link_product = 'http://localhost/kaffeemanufaktur/kaffee';
        // $data['pagination_product'] = $this->pagination($total_data,$limit,$link_product);
        $data['option']='kaffee';
        $this->load->view('kaffee',$data);
    }
    public function kaffee_sub($idd)
    { 
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

        $pcategory=$this->Common->select_data('product_category','*',array('category'=>2));
        $data['pcategory']=$pcategory;
        $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>3));
        $cat_iddd = $id[0]['id'];
        $cat_iddd1 = $pcategory[0]['id'];
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
        $this->load->view('kaffee',$data);
    }
}
