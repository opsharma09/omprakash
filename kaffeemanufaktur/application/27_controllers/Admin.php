<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');
        }
        
    }
    
    public function index()
    {
        $data['page_title']="Dashboard";
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/admin_home');
        $this->load->view('admin/includes/footer');
    }
    
    public function dashboard()
    {
        $data['page_title']="Dashboard";
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/admin_home');
        $this->load->view('admin/includes/footer');
    }

}
