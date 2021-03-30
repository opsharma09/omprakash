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

        $limit= 25;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $sort_var = $this->input->get("orderby", TRUE);
        echo $sort_var;
        // exit();  

        $search_var = $this->input->get("q", TRUE);
        // echo $search_var; 
        if(isset($search_var)){
            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $data['products']=$this->Common->select_product_searchdata('products','*',array('category'=>$id[0]['id']),$limit,$page,$search_var,$sort_var);
            // print_r($data['products']); exit();
            $total_data = $this->Common->get_totaldata('products','*');
            echo $search_var;
         }
         else{

            $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['subcategory']=$this->Common->select_data('product_sub_category','*',array('category'=>$id[0]['id']));
            $data['products']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page,$sort_var);
            $total_data = $this->Common->get_totaldata('products','*');
         }

        
        // $id=$this->Common->select_product_data('product_category','id',array('name'=>'Kaffee'),$limit,$page);
        // $data['subcategory']=$this->Common->select_product_data('product_sub_category','*',array('category'=>$id[0]['id']),$limit,$page);
        // $data['products']=$this->Common->select_product_data('products','*',array('category'=>$id[0]['id']),$limit,$page);
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
}
