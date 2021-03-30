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
        $limit=12;
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
        $cat_iddd = $id[0]['id'];
        $total_data = $this->Common->get_totaldata('products','*');
        $flag = $this->input->post('view_all');
        if(isset($search_var)){
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
         }else{
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
        $limit=12;
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

        // $data['pproducts']=$this->Common->select_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']));
        $cat_iddd = $id[0]['id'];
        $cat_iddd1 = 4;
        $total_data = $this->Common->get_totaldata('products','*');
        $flag = $this->input->post('view_all');
        if(isset($search_var)){
            if($cat_iddd == '0'){
                $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%'";
            } else {
                $query = "SELECT * FROM `products` WHERE `name` LIKE '%$search_var%' AND category = $cat_iddd1 AND subcategory = $cat_iddd";
                
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
        if($_POST){
            if($flag ==''){
                $products = $this->Common->select_product_data('products','*',array('category'=>$cat_iddd1,'subcategory'=>$cat_iddd),$limit,$page,$sort_var);
                $data["flag"] = false;
            }
        }else{
            $query ="SELECT * FROM products where category = $cat_iddd1 AND subcategory = $cat_iddd order by id desc";
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
        $this->load->view('espresso',$data);
    }
}
