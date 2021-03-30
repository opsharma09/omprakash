<?php 
class Order extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');

        
    }
	public function index($param='',$param2=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        $data['all_data']=$this->Common->select_data('user_order','*',array());
        
        $data['page_title']="Order List";
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/order',$data);
        $this->load->view('admin/includes/footer');
        
    }
    public function update_status($param=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($param != ''){
            $order=$this->db->query("SELECT * FROM user_order where id = $param")->row();
            $status = $order->status;
            if($status=='REQUESTED'){
            	$status = 'CONFIRM';
            }else{
            	$status = 'REQUESTED';
            }
        	$data = array (
            'status'=>$status
            );
        	$resp=$this->Common->update('user_order',$data,array('id'=>$param));
            redirect(base_url('order'));
            
        }
    }
    public function save_order(){
        $session_data=$this->session->userdata('user');
        // if($session_data->user_type != 3)
        // {
        //         redirect(base_url().'login');exit;
        // }
        $body='';
        $subject='';
        $user_id = $session_data->user_id;
        $add_to_cart=$this->db->query("SELECT * FROM add_to_cart where user_id = $user_id")->result();
        $event_booking =$this->db->query("SELECT * FROM event_booking where user_id = $user_id")->result();
        $order_array = array(
            'user_id'=>$session_data->user_id,
            'txn_no'=>$_POST['detail_id'],
            'customer_name'=>$session_data->first_name.' '.$session_data->last_name,
            'contact_no'=>$session_data->phone_no,
            'coupon_code'=>'',
            'coupon_discount'=>0,
            'delivery_charges'=>0,
            'order_amount'=>$_POST['amount'],
            'total_amount'=>$_POST['amount'],
            'payment_method'=>'online',
            'instruction'=>'',
            'status'=>'REQUESTED',
            'added_on'=>date('Y-m-d H:i:s'),
        );
        $this->Common->insert_data('orders',$order_array);
        $orderid = $this->db->insert_id();
        if(!empty($add_to_cart)){
            foreach ($add_to_cart as $key => $value) {
                $arr = array(
                    'order_id'=>$orderid,
                    'product_id'=>$value->availability_details_id,
                    'qty'=>$value->qty,
                    'price'=>$value->price,
                    'net_price'=>$value->price,
                );
                if($value->is_subscription == 1){
                    $arr['is_subscription'] = 1;
                    $arr['weak_schedule'] = $value->weak_schedule;
                    $arr['start_date'] = $value->start_date;
                }
                $arr['added_on']=date('Y-m-d H:i:s');
                // var_dump($arr);
                $this->Common->insert_data('order_items',$arr);
            }
        $body =  '<html><head><title>HTML email</title></head><body>
                    <p>Sie haben erfolgreich bei der Hannoversche Kaffeemanufaktur bestellt. Your ORDER ID is '.$orderid.'.</p>
                    <p>Ihre Hannoversche Kaffeemanufaktur</p></body></html>';
        $subject = "Bitte bestätigen Sie Ihre Bestellung bei der Hannoversche Kaffeemanufaktur";
        }
        if(!empty($event_booking)){
            foreach ($event_booking as $key => $value) {
                $booking_array = array(
                    'order_id'=>$orderid,
                    'event_id'=>$value->event_id,
                    'qty'=>0,
                    'price'=>$value->price,
                    'net_price'=>$value->price,
                    'is_event'=>1,
                    'added_on'=>date('Y-m-d H:i:s')
                );
                $this->Common->insert_data('order_items',$booking_array);
            }
        $body =  '<html><head><title>HTML email</title></head><body>
                    <p>Sie haben erfolgreich bei der Hannoversche Kaffeemanufaktur bestellt. Your ORDER ID is '.$orderid.'.</p><p>Ihre Hannoversche Kaffeemanufaktur</p></body></html>';
        $subject = "Bitte bestätigen Sie Ihre Bestellung bei der Hannoversche Kaffeemanufaktur";
        }
       
        $this->Common->delete_data('event_booking',array('user_id'=>$user_id));
        $this->Common->delete_data('add_to_cart',array('user_id'=>$user_id));
        $status = $this->send_smtp_mail($body,$subject,$session_data->email_id, 'test001.enthuons@gmail.com');
        echo json_encode('ok');
        
    }
    public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
        if($from == NULL){
            $from = 'test001.enthuons@gmail.com';
        }
        $htmlContent = $msg;
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test001.enthuons@gmail.com';
        $mail->Password = 'ZeZ0&B&8VtT^rYdlx2D0z3ke';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        
        $mail->setFrom($from, 'test001.enthuons@gmail.com');
        $mail->addReplyTo($from, 'test001.enthuons@gmail.com');
        
        // Add a recipient
        $mail->addAddress($to);
        
        // Add cc or bcc 
        // $mail->addcc('cc@example.com');
        // $mail->addbcc('bcc@example.com');
        
        // Email subject
        $mail->Subject = $sub;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = $htmlContent;
        $mail->Body = $mailContent;
        
        // Send email
        if($mail->send()){
            return;
        }else{
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        
    }
    public function order_detail($param=''){
        $session_data=$this->session->userdata('user');
        // if($session_data->user_type != 3)
        // {
        //         redirect(base_url().'login');exit;
        // }
        if($param != ''){
            $order=$this->db->query("SELECT * FROM orders where id = $param")->row();
            $res['order'] = $order;
            // $order_item = $this->db->query("SELECT * FROM order_items where order_id = $order->id")->result();
            if(!empty($order)){
                $res['cart'] = $this->Common->join_mult_table('order_items',
                ['availability','products','product_variation'], 
                ['order_items.product_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                ["order_items.order_id" => $order->id], 
                'order_items.*,order_items.qty as myQuan,order_items.id as myitem_id,availability.*, products.*,product_variation.name as type,order_items.status as otstatus');
                $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
                $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
            }else{
                redirect('login');
            }
           
            $this->load->view('order_details',$res);
        }
    }

    public function cancel_order(){
        $session_data=$this->session->userdata('user');
        $id = $_POST['id'];
        $order=$this->db->query("SELECT * FROM order_items where id = $id")->row();
        $status = 'CANCELLED';
        $data = array (
        'status'=>$status
        );
        $resp=$this->Common->update('order_items',$data,array('id'=>$id));
        $body =  '<html><head><title>HTML email</title></head><body>
                    <p>Hello'.$session_data->first_name.' '.$session_data->last_name.'</p>
                    <p>Wir werden Sie bezüglich Ihrer Stornierungsanfrage 123 kontaktieren.Ihr Produkt wurde erfolgreich storniert</p>
                    <p>Ihre Hannoversche Kaffeemanufaktur</p></body></html>';
        $subject = "Product Cancallation";
        $status = $this->send_smtp_mail($body,$subject,$session_data->email_id, 'test001.enthuons@gmail.com');
        echo 'success';
    }
}
?>