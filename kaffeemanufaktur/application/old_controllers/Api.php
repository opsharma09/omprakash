<?php 
class Api extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');

        
    }
	public function insert()
	{

        
           
            $this->Common->delete_data('product_category',array('category'=>3));
            
        echo json_encode('ok');
    }
}