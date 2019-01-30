<?php
//session_start();
 // require_once("../../database/config_database.php");
  
/*===========update strt by query===========*/
require_once("role_class.php");

  if(isset($_POST["role_update"])){
    $role_id=trim($_POST["role_id"]);
    $role_name=trim($_POST["role_name"]);
    $user_password=trim($_POST["user_password"]);
    
    //$ok=trim(isset($_POST["select"])?$_POST["select"]: 0) ;

    $select=trim(isset($_POST["select"])?$_POST["select"]: 0) ;
    $create=trim(isset($_POST["create"])?$_POST["create"]: 0) ;
    $update=trim(isset($_POST["update"])?$_POST["update"]: 0) ;
    $delete=trim(isset($_POST["delete"])?$_POST["delete"]: 0) ;
    $alter=trim(isset($_POST["alter"])?$_POST["alter"]: 0) ;


    if($role_name==true && $user_password==true){

    $role_update=new role($role_name,$user_password,$select,$create,$update,$delete,$alter);
     $role_update->role_update($role_id);
     //header("location:../../home.php?role_success='succcessfuly save role'");
    //header("location:../../home.php?page=role");
    }else{
      //  $role_error="please enter right information ";
      //  header("location:../../home.php?role_error='$role_error'");
    }

}

/*===========upsate closs by query=========*/




/*======== for edit form and valu set===========*/
if(isset($_POST["role_edit"])){

     $user_id=$_SESSION["id"];
	 $role_id=$_SESSION["role_id"];
	 $username=$_SESSION["username"];
     
     $r_id=trim($_POST["role_id"]);

	  

	  global $db;

	   $show_all_role=$db->query("select r.id,r.name,r.date,r.user_id,r.Ucreate,r.Uupdate,r.Udelete,r.Uselect,r.Ualter from role r where r.id=$r_id");
	   /*======== for table one =======*/
echo "<div class='row'>
        <label class='col-sm-2 form-control-label'>Role Update form</label>
        <div class='col-11 col-lg-10  col-md-10  col-sm-10'>
            <div class='card'>
                <div class='card-header d-flex align-items-center'>
                    <h4>Role Form</h4>
                </div>
                <div class='card-body'>
                    <form action='#' method='post'>
                        <div class='col-lg-11 col-md-11  col-sm-10'>";

	   /*======== for table closs=======*/

	   while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter)=$show_all_role->fetch_row()){
     //    echo "$_id | $_name | $_date | $u_user_id | $_Ucreate | $_Uupdate | $_Udelete | $_Uselect | $_Ualter.<br>";
         $create=$_Ucreate==1 ? 'checked':'' ;
         $update=$_Uupdate==1 ? 'checked':'' ;
         $delete=$_Udelete==1 ? 'checked':'' ;
         $select=$_Uselect==1 ? 'checked':'' ;
         $alter=$_Ualter==1 ? 'checked':'' ;

         echo "<div class='form-group-material'>
                                <input id='role-name' type='text' name='role_id' required class='input-material form-control-plaintext' value='$_id' readonly>
                                <label for='role-name' class='label-material'>ID</label>
                            </div>

                            <div class='form-group-material'>
                                <input id='role-name' type='text' name='role_name' required class='input-material' value='$_name'>
                                <label for='roll-user' class='label-material'>Role Name</label>
                            </div>

                            <div class='form-group-material'>
                                <input id='roll-user' type='password' name='user_password' required class='input-material'>
                                <label for='roll-user' class='label-material'>User Password</label>
                            </div>
                            <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='up1' value='1' name='select' ".$select." >
                                <label class='custom-control-label' for='up1'>View</label>
                            </div>

                            <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='up2' value='1' name='create' ".$create.">
                                <label class='custom-control-label' for='up2'>Create</label>
                            </div>
                            <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='up3' value='1' name='update' ".$update.">
                                <label class='custom-control-label' for='up3'>Update</label>
                            </div>
                            <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='up4' value='1' name='delete' ".$delete.">
                                <label class='custom-control-label' for='up4'>Delete</label>
                            </div>
                            <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='up5' value='1' name='alter' ".$alter.">
                                <label class='custom-control-label' for='up5'>Alter</label>
                            </div>";

      }
      /*========while closs=========*/
/*======== for form tow=======*/
                 echo     "</div>
                        <div class='form-group'>
                            <input type='submit' value='update' class='btn btn-info' name='role_update'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>";

/*======== for table tow closs=======*/
}
/*========isset closs=========*/
?>

<?php
 if(!isset($_POST["role_edit"])){
?>

<div class="row">
        
        <div class="col-11 col-lg-10  col-md-10  col-sm-10">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Role Form</h4>
                </div>
                <div class="card-body">
                    <form action="pages/role/role_lib.php" method="post">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="role-name" type="text" name="role_name" required class="input-material">
                                <label for="role-name" class="label-material">Name</label>
                            </div>
                            <div class="form-group-material">
                                <input id="roll-user" type="password" name="user_password" required class="input-material">
                                <label for="roll-user" class="label-material">User Password</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" style="" id="chec1" value="1" name="select" >
                                <label class="custom-control-label" for="chec1">Select</label>
                            </div>

                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="chec2" value="1" name="create">
                                <label class="custom-control-label" for="chec2">Create</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="chec3" value="1" name="update">
                                <label class="custom-control-label" for="chec3">Update</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="chec4" value="1" name="delete">
                                <label class="custom-control-label" for="chec4">Delete</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="chec5" value="1" name="alter">
                                <label class="custom-control-label" for="chec5">Alter</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-info" name="role_submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}

?>

    <?php
require_once("role_class.php");
       role::update_role_show_all();
//echo "i am ok"
    ?>