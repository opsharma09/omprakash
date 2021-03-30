<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Espresso extends CI_Controller {
    
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
        $this->espresso();
    }
    public function espresso()
    {
        $id=$this->Common->select_data('product_category','id',array('name'=>'Espresso'));
        $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
        $data['pproducts']=$this->Common->select_data('products','*',array('category'=>$id[0]['id']));
	$data['option']='espresso';
        $this->load->view('espresso',$data);
    }
    public function espresso_new($idd)
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
        $id=$this->Common->select_data('product_category','id,name',array('id'=>$idd));
        $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>2));
        $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
        // $data['pproducts']=$this->Common->select_data('products','*',array('category'=>$id[0]['id']));
        $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
        $cat_iddd = $id[0]['id'];
        $data['is_package']= $data['psubcategory'][0]['is_package'];
        $total_data = $this->Common->get_totaldata('products','*');
        $flag = $this->input->post('view_all');
        if(isset($search_var)){
            $search_var = trim($search_var);
            if($cat_iddd == '0'){
                $query = $primary_query."AND products.name LIKE '%$search_var%' group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
            } else {
                $query = $primary_query."AND products.name LIKE '%$search_var%' AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id ";
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
            $query = $primary_query."AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.$sort_var";
            
         }else{
          if($_POST){
              if($flag ==''){
                  $products = $this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
                  $data["flag"] = false;
              }
          }else{
              $query = $primary_query."AND product_join_category.category_id = $cat_iddd group by product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.id desc";
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
        $this->load->view('espresso',$data);
    }
    public function espresso_sub($idd)
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

        $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>4));
        $data['is_package']= $id[0]['is_package'];
        // $data['pproducts']=$this->Common->select_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']));
        $primary_query = "SELECT ANY_VALUE(products.id) as id,ANY_VALUE(products.name) as name,ANY_VALUE(products.e_name) as e_name,ANY_VALUE(product_join_category.category_id) as category,ANY_VALUE(product_join_category.subcategory_id) as subcategory,ANY_VALUE(products.image1) as image1,ANY_VALUE(products.suitable) as suitable,ANY_VALUE(products.taste) as taste,ANY_VALUE(products.coffee_drink) as coffee_drink,ANY_VALUE(products.coffee_taste) as coffee_taste,ANY_VALUE(products.body) as body,ANY_VALUE(products.acid) as acid,ANY_VALUE(products.aftertaste) as aftertaste,ANY_VALUE(products.body_rating) as body_rating,ANY_VALUE(products.acid_rating) as acid_rating,ANY_VALUE(products.aftertaste_rating) as aftertaste_rating,ANY_VALUE(products.product_detail) as product_detail,ANY_VALUE(products.status) as status,ANY_VALUE(products.created_at) as created_at,ANY_VALUE(products.description) as description from (select * from (SELECT * FROM `products` as a LEFT JOIN ( SELECT product_id , MIN(price) AS minid, MAX(price) AS maxid FROM availability GROUP by product_id) b ON a.id = b.product_id) as d ) as products LEFT JOIN product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete =0 ";
        $cat_iddd = $id[0]['id'];
        $data['is_package']= $data['psubcategory'][0]['is_package'];
        $cat_iddd1 = 4;
        $total_data = $this->Common->get_totaldata('products','*');
        $flag = $this->input->post('view_all');
        if(isset($search_var)){
            $search_var = trim($search_var);
            if($cat_iddd == '0'){
                $query = $primary_query ."AND products.name LIKE '%$search_var%' group by  product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id";
            } else {
                $query = $primary_query ."AND products.name LIKE '%$search_var%' AND product_join_category.category_id = $cat_iddd1 AND product_join_category.subcategory_id = $cat_iddd group by  product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id";
                
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
            $query =$primary_query ."AND product_join_category.category_id = '$cat_iddd1' AND product_join_category.subcategory_id = $cat_iddd group by  product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by $sort_var";
           
         }else{
        if($_POST){
            if($flag ==''){
                $products = $this->Common->select_product_data('products','*',array('category'=>$cat_iddd1,'subcategory'=>$cat_iddd),$limit,$page,$sort_var);
                $data["flag"] = false;
            }
        }else{
            $query =$primary_query ."AND product_join_category.category_id = $cat_iddd1 AND product_join_category.subcategory_id = $cat_iddd group by  product_join_category.product_id,product_join_category.category_id,product_join_category.subcategory_id order by products.id desc";
            
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
        $this->load->view('espresso',$data);
    }
}
