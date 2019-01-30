<?php
class Role_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
    
    function role_save(){

    $user_id = $this->session->userdata('id');
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
    
    $this->db->query("insert into role(name,user_id,Ucreate,Uupdate,Udelete,Uselect,Ualter)values('$role_name','$user_id','$select','$create','$update','$delete','$alter')");

     $insert_id=$this->db->insert_id();
     return $insert_id;


       // echo "<br> $user_id
       //  $role_name
       //  $user_password
       //  $select
       //  $create
       //  $update
       //  $delete
       //  $alter ";
    
  }






//id, name, email, phone, address, username, password, create_date, update_date

  function role_show_all_model(){

  $query = $this->db->query('select id,name,date,user_id,Ucreate,Uupdate,Udelete,Uselect,Ualter from role'); 
    //return $query->result_array();
    return $query;

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