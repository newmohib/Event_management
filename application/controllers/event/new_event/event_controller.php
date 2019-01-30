<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_controller extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
        $this->load->model("event/new_event/Event_model");
    }

	
	public function index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$event_create_form_data=$this->Event_model->event_create_form_data();
		$this->load->view('event/new_event/event_create_form' ,array("event_create"=>$event_create_form_data) );
		$this->load->view('event/header/footer');
		
	}



	function event_save_controller(){
		
		$this->form_validation->set_rules('e_name', 'Event Name', 'required');
		$this->form_validation->set_rules('e_title','Event Title' , 'required');
		$this->form_validation->set_rules('location','Event location' , 'required');
		$this->form_validation->set_rules('start_datetime','Start Datetime' , 'required');
		$this->form_validation->set_rules('end_datetime','Start Datetime' , 'required');
		$this->form_validation->set_rules('total_attendance','Possword' , 'required');
		$this->form_validation->set_rules('password','Possword' , 'required');		
		 
		 if ($this->form_validation->run() == TRUE){
         $sess_username = $this->session->userdata('username');
         $sess_id = $this->session->userdata('role_id');
         $sess_password = $this->session->userdata('password');

          $e_name=$this->input->post("e_name");
          $form_password=$this->input->post("password");

		//echo "$name $email $phone $address $username $password";
           if ($form_password===$sess_password) {

           	$event_insert_id=$this->Event_model->event_create_form_save();
              
              if ($event_insert_id==TRUE) {

				  redirect("event/new_event/Event_controller/event_save_controller_after/$event_insert_id");
				}

           }
		
		//echo $client_insert_id;
		 // $this->load->view('event/login/login_view',array("users"=>$result));
		
		

		 }else{
		 	redirect("event/new_event/Event_controller");
		 }
		
	}

	function event_save_controller_after($event_insert_id){
	
		if ($event_insert_id==TRUE) {
			$this->load->view('event/header/sidebar');
			$this->load->view('event/header/header_top');
			$this->load->view('event/new_event/event_save_view_after',array("event_insert_id"=>$event_insert_id));
			//$this->load->view('event/new_event/event_create_form' ,array("event_create"=>$event_create_form_data) );
			$this->load->view('event/header/footer');

			//redirect("event/client/Client_controller/client_signup/$client_insert_id");
		}

		 
		
	}



		public function event_transport_form()
			{
				$this->load->view('event/header/sidebar');
				$this->load->view('event/header/header_top');
				$event_create_form_data=$this->Event_model->event_create_form_data();
				$this->load->view('event/new_event/event_transport_form' ,array("event_create"=>$event_create_form_data) );
				$this->load->view('event/header/footer');
				
			}





	function event_transpor_save_controller(){
		
			//$this->form_validation->set_rules('t_name', 'Event Name', 'required');
			//$this->form_validation->set_rules('event','Event Title' , 'required');
			//$this->form_validation->set_rules('seat_capacity','Event seat capacity' , 'required');
			$this->form_validation->set_rules('password','Possword' , 'required');		
			 
			 if ($this->form_validation->run() == TRUE){
	         $sess_id = $this->session->userdata('id');
	         $sess_id = $this->session->userdata('role_id');
	         $sess_password = $this->session->userdata('password');

	          $form_password=$this->input->post("password");

			//echo "$name $email $phone $address $username $password";
	           if ($form_password===$sess_password) {

	           	$event_transport_insert_id=$this->Event_model->event_transport_form_save();
	              
	              if ($event_transport_insert_id==TRUE) {

					  redirect("event/new_event/Event_controller/event_transprt_save_after/$event_transport_insert_id");
					}

	           }

			 }else{
			 	redirect("event/new_event/Event_controller/event_transport_form");
			 }
		
	}



  function event_transprt_save_after($event_tranport_insert_id){
	
				if ($event_tranport_insert_id==TRUE) {
					$this->load->view('event/header/sidebar');
					$this->load->view('event/header/header_top');
					$this->load->view('event/new_event/event_transprt_view_after',array("event_tranport_insert_id"=>$event_tranport_insert_id));
					$this->load->view('event/header/footer');
				}	
			}



			public function event_guid_form()
			{
				$this->load->view('event/header/sidebar');
				$this->load->view('event/header/header_top');
				$event_create_form_data=$this->Event_model->event_create_form_data();
				$this->load->view('event/new_event/event_guid_form' ,array("event_create"=>$event_create_form_data) );
				$this->load->view('event/header/footer');
				
			}


			function event_guid_save_controller(){
		
			$this->form_validation->set_rules('password','Possword' , 'required');		
			 
			 if ($this->form_validation->run() == TRUE){
	         $sess_id = $this->session->userdata('id');
	         $sess_id = $this->session->userdata('role_id');
	         $sess_password = $this->session->userdata('password');

	          $form_password=$this->input->post("password");

			//echo "$name $email $phone $address $username $password";
	           if ($form_password===$sess_password) {

	           	$event_transport_insert_id=$this->Event_model->event_guid_save();
	              
	              if ($event_transport_insert_id==TRUE) {

					  redirect("event/new_event/Event_controller/event_transprt_save_after/$event_transport_insert_id");
					}

	           }

			 }else{
			 	redirect("event/new_event/Event_controller/event_transport_form");
			 }
		
	}




			public function event_performers_form()
			{
				$this->load->view('event/header/sidebar');
				$this->load->view('event/header/header_top');
				$event_create_form_data=$this->Event_model->event_create_form_data();
				$this->load->view('event/new_event/event_performers_form' ,array("event_create"=>$event_create_form_data) );
				$this->load->view('event/header/footer');
				
			}


			function event_performers_save_controller(){
		
			$this->form_validation->set_rules('password','Possword' , 'required');		
			 
			 if ($this->form_validation->run() == TRUE){
	         $sess_id = $this->session->userdata('id');
	         $sess_role_id = $this->session->userdata('role_id');
	         $sess_password = $this->session->userdata('password');

	          $form_password=$this->input->post("password");

			//echo "$name $email $phone $address $username $password";
	           if ($form_password===$sess_password) {

	           	$event_transport_insert_id=$this->Event_model->event_performers_save();
	              
	              if ($event_transport_insert_id==TRUE) {

					  redirect("event/new_event/Event_controller/event_transprt_save_after/$event_transport_insert_id");
					}

	           }

			 }else{
			 	redirect("event/new_event/Event_controller/event_performers_form");
			 }
		
	}



			public function event_speker_form()
			{
				$this->load->view('event/header/sidebar');
				$this->load->view('event/header/header_top');
				$event_create_form_data=$this->Event_model->event_create_form_data();
				$this->load->view('event/new_event/event_speker_form' ,array("event_create"=>$event_create_form_data) );
				$this->load->view('event/header/footer');
				
			}



		function event_speker_save_controller(){
		
			$this->form_validation->set_rules('password','Possword' , 'required');		
			 
			 if ($this->form_validation->run() == TRUE){
	         $sess_id = $this->session->userdata('id');
	         $sess_role_id = $this->session->userdata('role_id');
	         $sess_password = $this->session->userdata('password');
	          $form_password=$this->input->post("password");

	           if ($form_password===$sess_password) {
	             	$event_speker_insert_id=$this->Event_model->event_speker_save();
	                  if ($event_speker_insert_id==TRUE) {

					    redirect("event/new_event/Event_controller/event_transprt_save_after/$event_speker_insert_id");
					  }

	           }

			 }else{
			 	redirect("event/new_event/Event_controller/event_speker_form");
			 }
		
	}		




    

    public function event_payment_show_form()
			{
				$this->load->view('event/header/sidebar');
				$this->load->view('event/header/header_top');
				$event_create_form_data=$this->Event_model->event_create_form_data();
				$this->load->view('event/new_event/event_payment_show_form' ,array("event_create"=>$event_create_form_data) );
				$this->load->view('event/header/footer');
				
			}






			 public function event_payment_create_form()
			{
				$this->load->view('event/header/sidebar');
				$this->load->view('event/header/header_top');
				$event_payment_create_data=$this->Event_model->event_payment_create_data();
				$event_create_form_data=$this->Event_model->event_create_form_data();
				$this->load->view('event/new_event/event_payment_create_form' ,array("event_create"=>$event_payment_create_data ,"event_create_form_data"=>$event_create_form_data ) );
				$this->load->view('event/header/footer');
				
			}



















	function query_test(){
		 
		$event_create_form_data=$this->Event_model->event_create_form_data();
		foreach($event_create_form_data['event_trans']->result_array() as $row){   
        echo $row["id"]."<br>";
       }
        //echo count($event_create_form_data);

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

