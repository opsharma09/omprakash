<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaffee extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Product_variation');
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
        $this->variation();
    }
    public function variation()
    { 
        // echo("hjgfjk gegtwek"); exit();
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
            // $id=$this->Common->select_data('product_category','id',array('name'=>'Kaffee'));
            $data['data'] = $this->product_variation->select_data('product_variation');
        
            $this->load->view('admin/includes/header',$data);
			$this->load->view('admin/product_variations',$data);
			$this->load->view('admin/includes/footer');
    }

    public function add_variation()
    {
        $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
            if($this->input->method()=='post')
            {
                $this->form_validation->set_rules('name','required');
                
                if($this->form_validation->run()=='true')
                {
                        $data = array (
                                'name'=>$_POST['name'],
                                );
                        $resp=$this->Common->insert_data('product_variation',$data);
                        if($resp)
                                $arr=array('status'=>'true','message'=>'Product Variation Successfully Inserted','reload'=>base_url().'products/product_variations');
                        else 
                                $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                        echo json_encode($arr);
                }
                else 
                {       
                    print_r(validation_errors());
                }
            }
            else{
                $data['page_title']="Products variations";
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/add_variation',$data);
                $this->load->view('admin/includes/footer');
            }
    }

}
