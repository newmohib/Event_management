<?php session_start();
 require_once("../../database/config_database.php");
 //$db=new mysqli("localhost","root","","university_core");
 if(isset($_SESSION["id"])){
       $id=$_SESSION["id"];
	   $username=$_SESSION["username"];
	   $status=$_SESSION["status"];
	  // echo $_SESSION['username'];
	 //  echo $_SESSION['id'];
	  // echo $_SESSION['status'];
	  $active_update=$db->query("update users set current_active='0' where username='$username' and id='$id'");
	//  $result=$db->query("select current_active from users where id='$id'");
	//  list($active)=$result->fetch_row();
	

  
 if($active_update){
  unset($_SESSION["id"]);
  unset($_SESSION["username"]);
  unset($_SESSION["status"]);
  unset($_SESSION["role_id"]);
  session_destroy();
  header("location:../../../index.php");

 }
}

//applicant logout

if(isset($_SESSION["app_id"])){
    

	  // echo $_SESSION['username'];
	 //  echo $_SESSION['id'];
	  // echo $_SESSION['status'];
	//  $active_update=$db->query("update users set current_active='0' where username='$username' and id='$id'");
	//  $result=$db->query("select current_active from users where id='$id'");
	//  list($active)=$result->fetch_row();

	   //  $_SESSION["app_id"]=$app_id;
	   // $_SESSION["app_username"]=$app_username;
	   // $_SESSION["app_password"]=$app_password;
		//$_SESSION["app_status"]=$app_status;
		//$_SESSION["app_role_id"]=$app_role_id;

  
 if($active_update){
  unset($_SESSION["app_id"]);
  unset($_SESSION["app_username"]);
  unset($_SESSION["app_password"]);
  unset($_SESSION["app_status"]);
  unset($_SESSION["app_role_id"]);
  session_destroy();
  header("location:../../../index.php");

 }
}


//student start logout



if(isset($_SESSION["s_id"])){
      // $id=$_SESSION["id"];
	  // $username=$_SESSION["s_username"];
	  // $status=$_SESSION["s_password"];

	 // $active_update=$db->query("update users set current_active='0' where username='$username' and id='$id'");
	
       // $_SESSION["s_id"]=$_id;
	   // $_SESSION["username"]=$_username;
        // $_SESSION["s_username"]=$_username;
		//$_SESSION["_password"]=$_password;
		//$_SESSION["s_password"]=$_password;
		//$_SESSION["role_id"]=$role_id;
		//$_SESSION["s_role_id"]=$role_id;
  
 if($active_update){
  unset($_SESSION["s_id"]);
  unset($_SESSION["s_username"]);
  unset($_SESSION["s_password"]);
  unset($_SESSION["s_role_id"]);
  session_destroy();
  header("location:../../../index.php");

 }
}



//guardine_btnLogin
  

  if(isset($_SESSION["g_id"])){
      // $id=$_SESSION["id"];
	  // $username=$_SESSION["s_username"];
	  // $status=$_SESSION["s_password"];

	 // $active_update=$db->query("update users set current_active='0' where username='$username' and id='$id'");
	
       $_SESSION["g_id"]=$_id;
	    $_SESSION["g_username"]=$_username;
		$_SESSION["g_password"]=$_password;
		$_SESSION["g_role_id"]=$role_id;
  
 if($active_update){
  unset($_SESSION["g_id"]);
  unset($_SESSION["g_username"]);
  unset($_SESSION["g_password"]);
  unset($_SESSION["g_role_id"]);
  session_destroy();
  header("location:../../../index.php");

 }
}
?>