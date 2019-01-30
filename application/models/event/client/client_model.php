<?php
class Client_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
    
    function client_save($name,$email,$phone,$address,$username,$password){
    
    $this->db->query("insert into client(name,email,phone,address,username,password)values('$name','$email','$phone','$address','$username','$password')");
     $insert_id=$this->db->insert_id();

     if ($insert_id==TRUE) {
       $this->db->query("insert into users(username,password,profile_id,role_id)values('$username','$password','$insert_id','7')");
     //$insert_id=$this->db->insert_id();

      return $insert_id;
     }
    


  }






//id, name, email, phone, address, username, password, create_date, update_date

  function client_show_all_model(){

    $query = $this->db->query('SELECT id,name,email, phone, address,username,password,create_date FROM client'); 
    //return $query->result_array();
    return $query;

  }
  
  
  
  function Update($id,$name,$phone,$address){
	  
	 return $this->db->query("update student set name='$name',phone='$phone',address='$address' where id='$id'");
     
  }
  
  function Delete($id){
	  	  
	  $this->db->query("delete from student where id='$id'");
	 
  }
  
  //------------Reports-----------//
  
  



}