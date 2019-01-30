<?php
class Welcome_user_model extends CI_Model{


    function __construct(){
        
        parent::__construct();
    }
   
      
 //-------CRUD------------//
  public function getuser($id){

    $query = $this->db->query("SELECT id, username,password FROM users where id='$id'"); 
    return $query;

  }

   public function query_test_model(){

    $user =$this->db->query("SELECT id, username,password FROM users "); 
    $client=$this->db->query("SELECT id,name,email,username FROM client ");


 // return array($user,$client);
    $myarray=array("newuser"=>$user,"newclient"=>$client);

    return  $myarray;

    // $users = array();
    // for($user.result() as $row){
    // 	$users.push($row);
    // }

    // $clients = array();
    // for($user.result() as $row){
    // 	$clients.push($row);
    // }

  //  $result = array("users"=>"$user", "clients"=>"$client");

    //$result=array("users"=>"$user","clients"=>"$client");
  //  return $result;


    //return  $client;

  }



}