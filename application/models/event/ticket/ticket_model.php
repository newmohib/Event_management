<?php
class Ticket_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
    
    function purchase_save(){

    $user_id = $this->session->userdata('id');
    $event=$this->input->post("event");
    $ticket_type=$this->input->post("ticket_type");
    $price=$this->input->post("price");
    $discount=$this->input->post("discount");
    $ticket_qty=$this->input->post("ticket_qty");
    $password=$this->input->post("password");

     // $select=isset($select)?$select:0 ;
     // $create=isset($create)?$create:0 ;
     // $update=isset($update)?$update:0 ;
     // $delete=isset($delete)?$delete:0 ;
     // $alter=isset($alter)?$alter:0 ;
      
      if ($discount >0) {
        $discount= $discount / 100;
        $total_discount= ($price * $ticket_qty) * $discount;
        $total_amount= ($price * $ticket_qty) - $total_discount;

        //echo $total_amount;
      }else{
        $total_discount= $discount;
        $total_amount= $price * $ticket_qty;
         //echo $total_discount;
      }
   
     $this->db->query("insert into ticket_event( ticket_type, event_id, s_qty, s_amount,discount, user_id)values('$ticket_type','$event','$ticket_qty','$total_amount','$total_discount','$user_id')");

    $insert_id=$this->db->insert_id();
    //  return $insert_id;


      if (isset($insert_id)) {
       $query = $this->db->query("select * from taicket_available where event_id='$event' and type_id='$ticket_type'");

              foreach($query->result_array() as $row){   

             }

              $gross_ticket_qty=$row['total_qty'] - $ticket_qty;
              //echo $gross_ticket_qty;

            $update_success=$this->db->query("update taicket_available set total_qty='$gross_ticket_qty' where event_id='$event' and type_id='$ticket_type'");
            // echo $update_success;
            // echo "<br>";
            // echo $insert_id;
            if (isset($update_success)) {

              return $insert_id;
            }
      }


//        echo "<br> $user_id
// $event
// $ticket_type
// $price
// $discount
// $ticket_qty
// $password ";
    
  }







  function purchase_ticket_view($ticket_event_insert_id){
 
 // id, ticket_type, event_id, s_qty, s_amount, s_date, user_id, discount

  $ticket_event = $this->db->query("select * from ticket_event where id='$ticket_event_insert_id'"); 
    
              foreach($ticket_event->result_array() as $ticket_event_row){
               
                  //echo  $ticket_event_row["ticket_type"];
                }
              $event_id=$ticket_event_row["event_id"];
              $ticket_type=$ticket_event_row["ticket_type"];

  //id, e_name, start_date_time, end_date_time, vanue_id, decorator_id, client_id, user_id, e_type, employee_id, c_date, up_date, price_type_id, e_title, e_category, location, total_attendance

      $event = $this->db->query("select * from event where id='$event_id'");

                 foreach($event->result_array() as $event_row){
                }

        $vanue_id=$event_row["vanue_id"];
        $decorator_id=$event_row["decorator_id"];
        $client_id=$event_row["client_id"];
        $employee_id=$event_row["employee_id"];
        $e_category=$event_row["e_category"];

    $venue_client = $this->db->query("select v.v_name vanue_name, c.name client_name from venue v,client c where v.id='$vanue_id' and c.id='$client_id'");

    $ticket_type_obj= $this->db->query("select * from ticket_type where id='$ticket_type'");

    //$speaker = $this->db->query("SELECT * FROM event where id not in(select event_id from speaker where status=1) ");

  
   
  $event_form_data=array("ticket_event"=>$ticket_event,"event"=>$event,"venue_client"=>$venue_client ,"ticket_type_obj"=>$ticket_type_obj);

    return $event_form_data;

  }




  function role_edit($role_id){

  $query = $this->db->query("select id,name,date,user_id,Ucreate,Uupdate,Udelete,Uselect,Ualter from role where id='$role_id'"); 
    //return $query->result_array();
    return $query;

  }
  function role_update(){
    $user_id = $this->session->userdata('id');
    $id_update_id=$this->input->post("role_update_id");
    $role_name=$this->input->post("role_name");
    $user_password=$this->input->post("user_password");
    $select=$this->input->post("select");
    $create=$this->input->post("create");
    $update=$this->input->post("update");
    $delete=$this->input->post("delete");
    $alter=$this->input->post("alter");

     $select=isset($select)?$select:0 ;
     $create=isset($create)?$create:0 ;
     $update=isset($update)?$update:0 ;
     $delete=isset($delete)?$delete:0 ;
     $alter=isset($alter)?$alter:0 ;

    
   return $this->db->query("update role set name='$role_name', user_id='$user_id', Ucreate='$create', Uupdate='$update', Udelete='$delete', Uselect='$select', Ualter='$alter' where id='$id_update_id'");
     
  }

  function role_delete($role_id){
        
   $employee_delete_success=$this->db->query("delete from role where id='$role_id'");
   return $employee_delete_success;
   
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