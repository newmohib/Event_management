<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('event/header/sidebar');
		//$this->load->view('event/header/header_top');
		//$this->load->view('event/test_view');
		//$this->load->view('event/header/footer');
		$this->load->view('event/login_view/login_form_view');

	}

	public function login_form()
	{
		$this->load->view('event/login_view/login_form_view');
		//$query = $this->db->query('SELECT id, username,password FROM user'); 

		//echo "ok";
	}

	public function login_session()
	{

		//$this->load->library('session');
		//$this->load->database();
		//$this->db->close();
		//$this->form_validation->set_rules('username', 'Username', 'required|regex_match[/^[a-zA-Z]{3,}$/]');
       // $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
       // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
       // $this->form_validation->set_rules('email', 'Email', 'valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('possword','Possword' , 'required');

        if ($this->form_validation->run() == TRUE)
        {
            // Data should send to  the database
           // $username=$this->input->post("username",TRUE);
           // $password=$this->input->post("password");
           // $rpassword=$this->input->post("passconf");
           // $email=$this->input->post("email");

        $username=$this->input->post("username");
		$password=$this->input->post("possword");
		//databse
		$this->load->model("event/login/login_model","getuser"); 
        $result=$this->getuser->getuser($username);

        // $this->load->view('event/login/login_view',array("users"=>$result))
        foreach($result->result_array() as $row){   

		    $_id=$row["id"];
		    $_username=$row["username"];
		    $_password=$row["password"];
		    $role_id=$row["role_id"];
		    
		  //  echo "$_id $_username $_password $role_id";
		 //   echo "<br>";
             
             if ( $username===$_username && $password===$_password) {
                 	$this->session->set_userdata('username',$username);
		           $this->session->set_userdata('password',$password);
		           $this->session->set_userdata('role_id', $role_id);
		           $this->session->set_userdata('id',$_id);

		           redirect("header_controller/login_index");

		          // $role_id = $this->session->userdata('role_id');
		          // echo $role_id;
		           //$password = $this->session->userdata('password');
		           //$id = $this->session->userdata('id');
		           //$role_id = $this->session->userdata('role_id');
             }else{

             	$this->load->view('event/login_view/login_form_view');
             }
		    

         }
 // for closs

		}else{
			$this->load->view('event/login_view/login_form_view');
		}
       
		//$this->session->set_userdata('username', '$username');
		//$this->session->set_userdata('password', '$password');
		// redirect("login/UserController/home");
	}


	public function logout()
	{
		$this->load->library('session');
		$this->load->database();
		//$this->db->close();


       $this->session->unset_userdata('username');
       $this->session->unset_userdata('password');
       $this->session->unset_userdata('role_id');
       $this->session->unset_userdata('id');
       $this->session->sess_destroy();
       redirect("Header_controller/logout_index");
}
	public function database()
	{
		
		//$query = $this->db->query('SELECT id, username,password FROM user'); 

         $this->load->model("welcome_user_model","getuser"); 
        $result=$this->getuser->getuser();
        $this->load->view('welcome_user',array("users"=>$result));

        // redirect("/event/Header_controller");
		 
	}
}
