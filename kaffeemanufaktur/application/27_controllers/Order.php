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
	public function index($param=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        
            $data['all_data']=$this->db->query("SELECT * FROM `orders` ORDER BY `id` DESC")->result_array();
            $data['page_title']="Order List";
            $data['flag']='list';
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/order',$data);
            $this->load->view('admin/includes/footer');
        
        
    }
    public function order_details($param=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($param !=''){
            $data['event_cart'] = $this->Common->join_mult_table('order_items',
            ['event_master','event_type'], 
            ['order_items.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["order_items.order_id" => $param,"order_items.is_event" => 1], 
            'order_items.*,event_type.name as type,order_items.price as acprice,event_master.start_date,event_master.start_time,event_master.price as aprice,order_items.person as person');
            
            $data['all_data'] = $this->Common->join_mult_table('order_items',
                ['availability','products','product_variation'], 
                ['order_items.product_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                ["order_items.order_id" => $param], 
                'order_items.*,order_items.qty as myQuan,order_items.id as myitem_id,availability.*, products.*,product_variation.name as type,order_items.status as otstatus');
                $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
                $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
            $data['flag']='detail';
            $data['page_title']="Order List";
            $this->load->view('admin/includes/header',$data);
            $this->load->view('admin/order',$data);
            $this->load->view('admin/includes/footer');
        }  
    }
    public function update_status($param='',$param1=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($param != ''){
           
            $status = $param1;
        	$data = array (
            'status'=>$status
            );
        	$resp=$this->Common->update('user_order',$data,array('id'=>$param));
            redirect(base_url('order'));
            
        }
    } 
    public function update_status1($param='',$param1=''){
        $session_data=$this->session->userdata('user');
        if($session_data->user_type != 3)
        {
                redirect(base_url().'login');exit;
        }
        if($param != ''){
           
            $status = $param1;
            $data = array (
            'status'=>$status
            );
            $resp=$this->Common->update('order_items',$data,array('id'=>$param));
            redirect(base_url('order/order_details/'.$param));
            
        }
    }
        public function save_subscribe(){
        $session_data=$this->session->userdata('user');
        // if($session_data->user_type != 3)
        // {
        //         redirect(base_url().'login');exit;
        // }
        $event_type ='';
        $user_id = $session_data->user_id;
        $add_to_cart=$this->db->query("SELECT * FROM add_to_cart where user_id = $user_id AND is_subscription =1")->result();
        $user_bill_address = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row();
        $user_del_address = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row();
        $event_booking =$this->db->query("SELECT * FROM event_booking where user_id = $user_id AND is_booked = 0")->result();
        $order_array = array(
            'user_id'=>$session_data->user_id,
            'txn_no'=>$_POST['subscription_id'],
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
        $res = $this->Common->insert_data('orders',$order_array);
        $orderid = $this->db->insert_id();
        $new_order =$this->db->query("SELECT * FROM orders where id = $orderid")->row();
        $body= array();
        $subject= array();
        $body['admin'] =  '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Email Template</title>
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
                    </head>

                    <body style="font-size: 13px; max-width: 600px; margin: auto; color: #000; font-family: \'poppins\',sans-serif">
                        <table style="width: 100%;padding: 40px;">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <div style="display: inline-table; width: 33%; vertical-align:middle; text-align: center;">
                                            <img src="'.base_url().'public/images/email-logo.jpg" style="margin: 0 0 80px" alt="">
                                        </div>
                                        <div style="display: inline-table; width: 66%; vertical-align:middle;">
                                            <h4 style="font-size: 23px;line-height: 32px; font-family: \'Times new roman\', sans-serif;margin:0">Order Confirmation</h4>
                                            <h5 style="margin: auto 0 80px; font-size: 21px; font-weight: 500;line-height: 32px;">Order # <span style="color: #0572c6">'.$new_order->txn_no.'</span></h5>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Hello admin,</h2>
                                         <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Thank you for order. Duo Reges: constructio interrete. Itaque hoc frequenter dici solet a vobis, non intellegere nos, quam dicat Epicurus voluptatem. Nullus est igitur cuiusquam dies natalis. Aliter homines, aliter philosophos loqui putas oportere? Quae cum praeponunt, ut sit aliqua rerum selectio, naturam videntur sequ</p>
                                        <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Your order will sent to:</p>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->first_name.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->street.','.$user_del_address->additional_address.', '.$user_del_address->pincode.', '.$user_del_address->place.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0 0 16px;">India</h3><a href="'.base_url().'order" style=" display: inline-block;padding: 18px 29px;color: #fff;background: #940000;text-decoration: none;text-transform: uppercase;font-size: 18px;margin-bottom: 38px;">View or manage order</a>
                                        <h5 style="font-size: 25px; line-height: 1;font-family: \'times new roman\',sans-serif; margin: 0 0 1rem; color: #940000;">Order Summary</h5>
                                        <p style="font-weight: 600; font-size: 15px; line-height: 1.7; color: #1b1b1b; margin: 0 0 10px;">Order # <span style="color: #0572c6;">'.$new_order->txn_no.'</span></p>
                                        <p style="font-size: 15px; line-height: 1.7; color: #615f5f; margin: 0 0 1.5rem">Place on '.date('l', strtotime($new_order->added_on)).', '.date('F', strtotime($new_order->added_on)).' '.date('d', strtotime($new_order->added_on)).', '.date('Y', strtotime($new_order->added_on)).'</p>
                                    </td>
                                </tr>';
        $body['user'] =  '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Email Template</title>
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
                    </head>

                    <body style="font-size: 13px; max-width: 600px; margin: auto; color: #000; font-family: \'poppins\',sans-serif">
                        <table style="width: 100%;padding: 40px;">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <div style="display: inline-table; width: 33%; vertical-align:middle; text-align: center;">
                                            <img src="'.base_url().'public/images/email-logo.jpg" style="margin: 0 0 80px" alt="">
                                        </div>
                                        <div style="display: inline-table; width: 66%; vertical-align:middle;">
                                            <h4 style="font-size: 23px;line-height: 32px; font-family: \'Times new roman\', sans-serif;margin:0">Order Confirmation</h4>
                                            <h5 style="margin: auto 0 80px; font-size: 21px; font-weight: 500;line-height: 32px;">Order # <span style="color: #0572c6">'.$new_order->txn_no.'</span></h5>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Hello '.$session_data->first_name.',</h2>
                                         <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Thank you for order. Duo Reges: constructio interrete. Itaque hoc frequenter dici solet a vobis, non intellegere nos, quam dicat Epicurus voluptatem. Nullus est igitur cuiusquam dies natalis. Aliter homines, aliter philosophos loqui putas oportere? Quae cum praeponunt, ut sit aliqua rerum selectio, naturam videntur sequ</p>
                                        <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Your order will sent to:</p>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->first_name.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->street.','.$user_del_address->additional_address.', '.$user_del_address->pincode.', '.$user_del_address->place.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0 0 16px;">India</h3><a href="'.base_url().'mein-account/orders" style=" display: inline-block;padding: 18px 29px;color: #fff;background: #940000;text-decoration: none;text-transform: uppercase;font-size: 18px;margin-bottom: 38px;">View or manage order</a>
                                        <h5 style="font-size: 25px; line-height: 1;font-family: \'times new roman\',sans-serif; margin: 0 0 1rem; color: #940000;">Order Summary</h5>
                                        <p style="font-weight: 600; font-size: 15px; line-height: 1.7; color: #1b1b1b; margin: 0 0 10px;">Order # <span style="color: #0572c6;">'.$new_order->txn_no.'</span></p>
                                        <p style="font-size: 15px; line-height: 1.7; color: #615f5f; margin: 0 0 1.5rem">Place on '.date('l', strtotime($new_order->added_on)).', '.date('F', strtotime($new_order->added_on)).' '.date('d', strtotime($new_order->added_on)).', '.date('Y', strtotime($new_order->added_on)).'</p>
                                    </td>
                                </tr>';            
        if(!empty($add_to_cart)){
            foreach ($add_to_cart as $key => $value) {
                $array = array(
                    'order_id'=>$orderid,
                    'product_id'=>$value->availability_details_id,
                    'qty'=>$value->qty,
                    'price'=>$value->price,
                    'net_price'=>$value->qty*$value->price,
                );
                if($value->is_subscription == 1){
                    $array['is_subscription'] = 1;
                    $array['weak_schedule'] = $value->weak_schedule;
                    $array['start_date'] = date('Y-m-d');
                    $array['added_on']=date('Y-m-d H:i:s');
                    $this->Common->insert_data('order_items',$array);
                }
            }
        $this->Common->delete_data('add_to_cart',array('user_id'=>$user_id,'is_subscription' == 1));
        
        }
        $body['user'] .= '<tr>
                    <td style="width: 57%">
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">Item subtotal:</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">Shipping and Handeling:</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">Order Total</h2>
                    </td>
                    <td>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">RS 0.00</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h2>
                    </td>
                </tr>
            </tbody>
            </table></body></html>';
        $body['admin'] .= '<tr>
                    <td style="width: 57%">
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">Item subtotal:</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">Shipping and Handeling:</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">Order Total</h2>
                    </td>
                    <td>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">RS 0.00</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h2>
                    </td>
                </tr>
            </tbody>
            </table></body></html>';
        $subject['admin'] = "Neue Buchungsanfrage";            
        $subject['user'] = "Vielen Dank für die Buchung einer Vergnügungsreise mit Hannoversche Kaffeemanufaktur";
        $participents = array();
        $participents['admin']='rohit@enthuons.com';
        $participents['user']=$session_data->email_id;
        $this->send_smtp_mail($body,$subject,$participents, 'test001.enthuons@gmail.com',$orderid);
       
        
        echo json_encode(array('orderid'=>$orderid));
        
    }
    public function save_order(){
        $session_data=$this->session->userdata('user');
        // if($session_data->user_type != 3)
        // {
        //         redirect(base_url().'login');exit;
        // }
        $event_type ='';
        $user_id = $session_data->user_id;
        $add_to_cart=$this->db->query("SELECT * FROM add_to_cart where user_id = $user_id")->result();
        $user_bill_address = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row();
        $user_del_address = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row();
        $event_booking =$this->db->query("SELECT * FROM event_booking where user_id = $user_id AND is_booked = 0")->result();
        $order_array = array(
            'user_id'=>$session_data->user_id,
            'txn_no'=>$_POST['detail_id'],
            'customer_name'=>$session_data->first_name.' '.$session_data->last_name,
            'contact_no'=>$session_data->phone_no,
            'coupon_code'=>$_POST['coupon_code'],
            'coupon_discount'=>$_POST['coupon_discount'],
            'delivery_charges'=>0,
            'order_amount'=>$_POST['amount'],
            'total_amount'=>$_POST['amount'],
            'payment_method'=>'online',
            'instruction'=>'',
            'status'=>'REQUESTED',
            'added_on'=>date('Y-m-d H:i:s'),
        );
        $res = $this->Common->insert_data('orders',$order_array);
        $orderid = $this->db->insert_id();
        $new_order =$this->db->query("SELECT * FROM orders where id = $orderid")->row();
        $body= array();
        $subject= array();
        $body['admin'] =  '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Email Template</title>
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
                    </head>

                    <body style="font-size: 13px; max-width: 600px; margin: auto; color: #000; font-family: \'poppins\',sans-serif">
                        <table style="width: 100%;padding: 40px;">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <div style="display: inline-table; width: 33%; vertical-align:middle; text-align: center;">
                                            <img src="'.base_url().'public/images/email-logo.jpg" style="margin: 0 0 80px" alt="">
                                        </div>
                                        <div style="display: inline-table; width: 66%; vertical-align:middle;">
                                            <h4 style="font-size: 23px;line-height: 32px; font-family: \'Times new roman\', sans-serif;margin:0">Order Confirmation</h4>
                                            <h5 style="margin: auto 0 80px; font-size: 21px; font-weight: 500;line-height: 32px;">Order # <span style="color: #0572c6">'.$new_order->txn_no.'</span></h5>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Hello admin,</h2>
                                         <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Thank you for order. Duo Reges: constructio interrete. Itaque hoc frequenter dici solet a vobis, non intellegere nos, quam dicat Epicurus voluptatem. Nullus est igitur cuiusquam dies natalis. Aliter homines, aliter philosophos loqui putas oportere? Quae cum praeponunt, ut sit aliqua rerum selectio, naturam videntur sequ</p>
                                        <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Your order will sent to:</p>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->first_name.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->street.','.$user_del_address->additional_address.', '.$user_del_address->pincode.', '.$user_del_address->place.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0 0 16px;">India</h3><a href="'.base_url().'order" style=" display: inline-block;padding: 18px 29px;color: #fff;background: #940000;text-decoration: none;text-transform: uppercase;font-size: 18px;margin-bottom: 38px;">View or manage order</a>
                                        <h5 style="font-size: 25px; line-height: 1;font-family: \'times new roman\',sans-serif; margin: 0 0 1rem; color: #940000;">Order Summary</h5>
                                        <p style="font-weight: 600; font-size: 15px; line-height: 1.7; color: #1b1b1b; margin: 0 0 10px;">Order # <span style="color: #0572c6;">'.$new_order->txn_no.'</span></p>
                                        <p style="font-size: 15px; line-height: 1.7; color: #615f5f; margin: 0 0 1.5rem">Place on '.date('l', strtotime($new_order->added_on)).', '.date('F', strtotime($new_order->added_on)).' '.date('d', strtotime($new_order->added_on)).', '.date('Y', strtotime($new_order->added_on)).'</p>
                                    </td>
                                </tr>';
        $body['user'] =  '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Email Template</title>
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
                    </head>

                    <body style="font-size: 13px; max-width: 600px; margin: auto; color: #000; font-family: \'poppins\',sans-serif">
                        <table style="width: 100%;padding: 40px;">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <div style="display: inline-table; width: 33%; vertical-align:middle; text-align: center;">
                                            <img src="'.base_url().'public/images/email-logo.jpg" style="margin: 0 0 80px" alt="">
                                        </div>
                                        <div style="display: inline-table; width: 66%; vertical-align:middle;">
                                            <h4 style="font-size: 23px;line-height: 32px; font-family: \'Times new roman\', sans-serif;margin:0">Order Confirmation</h4>
                                            <h5 style="margin: auto 0 80px; font-size: 21px; font-weight: 500;line-height: 32px;">Order # <span style="color: #0572c6">'.$new_order->txn_no.'</span></h5>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h2 style="font-size: 20px;line-height: 33px;font-family: \'poppins\', sans-serif; margin: 0; color: #e80000; font-weight: 400;">Hello '.$session_data->first_name.',</h2>
                                         <h1 style="font-size: 20px; line-height: 1.6;font-weight: 600; margin: 0 0 20px;">How would you describe your taste in coffee?</h1>
                                        <p style="font-size: 13px; line-height: 20px; color: #1b1b1b; margin-bottom: 40px;">Thank you for order. Duo Reges: constructio interrete. Itaque hoc frequenter dici solet a vobis, non intellegere nos, quam dicat Epicurus voluptatem. Nullus est igitur cuiusquam dies natalis. Aliter homines, aliter philosophos loqui putas oportere? Quae cum praeponunt, ut sit aliqua rerum selectio, naturam videntur sequ</p>
                                        <p style="font-size: 17px; color: #615f5f; line-height: 26px; font-family: times new roman; margin: 0 0 8px; font-weight: bold">Your order will sent to:</p>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->first_name.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0;">'.$user_del_address->street.','.$user_del_address->additional_address.', '.$user_del_address->pincode.', '.$user_del_address->place.'</h3>
                                        <h3 style="font-size: 15px; font-weight: 600; color: #1b1b1b; line-height: 26px; margin: 0 0 16px;">India</h3><a href="'.base_url().'mein-account/orders" style=" display: inline-block;padding: 18px 29px;color: #fff;background: #940000;text-decoration: none;text-transform: uppercase;font-size: 18px;margin-bottom: 38px;">View or manage order</a>
                                        <h5 style="font-size: 25px; line-height: 1;font-family: \'times new roman\',sans-serif; margin: 0 0 1rem; color: #940000;">Order Summary</h5>
                                        <p style="font-weight: 600; font-size: 15px; line-height: 1.7; color: #1b1b1b; margin: 0 0 10px;">Order # <span style="color: #0572c6;">'.$new_order->txn_no.'</span></p>
                                        <p style="font-size: 15px; line-height: 1.7; color: #615f5f; margin: 0 0 1.5rem">Place on '.date('l', strtotime($new_order->added_on)).', '.date('F', strtotime($new_order->added_on)).' '.date('d', strtotime($new_order->added_on)).', '.date('Y', strtotime($new_order->added_on)).'</p>
                                    </td>
                                </tr>';            
        if(!empty($add_to_cart)){
            foreach ($add_to_cart as $key => $value) {
                $array = array(
                    'order_id'=>$orderid,
                    'product_id'=>$value->availability_details_id,
                    'qty'=>$value->qty,
                    'price'=>$value->price,
                    'net_price'=>$value->qty*$value->price,
                );
                if($value->is_subscription == 1){
                    $array['is_subscription'] = 1;
                    $array['weak_schedule'] = $value->weak_schedule;
                    $array['start_date'] = date('Y-m-d');
                    
                }
                $array['added_on']=date('Y-m-d H:i:s');
                $this->Common->insert_data('order_items',$array);
            }
        $this->Common->delete_data('add_to_cart',array('user_id'=>$user_id));
        $order_products = $this->Common->join_mult_table('order_items',['availability','products','product_variation'], ['order_items.product_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'],["order_items.order_id" => $orderid,'is_event'=>0], 'order_items.*,order_items.qty as myQuan,order_items.id as mycart_id,availability.*, products.*,product_variation.name as type');
        
        }
        if(!empty($event_booking)){
            foreach ($event_booking as $key => $value) {
                $array = array(
                    'order_id'=>$orderid,
                    'event_id'=>$value->event_id,
                    'qty'=>0,
                    'price'=>$value->price,
                    'net_price'=>$value->price,
                    'is_event'=>1,
                    'person'=>$value->person,
                    'added_on'=>date('Y-m-d H:i:s')
                );
                $this->Common->insert_data('order_items',$array);
            $event_data = $this->Common->select_data('event_master','*',array('id'=>$value->event_id));
            $value->person = $event_data[0]['day']- $value->person;
            $this->Common->update_data('event_master',array('day'=>$value->person),array('id'=>$value->event_id));
        }
       $this->Common->update_data('event_booking',array('is_booked'=>1),array('user_id'=>$user_id));
       $order_trips = $this->Common->join_mult_table('order_items',['event_master','event_type'], ['order_items.event_id = event_master.id','event_master.event_id = event_type.id'],["order_items.order_id" => $orderid,'is_event'=>1], 'order_items.*,order_items.qty as myQuan,order_items.id as mycart_id,event_master.*, event_type.name as eventn');
       
        }
        $body['user'] .= '<tr>
                    <td style="width: 57%">
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">Item subtotal:</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">Shipping and Handeling:</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">Order Total</h2>
                    </td>
                    <td>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">RS 0.00</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h2>
                    </td>
                </tr>
            </tbody>
            </table></body></html>';
        $body['admin'] .= '<tr>
                    <td style="width: 57%">
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">Item subtotal:</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">Shipping and Handeling:</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">Order Total</h2>
                    </td>
                    <td>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h6>
                        <h6 style="font-size: 15px; font-weight: 500; line-height: 1.7; color: #151414; margin: 0 0 36px;">RS 0.00</h6>
                        <h2 style="font-size: 20px; line-height: 1.3; color: #151414; margin: 0;">RS '.$new_order->total_amount.'</h2>
                    </td>
                </tr>
            </tbody>
            </table></body></html>';
        $subject['admin'] = "Neue Buchungsanfrage";            
        $subject['user'] = "Vielen Dank für die Buchung einer Vergnügungsreise mit Hannoversche Kaffeemanufaktur";
        $participents = array();
        $participents['admin']='rohit@enthuons.com';
        $participents['user']=$session_data->email_id;
        $this->send_smtp_mail($body,$subject,$participents, 'test001.enthuons@gmail.com',$orderid);
       
        
        echo json_encode(array('orderid'=>$orderid));
        
    }
     public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL,$orderid=0) {
        if($from == NULL){
            $from = 'rohit@enthuons.com';
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
        
        $mail->setFrom($from, 'rohit@enthuons.com');
        $mail->addReplyTo($from, 'rohit@enthuons.com');
        $attach = $this->send_invoice($orderid);
        foreach ($to as $email => $value) {
        // Add a recipient
            if($email == 'admin'){
                $mail->addAddress($value);
                $mail->Subject = $sub['admin'];
                $mail->Body  = $msg['admin'];
                $mail->isHTML(true);
                $mail->AddAttachment($attach, $name = 'invoice',  $encoding = 'base64', $type = 'application/pdf');
            }elseif($email == 'user'){
                $mail->addAddress($value);
                $mail->Subject = $sub['user'];
                $mail->Body  = $msg['user'];
                $mail->AddAttachment($attach, $name = 'invoice',  $encoding = 'base64', $type = 'application/pdf');
            }
            if($mail->send()){ 

            }else{
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                }
        }
        return;     
    }
        
    public function order_detail($param1='',$param=''){
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
                    if($param1 == 'subscriptions'){
                        $res['cart'] = $this->Common->join_mult_table('order_items',
                            ['availability','products','product_variation'], 
                            ['order_items.product_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                            ["order_items.order_id" => $order->id,"order_items.is_subscription" => 1], 
                            'order_items.*,order_items.qty as myQuan,order_items.id as myitem_id,availability.*, products.*,product_variation.name as type,order_items.status as otstatus');
                        $res['event_cart'] =array();
                        // echo $this->db->last_query();die();
                    }else{
                       $res['event_cart'] = $this->Common->join_mult_table('order_items',
                        ['event_master','event_type'], 
                        ['order_items.event_id = event_master.id','event_master.event_id = event_type.id'], 
                        ["order_items.order_id" => $order->id,"order_items.is_event" => 1], 
                        'order_items.*,event_type.name as type,order_items.price as acprice,event_master.start_date,event_master.start_time,event_master.price as aprice,order_items.person as person,order_items.status as otstatus,order_items.id as myitem_id ');
                        $res['cart'] = $this->Common->join_mult_table('order_items',
                        ['availability','products','product_variation'], 
                        ['order_items.product_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
                        ["order_items.order_id" => $order->id], 
                        'order_items.*,order_items.qty as myQuan,order_items.id as myitem_id,availability.*, products.*,product_variation.name as type,order_items.status as otstatus');
                    }
                    $res['bill_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='BILLING' order by id DESC limit 1")->row_array();
                    $res['del_address'] = $this->db->query("SELECT * from user_address  where user_id = '$session_data->user_id'AND type ='DELIVERY' order by id DESC limit 1")->row_array();
                
                $this->load->view('order_details',$res);
            }else{
                redirect('login');
            }
           
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
                // echo $this->db->last_query();die();
        $body =  '<html><head><title>HTML email</title></head><body>
                    <p>Hello'.$session_data->first_name.' '.$session_data->last_name.'</p>
                    <p>Wir werden Sie bezüglich Ihrer Stornierungsanfrage 123 kontaktieren.Ihr Produkt wurde erfolgreich storniert</p>
                    <p>Ihre Hannoversche Kaffeemanufaktur</p></body></html>';
        $subject = "Product Cancallation";
        $status = $this->send_smtp_mail($body,$subject,$session_data->email_id, 'test001.enthuons@gmail.com');
        echo 'success';
    }
    public function payment_success($orderid)
    {
        $data['order'] =$this->db->query("SELECT * FROM orders where id = $orderid")->row();

        $this->load->view('payment_success',$data);
    }
    
    public function send_invoice($orderid){
        $data = [];
        $orderID = trim(htmlentities($orderid));

        $orders = $this->db->query("select * from orders where id = $orderID")->row();
        $data['order'] = $orders;
        $totalPrice = 0;
        $shipPrice = 2.9;
        $coupon_discount = 0;
        $coupon_value=0;
        $coupon_type='';
        $user_bill_address = $this->db->query("SELECT * from user_address  where user_id = '$orders->user_id'AND type ='BILLING' order by id DESC limit 1")->row();
        $data['event_cart'] = $this->Common->join_mult_table('order_items',['event_master','event_type'], ['order_items.event_id = event_master.id','event_master.event_id = event_type.id'], ["order_items.order_id" => $orders->id,"order_items.is_event" => 1], 'order_items.*,event_type.name as type,order_items.price as acprice,event_master.start_date,event_master.start_time,event_master.price as aprice,order_items.person as person,order_items.status as otstatus,order_items.id as myitem_id ');
        $data['cart'] = $this->Common->join_mult_table('order_items',['availability','products','product_variation'], ['order_items.product_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], ["order_items.order_id" => $orders->id], 'order_items.*,order_items.qty as myQuan,order_items.id as myitem_id,availability.*, products.*,product_variation.name as type,order_items.status as otstatus');
        $data['bill_add'] = $user_bill_address;
        if(!empty($data['cart'])){
            foreach ($data['cart'] as $key => $val) {
                $totalPrice = $totalPrice+($val['myQuan']*$val['price']);
            }
        }
        if(!empty($data['event_cart'])){
            foreach ($data['event_cart'] as $key => $val) {
                $totalPrice = $totalPrice+($val['aprice']);
            }
        }
        if($orders->coupon_code !=''){
            $data['coupon_discount'] = $orders->coupon_discount; 
            $data['totalPrice'] = $totalPrice;
            $data['actualPrice'] = $orders->total_amount;
            $data['shipPrice'] = $shipPrice;
        }else{
            $data['totalPrice'] = $totalPrice;
            $data['actualPrice'] = $orders->total_amount;
            $data['shipPrice'] = $shipPrice;
        }
        $data['image'] = base_url('public/images/invoice.jpg');
        
        $this->load->library('pdf');  

        $this->pdf->setFont('dejavusans', '', 14, '', true);

        $this->pdf->AddPage();

        $html = $this->load->view('invoice',$data, TRUE);

        $this->pdf->WriteHTML($html,true, false, true, false, '');

        $newFile  = FCPATH."/public/pdf/".time().'-invoice.pdf';

        ob_clean();

        $this->pdf->Output(FCPATH."public/pdf/".time().'-invoice.pdf','F');

        return $newFile;

        
    }
    // public function check_coupons(){
    //     $session_data=$this->session->userdata('user');
    //     $user_id = $session_data->user_id;
    //     $coupon_text = $_POST['coupon_text'];
    //     $new_order =$this->db->get_where('orders',array('coupon_code'=>strtoupper($coupon_text),'user_id'=>$user_id))->result_array();
    //     $count_order = sizeof($new_order);
    //     $offers = $this->db->get_where('offers',array('offer_code'=>strtoupper($coupon_text),'is_active'=>'Y','start_date <='=>date('Y-m-d'),'end_date >='=>date('Y-m-d'),'allowed_user_times >='=>$count_order))->row();
    //     if(!empty($offers)){
    //         echo 'ok';
    //     }else{
    //         echo 'notok';
    //     }
    // }
    public function check_coupons(){
        $session_data=$this->session->userdata('user');
        $user_id = $session_data->user_id;
        $coupon_text = $_POST['coupon_text'];
        $offers = $this->db->get_where('offers',array('offer_code'=>strtoupper($coupon_text)))->row();
        $offer_category = $this->db->get_where('offer_category',array('offerID'=>$offers->offerID))->result();
        $event_cart = $this->Common->join_mult_table('event_booking',
            ['event_master','event_type'], 
            ['event_booking.event_id = event_master.id','event_master.event_id = event_type.id'], 
            ["event_booking.user_id" => $session_data->user_id,"event_booking.is_booked" => 0], 
            'event_booking.*,event_booking.price as acprice,event_booking.id as mycart_id,event_master.*,event_type.name as type,event_master.price as eprice ');
        $cart = $this->Common->join_mult_table('add_to_cart',
            ['availability','products','product_variation'], 
            ['add_to_cart.availability_details_id = availability.id','availability.product_id = products.id','availability.variation_id = product_variation.id'], 
            ["add_to_cart.user_id" => $session_data->user_id], 
            'add_to_cart.*,add_to_cart.qty as myQuan,add_to_cart.id as mycart_id,availability.*, products.*,products.id as pd_id,product_variation.name as type');
        $cat_arr = array();
        $scat_arr = array();
        $is_event = '';
        $is_subscription ='';
        if(!empty($event_cart)){
            $is_event ='Y';
        }
        foreach ($cart as $key => $value) {
            if($value['is_subscription']==1){
                $is_subscription ='Y';
            }
            $product_join_category =$this->db->get_where('product_join_category',array('product_id'=>$value['pd_id']))->result();
            foreach ($product_join_category as $val) {
                array_push($cat_arr, $val->category_id);
                array_push($scat_arr, $val->subcategory_id);
            }
        }
        $cat_arr = array_unique($cat_arr);
        $scat_arr =array_unique($scat_arr);
        $mis_arr =array();
        // var_dump($cat_arr);
        // var_dump($scat_arr);
        $result ='';
        foreach ($offer_category  as $key => $value) {
            if($is_subscription == '' && $is_event == ''){
                var_dump(in_array($value->category, $cat_arr));
                if(!in_array($value->category, $cat_arr)){
                        echo 'hello';
                        $mis_arr[] =$value->category;
                        $mis_arr[] =$value->subcategory;
                    }
                if((in_array($value->category, $cat_arr) && $value->subcategory == 0) || (in_array($value->category, $cat_arr) && in_array($value->subcategory, $scat_arr))){
                    
                    var_dump($mis_arr);
                    if($offers->coupon_valid_for == 'PER'){
                        $new_order =$this->db->get_where('orders',array('coupon_code'=>strtoupper($coupon_text),'user_id'=>$user_id))->result_array();
                        $count_order = sizeof($new_order);
                    }else{
                       $new_order =$this->db->get_where('orders',array('coupon_code'=>strtoupper($coupon_text)))->result_array();
                        $count_order = sizeof($new_order); 
                    }
                    $offers_valid = $this->db->get_where('offers',array('offer_code'=>strtoupper($coupon_text),'is_active'=>'Y','start_date <='=>date('Y-m-d'),'end_date >='=>date('Y-m-d'),'allowed_user_times >='=>$count_order))->row();
                    if(!empty($offers_valid)){
                        $result='ok';
                    }else{
                        $result='notok';
                    }
                }else{
                    $result='cat';
                }
            }else{
                $result='okbut';
            }

        }
        echo $result;
    }
    public function cancel_by_user(){
        $this->load->view('cancel_order');
    }
    public function error($res=''){
        $this->load->view('error_order',$res);
    }


}
?>