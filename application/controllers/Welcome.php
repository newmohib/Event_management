<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');

		//echo "ok";
	}

	public function mywelcome()
	{
		$this->load->view('mywelcome');
		$query = $this->db->query('SELECT id, username,password FROM users'); 

		//echo "ok";
	}

	public function database()
	{
		
		//$query = $this->db->query('SELECT id, username,password FROM user'); 

         $this->load->model("welcome_user_model","getuser");
         $my='1';
        $result=$this->getuser->getuser($my);
        $this->load->view('welcome_user',array("users"=>$result));

		 
	}


	public function query_test_controller()
	{
		
		//$query = $this->db->query('SELECT id, username,password FROM user'); 

         $this->load->model("welcome_user_model");
        $result=$this->welcome_user_model->query_test_model();
        //$myuser=$result[0];
       // $myclient=$result[1];
       // $this->load->view('welcome_user',array("myuser"=>$myuser,"myclient"=>$myclient));
        $this->load->view('welcome_user',array("result"=>$result));
  

          

    //  foreach($myuser->result_array() as $row){   
    
  // echo $row["username"]."<br/>";


  //  }
	 
	}

}
