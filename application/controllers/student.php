<?php
 
 class Student extends CI_Controller{
     
    
    function index(){
        
       //$this->load->database();      
        
        $this->load->model("StudentModel","student"); 
        $query=$this->student->getStudents();
        $this->load->view("student_view",array("students"=>$query));
    

    }//end index function


	function table(){
		
	   $this->load->library('table');        
	   $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );
       $this->table->set_template($tmpl);				
       $datadb=$this->db->query("select * from student");	
	   echo $this->table->generate($datadb);
	}
	
	
	function save(){
		$name=$this->input->post("txtName");
		
		
		
		$this->load->model("StudentModel","student");
		$this->student->Insert($name,'343434','Na');
	}
	
	
	function unit_test_insert(){
		
		$this->load->model("StudentModel","student");		
		$this->student->Insert('Saidul','343434','Na');
		
		
	}
	
	function unit_test_delete(){
		$this->load->model("StudentModel","student");	
		$this->student->Delete(1);
	}
	
	
	function unit_test_update(){
		
		$this->load->model("StudentModel","student");		
		$this->student->Update(2,'abcde','343434','Na');
		
		
	}
	
	
 }	

?>