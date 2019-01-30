<?php
class Event_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
    
//$query = $this->db->get('table_name');

  function event_create_form_data(){

  $category = $this->db->get('category');
  $client = $this->db->get('client');
  $decorator = $this->db->get('decorator');
  $employee = $this->db->get('employee');
  $event_name = $this->db->get('event_name');
  $price_type = $this->db->get('price_type');
  $users = $this->db->get('users');
  $vendor = $this->db->get('vendor');
  $venue = $this->db->get('venue');
  $transport_name = $this->db->get('transport_name');
  $event = $this->db->get('event');
  $transport = $this->db->get('transport');

  $guid_det = $this->db->get('guid_det');
  $performers_det = $this->db->get('performers_det');
  $speaker_det = $this->db->get('speaker_det');
  $position = $this->db->get('position');




  // $event_trans = $this->db->query("SELECT id,e_name FROM event where id not in(select event_id from transport)");
  
  // $event_trans = $this->db->query("SELECT * FROM event where id not in(select event_id from transport)");

   $event_trans = $this->db->query("SELECT * FROM event where id not in(select event_id from transport where status=1) ");
  
   $event_guid = $this->db->query("SELECT * FROM event where id not in(select event_id from guid where status=1) ");
   
   $performers = $this->db->query("SELECT * FROM event where id not in(select event_id from performers where status=1) ");
   $speaker = $this->db->query("SELECT * FROM event where id not in(select event_id from speaker where status=1) ");

  
   
  $event_form_data=array("category"=>$category,"client"=>$client,"decorator"=>$decorator,"employee"=>$employee,"event_name"=>$event_name,"price_type"=>$price_type,"users"=>$users,"vendor"=>$vendor,"venue"=>$venue,"transport_name"=>$transport_name,"event"=>$event,"transport"=>$transport ,"event_trans"=>$event_trans ,"guid_det"=>$guid_det,"performers_det"=>$performers_det,"speaker_det"=>$speaker_det,"position"=>$position,"event_guid"=>$event_guid ,"performers"=>$performers ,"speaker"=>$speaker);


    return $event_form_data;

  }





//event create start 







    function event_create_form_save(){
      
    $name=$this->input->post("btn_event_submit");

    $user_id = $this->session->userdata('id');

    $e_name=$this->input->post("e_name");
    $e_title=$this->input->post("e_title");
    $e_category=$this->input->post("e_category");
    $e_type=$this->input->post("e_type");
    $price_type=$this->input->post("price_type");
    $e_client=$this->input->post("e_client");

    $e_decoretor=$this->input->post("e_decoretor");
    $e_employee=$this->input->post("e_employee");
    $e_vanue=$this->input->post("e_vanue");
    $location=$this->input->post("location");
    $start_datetime_1=$this->input->post("start_datetime");
       
    $start_datetime_2=date_create($start_datetime_1);
    $start_datetime=date_format($start_datetime_2,'Y-m-d H:i:s');


    $end_datetime_1=$this->input->post("end_datetime");
    $end_datetime_2=date_create($end_datetime_1);
    $end_datetime=date_format($end_datetime_2,'Y-m-d H:i:s');

    $total_attendance=$this->input->post("total_attendance");
    $password=$this->input->post("password");


          $event_create_array = array('e_name' => $e_name, 'e_title' => $e_title, 'e_category' => $e_category , 'e_type' => $e_type, 'price_type_id' => $price_type, 'client_id' => $e_client, 'decorator_id' => $e_decoretor, 'employee_id' => $e_employee, 'vanue_id' => $e_vanue, 'location' => $location , 'start_date_time' => $start_datetime, 'end_date_time' => $end_datetime, 'total_attendance' => $total_attendance , 'user_id' => $user_id);

          $this->db->insert('event', $event_create_array);
    
  
     $insert_id=$this->db->insert_id();

     if ($insert_id==TRUE) {
       
          return $insert_id;
     
     }
    


  }



//event transport start 







    function event_transport_form_save(){
      
    //$name=$this->input->post("btn_tranport_submit");
      if ($this->input->post("btn_tranport_submit")==TRUE) {
        
      

      $user_id = $this->session->userdata('id');

      $transport_id=$this->input->post("t_name");
      $event_id=$this->input->post("event");
      $seat_capacity=$this->input->post("seat_capacity");

    //id, event_id, transport_id, from_location, seate_capacity, user_id, c_date

            $event_create_array = array('event_id' => $event_id, 'transport_id' => $transport_id, 'seate_capacity' => $seat_capacity, 'user_id' => $user_id ,'status' =>'1');

            $this->db->insert('transport', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }


//if closs
    }else if ($this->input->post("btn_tranport_no")==TRUE) {
      $user_id = $this->session->userdata('id');
      $event_id=$this->input->post("event");

            $event_create_array = array('event_id' => $event_id,  'user_id' => $user_id,'status' =>'0');

            $this->db->insert('transport', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }
    }
  }





  function event_guid_save(){
      
    //$name=$this->input->post("btn_tranport_submit");
      if ($this->input->post("btn_submit")==TRUE) {
        
      

      $user_id = $this->session->userdata('id');

      $guid_id=$this->input->post("g_name");
      $event_id=$this->input->post("event");
      $position=$this->input->post("position");

    //id, event_id, transport_id, from_location, seate_capacity, user_id, c_date
  //id, guid_id, event_id, employid_id, user_id, position, status

            $event_create_array = array('event_id' => $event_id, 'guid_id' => $guid_id, 'position' => $position, 'user_id' => $user_id ,'status' =>'1');

            $this->db->insert('guid', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }


//if closs
    }else if ($this->input->post("btn_sub_no")==TRUE) {
      $user_id = $this->session->userdata('id');
      $event_id=$this->input->post("event");

            $event_create_array = array('event_id' => $event_id,  'user_id' => $user_id,'status' =>'0');

            $this->db->insert('guid', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }
    }
  }






  function event_performers_save(){
      
      if ($this->input->post("btn_submit")==TRUE) {
      $user_id = $this->session->userdata('id');
      $p_name=$this->input->post("p_name");
      $event_id=$this->input->post("event");

            $event_create_array = array('event_id' => $event_id, 'performers_id' => $p_name, 'user_id' => $user_id ,'status' =>'1');

            $this->db->insert('performers', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }


//if closs
    }else if ($this->input->post("btn_sub_no")==TRUE) {
      $user_id = $this->session->userdata('id');
      $event_id=$this->input->post("event");

            $event_create_array = array('event_id' => $event_id,  'user_id' => $user_id,'status' =>'0');

            $this->db->insert('performers', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }
    }
  }





 function event_speker_save(){
      
      if ($this->input->post("btn_submit")==TRUE) {
      $user_id = $this->session->userdata('id');
      $speaker_id=$this->input->post("name");
      $event_id=$this->input->post("event");

  // id, speaker_id, event_id, user_id, status
            $event_create_array = array('event_id' => $event_id, 'speaker_id' => $speaker_id, 'user_id' => $user_id ,'status' =>'1');

            $this->db->insert('speaker', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }


//if closs
    }else if ($this->input->post("btn_sub_no")==TRUE) {
      $user_id = $this->session->userdata('id');
      $event_id=$this->input->post("event");

            $event_create_array = array('event_id' => $event_id,  'user_id' => $user_id,'status' =>'0');

            $this->db->insert('speaker', $event_create_array);
      
            $insert_id=$this->db->insert_id();

             if ($insert_id==TRUE) {
               return $insert_id;
             }
    }
  }







   
   function event_payment_create_data(){
      
      if ($this->input->post("btn_submit")==TRUE) {
          $event_id=$this->input->post("event");

               // $event_create_array = array('event_id' => $event_id, 'speaker_id' => $speaker_id, 'user_id' => $user_id ,'status' =>'1');
              $guid = $this->db->query("SELECT * FROM guid where event_id='$event_id'"); 
              $performers = $this->db->query("SELECT * FROM performers where event_id='$event_id'"); 
              $speaker = $this->db->query("SELECT * FROM speaker where event_id='$event_id'"); 
              $transport = $this->db->query("SELECT * FROM transport where event_id='$event_id'"); 
              $payment_det = $this->db->query("SELECT * FROM payment_det");
              $event = $this->db->query("SELECT * FROM event where id='$event_id'");


              $event_payment_array = array('guid' => $guid, 'performers' => $performers, 'speaker' => $speaker ,'transport' =>$transport ,'payment_det' =>$payment_det ,'event' =>$event);

              return $event_payment_array;
          
     }


  }













//id, name, email, phone, address, username, password, create_date, update_date

  function employee_show_all_model(){

  $query = $this->db->query('SELECT id,name,email, phone, address,username,password,create_date FROM employee'); 
    //return $query->result_array();
    return $query;

  }

function employee_show_indivitual_model($emp_id){

   $emp_sess_id = $this->session->userdata('id');
  $employee_id=isset($emp_id)?$emp_id:$emp_sess_id;
  $query = $this->db->query("SELECT id,name,email, phone, address,username,password,create_date FROM employee where id='$employee_id'"); 
    //return $query->result_array();
    return $query;

  }


function employee_update_model($emp_id){
    $user_id = $this->session->userdata('id');
    $name=$this->input->post("name");
    $email=$this->input->post("email");
    $phone=$this->input->post("phone");
    $address=$this->input->post("address");
    $password=$this->input->post("password");

    
   return $this->db->query("update employee set name='$name',phone='$phone',address='$address',email='$email',password='$password',user_id='$user_id' where id='$emp_id'");
     
  }


  function employee_delete_model($emp_id){
        
   $employee_delete_success=$this->db->query("delete from employee where id='$emp_id'");
   return $employee_delete_success;
   
  }
  
  
  
  function Update($id,$name,$phone,$address){
	  
	 return $this->db->query("update student set name='$name',phone='$phone',address='$address' where id='$id'");
     
  }
  
  function Delete($id){
	  	  
	  $this->db->query("delete from student where id='$id'");
	 
  }
  
  //------------Reports-----------//
  
  



}