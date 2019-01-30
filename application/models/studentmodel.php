<?php
class StudentModel extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
  function getStudents(){

    $query = $this->db->query('SELECT id,name, phone, address FROM student'); 
    return $query;

  }
  
  function Insert($name,$phone,$address){
	  
	  $insert_id=$this->db->query("insert into student(name,phone,address)values('$name','$phone','$address')");
	  return $insert_id;
  }
  
  function Update($id,$name,$phone,$address){
	  
	 return $this->db->query("update student set name='$name',phone='$phone',address='$address' where id='$id'");
     
  }
  
  function Delete($id){
	  	  
	  $this->db->query("delete from student where id='$id'");
	 
  }
  
  //------------Reports-----------//
  
  



}