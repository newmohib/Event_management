<?php
class Employee_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
    
    function employee_save(){
   $user_id = $this->session->userdata('id');
    $name=$this->input->post("name");
    $email=$this->input->post("email");
    $phone=$this->input->post("phone");
    $address=$this->input->post("address");
    $username=$this->input->post("username");
    $password=$this->input->post("password");
    
    $this->db->query("insert into employee(name,email,phone,address,username,password,user_id)values('$name','$email','$phone','$address','$username','$password','$user_id')");
     $insert_id=$this->db->insert_id();

     if ($insert_id==TRUE) {
       $this->db->query("insert into users(username,password,profile_id,role_id)values('$username','$password','$insert_id','6')");
     //$insert_id=$this->db->insert_id();

      return $insert_id;
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