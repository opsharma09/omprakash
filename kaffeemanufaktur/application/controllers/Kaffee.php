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
                $query ="SELECT * FROM products where category = '$cat_iddd' order by id asc";
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
             // $id =   $product_info[0]['id'];
             //    $availability = $this->db->query("select id,size,quantity,price,product_id FROM availability where product_id = $id")->result_array();
             //    if(!empty($availability)){
             //    foreach ($availability as $key => $value) {
             //        $availability[$key]['variation_id'] = $this->db->query("select DISTINCT variation_id FROM availability where product_id = $id")->result_array();
             //    }
             //   // var_dump($availability);
             //        $data['product_details'] = $availability;
             //        if($product_info[0]['category']==19){
             //            $id = $data['product_details'][0]['variation_id'];
             //            $pd_id = $data['product_details'][0]['product_id'];
             //            $data['type'] = $this->Common->select_data('availability','*',array('variation_id'=>$id,'product_id'=>$pd_id));
             //        }
             //    }
            }else{
                $data['product'] =array();
            }
            // echo $this->db->last_query();die();
            $html = $this->load->view('finder_product',$data,true);
            echo json_encode(array('view_html'=>trim($html)));
        }else{
            $data['option']='kaffee';
            $data['product_equipment'] = $this->Common->select_data('product_equipment','*',array('type'=>'suitable','status'=>'1'));
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

        $id=$this->Common->select_data('product_category','*',array('id'=>$idd));
        $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>2));;
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
        $data['option']='kaffee';
        $this->load->view('kaffee',$data);
    }
    public function kaffee_sub($idd)
    { 
        // echo $idd ; die();
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
        $this->load->view('kaffee',$data);
    }
}
