<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_controller extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
        $this->load->model("event/ticket/ticket_model");
        $this->load->model("event/new_event/Event_model");
    }

	
	public function index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$event_create_form_data=$this->Event_model->event_create_form_data();

		$this->load->view('event/ticket/ticket_form' ,array("event_create"=>$event_create_form_data) );

		//$this->load->view('event/ticket/ticket_form');
		$this->load->view('event/header/footer');
		
	}

	function purchase_save_contr(){

		//echo "$name $email $phone $address $username $password";

		$insert_id=$this->ticket_model->purchase_save();
		
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		if ($insert_id) {
			redirect("event/ticket/Ticket_controller/purchase_ticket_view/$insert_id");
		}
			
		

		 
		
	}

	

	function purchase_ticket_view($ticket_event_insert_id){
	$role_id = $this->session->userdata('role_id');
	//$username = $this->session->userdata('username');

			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			//model
			$purchase_ticket_view=$this->ticket_model->purchase_ticket_view($ticket_event_insert_id);
			$event_create_form_data=$this->Event_model->event_create_form_data();

			$this->load->view('event/ticket/ticket_view',array("purchase_ticket_view"=>$purchase_ticket_view ,"event_create_form_data"=>$event_create_form_data));

			
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

