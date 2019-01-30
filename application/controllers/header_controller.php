<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header_controller extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('event/header/sidebar');
		//$this->load->view('event/header/header_top');
		$this->load->view('event/front/front_index');
		//$this->load->view('event/header/footer');
	}

	public function admin_index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$this->load->view('event/welcome_codiegnitor');
		$this->load->view('event/header/footer');
	}

	public function login_index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$this->load->view('event/login_success_view');
		$this->load->view('event/header/footer');

		//echo "ok";
	}

	public function logout_index()
	{
		$this->load->view('event/header/sidebar');
		$this->load->view('event/header/header_top');
		$this->load->view('event/logout_success_view');
		$this->load->view('event/header/footer');

		//echo "ok";
	}

	public function mywelcome()
	{
		$this->load->view('mywelcome');
		$query = $this->db->query('SELECT id, username,password FROM user'); 

		//echo "ok";
	}

	public function database()
	{
		
		//$query = $this->db->query('SELECT id, username,password FROM user'); 

         $this->load->model("welcome_user_model","getuser"); 
        $result=$this->getuser->getuser();
        $this->load->view('welcome_user',array("users"=>$result));

		 
	}
}
