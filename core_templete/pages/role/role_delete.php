<?php
require_once("role_class.php");


if(isset($_POST["role_delete"])){

     $user_id=$_SESSION["id"];
	 $role_id=$_SESSION["role_id"];
	 $username=$_SESSION["username"];
     
     $r_id=trim($_POST["role_id"]);

	//  global $db;

role::delete_role($r_id);

}
//if(isset($_GET["$delete_succss"])){
//	echo $delete_succss;
//}
?>