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
        $select = 'offers.*';
        $join = array();
        // $data['offers'] = $this->home_m->get_all_row_where_join ('offers',array(),$join,$select);
        // $data['sub_view'] = 'coupons/list';
        $data['page_title'] = 'Coupons';
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/coupons/list',$data);
        $this->load->view('admin/includes/footer');
        // $this->coupons_list();
    }

    public function add()
    {
        if ($_POST){
                $category = '';
                $subcategory ='';
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

                    $id = $this->home_m->insert_data('offers',$insert_array);
                    if(in_array(0, $_POST['category'])){
                        $category =  $_POST['category'][0];
                        $subcategory = '0';
                        $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                    }elseif(sizeof($_POST['category'])>1){
                        foreach ($_POST['category'] as $value) {
                            $category = (int) $value;
                            $subcategory = 0;
                            $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                        }
                    }else{
                        $category = (int)$_POST['category'][0];
                        if(in_array(0, $_POST['show_sub_category'])){
                            $subcategory =  (int) $_POST['show_sub_category'][0];
                            $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                        }else{
                            foreach ($_POST['show_sub_category'] as $value) {
                                $subcategory = (int) $value;
                                $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                            }
                        }
                    }
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
                $category = '';
                $subcategory ='';
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
                    'added_on' => $added_on,
                );

                $check = $this->home_m->get_single_row_where('offers',array('offer_code'=>$res),$select='*');
                if (empty($check)){
                    $id = $this->home_m->insert_data('offers',$insert_array);
                    if(in_array(0, $_POST['category'])){
                        $category =  $_POST['category'][0];
                        $subcategory = '0';
                        $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                    }elseif(sizeof($_POST['category'])>1){
                        foreach ($_POST['category'] as $value) {
                            $category = (int) $value;
                            $subcategory = 0;
                            $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                        }
                    }else{
                        $category = (int)$_POST['category'][0];
                        if(in_array(0, $_POST['show_sub_category'])){
                            $subcategory =  (int) $_POST['show_sub_category'][0];
                            $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                        }else{
                            foreach ($_POST['show_sub_category'] as $value) {
                                $subcategory = (int) $value;
                                $this->home_m->insert_data('offer_category',array('offerID'=>$id,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                            }
                        }
                    }
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
                $category = '';
                $subcategory ='';
                if(in_array(0, $_POST['category'])){
                    $category =  $_POST['category'][0];
                    $subcategory = '0';
                }elseif(sizeof($_POST['category'])>1){
                    $category = implode(',', $_POST['category']);
                    $subcategory = '0';
                }else{
                    $category = $_POST['category'][0];
                    if(in_array(0, $_POST['show_sub_category'])){
                        $subcategory =  $_POST['show_sub_category'][0];
                    }else{
                        $subcategory = implode(',', $_POST['show_sub_category']);
                    }
                }
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
                    'added_on' => $added_on,
                );
                $data['all_category']=$this->Common->select_data('product_category','*');
                $this->home_m->update_data('offers',array('offerID'=>$param1),$update_array);
                $check = $this->home_m->get_single_row_where('offer_category',array('offerID'=>$param1),$select='*');
                if (!empty($check)){
                    $this->home_m->delete_data('offer_category',array('offerID'=>$param1));
                }
                if(in_array(0, $_POST['category'])){
                    $category =  $_POST['category'][0];
                    $subcategory = '0';
                    $this->home_m->insert_data('offer_category',array('offerID'=>$param1,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                }elseif(sizeof($_POST['category'])>1){
                    foreach ($_POST['category'] as $value) {
                        $category = (int) $value;
                        $subcategory = 0;
                        $this->home_m->insert_data('offer_category',array('offerID'=>$param1,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                    }
                }else{
                    $category = (int)$_POST['category'][0];
                    if(in_array(0, $_POST['show_sub_category'])){
                        $subcategory =  (int) $_POST['show_sub_category'][0];
                        $this->home_m->insert_data('offer_category',array('offerID'=>$param1,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                    }else{
                        foreach ($_POST['show_sub_category'] as $value) {
                            $subcategory = (int) $value;
                            $this->home_m->insert_data('offer_category',array('offerID'=>$param1,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
                        }
                    }
                }
                redirect(base_url("coupons"));
            }else{
                $join = array();
                $data['all_category']=$this->Common->select_data('product_category','*');
                $data['offers'] = $this->home_m->get_single_row_where_join ('offers',array('offerID'=>$param1),$join);
                $offer_cat = $this->home_m->get_all_row_where_join ('offer_category',array('offerID'=>$param1),$join);
                $offer_category = array();
                $offer_sub_category = array();
                foreach ($offer_cat as $value) {

                    array_push($offer_category, $value->category);
                    array_push($offer_sub_category, $value->subcategory);
                }
                var_dump(array_unique($offer_category));
                var_dump(array_unique($offer_sub_category));
                $data['offer_category']=array_unique($offer_category);
                $data['offer_sub_category']=array_unique($offer_sub_category);
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
       $products = $this->db->query("select offers.offerID,offer_category.category,product_category.name as category_name, offer_category.subcategory,product_sub_category.name as sub_category_name,offers.offer_code,offers.offer_type,offers.offer_value,offers.description,offers.terms,offers.min_cart_value,offers.max_discount,offers.allowed_user_times,offers.start_date,offers.end_date,offers.is_active from offers join offer_category on offers.offerID = offer_category.offerID left join product_category on product_category.id = offer_category.category left join product_sub_category on product_sub_category.id = offer_category.subcategory")->result_array();
       // file creation 
       $file = fopen('php://output', 'w');
     
       $header = array("offerID","categoryID","Category Name","subcategoryID","Subcategory Name","Offer Code","Offer type","Offer Value","Description","Terms","Min Cart Value","Max Discount","Allowed User Times","Start Date","End Date","Is Active");
       fputcsv($file, $header);
       foreach ($products as $k=>$li){
            if($li['category_name']== ''){
                $li['category_name'] = 'All Categories';
            }if($li['sub_category_name']==''){
                $li['sub_category_name'] = 'All Sub Categories';

            }
            fputcsv($file,$li); 
       }
       fclose($file); 
       exit; 
    }
    public function coupons_bulk_import(){
        $target_path = 'public/bulk/';
        var_dump($_FILES['file']['name']);
        if (!empty($_FILES['file']['name'])){
        
            $extension = substr(strrchr($_FILES['file']['name'], '.'), 1);
            $actual_image_name = 'coupons' . time() . "." . $extension;
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_path . $actual_image_name);
            $file_path =  $target_path.$actual_image_name;
            die();
            if ($this->csvimport->get_array($file_path)){
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $offerID = $row['offerID'];
                    $check_cat = $this->home_m->get_single_row_where('offer_category',array('offerID'=>$offerID),$select='*');
                    if (!empty($check_cat)){
                        $this->home_m->delete_data('offer_category',array('offerID'=>$offerID));
                    }
                }

                foreach ($csv_array as $row) {
                    $offerID = $row['offerID'];
                    $category = $row['categoryID'];
                    $subcategory = $row['subcategoryID'];
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
                        'added_on' => date('Y-m-d H:i:s'),
                    );
                    $check = $this->home_m->get_single_row_where('offers',array('offer_code'=>strtoupper($offer_code),'offerID'=>$offerID));
                    if (!empty($check)){
                        $this->home_m->update_data('offers',array('offer_code'=>$check->offer_code),$coupon_array); 
                        $this->home_m->insert_data('offer_category',array('offerID'=>$offerID,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));

                    }else{
                        $this->home_m->insert_data('offers',$coupon_array);
                        $this->home_m->insert_data('offer_category',array('offerID'=>$offerID,'category'=>$category,'subcategory'=>$subcategory,'created_at'=>date('Y-m-d H:i:s')));
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