<?php 
class Products extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');

        
    }
	public function category()
	{
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		if($this->input->method()=='post')
		{
			$this->form_validation->set_rules('name','Category Name','required');
                        $this->form_validation->set_rules('category','Category','required');
			if($this->form_validation->run()=='true')
			{
				$resp=$this->Common->insert_data('product_category',$_POST);
				if($resp)
					$arr=array('status'=>'true','message'=>'Category Successfully Inserted','reload'=>base_url().'products/category');
				else 
					$arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
				echo json_encode($arr);
			}
			else 
			{
				print_r(validation_errors());
			}
		}
		else 
		{
			$data['page_title']="Category";
			$data['all_category']=$this->Common->select_data('product_category','*');
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/category',$data);
			$this->load->view('admin/includes/footer');
		}
		
	}
	public function delete_product_category($id)
	{
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		$res=$this->Common->delete_data('product_category',array('id'=>$id));
                $resp=$this->Common->delete_data('product_sub_category',array('category'=>$id));
                $respo=$this->Common->delete_data('products',array('category'=>$id));
		if($res)
		{
			redirect(base_url().'products/category');
		}
	}
	public function edit_product_category($id)
	{
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		if($this->input->method()=='post')
		{
			$res=$this->Common->update_data('product_category',$_POST,array('id'=>$id));
			if($res)
				$arr=array('status'=>'true','message'=>'Category Successfully Updated','reload'=>base_url().'products/category');
			else 
				$arr=array('status'=>'false','message'=>'Category Not Updated');
			echo json_encode($arr);
		}
		else 
		{
			$data['category_info']=$this->Common->select_data('product_category','name,id',array('id'=>$id));
			$data['page_title']="Edit Category";
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/edit_category',$data);
			$this->load->view('admin/includes/footer');
		}
	}
	public function subcategory()
	{
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
            if($this->input->method()=='post')
            {
                $this->form_validation->set_rules('name','Category Name','required');
                $this->form_validation->set_rules('category','Sub Category Name','required');
                if($this->form_validation->run()=='true')
                {       
                        $_POST['e_name'] = strtoupper(sanitizer($_POST['e_name']));
                        $resp=$this->Common->insert_data('product_sub_category',$_POST);
                        if($resp)
                                $arr=array('status'=>'true','message'=>'Sub Category Successfully Inserted','reload'=>base_url().'products/subcategory');
                        else 
                                $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                        echo json_encode($arr);
                }
                else 
                {
                        print_r(validation_errors());
                }
            }else{
                $data['page_title']="Sub Category";
                
                $data['all_data'] = $this->Common->join_mult_table('product_sub_category',
				 ['product_category','product_under_category'],
			     ['product_sub_category.category=product_category.id','product_category.category=product_under_category.id'],[],
                $projection = 'product_sub_category.*,product_category.name as product_category_name,product_under_category.name as parent_name', $distinct = '', $limit = '', $offset = 0,$join_type='inner');
                
                $data['all_category']=$this->Common->select_data('product_category','*');
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/sub_category',$data);
                $this->load->view('admin/includes/footer');
            }
	}

    public function delete_product_sub_category($id)
	{   $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		$res=$this->Common->delete_data('product_sub_category',array('id'=>$id));
                $respo=$this->Common->delete_data('products',array('subcategory'=>$id));
		if($res)
		{
			redirect(base_url().'products/subcategory');
		}
	}
	public function edit_product_sub_category($id)
	{   
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		if($this->input->method()=='post')
		{
            $_POST['e_name'] = strtoupper(sanitizer($_POST['e_name']));
			$res=$this->Common->update_data('product_sub_category',$_POST,array('id'=>$id));
			if($res)
				$arr=array('status'=>'true','message'=>'Sub Category Successfully Updated','reload'=>base_url().'products/subcategory');
			else 
				$arr=array('status'=>'false','message'=>'Sub Category Not Updated');
			echo json_encode($arr);
		}
		else 
		{
			$data['category_info']=$this->Common->select_data('product_sub_category','name,id,e_name,is_package',array('id'=>$id));
			$data['all_category']=$this->Common->select_data('product_category','*');
                        $data['page_title']="Edit Category";
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/edit_product_sub_category',$data);
			$this->load->view('admin/includes/footer');
		}
	}

    public function add_product()
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
            if($this->input->method()=='post')
            {
                $target_dir = "public/images/product/";
                $target_file = $target_dir . time().basename($_FILES["image"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $imgName = time().basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                
                $this->form_validation->set_rules('name','Category Name','required');
                $this->form_validation->set_rules('category','Sub Category Name','required');
                
                if($this->form_validation->run()=='true')
                {

                    $suitable = array();
                    $country = array();
                    $taste = array();
                    $body = array();
                    $acid = array();
                    $aftertaste = array();
                    $coffee_drink = array();
                    $coffee_taste = array();
                    $product_equ =$this->Common->select_data('product_equipment','*');
                    for($i=1; $i<=sizeof($product_equ); $i++) {
                        if(isset($_POST['country'.$i])){
                            array_push($country, $_POST['country'.$i]);
                        }
                        if(isset($_POST['suitable'.$i])){
                            array_push($suitable, $_POST['suitable'.$i]);
                        }
                        if(isset($_POST['taste'.$i])){
                            array_push($taste, $_POST['taste'.$i]);
                        }
                    }
                    if(isset($_POST['body'])){
                        foreach ($_POST['body'] as $b) {
                            array_push($body, $b);
                        }
                    }
                    if(isset($_POST['acid'])){
                        foreach ($_POST['acid'] as $b) {
                            array_push($acid, $b);
                        }
                    }
                    if(isset($_POST['aftertaste'])){
                        foreach ($_POST['aftertaste'] as $b) {
                            array_push($aftertaste, $b);
                        }
                    }
                    if(isset($_POST['coffee_drink'])){
                        foreach ($_POST['coffee_drink'] as $b) {
                            array_push($coffee_drink, $b);
                        }
                    }
                    if(isset($_POST['coffee_taste'])){
                        foreach ($_POST['coffee_taste'] as $b) {
                            array_push($coffee_taste, $b);
                        }
                    }
                    $product_category =$this->Common->select_data('product_category','*', array('id'=>$_POST['category']));
                    if($product_category[0]['category']!='3'){
                        $data = array (
                            'name'=>$_POST['name'],
                            'e_name'=>strtoupper(sanitizer($_POST['e_name'])),
                            'description'=>$_POST['description'],
                            'suitable'=>empty($suitable)?'':implode(',', $suitable),
                            'country'=>empty($country)?'':implode(',', $country),
                            'taste'=>empty($taste)?'':implode(',', $taste),    
                            // 'subcategory'=>$_POST['subcategory'],
                            'category'=>$_POST['category'],
                            'created_by'=>$session_data->user_id,
                            'image1'=>"public/images/product/".$imgName,
                            'body'=>empty($body)?'':implode(',', $body),
                            'acid'=>empty($acid)?'':implode(',', $acid),
                            'aftertaste'=>empty($aftertaste)?'':implode(',', $aftertaste),
                            'coffee_drink'=>empty($coffee_drink)?'':implode(',', $coffee_drink),
                            'coffee_taste'=>empty($coffee_taste)?'':implode(',', $coffee_taste),
                            'body_rating'=>isset($_POST['body_rating'])?$_POST['body_rating']:'',
                            'acid_rating'=>isset($_POST['acid_rating'])?$_POST['acid_rating']:'',
                            'aftertaste_rating'=>isset($_POST['aftertaste_rating'])?$_POST['aftertaste_rating']:'',
                            'product_detail'=>isset($_POST['product_details'])?$_POST['product_details']:'',
                            );
                    }else{
                        $data = array (
                            'name'=>$_POST['name'],
                            'e_name'=>strtoupper(sanitizer($_POST['e_name'])),
                            'description'=>$_POST['description'], 
                            // 'subcategory'=>$_POST['subcategory'],
                            'category'=>$_POST['category'],
                            'image1'=>"public/images/product/".$imgName,
                            'product_detail'=>isset($_POST['product_details'])?$_POST['product_details']:'',
                        );
                    }
                        $resp=$this->Common->insert('products',$data);
                        $subcat =$this->db->query("select * from product_sub_category")->num_rows();
                        for($i=1; $i<=$subcat; $i++) {
                            if(isset($_POST['show_sub_category'.$i])){
                                $catid = $_POST['show_sub_category'.$i];
                                $this->db->insert('product_join_category',array('product_id'=>$resp,'category'=>$_POST['category'],'subcategory_id'=>$catid));
                            }
                        }
                        if($resp)
                                $arr=array('status'=>'true','message'=>'Product Successfully Inserted','reload'=>base_url().'products/admin_products');
                        else 
                                $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                        redirect('products/admin_products');
                }
                else 
                {
                        
                        print_r(validation_errors());
                }
            }else{
                $data['page_title']="Products";
                $data['all_category']=$this->Common->select_data('product_category','*');
                $data['all_sub_category']=$this->Common->select_data('product_sub_category','*');
                $data['product_equipment']=$this->Common->select_data('product_equipment','*',array('status'=>'1'));
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/add_product',$data);
                $this->load->view('admin/includes/footer');
            }
    }
    

    public function delete_product($id)
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        $res=$this->Common->delete_data('products',array('id'=>$id));
        $res=$this->Common->delete_data('availability',array('product_id'=>$id));
        $res=$this->Common->delete_data('product_join_category',array('product_id'=>$id));
        if($res)
        {
            redirect(base_url().'products/admin_products');
        }
    }


    public function edit_product($id)
    {   
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        if($this->input->method()=='post')
        {
                 //var_dump($_FILES["image"]["name"]);die();
                 // var_dump($_POST['product_details']);die();
                if($_FILES["image"]["name"] != '')
                {
                    $target_dir = "public/images/product/";
                    $target_file = $target_dir .time().basename($_FILES["image"]["name"]);
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $imgName = time().basename($_FILES["image"]["name"]);
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                    $imgName = $target_dir.$imgName;
                    
                }else{
                    $imgNamearr = $this->Common->select_data('products','*',array('id'=>$id));
                    $imgName = $imgNamearr[0]['image1'];
                }
                $suitable = array();
                $country = array();
                $taste = array();
                $body = array();
                $acid = array();
                $aftertaste = array();
                $coffee_drink = array();
                $coffee_taste = array();
                $product_equ =$this->Common->select_data('product_equipment','*');

                for($i=1; $i<=sizeof($product_equ); $i++) {
                    if(isset($_POST['country'.$i])){
                        array_push($country, $_POST['country'.$i]);
                    }
                    if(isset($_POST['suitable'.$i])){
                        array_push($suitable, $_POST['suitable'.$i]);
                    }
                    if(isset($_POST['taste'.$i])){
                        array_push($taste, $_POST['taste'.$i]);
                    }
                }
                if(isset($_POST['body'])){
                    foreach ($_POST['body'] as $b) {
                        array_push($body, $b);
                    }
                }
                if(isset($_POST['acid'])){
                    foreach ($_POST['acid'] as $b) {
                        array_push($acid, $b);
                    }
                }
                if(isset($_POST['aftertaste'])){
                    foreach ($_POST['aftertaste'] as $b) {
                        array_push($aftertaste, $b);
                    }
                }
                if(isset($_POST['coffee_drink'])){
                    foreach ($_POST['coffee_drink'] as $b) {
                        array_push($coffee_drink, $b);
                    }
                }
                if(isset($_POST['coffee_taste'])){
                    foreach ($_POST['coffee_taste'] as $b) {
                        array_push($coffee_taste, $b);
                    }
                }
                $product_category =$this->Common->select_data('product_category','*', array('id'=>$_POST['category']));
                if($product_category[0]['category']!=3){
                    $data = array (
                        'name'=>$_POST['name'],
                        'e_name'=>strtoupper(sanitizer($_POST['e_name'])),
                        'description'=>$_POST['description'],
                        'suitable'=>empty($suitable)?'':implode(',', $suitable),
                        'country'=>empty($country)?'':implode(',', $country),
                        'taste'=>empty($taste)?'':implode(',', $taste),    
                        // 'subcategory'=>$_POST['subcategory'],
                        'category'=>$_POST['category'],
                        'image1'=>$imgName,
                        'body'=>empty($body)?'':implode(',', $body),
                        'acid'=>empty($acid)?'':implode(',', $acid),
                        'aftertaste'=>empty($aftertaste)?'':implode(',', $aftertaste),
                        'coffee_drink'=>empty($coffee_drink)?'':implode(',', $coffee_drink),
                        'coffee_taste'=>empty($coffee_taste)?'':implode(',', $coffee_taste),
                        'body_rating'=>isset($_POST['body_rating'])?$_POST['body_rating']:'',
                        'acid_rating'=>isset($_POST['acid_rating'])?$_POST['acid_rating']:'',
                        'aftertaste_rating'=>isset($_POST['aftertaste_rating'])?$_POST['aftertaste_rating']:'',
                        'product_detail'=>isset($_POST['product_details'])?$_POST['product_details']:'',
                    );
                }else{
                    $data = array (
                        'name'=>$_POST['name'],
                        'e_name'=>strtoupper(sanitizer($_POST['e_name'])),
                        'description'=>$_POST['description'], 
                        // 'subcategory'=>$_POST['subcategory'],
                        'category'=>$_POST['category'],
                        'image1'=>$imgName,
                        'product_detail'=>isset($_POST['product_details'])?$_POST['product_details']:'',
                    );
                }
                
                $res=$this->Common->update_data('products',$data,array('id'=>$id));
                $category = $_POST['category'];
                $subcat =$this->db->query("select * from product_sub_category order by id desc")->result_array();
                for($i=1; $i<=$subcat[0]['id']; $i++) {
                    if(isset($_POST['show_sub_category'.$i])){
                        $catid = $_POST['show_sub_category'.$i];
                        $jsubcat =$this->db->query("select * from product_join_category where product_id= $id AND subcategory_id = $catid AND category_id = $category")->row();
                        if(empty($jsubcat)){
                            if($this->Common->delete_data('product_join_category',array('product_id'=>$id,'category_id !='=>$category))){
                                $this->db->query("ALTER TABLE product_join_category AUTO_INCREMENT 1");
                            }
                            $this->db->insert('product_join_category',array('product_id'=>$id,'category_id'=>$_POST['category'],'subcategory_id'=>$catid));
                        }else{
                            $this->Common->update_data('product_join_category',array('is_delete'=>0,'product_id'=>$id,'subcategory_id'=>$catid,'category_id'=>$_POST['category']),array('product_id'=>$id,'subcategory_id'=>$catid,'category_id'=>$_POST['category']));
                        }
                    }else{
                        $jsubcat =$this->db->query("select * from product_join_category where product_id= $id AND subcategory_id = $i AND category_id = $category")->row();
                        if(!empty($jsubcat)){
                            $this->Common->update_data('product_join_category',array('is_delete'=>1),array('product_id'=>$id,'subcategory_id'=>$i,'category_id'=>$_POST['category']));
                        }
                    }
                }
            if($res)
            {
                $arr=array('status'=>'true','message'=>'Product Updated','reload'=>base_url().'products/admin_products');
            }
            else 
                $arr=array('status'=>'false','message'=>'product Not Updated');
            echo json_encode($arr);
        }
        else 
        {
            $data['category_info']=$this->Common->select_data('products','*',array('id'=>$id));
            $data['all_sub_category']=$this->Common->select_data('product_sub_category','*');
            $data['all_category']=$this->Common->select_data('product_category','*');
                        $data['page_title']="Edit Product";
            $data['product_equipment']=$this->Common->select_data('product_equipment','*',array('status'=>'1'));
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_product',$data);
            $this->load->view('admin/includes/footer');
        }
    }

    public function product($id){
            // $product_info = $this->db->query('products','*',array('id'=>$id));
            $product_info = $this->db->query("SELECT products.id,products.name,products.e_name,products.image1,products.image,products.suitable,products.taste,products.coffee_drink,products.coffee_taste,products.body,products.acid,products.aftertaste,products.body_rating,products.acid_rating,products.aftertaste_rating,products.product_detail,products.status,products.created_at,products.description,product_join_category.category_id as category, product_join_category.subcategory_id as subcategory FROM `products` left join product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete = 0 AND products.id = $id")->result_array();
            $data['product_details']= array();
            $data['product'] = $product_info;
            $categoryId = $product_info[0]['category'];
            // $data['product_list']=$this->Common->select_data('products','*',array('category'=>$product_info[0]['category']),'4','0');
            $data['product_list']=$this->db->query("SELECT products.id,products.name,products.e_name,products.image1,products.image,products.suitable,products.taste,products.coffee_drink,products.coffee_taste,products.body,products.acid,products.aftertaste,products.body_rating,products.acid_rating,products.aftertaste_rating,products.product_detail,products.status,products.created_at,products.description,product_join_category.category_id as category, product_join_category.subcategory_id as subcategory FROM `products` left join product_join_category ON products.id = product_join_category.product_id WHERE product_join_category.is_delete = 0 AND product_join_category.category_id = $categoryId limit 4")->result_array();
            $subcategory=$this->Common->select_data('product_sub_category','*',array('id'=>$product_info[0]['subcategory']));
            $availability = $this->db->query("select id,size,quantity,price,product_id,variation_id FROM availability where product_id = $id")->result_array();
            $data['is_package'] = $subcategory[0]['is_package'];
            if(!empty($availability)){
            foreach ($availability as $key => $value) {
                $availability[$key]['variation_id'] = $this->db->query("select DISTINCT variation_id FROM availability where product_id = $id")->result_array();
            }
           // var_dump($availability);
                $data['product_details'] = $availability;
                if($product_info[0]['category']==19 || $product_info[0]['category']==20 || $product_info[0]['category']==21 || $subcategory[0]['is_package']=='Y'){
                    // var_dump($data['product_details'][0]['variation_id']);die();
                    $vid = $availability[0]['variation_id'][0]['variation_id'];
                    $pd_id = $availability[0]['product_id'];
                    $data['type'] = $this->db->query("select * FROM availability where product_id = $pd_id AND variation_id = $vid order by price asc,size asc")->result_array();
                    
                }
            }
            $this->load->view('product',$data);
        }
        
    public function select_type($id=0,$pd_id=0){
            $data= $this->db->query("select * FROM availability where product_id = $pd_id AND variation_id = $id order by price desc,size desc")->result_array();
            echo json_encode($data);
        }
        
    public function admin_products(){
            
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($this->input->method()=='post')
        {
            echo($_POST->image1); exit();
            $this->form_validation->set_rules('name','Category Name','required');
            $this->form_validation->set_rules('category','Sub Category Name','required');
            if($this->form_validation->run()=='true')
            {
                    $resp=$this->Common->insert_data('product_sub_category',$_POST);
                    if($resp)
                            $arr=array('status'=>'true','message'=>'Sub Category Successfully Inserted','reload'=>base_url().'products/subcategory');
                    else 
                            $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                    echo json_encode($arr);
            }
            else 
            {
                    print_r(validation_errors());
            }
        }else{
            $data['page_title']="Products";
            $data['all_category']=$this->Common->select_data('product_category','*');
            $data['all_sub_category']=$this->Common->select_data('product_sub_category','*');
            $sql="SELECT products.id,products.name,products.e_name,products.image1,products.suitable,products.taste,products.coffee_drink,products.coffee_taste,products.body,products.acid,products.aftertaste,products.body_rating,products.acid_rating,products.aftertaste_rating,products.product_detail,products.status,products.created_at,products.description FROM `products`";
            $data['all_data'] = $this->Common->direct_sql_query($sql);
            $product_ids=array();
            $product_sub_category_name = array();
            $product_category_name = array();
            foreach($data['all_data'] as $key => $val){
                $pjc=$this->db->query("SELECT * FROM `product_join_category` where product_id =".$val['id']." AND is_delete = 0")->result_array();
                if(!empty($pjc)){
                    foreach ($pjc as $value) {
                        $subcategory =$this->db->query("select * from product_sub_category where id=".$value['subcategory_id'])->row();
                        $category =$this->db->query("select * from product_category where id=".$value['category_id'])->row();
                        if(!empty($subcategory)){
                                
                            if(in_array($value['product_id'], $product_ids)){
                                array_push($product_sub_category_name,  $subcategory->name);
                            }else{
                                array_push($product_sub_category_name, $subcategory->name);
                            }
                        $data['all_data'][$key]['product_sub_category_name'] = implode(',', $product_sub_category_name);
                        }
                        if(!empty($category)){
                                $data['all_data'][$key]['product_category_name'] = $category->name;
                        }
                            array_push($product_ids, $val['id']);   
                    }
                    $product_sub_category_name = array();
                }
            }
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/products',$data);
            $this->load->view('admin/includes/footer');
        }
    }

    public function product_type()
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
            if($this->input->method()=='post')
            {
                $this->form_validation->set_rules('type','name','required');
                // $this->form_validation->set_rules('product_id','product','required');
                if($this->form_validation->run()=='true')
                {
                        $resp=$this->Common->insert_data('product_details',$_POST);
                        if($resp)
                                $arr=array('status'=>'true','message'=>'Sub Category Successfully Inserted','reload'=>base_url().'products/product_type');
                        else 
                                $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                        echo json_encode($arr);
                }
                else 
                {
                        print_r(validation_errors());
                }
            }else{
                $data['page_title']="Product Type";
                $data['all_product'] = $this->Common->select_data('products','*');

                $data['all_data'] = $this->Common->join_mult_table('product_details',
                 ['products'],
                 ['product_details.product_id=products.id'],[],
                $projection = 'product_details.*,products.name as product_name', $distinct = '', $limit = '', $offset = 0,$join_type='inner');
                
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/product_type',$data);
                $this->load->view('admin/includes/footer');
            }
    }

    public function delete_type($id)
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        $res=$this->Common->delete_data('product_details',array('id'=>$id));
        if($res)
        {
            redirect(base_url().'products/product_type');
        }
    }



    public function edit_type($id)
    {   
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        if($this->input->method()=='post')
        {
            $res=$this->Common->update_data('product_details',$_POST,array('id'=>$id));
            if($res)
                $arr=array('status'=>'true','message'=>'Product Type Updated','reload'=>base_url().'products/product_type');
            else 
                $arr=array('status'=>'false','message'=>'product Type Not Updated');
            echo json_encode($arr);
        }
        else 
        {
            $data['product_info']=$this->Common->select_data('product_details','*',array('id'=>$id));
            $data['all_product']=$this->Common->select_data('products','*');
           
            $data['page_title']="Edit Product Type";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_type',$data);
            $this->load->view('admin/includes/footer');
        }
    }

    public function product_availability()
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
            if($this->input->method()=='post'){
                
                $this->form_validation->set_rules('size','size','required');
                if($this->form_validation->run()=='true')
                {
                        $resp=$this->Common->insert_data('availability',$_POST);
                        if($resp)
                                $arr=array('status'=>'true','message'=>'Availability Successfully Inserted','reload'=>base_url().'products/product_availability');
                        else 
                                $arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
                        echo json_encode($arr);
                }
                else 
                {
                        print_r(validation_errors());
                }
            }else{
                $data['page_title']="Product Variation";
                $data['product_variation']=$this->Common->select_data('product_variation','*');
                $data['all_data'] = $this->Common->join_mult_table('availability',
                 ['product_variation','products'],['availability.variation_id=product_variation.id','availability.product_id = products.id'],[],$projection = 'availability.*,product_variation.name as product_type,products.name as product_name,products.image1', $distinct = '', $limit = '', $offset = 0,$join_type='left');
                $data['all_product']=$this->Common->select_data('products','*');
                $this->load->view('admin/includes/header',$data);
                $this->load->view('admin/product_availability',$data);
                $this->load->view('admin/includes/footer');
            }
    }

    public function delete_availability($id)
    {
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        $res=$this->Common->delete_data('availability',array('id'=>$id));
        if($res)
        {
            redirect(base_url().'products/product_availability');
        }
    }



    public function edit_availability($id)
    {   
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
        if($this->input->method()=='post')
        {
            $res=$this->Common->update_data('availability',$_POST,array('id'=>$id));
            if($res)
                $arr=array('status'=>'true','message'=>'Product availability Updated','reload'=>base_url().'products/product_availability');
            else 
                $arr=array('status'=>'false','message'=>'product availability Not Updated');
            echo json_encode($arr);
        }else{
            $data['availability_info']=$this->Common->select_data('availability','*',array('id'=>$id));
            $data['product_variation']=$this->Common->select_data('product_variation','*');
            $data['all_product']=$this->Common->select_data('products','*');
            $data['page_title']="Edit Product Type availability";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_availability',$data);
            $this->load->view('admin/includes/footer');
        }
    }

    public function variation()
    { 
        $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		if($this->input->method()=='post')
		{
			
                                $resp=$this->Common->insert_data('product_variation',$_POST);
                                
				if($resp)
					$arr=array('status'=>'true','message'=>'Variation Successfully Inserted','reload'=>base_url().'products/variation');
				else 
					$arr=array('status'=>'false','message'=>'Same Technical Problum Please Try Again');
				echo json_encode($arr);		
		}
		else 
		{
			$data['page_title']="Product Type";
			$data['data']=$this->Common->select_data('product_variation','*');
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/variation',$data);
			$this->load->view('admin/includes/footer');
		}
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
                                $arr=array('status'=>'true','message'=>'Product Variation Successfully Inserted','reload'=>base_url().'products/add_variation');
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

    public function delete_product_variation($id)
	{
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		$res=$this->Common->delete_data('product_variation',array('id'=>$id));
		if($res)
		{
			redirect(base_url().'products/variation');
		}
	}
	public function edit_product_variation($id)
	{
            $session_data=$this->session->userdata('user');
            if($session_data->user_type != 3)
            {
                    redirect(base_url().'login');exit;
            }
		if($this->input->method()=='post')
		{
			$res=$this->Common->update_data('product_variation',$_POST,array('id'=>$id));
			if($res)
				$arr=array('status'=>'true','message'=>'Variation Successfully Updated','reload'=>base_url().'products/variation');
			else 
				$arr=array('status'=>'false','message'=>'Variation Not Updated');
			echo json_encode($arr);
		}
		else 
		{
			$data['data']=$this->Common->select_data('product_variation','name,id',array('id'=>$id));
			$data['page_title']="Edit Variation";
			$this->load->view('admin/includes/header',$data);
			$this->load->view('admin/edit_variation',$data);
			$this->load->view('admin/includes/footer');
		}
	}
    public function subcategory_option(){

        $categoryId = $_POST['categoryId'];
        // echo "<option>Select Category</option>";
        $res= $this->db->query("select * from product_sub_category WHERE category = $categoryId order by id desc")->result_array(); 
        $html = '';
        $html1 = '';
        $is_package ='';
        foreach ($res as $data) {
            if($data['is_package'] == 'Y'){
                $is_package = '(P)';
            }if($data['is_country'] == 'Y'){
                $is_package = '(C)';
            }
            $html .= "<option value='".$data['id']."'>".$data['name'].$is_package."  </option>";
            $html1 .= '<div class="col-sm-6"><input type="checkbox" value="'.$data['id'].'" id="show_sub_category'.$data['id'].'" name="show_sub_category'.$data['id'].'"><label for="show_sub_category'.$data['id'].'">'.$data['name'].' '.$is_package.'</label></div>';
        $is_package ='';
        }
            echo json_encode(array('html'=>$html,'html1'=>$html1));
            
    }
    public function subcategory_option1(){

        $categoryId = $_POST['categoryId'];
        $html = '';
        $html1 = '';
        $is_package ='';
        $html1 .= '<div class="col-sm-6"><input type="checkbox" class="show_sub_category" value="0" id="show_sub_category0" name="show_sub_category[]" onclick="select_subcat(this)"><label for="show_sub_category0">All subcategory</label></div>';
        if(!strpos($categoryId, ',')){
        $res= $this->db->query("select * from product_sub_category WHERE category = $categoryId order by id desc")->result_array(); 
            foreach ($res as $data) {
                if($data['is_package'] == 'Y'){
                    $is_package = '(P)';
                }if($data['is_country'] == 'Y'){
                    $is_package = '(C)';
                }
                $html .= "<option value='".$data['id']."'>".$data['name'].$is_package."  </option>";
                $html1 .= '<div class="col-sm-6"><input type="checkbox" class="show_sub_category" value="'.$data['id'].'" id="show_sub_category'.$data['id'].'" name="show_sub_category[]"><label for="show_sub_category'.$data['id'].'">'.$data['name'].' '.$is_package.'</label></div>';
            $is_package ='';
            }
        }
        echo json_encode(array('html'=>$html,'html1'=>$html1));
            
    }
    public function valid_slug(){
        $e_name = $_POST['e_name'];
        $table = $_POST['table'];
        $res= $this->db->query("select * from ".$table." WHERE e_name = '$e_name'")->row(); 
        if(!empty($res)){
            echo 'ok';
        }else{
            echo 'NotOk';
        }
    }
    public function valid_variation(){
        $product_id = $_POST['product_id'];
        $variation_id = $_POST['variation_id'];
        $size = $_POST['size'];
        $res= $this->db->query("select * from availability WHERE product_id = $product_id AND variation_id = $variation_id AND size = '$size'")->row(); 
        if(!empty($res)){
            echo 'ok';
        }else{
            echo 'NotOk';
        }
    }
    public function subscription_product(){
        $id = $_POST['product_id'];
        $product_info = $this->Common->select_data('products','*',array('id'=>$id));
                $data['product_details']= array();
        $data['product'] = $product_info;
        $data['product_list']=$this->Common->select_data('products','*',array('category'=>$product_info[0]['category']),'4','0');
        $availability = $this->db->query("select id,size,quantity,price,product_id FROM availability where product_id = $id")->result_array();
        if(!empty($availability)){
        foreach ($availability as $key => $value) {
            $availability[$key]['variation_id'] = $this->db->query("select DISTINCT variation_id FROM availability where product_id = $id")->result_array();
        }
       // var_dump($availability);
            $data['product_details'] = $availability;
            if($product_info[0]['category']==19){
                $id = $data['product_details'][0]['variation_id'];
                $pd_id = $data['product_details'][0]['product_id'];
                $data['type'] = $this->Common->select_data('availability','*',array('variation_id'=>$id,'product_id'=>$pd_id));
            }
        }
            $html = $this->load->view('subscription_product',$data,true);
            echo json_encode(array('view_html'=>trim($html)));
        }

}
?>
