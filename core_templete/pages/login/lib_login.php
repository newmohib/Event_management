<?php
 session_start();
 require_once("../../database/config_database.php");
//$db=new mysqli("localhost","root","","university_core");
 
 if(isset($_POST["btnLogin"])){
	$username=trim($_POST["username"]);
	$password=trim($_POST["possword"]);
	  
global $db;
	$user_table=$db->query("select u.id,u.username,u.password,u.status,role_id from users u where username='$username' and password='$password'");


	list($_id,$_username,$_password,$status,$role_id)=$user_table->fetch_row();
  
	if($_username==$username){
		
	    $_SESSION["id"]=$_id;
	    $_SESSION["username"]=$_username;
		$_SESSION["status"]=$status;
		$_SESSION["role_id"]=$role_id;
	   // echo $_SESSION["username"];
	   $a=$db->query("update users set current_active='1' where username='$_username'");



/*=========for test========*/
  $result=$db->query("select current_active from users where id='$_id'");
	  list($active)=$result->fetch_row();
	
	  
	  if(isset($active)){
	  	header("location:../../home.php");
	 
	  }
		
	}else{
	 
	  echo "your account is unactive, please wait some time";	
	}
 

}


//applicnt login from ===========================



	  if(isset($_POST["applicant_btnLogin"])){
	$username=trim($_POST["username"]);
	$password=trim($_POST["possword"]);
	  
global $db;
	$user_table=$db->query("select u.id,u.s_username,u.s_password,u.s_status,u.s_role from {$ext}admission_apply u where s_username='$username' and s_password='$password'");


	list($app_id,$app_username,$app_password,$app_status,$app_role_id)=$user_table->fetch_row();
  
	if($app_username==$username and $password==$app_password and $app_status==true){
		
	    $_SESSION["app_id"]=$app_id;
	    $_SESSION["app_username"]=$app_username;
	    $_SESSION["app_password"]=$app_password;
		$_SESSION["app_status"]=$app_status;
		$_SESSION["app_role_id"]=$app_role_id;
	   
	 //  $a=$db->query("update users set current_active='1' where username='$_username'");
	  	$_SESSION["app_info_show"]=$app_id;
	  	header("location:../../index.php");
	}else{
	  
	  //echo "your account is inactive, please wait some time";	
	   header("location:../students/applicant_login.php?account_error='Your username or Password Wrong'");
	}
 

}




//student login form ===================================

	  if(isset($_POST["student_btnLogin"])){
	$username=trim($_POST["username"]);
	$password=trim($_POST["possword"]);
	  
global $db;
global $ext;
	$user_table=$db->query("select id,s_username,s_password,s_role from {$ext}final_student where s_username='$username'");


	list($_id,$_username,$_password,$role_id)=$user_table->fetch_row();
  
	if($_username==$username){
		
	    $_SESSION["s_id"]=$_id;
	    $_SESSION["username"]=$_username;
        // $_SESSION["s_username"]=$_username;
		$_SESSION["_password"]=$_password;
		//$_SESSION["s_password"]=$_password;
		$_SESSION["role_id"]=$role_id;
		//$_SESSION["s_role_id"]=$role_id;
	  
	  	header("location:../../index.php");

		}else{
		  header("location:../students_final/student_login.php?account_error='Your username or Password Wrong'");

	    }
 

	  }


//guardine login form


	  if(isset($_POST["guardine_btnLogin"])){
	$username=trim($_POST["username"]);
	$password=trim($_POST["possword"]);
	  
global $db;
global $ext;
	$user_table=$db->query("select id,username,password,role_id from {$ext}users where username='$username' and possword='$password'");


	list($_id,$_username,$_password,$role_id)=$user_table->fetch_row();
  
	if($_username==$username){
		
	    $_SESSION["g_id"]=$_id;
	    $_SESSION["g_username"]=$_username;
		$_SESSION["g_password"]=$_password;
		$_SESSION["g_role_id"]=$role_id;
	  
	  	header("location:../../index.php");
	  	
		}else{
		  header("location:../students_final/student_login.php?account_error='Your username or Password Wrong'");

	    }
 

	  }



	
?>
