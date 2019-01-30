<?php
  //session_start();
  require_once("../../database/config_database.php");
 // require_once("database/config_database.php");
  require_once("role_class.php");

  if(isset($_POST["role_submit"])){
	$role_name=trim($_POST["role_name"]);
	$user_password=trim($_POST["user_password"]);
    
    //$ok=trim(isset($_POST["select"])?$_POST["select"]: 0) ;

	$select=trim(isset($_POST["select"])?$_POST["select"]: 0) ;
	$create=trim(isset($_POST["create"])?$_POST["create"]: 0) ;
	$update=trim(isset($_POST["update"])?$_POST["update"]: 0) ;
	$delete=trim(isset($_POST["delete"])?$_POST["delete"]: 0) ;
	$alter=trim(isset($_POST["alter"])?$_POST["alter"]: 0) ;


    if($role_name==true && $user_password==true){

	$role_user=new role($role_name,$user_password,$create,$update,$delete,$select,$alter);
	 $role_user->save();
	 header("location:../../home.php?role_success='succcessfuly save role'&page=role");
	//header("location:../../home.php?page=role&&role_success='succcessfuly save role'");
	}else{
		$role_error="please enter right information ";
		header("location:../../home.php?role_error='$role_error'");
	}

}


/*========for show all ===========*/


//role::show_all();

/*========isset clossd===========*/
?>