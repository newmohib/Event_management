<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_controller extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
        $this->load->model("event/client/Client_model");
    }

	
	public function index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$this->load->view('event/client/client_signup_form');
		$this->load->view('event/header/footer');
		
	}

	function client_signup_save(){
		
		$this->form_validation->set_rules('client_name', 'Name', 'required');
		$this->form_validation->set_rules('client_email','Email' , 'required');
		$this->form_validation->set_rules('client_phone','Pohen' , 'required');
		$this->form_validation->set_rules('client_address','Address' , 'required');
		$this->form_validation->set_rules('client_username','Username' , 'required');
		$this->form_validation->set_rules('client_password','Possword' , 'required');
		
		 if ($this->form_validation->run() == TRUE){

		$name=$this->input->post("client_name");
		$email=$this->input->post("client_email");
		$phone=$this->input->post("client_phone");
		$address=$this->input->post("client_address");
		$username=$this->input->post("client_username");
		$password=$this->input->post("client_password");

		//echo "$name $email $phone $address $username $password";

		$this->load->model("event/client/Client_model","client_signup");
		$client_insert_id=$this->client_signup->client_save($name,$email,$phone,$address,$username,$password);
		//echo $client_insert_id;
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		
		if ($client_insert_id==TRUE) {

			redirect("event/client/Client_controller/client_signup_save_after/$client_insert_id");
		}

		 }else{
		 	redirect("event/client/Client_controller");
		 	echo "wrong input";
		 }
		
	}

	function client_signup_save_after($client_insert_id){
	
		if ($client_insert_id==TRUE) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			$this->load->view('event/client/client_signup_success',array("client_insert"=>$client_insert_id));
			$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		}

		 
		
	}

	function client_show_all_controller(){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		if ($role_id) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$client_show_all=$this->Client_model->client_show_all_model();
			$this->load->view('event/client/client_show_all',array("client_show_all"=>$client_show_all));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}else{
			redirect("event/login/Login_controller");
		}
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		

		 
		
	}

	function client_update_controller($clint_id){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		if ($role_id) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$client_show_all=$this->Client_model->client_show_all_model();
			$this->load->view('event/client/client_show_all',array("client_show_all"=>$client_show_all));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}else{
			redirect("event/login/Login_controller");
		}
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");


	}


	function client_delete_controller($clint_id){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		if ($role_id) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$client_show_all=$this->Client_model->client_show_all_model();
			$this->load->view('event/client/client_show_all',array("client_show_all"=>$client_show_all));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}else{
			redirect("event/login/Login_controller");
		}
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		

		 
		
	}








	public function client_signup_short()
	{
		
		$this->form_validation->set_rules('client_name', 'Name', 'required');
		$this->form_validation->set_rules('client_email','Email' , 'required');
		$this->form_validation->set_rules('client_phone','Pohen' , 'required');
		$this->form_validation->set_rules('client_address','Address' , 'required');
		$this->form_validation->set_rules('client_username','Username' , 'required');
		$this->form_validation->set_rules('client_password','Possword' , 'required');
		
		 if ($this->form_validation->run() == TRUE){

		$name=$this->input->post("client_name");
		$email=$this->input->post("client_email");
		$phone=$this->input->post("client_phone");
		$address=$this->input->post("client_address");
		$username=$this->input->post("client_username");
		$password=$this->input->post("client_password");

		//echo "$name $email $phone $address $username $password";

		//$this->load->model("event/client/Client_model","client_signup");
		//$client_insert_id=$this->client_signup->client_save($name,$email,$phone,$address,$username,$password);

				$client_insert_id=$this->Client_model->client_save($name,$email,$phone,$address,$username,$password);

		//echo $client_insert_id;
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		
		if ($client_insert_id==TRUE) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			$this->load->view('event/client/client_signup_success',array("client_insert"=>$client_insert_id));
			$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}

		 }else{
		 	redirect("event/client/Client_controller");
		 	echo "wrong input";
		 }
		
	}

	
	}

