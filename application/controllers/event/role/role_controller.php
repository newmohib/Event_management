<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_controller extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
        $this->load->model("event/role/role_model");
    }

	
	public function index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$this->load->view('event/role/role_form');
		$this->load->view('event/header/footer');
		
	}

	function role_save_contr(){

		//echo "$name $email $phone $address $username $password";

		$role_insert_id=$this->role_model->role_save();
		
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		if ($role_insert_id) {
			redirect("event/role/Role_controller/role_show_all_controller");
		}
			
		

		 
		
	}

	

	function role_show_all_controller(){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');

			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$role_view=$this->role_model->role_show_all_model();
			$this->load->view('event/role/role_view',array("role_view"=>$role_view));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');
		
			

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		

		 
		
	}

	

	function role_edit($role_id){
	//$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');
		
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$role_edit_data=$this->role_model->role_edit($role_id);
			$this->load->view('event/role/role_edit_form',array("role_edit_data"=>$role_edit_data));
			//$this->load->view('event/client/client_signup_form');
			$this->load->view('event/header/footer');

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");


	}

	function role_update(){

		//echo "$name $email $phone $address $username $password";

		$role_update_id=$this->role_model->role_update();
		
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		if ($role_update_id) {
			//redirect("event/role/Role_controller");

			redirect("event/role/Role_controller/role_show_all_controller");
		}
			
		

		 
		
	}

	function role_delete($role_id){

			$role_delete_success=$this->role_model->role_delete($role_id);
			if ($role_delete_success) {
				redirect("event/role/Role_controller/role_show_all_controller");
			}
		
	}
	
	}

