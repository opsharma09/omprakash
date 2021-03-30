<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Common');
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
        if($this->session->userdata('user')){
        $session_data=$this->session->userdata('user');
        // $this->load->model('Mycal_model');
        // $data['calender'] = $this->Mycal_model->getcalender($year , $month);
        $data['index_menu']  = 'events';
        $data['user_data']  = $session_data;
        $data['title']  = 'Events';
        $data['page_title']  = 'Events';
        if($this->input->get()) { 
            // print_r($this->input->get());die;
            $startdate  = $this->input->get('start-date');
            if(!empty($startdate)) {
                $timestamp1 = strtotime($startdate);
                $start_date = date('Y-m-d', $timestamp1); 
                $end_date = date('Y-m-d', $timestamp1); 
            } else {
                $start_date = date('Y-m-d');
                $end_date = date('Y-m-d');
            }
            
        } else {
            $date = date('Y-m-d');

            $data['event_list'] = $this->db->query("select * from event_master where  (start_date <= '".$date."' AND end_date >= '".$date."') order by start_date desc")->result_array();

        }
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/events/events-list',$data);
        $this->load->view('admin/includes/footer');}
    }
    public function events(){
      if($this->session->userdata('user')){
        $session_data=$this->session->userdata('user');
        $data['index_menu']  = 'events';
        $data['title']  = 'Events | Studypeers';
        // if($this->input->get()) { 
        //     // print_r($this->input->get());die;
        //     $startdate  = $this->input->get('start-date');
        //     $course     = $this->input->get('course');
        //     $professor  = $this->input->get('professor');
        //     $keyword    = $this->input->get('keyword');
        //     if(!empty($startdate)) {
        //         $timestamp1 = strtotime($startdate);
        //         $start_date = date('Y-m-d', $timestamp1); 
        //         $end_date = date('Y-m-d', $timestamp1); 
        //     } else {
        //         $start_date = date('Y-m-d');
        //         $end_date = date('Y-m-d');
        //     }
        //     if(!empty($course) && !empty($keyword)){
        //         $data['event_list'] = $this->db->query("select * from event_master where status = 1 and course = ".$course." and event_name like '%{$keyword}%' and created_by = ".$user_id." and (start_date <= '".$start_date."' AND end_date >= '".$end_date."') order by start_date and end_date <= '".$end_date."' desc")->result_array();
        //     } else if(!empty($course) && empty($keyword)){
        //         $data['event_list'] = $this->db->query("select * from event_master where status = 1 and course = ".$course." and created_by = ".$user_id." and (start_date <= '".$start_date."' AND end_date >= '".$end_date."')  order by start_date desc")->result_array();
        //     } else if(empty($course) && !empty($keyword)){
        //         $data['event_list'] = $this->db->query("select * from event_master where status = 1 and event_name like '%{$keyword}%' and created_by = ".$user_id." and (start_date <= '".$start_date."' AND end_date >= '".$end_date."')  order by start_date desc")->result_array();
        //     } else { 
        //         $data['event_list'] = $this->db->query("select * from event_master where status = 1 and created_by = ".$user_id." and (start_date <= '".$start_date."' AND end_date >= '".$end_date."')  order by start_date desc")->result_array(); 
        //     }

        //     if(!empty($course)) {
        //         $data['professor']     = $this->db->get_where('professor_master', array('status' => 1, 'course_id' => $course))->result_array();
        //     } else {
        //         $data['professor']  = array();
        //     }
        // } else {
        //     $date = date('Y-m-d');

        //     $data['event_list'] = $this->db->query("select * from event_master where status = 1 and created_by = ".$user_id." and (start_date <= '".$date."' AND end_date >= '".$date."') OR event_master.id in (SELECT reference_id from share_master where peer_id = ".$user_id." and reference = 'event' and status != 4)  order by start_date desc")->result_array();

        // }
        // $data['course']     = $this->db->get_where('course_master', array('status' => 1, 'user_id' => $user_id))->result_array();
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/events/events-list');
        $this->load->view('admin/events/footer');
        $this->load->view('admin/includes/footer');}
    }
    public function getEventsDayWise(){
      if($this->input->post()){
          // $user_id = $this->session->get_userdata()['user_data']['user_id']; 
          $date       = $this->input->post('date');

          $event_list = $this->db->query("select * from event_master where (start_date <= '".$date."' AND end_date >= '".$date."')  order by start_date desc")->result_array();
          
          $html="";

          if(!empty($event_list)) {
              foreach ($event_list as $key => $value) { 
                  $university = $this->db->get_where('event_type', array('id' => $value['event_id']))->row_array();

                  $html .= '<div class="feed-card list" id="event_id_div_"'.$value['id'].'">
                                 <div class="right">
                                     <div class="feed_card_inner">
                                        <h5><a href="events/eventDetails/'.$value['id'].'">'.$value['event_name'].'</a></h5>
                                        <div class="timeperiod">
                                            <div class="timeDetail">'.date('d M, Y', strtotime($value['start_date'])).'
                                            </div>
                                            <div class="timeDetail">
                                                '.date('h:i A', strtotime($value['start_time'])).' 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
              }
          } else {
              $html = '<p class="text-center">No records found..</p>';
          }
          echo $html;

      }
    }
    public function getEventsDay(){
      if($this->input->post()){
          $event_type = $this->input->post('event_type');
          $html='';
          $event_list = $this->db->query("select * from event_type where id=$event_type")->result_array();
              foreach ($event_list as $key => $value) { 
                  for($i=1 ; $i<=$value['max_days']; $i++) {
                    $html .= '<option value="'.$i.'">'.$i.'</option>';
                        }
              }
          echo $html;

      }
    }
    public function getEventsMaster(){
      if($this->input->post()){
          $event_type = $this->input->post('event_type');
          $person = $this->input->post('person');
          $html ='';
          $event_list = $this->db->query("select * from event_master where event_id=$event_type")->result_array();
          if(!empty($event_list)){
              foreach ($event_list as $key => $val) { 
                $html .='<div class="column"><div class="date">'.date('D', strtotime($val['start_date'])).','.date('M', strtotime($val['start_date'])).date('d', strtotime($val['start_date'])).'</div>
                      <button type="button" class="bookly-hour clearfix';
                if($val['day'] <=0){ 
                  $html .=' booked';
                }elseif($val['day'] < $person){
                  $html .= ' booked';
                }
                $html .=' weiter2"';
                if($val['day'] <=0){
                  $html .= 'disabled ';
                }elseif($val['day'] < $person){
                  $html .= 'disabled ';
                }
                $html .= 'data-person="'.$val['day'].'" onclick="weiter2(this)" data-time="'.date('h:i', strtotime($val['start_time'])).'" data-date="'.$val['start_date'].'" data-price="'.$val['price'].'" data-event_id="'.$val['id'].'" ><span class="bookly-time-main"><i><span></span></i>'.date('h:i', strtotime($val['start_time'])).'</span> <span class="time-additional">'.$val['day'].'</span></button></div>';
              }
            }else{
               $html ='<h6 style="font-weight:bold">Es stehen keine Zeiten für die ausgewählten Kriterien zur Verfügung.</h6>';
            }
          echo $html;

      }
    }
    public function addEvent(){
        // is_valid_logged_in(); 
        $user_id = $this->session->userdata('user')->user_id; 
        // $data['user_detail'] = $this->db->get_where('user', array('id' => $user_id))->row_array();
        // $data['user_info'] = $this->db->get_where('user_info', array('userID' => $user_id))->row_array();
        // $data['university'] = $this->db->get_where('university', array('university_id' => $data['user_info']['intitutionID']))->row_array();
        $data['event_type']     = $this->db->get_where('event_type', array('status' => 1))->result();
        $data['index_menu']  = 'events';
        $data['page_title']  = 'Add Event ';
        


        if($this->input->post()){
            $event_name     = $this->input->post('event_name');
            $event_type     = $this->input->post('event_type');
            $day     = $this->input->post('day');
            $description    = $this->input->post('description');
            $startdate      = $this->input->post('start-date');
            $enddate        = $this->input->post('end-date');
            $starttime      = $this->input->post('start-time');
            $endtime        = $this->input->post('end-time');
            $timestamp1 = strtotime($startdate);
            $start_date = date('Y-m-d', $timestamp1); 

            $timestamp2 = strtotime($enddate);
            $end_date = date('Y-m-d', $timestamp2);

            $timestamp3 = strtotime($starttime);
            $start_time = date('H:i:s', $timestamp3); 

            $timestamp4 = strtotime($endtime);
            $end_time = date('H:i:s', $timestamp4);

            // if (!empty($_FILES['featured_image']['name'])) { 
            //     $featured_image = $this->uploadImg('featured_image', $_FILES['featured_image']['name']);
            // } else { 
            //     $featured_image = "";
            // }

            $insertArr = array( 'event_name'    => $event_name,
                                'event_id'      => $event_type,
                                'day'           => $day,
                                'description'   => $description,
                                'start_date'    => $start_date,
                                'end_date'      => $end_date,
                                'start_time'    => $start_time,
                                'end_time'      => $end_time,
                                'created_at'    => date('Y-m-d H:i:s')
                            );
            // var_dump($insertArr);die();
            $this->db->insert('event_master', $insertArr);

            $insert_id = $this->db->insert_id();

            $message = '<div class="alert alert-success" role="alert"><strong>Success!</strong> Event Added Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button></div>';
            $this->session->set_flashdata('flash_message', $message);
            redirect(site_url('events'), 'refresh');

        }
        
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/events/add-event');
        $this->load->view('admin/includes/footer');
    }
    public function eventDetails(){
        

        // $day = base64_decode($this->uri->segment('3')); 
         $event_id = $this->uri->segment('3'); 

        $data['event'] = $this->db->query("select * from event_master where id = ".$event_id."")->row_array();
        $data['university'] = $this->db->get_where('event_type', array('id' => $data['event']['event_id']))->row_array();
        
        $data['index_menu']  = 'events';
        $data['page_title']  = 'Event Details ';

        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/events/event-details',$data);
        $this->load->view('admin/includes/footer');
    }
    public function editEvent(){

        $event_id = $this->uri->segment('3'); 

        $data['event'] = $this->db->query("select * from event_master where id = ".$event_id."")->row();
        $data['event_type']     = $this->db->get_where('event_type', array('status' => 1))->result();
        $data['index_menu']  = 'events';
        $data['page_title']  = 'Edit Event';

        if($this->input->post()){
            // print_r($this->input->post());die;
            $event_name       = $this->input->post('event_name');
            $event_type       = $this->input->post('event_type');
            $startdate      = $this->input->post('start-date');
            $enddate        = $this->input->post('end-date');
            $starttime      = $this->input->post('start-time');
            $endtime        = $this->input->post('end-time');
            $day        = $this->input->post('day');

            $timestamp1 = strtotime($startdate);
            $start_date = date('Y-m-d', $timestamp1); 

            $timestamp2 = strtotime($enddate);
            $end_date = date('Y-m-d', $timestamp2);

            $timestamp3 = strtotime($starttime);
            $start_time = date('H:i:s', $timestamp3); 

            $timestamp4 = strtotime($endtime);
            $end_time = date('H:i:s', $timestamp4);


            $uArr = array( 'event_name'      => $event_name,
                                'event_type'    => $event_type,
                                'start_date'    => $start_date,
                                'end_date'      => $end_date,
                                'privacy'       => $privacy,
                                'start_time'    => $start_time,
                                'day'           => $day,
                            );
            $this->db->insert('event_booking', $insertArr);

            $get_event = $this->db->query("select * from event_master where id = ".$event_id." and status = 1")->row_array();
            

            $message = '<div class="alert alert-success" role="alert"><strong>Success!</strong> Event Updated Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button></div>';
            $this->session->set_flashdata('flash_message', $message);
            redirect(site_url('account/events'), 'refresh');

        }

        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/events/edit-event',$data);
        $this->load->view('admin/includes/footer');
    }
    public function deleteEvent(){
        if($this->input->post()){
            $event_id = $this->input->post('event_id');
            $this->db->where(array('id' => $event_id));
            $this->db->update('event_master',array('status' => 3));

            $event_details = $this->db->query("select * from event_master where id = ".$event_id."")->row_array();
            if($event_details['addedToCalender'] == 1){
                $this->db->where(array('event_master_id' => $event_id));
                $this->db->update('schedule_master',array('status' => 3));
            }

            $this->db->where(array('reference_id' => $event_id, 'reference' => 'event'));
            $this->db->update('reference_master',array('status' => 3));

            $message = '<div class="alert alert-success" role="alert"><strong>Success!</strong> Event Deleted Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button></div>';
            $this->session->set_flashdata('flash_message', $message);
            redirect(site_url('account/events'), 'refresh');
        }
    }
    public function save_events(){
      if($this->input->post()){
        // var_dump($this->input->post());die();
        $event_id       = $this->input->post('event_id');
        $first_name       = $this->input->post('first_name');
        $last_name       = $this->input->post('last_name');
        $phone      = $this->input->post('phone_no');
        $email        = $this->input->post('email');
        $message      = $this->input->post('message');
        $price      = $this->input->post('price');
        $person      = $this->input->post('person');
        $uArr = array( 
            'event_id'    => $event_id,
            'first_name' => $first_name,
            'last_name'  => $last_name,
            'phone_no'      => $phone,
            'email'       => $email,
            'message'    => $message,
            'price'    => $price,
            'person'    => $person
        );
      }
      if($this->session->userdata('user')){
        $session_data=$this->session->userdata('user');
        $user_id =  $session_data->user_id;
        $uArr['user_id'] = $user_id; 
        $this->db->insert('event_booking', $uArr);
      }else{
          if($this->input->post()){
            $data = $_POST;
            if(isset($data['privat']) && !empty($data['privat'])){
                $data1['user_type']=1;
            }
            if(isset($data['firma']) && !empty($data['firma'])){
                $data1['user_type']=2;
            }
            if(isset($data['first_name']) && !empty($data['first_name'])){
                $data1['first_name']=$data['first_name'];
            }
            if(isset($data['last_name']) && !empty($data['last_name'])){
                $data1['last_name']=$data['last_name'];
            }
            if(isset($data['password']) && !empty($data['password'])){
                $data1['password']=password_hash($data['password'], PASSWORD_BCRYPT);
            }
            if(isset($data['email']) && !empty($data['email'])){
                $data1['email_id']=$data['email'];
            }
            if(isset($data['habes']) && !empty($data['habes'])){
                $data1['option_1']=1;
            }
            if(isset($data['habe']) && !empty($data['habe'])){
                $data1['option_2']=1;
            }
            if(isset($data['ich']) && !empty($data['ich'])){
                $data1['option_3']=1;
            }
            if(isset($data['address']) && !empty($data['address'])){
                $data1['address']='';
            }
            
            if(isset($data['phone_no']) && !empty($data['phone_no'])){
                $data1['phone_no']='+91'.$data['phone_no'];
            }
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
            $data1['token']=$token;
            $this->Common->insert('users', $data1);
            $user_id = $this->db->insert_id(); 
            if ($user_id > 0) {
               

                $body =  '<html>
                          <head>
                          <title>HTML email</title>
                          </head>
                          <body>
                          <p>Sie haben sich soeben bei der <a href="' . base_url().'">Hannoverschen Kaffeemanufaktur</a> registriert.Bitte bestätigen Sie Ihre Anmeldung durch Klicken des folgenden Links: </p>
                                                              <p><a href="' . base_url() . 'verify?v=' . $token . '">Klicken Sie hier, um Ihre E-Mail zu bestätigen</a></p>
                                                              <p>Wenn Sie den Link nicht aktivieren, erhalten Sie keine weiteren Mitteilungen von uns. Ihre E-Mail-Adresse wird automatisch aus unserem Verteiler gelöscht.</p>
                                                              <p>Freundliche Grüße,</p>
                                                              <p>Ihre Hannoversche Kaffeemanufaktur</p>
                                                              </body>
                          </html>';

                                              
            $subject = "Bitte bestätigen Sie Ihre Registrierung bei der Hannoverschen Kaffeemanufaktur";
            $status = $this->send_smtp_mail($body,$subject,$data1['email_id'], 'rohit.enthuons@gmail.com');
          }
            $resp = $this->Common->select('users','*',array('user_id'=>$user_id));
            $this->session->set_userdata('user',$resp);

            $uArr['user_id'] = $user_id; 
            // var_dump($uArr);die();
            $this->db->insert('event_booking', $uArr);
            
            }
        }
        redirect(site_url('home/cart'), 'refresh');
    }
    public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
        if($from == NULL){
            $from = 'test001.enthuons@gmail.com';
        }
        $to = 'omprakash.cloud@gmail.com';
        $htmlContent = 'eiuei';
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
        $mail->Subject = 'jdoijd';
        
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
}
