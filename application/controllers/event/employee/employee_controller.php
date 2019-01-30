<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_controller extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
        $this->load->model("event/employee/Employee_model");
    }

	
	public function index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$this->load->view('event/employee/employee_signup_form');
		$this->load->view('event/header/footer');
		
	}

	function employee_signup_save(){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email','Email' , 'required');
		$this->form_validation->set_rules('phone','Pohen' , 'required');
		$this->form_validation->set_rules('address','Address' , 'required');
		$this->form_validation->set_rules('username','Username' , 'required');
		$this->form_validation->set_rules('password','Possword' , 'required');
		
		 if ($this->form_validation->run() == TRUE){


		//echo "$name $email $phone $address $username $password";

		//$this->load->model("event/client/Client_model","client_signup");
		$employee_insert_id=$this->Employee_model->employee_save();
		//echo $client_insert_id;
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		
		if ($employee_insert_id==TRUE) {

			redirect("event/employee/employee_controller/employee_signup_save_after/$employee_insert_id");
		}

		 }else{
		 	redirect("event/employee/employee_controller");
		 	//echo "wrong input";
		 }
		
	}

	function employee_signup_save_after($employee_insert_id){
	
		if ($employee_insert_id==TRUE) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			$this->load->view('event/employee/employee_signup_success',array("employee_insert"=>$employee_insert_id));
			$this->load->view('event/employee/employee_signup_form');
			$this->load->view('event/header/footer');

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		}

		 
		
	}

	function employee_show_all_controller(){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		if ($role_id !=='7') {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$employee_show_all=$this->Employee_model->employee_show_all_model();
			$this->load->view('event/employee/employee_show_all',array("employee_show_all"=>$employee_show_all));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}else{
			redirect("event/login/Login_controller");
		}
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		

		 
		
	}

	function employee_show_indivitual_controller($emp_id){
	$role_id = $this->session->userdata('role_id');
	
	//$username = $this->session->userdata('username');
		if ($role_id) {
			
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$employee_show_indivitual=$this->Employee_model->employee_show_indivitual_model($emp_id);
			$this->load->view('event/employee/employee_show_all',array("employee_show_indivitual"=>$employee_show_indivitual));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}else{
			redirect("event/login/Login_controller");
		}
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		

		 
		
	}

	function employee_edit_controller($emp_id){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		if ($role_id) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$employee_edit_model=$this->Employee_model->employee_show_indivitual_model($emp_id);
			$this->load->view('event/employee/employee_signup_update_form',array("employee_edit_model"=>$employee_edit_model));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		}else{
			redirect("event/login/Login_controller");
		}
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");


	}

	function employee_updat_controller($emp_id){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email','Email' , 'required');
		$this->form_validation->set_rules('phone','Pohen' , 'required');
		$this->form_validation->set_rules('address','Address' , 'required');
		//$this->form_validation->set_rules('username','Username' , 'required');
		$this->form_validation->set_rules('password','Possword' , 'required');
		
		 if ($this->form_validation->run() == TRUE){


		//echo "$name $email $phone $address $username $password";

		//$this->load->model("event/client/Client_model","client_signup");
		$employee_update_success=$this->Employee_model->employee_update_model($emp_id);
		//echo $client_insert_id;
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		
		if ($employee_update_success==TRUE) {

			redirect("event/employee/employee_controller/employee_show_indivitual_controller/$emp_id");
		}

		 }else{
		 	redirect("event/employee/employee_controller");
		 	//echo "wrong input";
		 }
		
	}


	function employee_delete_controller($emp_id){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		if ($role_id) {
			//$this->load->view('event/header/sidebar');
			//$this->load->view('event/header/header_top');
			//model
			$employee_delete_model=$this->Employee_model->employee_delete_model($emp_id);
			if ($employee_delete_model) {
				redirect("event/employee/employee_controller/employee_show_all_controller");
			}else{
				redirect("event/employee/employee_controller/employee_show_all_controller");
			}
			//$this->load->view('event/employee/employee_show_all_controller');
			//$this->load->view('event/header/footer');
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

