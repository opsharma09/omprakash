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
			$res=$this->Common->update_data('product_sub_category',$_POST,array('id'=>$id));
			if($res)
				$arr=array('status'=>'true','message'=>'Sub Category Successfully Updated','reload'=>base_url().'products/subcategory');
			else 
				$arr=array('status'=>'false','message'=>'Sub Category Not Updated');
			echo json_encode($arr);
		}
		else 
		{
			$data['category_info']=$this->Common->select_data('product_sub_category','name,id',array('id'=>$id));
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

                $target_file1 = $target_dir . time().basename($_FILES["image1"]["name"]);
                $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
                $imgName1 = time().basename($_FILES["image1"]["name"]);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                
                $this->form_validation->set_rules('name','Category Name','required');
                $this->form_validation->set_rules('category','Sub Category Name','required');
                
                if($this->form_validation->run()=='true')
                {
                        $data = array (
                                'name'=>$_POST['name'],
                                'description'=>$_POST['description'],
                                'qty'=>$_POST['qty'],
                                // 'price'=>$_POST['price'],
                                'subcategory'=>$_POST['subcategory'],
                                'category'=>$_POST['category'],
                                'created_by'=>$session_data->user_id,
                                'image'=>"public/images/product/".$imgName,
                                'image1'=>"public/images/product/".$imgName1,
                                'price1'=>$_POST['price1'],
                                'price2'=>$_POST['price2'],
                                'price3'=>$_POST['price3'],
                                'body'=>$_POST['body']==''?'':implode(', ', $_POST['body']),
                                'acid'=>$_POST['body']==''?'':implode(', ', $_POST['body']),
                                'aftertaste'=>$_POST['body']==''?'':implode(', ', $_POST['body']),

                                );
                        $resp=$this->Common->insert_data('products',$data);
                        $insert_id = $this->db->insert_id();
                        $variations = $data['all_category']=$this->Common->select_data('product_variation','*');

                        foreach($variations as $data)
                        {
                                $id = $data['id'];
                                // echo $name;
                                if($_POST[$id]==$id)
                                { 
                                        $data = array (
                                                'product_id'=>$insert_id,
                                                'variation_id'=>$id,
                                                'type'=>$data['name'],
                                        );
                                        $inserdata=$this->Common->insert_data('product_details',$data);
                                }   
                      
                        }

                        if($resp)
                                $arr=array('status'=>'true','message'=>'Product Successfully Inserted','reload'=>base_url().'products/admin_products');
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
                
                $data['all_data'] = $this->Common->join_mult_table('product_sub_category',
                 ['product_category','product_under_category'],
                 ['product_sub_category.category=product_category.id','product_category.category=product_under_category.id'],[],
                $projection = 'product_sub_category.*,product_category.name as product_category_name,product_under_category.name as parent_name', $distinct = '', $limit = '', $offset = 0,$join_type='inner');
                $data['all_category']=$this->Common->select_data('product_category','*');
                $data['all_sub_category']=$this->Common->select_data('product_sub_category','*');


                $data['product_details']=$this->Common->select_data('product_variation','*');
                // print_r($data['product_details']);
                // exit();
        //     foreach($data['product_details'] as $key=>$mydata){
        //         $data['product_details'][$key]['availability']=$this->Common->select_data('availability','*',array('product_details_id'=>$mydata['id']));
        //     }

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
                if($_FILES["image"]["name"]!= '')
                {
                $target_dir = "public/images/product/";
                $target_file = $target_dir .basename($_FILES["image"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $imgName = basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                $target_file1 = $target_dir .basename($_FILES["image1"]["name"]);
                $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
                $imgName1 = basename($_FILES["image1"]["name"]);
                $imgName="public/images/product/".$imgName;
                $imgName1="public/images/product/".$imgName1;
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                }
                else{
                        $imgNamearr = $this->Common->select_data('products','image',array('id'=>$id));
                        $imgName1arr = $this->Common->select_data('products','image1',array('id'=>$id));
                        $imgName = $imgNamearr[0]['image'];
                        $imgName1 = $imgName1arr[0]['image1'];
                        // print_r($imgNamearr);
                }
                $data = array (
                        'name'=>$_POST['name'],
                        'description'=>$_POST['description'],
                        'qty'=>$_POST['qty'],
                        'price'=>$_POST['price'],
                        'subcategory'=>$_POST['subcategory'],
                        'category'=>$_POST['category'],
                        'created_by'=>$session_data->user_id,
                        'image'=>$imgName,
                        'image1'=>$imgName1,
                        'price1'=>$_POST['price1'],
                        'price2'=>$_POST['price2'],
                        'price3'=>$_POST['price3'],
                        'body'=>$_POST['body']==''?'':implode(', ', $_POST['body']),
                        'acid'=>$_POST['acid']==''?'':implode(', ', $_POST['acid']),
                        'aftertaste'=>$_POST['aftertaste']==''?'':implode(', ', $_POST['aftertaste']),

                );
                // print_r($data); exit();
                $res=$this->Common->update_data('products',$data,array('id'=>$id));

                
                // $variations = $data['all_category']=$this->Common->select_data('product_variation','*');

                //         foreach($variations as $data)
                //         {
                //                 $id = $data['id'];
                //                 // echo $id;
                //                 echo $_POST[$id];
                //                 exit();
                //                 if($_POST[$id]==$id)
                //                 { 
                //                         $data = array (
                //                                 'product_id'=>array('id'=>$id),
                //                                 'variation_id'=>$id,
                //                                 'type'=>$data['name'],
                //                         );
                //                         $inserdata=$this->Common->insert_data('product_details',$data);
                //                 }   
                      
                //         }
                
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
            $data['product_variation']=$this->Common->select_data('product_variation','*');
            $data['product_details']=$this->Common->select_data('product_details','*',array('product_id'=>$id));
            
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/edit_product',$data);
            $this->load->view('admin/includes/footer');
        }
    }



    public function product($id){
            $data['product']=$this->Common->select_data('products','*',array('id'=>$id));
            $data['product_details']=$this->Common->select_data('product_details','id,type',array('product_id'=>$id));
        //     foreach($data['product_details'] as $key=>$mydata){
        //         $data['product_details'][$key]['availability']=$this->Common->select_data('availability','*',array('product_details_id'=>$mydata['id']));
        //     }
            $this->load->view('product',$data);
        }
        
    public function select_type($id){
            $data= $this->Common->select_data('availability','*',array('product_details_id'=>$id));
            echo json_encode($data);
        }
        
        public function admin_products()
	{
                
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
                
                $sql="SELECT products.*,product_category.name as product_category_name,product_under_category.name as product_under_category_name,product_sub_category.name as product_sub_category_name FROM products INNER JOIN product_category INNER JOIN product_under_category INNER JOIN product_sub_category where products.category=product_category.id AND product_category.category=product_under_category.id AND products.subcategory=product_sub_category.id";
                $data['all_data'] = $this->Common->direct_sql_query($sql);
                foreach($data['all_data'] as $key=>$val){
                    $sql1="select * from product_details where product_id=".$val['id'];
                    $res= $this->Common->direct_sql_query($sql1);
                    foreach ($res as $value){
                        $data['all_data'][$key]['product_details'][$value['id']]=$value;
                    }
                    foreach ($res as $value){
                        $sql2="select * from availability where product_details_id=".$value['id'];
                        $data['all_data'][$key]['product_details'][$value['id']]['avail']= $this->Common->direct_sql_query($sql2);
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
            if($this->input->method()=='post')
            {
                
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
                $data['page_title']="Product availability";
                $data['all_type'] = $this->Common->join_mult_table('product_details',
                 ['products'],
                 ['product_details.product_id=products.id'],[],
                $projection = 'product_details.*,products.name as product_name', $distinct = '', $limit = '', $offset = 0,$join_type='inner');



                $data['all_data'] = $this->Common->join_mult_table('availability',
                 ['product_details'],
                 ['availability.product_details_id=product_details.id'],[],
                $projection = 'availability.*,product_details.type as product_type', $distinct = '', $limit = '', $offset = 0,$join_type='inner');
                
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
        }
        else 
        {
            $data['availability_info']=$this->Common->select_data('availability','*',array('id'=>$id));
            
            $data['all_type'] = $this->Common->join_mult_table('product_details',
                 ['products'],
                 ['product_details.product_id=products.id'],[],
                $projection = 'product_details.*,products.name as product_name', $distinct = '', $limit = '', $offset = 0,$join_type='inner');


           
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
			$data['page_title']="Product Variations";
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


}
?>