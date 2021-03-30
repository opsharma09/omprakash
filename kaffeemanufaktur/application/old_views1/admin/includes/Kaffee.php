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

        $limit= 12;
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
         }
         else{

            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            $total_data = $this->Common->get_totaldata('products','*');
         }

        
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
        $limit= 12;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // echo 'hello'.$this->uri->segment(3);die();
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
         }
         else{

            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            $total_data = $this->Common->get_totaldata('products','*');
         }
        $data['option']='kaffee';
        $this->load->view('kaffee-finder',$data);
    }
    public function kaffee_new($idd)
    { 
        $limit=12;
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
          $i = $pageno;
          } else {
              $pageno = 1;
              $i = 1;
          }
        $flag = $this->input->post('view_all');
        // $limit= 25;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $sort_var = $this->input->get("orderby", TRUE);
        // echo $sort_var;
        // exit();  

        $search_var = $this->input->get("q", TRUE);
        // echo $search_var; 
        if(isset($search_var)){

            $id=$this->Common->select_data('product_category','*',array('id'=>$idd));

            $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>$idd));;
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));            $data['pproducts']=$this->Common->select_product_searchdata('products','*',array('category'=>$id[0]['id']),$limit,$page,$search_var,$sort_var);
            // print_r($data['pproducts']); exit();
            $total_data = $this->Common->get_totaldata('products','*');
            echo $search_var;
         }
         else{

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
    public function kaffee_sub($idd)
    { 
        $limit= 25;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $sort_var = $this->input->get("orderby", TRUE);
        // echo $sort_var;
        // exit();  

        $search_var = $this->input->get("q", TRUE);
        // echo $search_var; 
        if(isset($search_var)){

            $id=$this->Common->select_data('product_sub_category','*',array('id'=>$idd));

            $data['pcategory']=$this->Common->select_data('product_category','*',array('category'=>2));
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>3));

            $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']),$limit,$page,$sort_var);
            // print_r($data['pproducts']); exit();
            $total_data = $this->Common->get_totaldata('products','*');
            echo $search_var;
         }
         else{

            $id=$this->Common->select_data('product_sub_category','*',array('id'=>$idd));

            $pcategory=$this->Common->select_data('product_category','*',array('category'=>2));
            $data['pcategory']=$pcategory;
            $data['maincategory']=$this->Common->select_data('product_under_category','*',array());

            $data['psubcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>3));
            // echo $this->db->last_query();die();
            // $data['pproducts']=$this->Common->select_product_data('products','*',array('category'=>$pcategory[0]['id'],'subcategory'=>$id[0]['id']),$limit,$page,$sort_var);
            $total_data = $this->Common->get_totaldata('products','*');
            $cat_iddd = $id[0]['id'];
            $cat_iddd1 = $pcategory[0]['id'];
            $total_data = $this->Common->get_totaldata('products','*');
            $flag = $this->input->post('view_all');
            if($_POST){
                if($flag ==''){
                    $products = $$this->Common->select_product_data('products','*',array('category'=>$pcategory[0]['id']),$limit,$page,$sort_var);
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
    $data['option']=$id[0]['name'];
        $this->load->view('kaffee',$data);
    }
}
