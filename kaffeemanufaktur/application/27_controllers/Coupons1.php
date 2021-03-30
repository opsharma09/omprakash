<?php
class Coupons extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->_check_auth();
        $this->load->model("home_m");
        $this->load->model("Common");
        $this->load->library("csvimport");

    }

    private function _check_auth(){
        if($this->session->userdata('user')->user_type != '3'){
            $this->session->sess_destroy();
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        // $select = 'offers.*';
        // $join = array();
        // $data['offers'] = $this->home_m->get_all_row_where_join ('offers',array(),$join,$select);
        // $data['sub_view'] = 'coupons/list';
        $data['page_title'] = 'Coupons';
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/coupons/list',$data);
        $this->load->view('admin/includes/footer');
    }

    public function add()
    {
        if ($_POST){
                $show_sub_category = array();
                foreach($_POST['show_sub_category'] as $val)
                {
                $show_sub_category[] = (int) $val;
                }
                $subcategory = implode(',', $show_sub_category);
                $offer_code = $_POST['offer_code'];
                $offer_type = $_POST['offer_type'];
                $offer_value = $_POST['offer_value'];
                $description = $_POST['description'];
                $newsletter = $_POST['newsletter'];
                $terms = $_POST['terms'];
                $min_cart_value = $_POST['min_cart_value'];
                $max_discount = $_POST['max_discount'];
                $allowed_user_times = $_POST['allowed_user_times'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $is_active = $_POST['is_active'];
                $added_on = date('Y-m-d H:i:s');
                $category = $_POST['category'];
                $insert_array = array(
                    'offer_code' => $offer_code,
                    'offer_type' => $offer_type,
                    'offer_value' => $offer_value,
                    'description' => $description,
                    'newsletter' => $newsletter,
                    'terms' => $terms,
                    'min_cart_value' => $min_cart_value,
                    'max_discount' => $max_discount,
                    'allowed_user_times' => $allowed_user_times,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'is_active' => $is_active,
                    'category' => $category,
                    'subcategory' => $subcategory,
                    'added_on' => $added_on,
                );
                $check = $this->home_m->get_single_row_where('offers',array('offer_code'=>$offer_code),$select='*');
                if (empty($check)){
                    $this->home_m->insert_data('offers',$insert_array);
                    
                }else{
                    $data['error'] = 'Coupon code Already Exist';
                    $data['sub_view'] = 'coupons/add';
                    $data['page_title'] = 'Add Coupons';
                    $data['all_category']=$this->Common->select_data('product_category','*');
                    $this->load->view('admin/includes/header',$data);
                    $this->load->view('admin/coupons/add',$data);
                    $this->load->view('admin/includes/footer');
                    // exit;
                }
            redirect(base_url('coupons'));
        }else{
            $data['sub_view'] = 'coupons/add';
            $data['page_title'] = 'Add Coupons';
            $data['all_category']=$this->Common->select_data('product_category','*');
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/coupons/add',$data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function auto_add()
    {
        if ($_POST){
            $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $res = "";
            for ($i = 0; $i < $_POST['length']; $i++) {
                for ($j = 0; $j < 10; $j++) {
                    $res .= $chars[mt_rand(0, strlen($chars)-1)];
                }
                $show_sub_category = array();
                foreach($_POST['show_sub_category'] as $val)
                {
                $show_sub_category[] = (int) $val;
                }
                $subcategory = implode(',', $show_sub_category);
                $offer_type = $_POST['offer_type'];
                $offer_value = $_POST['offer_value'];
                $description = $_POST['description'];
                $newsletter = $_POST['newsletter'];
                $terms = $_POST['terms'];
                $min_cart_value = $_POST['min_cart_value'];
                $max_discount = $_POST['max_discount'];
                $allowed_user_times = $_POST['allowed_user_times'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $is_active = $_POST['is_active'];
                $added_on = date('Y-m-d H:i:s');
                $category = $_POST['category'];
                $insert_array = array(
                    'offer_code' => $res,
                    'offer_type' => $offer_type,
                    'offer_value' => $offer_value,
                    'description' => $description,
                    'newsletter' => $newsletter,
                    'terms' => $terms,
                    'min_cart_value' => $min_cart_value,
                    'max_discount' => $max_discount,
                    'allowed_user_times' => $allowed_user_times,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'is_active' => $is_active,
                    'category' => $category,
                    'subcategory' => $subcategory,
                    'added_on' => $added_on,
                );
                $check = $this->home_m->get_single_row_where('offers',array('offer_code'=>$res),$select='*');
                if (empty($check)){
                    $this->home_m->insert_data('offers',$insert_array);
                    
                }else{
                    $data['error'] = 'Coupon code Already Exist';
                    $data['sub_view'] = 'coupons/add';
                    $data['page_title'] = 'Add Coupons';
                    $data['all_category']=$this->Common->select_data('product_category','*');
                    $this->load->view('admin/includes/header',$data);
                    $this->load->view('admin/coupons/auto_add',$data);
                    $this->load->view('admin/includes/footer');
                    // exit;
                }
                $res = "";
            }
            redirect(base_url('coupons'));
        }else{
            $data['sub_view'] = 'coupons/add';
            $data['page_title'] = 'Add Coupons';
            $data['all_category']=$this->Common->select_data('product_category','*');
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/coupons/auto_add',$data);
            $this->load->view('admin/includes/footer');
        }
    }

    public function edit($param1 = '')
    {
        if ($param1 != ''){
            if ($_POST){
                $show_sub_category = array();
                foreach($_POST['show_sub_category'] as $val)
                {
                $show_sub_category[] = (int) $val;
                }
                $subcategory = implode(',', $show_sub_category);
                $offer_type = $_POST['offer_type'];
                $offer_value = $_POST['offer_value'];
                $description = $_POST['description'];
                $newsletter = $_POST['newsletter'];
                $terms = $_POST['terms'];
                $min_cart_value = $_POST['min_cart_value'];
                $max_discount = $_POST['max_discount'];
                $allowed_user_times = $_POST['allowed_user_times'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $is_active = $_POST['is_active'];
                $added_on = date('Y-m-d H:i:s');
                $category = $_POST['category'];
                $update_array = array(
                    'offer_type' => $offer_type,
                    'offer_value' => $offer_value,
                    'description' => $description,
                    'newsletter' => $newsletter,
                    'terms' => $terms,
                    'min_cart_value' => $min_cart_value,
                    'max_discount' => $max_discount,
                    'allowed_user_times' => $allowed_user_times,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'is_active' => $is_active,
                    'category' => $category,
                    'subcategory' => $subcategory,
                    'added_on' => $added_on,
                );
                $data['all_category']=$this->Common->select_data('product_category','*');
                $this->home_m->update_data('offers',array('offerID'=>$param1),$update_array);
                redirect(base_url("coupons"));
            }else{
                $join = array();
                $data['all_category']=$this->Common->select_data('product_category','*');
                $data['offers'] = $this->home_m->get_single_row_where_join ('offers',array('offerID'=>$param1),$join);
                $data['sub_view'] = 'coupons/edit';
                $data['page_title'] = 'Edit Product';
   
                $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/coupons/edit',$data);
            $this->load->view('admin/includes/footer');
            }
        }else{
            $this->index();
        }
    }
    public function sample_coupon_export(){ 
       // file name 
       $filename = 'coupons_'.date('d-m-Y').'.csv'; 
       header("Content-Description: File Transfer"); 
       header("Content-Disposition: attachment; filename=$filename"); 
       header("Content-Type: application/csv; ");
       
       // get data 
       $products = $this->db->select('offerID,category,subcategory,offer_code,offer_type,offer_value,description,terms,min_cart_value,max_discount,allowed_user_times,start_date,end_date,is_active')->get_where('offers',array())->result_array();
       // file creation 
       $file = fopen('php://output', 'w');
     
       $header = array("offerID","category","subcategory","Offer Code","Offer type","Offer Value","Description","Terms","Min Cart Value","Max Discount","Allowed User Times","Start Date","End Date","Is Active");
       fputcsv($file, $header);
       foreach ($products as $k=>$li){
        $cat_array =array();
        $scat_array =array();
            $category = explode(',', $li['category']);

            foreach ($category as $value) {
                array_push($cat_array, $this->category_name($li['category']));
            }
            $subcategory = explode(',', $li['subcategory']);
            foreach ($subcategory as $value) {
                array_push($scat_array, $this->subcategory_name($value));
            }
            $li['category'] = implode(',', $cat_array);
            $li['subcategory'] = implode(',', $scat_array);
            fputcsv($file,$li); 
       }
       fclose($file); 
       exit; 
    }
    public function category_name($id){
        if(!empty($id)){
            $category = $this->db->select('id,name')->get_where('product_category',array('id'=>$id))->row();
            return $category->name.' ('.$category->id.')';
            // return $this->db->last_query();
        }else{
            return 'N/A';
        }
    }
    public function subcategory_name($id){
        if(!empty($id)){
            $subcategory = $this->db->select('id,name')->get_where('product_sub_category',array('id'=>$id))->row();
            return $subcategory->name.' ('.$subcategory->id.')';
            // return $this->db->last_query();
        }else{
            return 'N/A';
        }
    }
    public function coupons_bulk_import(){
        $target_path = 'public/bulk/';
        if (!empty($_FILES['file']['name'])){
            $extension = substr(strrchr($_FILES['file']['name'], '.'), 1);
            $actual_image_name = 'product' . time() . "." . $extension;
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_path . $actual_image_name);
            $file_path =  $target_path.$actual_image_name;
            if ($this->csvimport->get_array($file_path)){
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $offerID = $row['offerID'];
                    $offer_code = $row['offer_code'];
                    $offer_type = $row['offer_type'];
                    $offer_value = $row['offer_value'];
                    $description = $row['description'];
                    $terms = $row['terms'];
                    $min_cart_value = $row['min_cart_value'];
                    $max_discount = $row['max_discount'];
                    $allowed_user_times = $row['allowed_user_times'];
                    $start_date = $row['start_date'];
                    $end_date = $row['end_date'];
                    $is_active = $row['is_active'];
                    $added_on = date('Y-m-d H:i:s');
                    $coupon_array = array(
                        'offer_code' => $offer_code,
                        'offer_type' => $offer_type,
                        'offer_value' => $offer_value,
                        'description' => $description,
                        'terms' => $terms,
                        'min_cart_value' => $min_cart_value,
                        'max_discount' => $max_discount,
                        'allowed_user_times' => $allowed_user_times,
                        'start_date' => $start_date,
                        'end_date' => $end_date,
                        'is_active' => $is_active,
                    );
                    $check = $this->home_m->get_single_row_where('offers',array('offer_code'=>strtoupper($offer_code)));
                    if (!empty($check)){
                        $this->home_m->update_data('offers',array('offer_code'=>$check->offer_code),$coupon_array); 
                    }else{
                        $this->home_m->insert_data('offers',$coupon_array);
                    }
                }
            }
        }
        redirect(base_url("coupons"));
    }
    public function valid_coupon(){ 
        $offer_code = $_POST['offer_code'];
        $check = $this->home_m->get_single_row_where('offers',array('offer_code'=>$offer_code));
        if(!empty($check)){
            echo 'ok';
        }else{
            echo 'notok';
        }
    }
    public function coupons_list(){
    $columns = array( 
        0 =>'offerID', 
        1 =>'offer_code',
        2 =>'offer_type',
        3 =>'offer_value',
        4 =>'min_cart_value', 
        5 =>'max_discount',
        6 =>'start_date',
        7 =>'end_date',
        8 =>'allowed_user_times',
        9 =>'is_active',
    );

    $limit = $this->input->post('length');
    $start = $this->input->post('start');
    $order = $columns[$this->input->post('order')[0]['column']];
    $dir = $this->input->post('order')[0]['dir'];

    $totalData = $this->Common->allposts_count();
        
    $totalFiltered = $totalData; 
        
    if(empty($this->input->post('search')['value']))
    {            
        $posts = $this->Common->allposts($limit,$start,$order,$dir);
    }
    else {
        $search = $this->input->post('search')['value']; 

        $posts =  $this->Common->posts_search($limit,$start,$search,$order,$dir);

        $totalFiltered = $this->Common->posts_search_count($search);
    }

    $data = array();
    if(!empty($posts))
    {
        foreach ($posts as $post)
        {

            $nestedData['ID'] = $post->offerID;
            $nestedData['Coupon'] = $post->offer_code;
            $nestedData['Type'] = $post->offer_type;
            $nestedData['Offer Value'] = $post->offer_value;
            $nestedData['Min cart Value'] = $post->min_cart_value;
            $nestedData['Max Discount'] =$post->max_discount;
            $nestedData['Start Date'] = date("M d Y",strtotime($post->start_date));
            $nestedData['End Date'] = date("M d Y",strtotime($post->end_date));
            $nestedData['Allowed Per User'] = $post->allowed_user_times;
            $nestedData['Status'] = ($post->is_active == 'Y')?"Active":"InActive";
            $nestedData['Action'] = '<a href="'.base_url().'coupons/edit/'.$post->offerID.'/" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>';
            
            $data[] = $nestedData;

        }
    }
      
    $json_data = array(
                "draw"            => intval($this->input->post('draw')),  
                "recordsTotal"    => intval($totalData),  
                "recordsFiltered" => intval($totalFiltered), 
                "data"            => $data   
                );
        
    echo json_encode($json_data); 
    }
}