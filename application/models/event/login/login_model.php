<?php
class Login_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
  function getuser($username){

    $query = $this->db->query("SELECT id, username,password,role_id FROM users where username='$username'"); 
    return $query;

  }

  



}