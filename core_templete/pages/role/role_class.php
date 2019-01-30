<?php
//session_start();
//require_once("../../database/config_database.php");
class role{
  private $name;
  private $password;
  private $select;
  private $create;
  private $update;
  private $delete;
  private $alter;

  function __construct($_role_name,$_user_password,$_create,$_update,$_delete,$_select,$_alter){
	  
	  $this->name=$_role_name;
	  $this->password=$_user_password;
	  $this->select=$_select;
	  $this->create=$_create; 

	  $this->update=$_update;
	  $this->delete=$_delete;
	  $this->alter=$_alter;
  }


  public function save(){
	session_start();	  
	  global $db;
	 $user_id=$_SESSION["id"];
	 $role_id=$_SESSION["role_id"];
      
      $result=$db->query("select u.id,u.password from users u where u.id='$user_id'");
	  while(list($_user_id,$_password)=$result->fetch_row()){



/* for  insert*/
       if($_password==$this->password && $role_id==0 || $role_id==1){
	  $db->query("insert into role(name,user_id,Ucreate,Uupdate,Udelete,Uselect,Ualter)values('$this->name','$_user_id','$this->select','$this->create','$this->update','$this->delete','$this->alter')");
	 // return $db->insert_id;
	  echo "successfull insert";
	}
   }
  }

  /* ======== insert is closs======*/

  /*========show all=========*/
 
 /*  
   public static function show_all(){
	//session_start();
	  $user_id=$_SESSION["id"];
	 $role_id=$_SESSION["role_id"];
	 $username=$_SESSION["username"];
	  

	  global $db;

	   $show_all_role=$db->query("select u.id,u.username,u.password,u.role_id,u.profile_id,u.last_login,u.faild_login,u.lastupdate,u.updateby,u.current_active,u.status,u.location,r.name,r.id from users u,role r where u.role_id=r.id");
            
	   while(list($_id,$_username,$_password,$_role_id,$_profile_id,$_last_login,$_faild_login,$_lastupdate,$_updateby,$_current_active,$_status,$_location,$_name,$r_id)=$show_all_role->fetch_row()){
            
            if($username!==$_username){
             echo "$_id | $_username | $_password | $_role_id | $_profile_id | $_last_login | $_faild_login | $_lastupdate | $_updateby | $_current_active | $_status | $_location | $_name | $r_id.<br>";
              }
           
         } 
        
	  
  }
  */
/*======= show all closs problem============*/



/*

 public static function show_all(){
	//session_start();
	  $user_id=$_SESSION["id"];
	 $role_id=$_SESSION["role_id"];
	 $username=$_SESSION["username"];
	  

	  global $db;

	   $show_all_role=$db->query("select r.id,r.name,r.date,r.user_id,r.Ucreate,r.Uupdate,r.Udelete,r.Uselect,r.Ualter,u.id,u.username from users u,role r where u.id=r.user_id");
            
	   while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter,$u_id,$_username)=$show_all_role->fetch_row()){
            
         //   if($username!==$_username){
             echo "$_id | $_name | $_date | $u_user_id | $_Ucreate | $_Uupdate | $_Udelete | $_Uselect | $_Ualter | $u_id | $_username.<br>";
         //     }
           
         } 
        
	  
  }
*/
/*================ with table============*/
public static function show_all(){
	//session_start();
	  $user_id=$_SESSION["id"];
	 $role_id=$_SESSION["role_id"];
	 $username=$_SESSION["username"];
	  

	  global $db;

	   $show_all_role=$db->query("select r.id,r.name,r.date,r.user_id,r.Ucreate,r.Uupdate,r.Udelete,r.Uselect,r.Ualter from role r");
	   echo "<div class='row'>

<div class='col-lg-12'>
              <div class='card'>
                <div class='card-header'>
                  <h4>Show All Role And Name</h4>
                </div>
                <div class='card-body'>
                  <div class='table-responsive'>
                    <table class='table table-striped table-hover'>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Create date</th>
                          <th>Creator ID</th>
                          <th>Create</th>
                          <th>Update</th>
                          <th>Delete</th>
                          <th>Select</th>
                          <th>Alter</th>
                        </tr>
                      </thead>
                      <tbody>";

            
	   while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter)=$show_all_role->fetch_row()){
            
         
        //     echo "$_id | $_name | $_date | $u_user_id | $_Ucreate | $_Uupdate | $_Udelete | $_Uselect | $_Ualter | $u_id | $_username.<br>";
         $create=$_Ucreate==1 ? 'checked':'' ;
         $update=$_Uupdate==1 ? 'checked':'' ;
         $delete=$_Udelete==1 ? 'checked':'' ;
         $select=$_Uselect==1 ? 'checked':'' ;
         $alter=$_Ualter==1 ? 'checked':'' ;
              echo "<tr>
                          <th scope='row'>$_id</th>
                          <td>$_name</td>
                          <td>$_date</td>
                          <td>$u_user_id</td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='create' ".$create.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='update' ".$update.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='delete' ".$delete.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='select' ".$select.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='alter' ".$alter.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                   </tr>";
           
         } 
  //========== wile loop closs=======       
 echo "</tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</div>";
	  
  }
/*================ show all  closs============*/

/*================ show one role with username  closs============*/

public static function show_one_role_with_userneme($role_id){
  //session_start();
   // $user_id=$_SESSION["id"];
  // $role_id=$_SESSION["role_id"];
  // $username=$_SESSION["username"];
    

    global $db;

     $show_all_role=$db->query("select r.id,r.name,r.date,r.user_id,r.Ucreate,r.Uupdate,r.Udelete,r.Uselect,r.Ualter,u.username from role r, users u where r.id=$role_id and r.user_id=u.id");
while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter,$_username)=$show_all_role->fetch_row()){
  echo "<br><br> only one id show for <br><br>";
  echo "<h4> id | name | date | user_id | Ucreate | Uupdate | Udelete | Uselect | Ualter | username</h4>";

   echo "<br><h5>$_id | $_name | $_date | $u_user_id | $_Ucreate | $_Uupdate | $_Udelete | $_Uselect | $_Ualter | $_username.</h5><br>";
}

}

/*================ show one role with username  closs============*/

/*================ delete one role strt============*/
public static function delete_role($role_id){
  //session_start();
   // $user_id=$_SESSION["id"];
  // $role_id=$_SESSION["role_id"];
  // $username=$_SESSION["username"];
    

    global $db;

     $show_all_role=$db->query("delete from role where role.id='$role_id'");
//while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter,$_username)=$show_all_role->fetch_row()){

  // echo "$_id | $_name | $_date | $u_user_id | $_Ucreate | $_Uupdate | $_Udelete | $_Uselect | $_Ualter | $_username.<br>";
//}
 //return $delete_succss="successfull deleted";
     echo "successfull deleted where ID $role_id";
}


/*================ delete onr role closs============*/


/*===============update start============*/
public function role_update($_id){
    global $db;
    $user_id=$_SESSION["id"];
   $role_id=$_SESSION["role_id"];
   $result=$db->query("select u.id,u.password from users u where u.id='$user_id'");
   list($_user_id,$_password)=$result->fetch_row();

   if($_password==$this->password){

    $db->query("update role set name='$this->name',user_id='$user_id',Ucreate='$this->create',Uselect='$this->select',Uupdate='$this->update',Udelete='$this->delete',Ualter='$this->alter' where id='$_id'");
     echo "successfull update";

  }else{
    echo "your password is wrong";
  }
}
/*===============update closs============*/


/*===============for update show start============*/
public static function update_role_show_all(){
  //session_start();
    $user_id=$_SESSION["id"];
   $role_id=$_SESSION["role_id"];
   $username=$_SESSION["username"];
    

    global $db;

     $show_all_role=$db->query("select r.id,r.name,r.date,r.user_id,r.Ucreate,r.Uupdate,r.Udelete,r.Uselect,r.Ualter from role r");

     echo "<div class='row'>

<div class='col-lg-12'>
              <div class='card'>
                <div class='card-header'>
                  <h4>Show All Role And Name</h4>
                </div>
                <div class='card-body'>
                  <div class='table-responsive'>
                    <table class='table table-striped table-hover'>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Create date</th>
                          <th>Creator ID</th>
                          <th>Create</th>
                          <th>Update</th>
                          <th>Delete</th>
                          <th>Select</th>
                          <th>Alter</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>";

            
     while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter)=$show_all_role->fetch_row()){
            
         
        //     echo "$_id | $_name | $_date | $u_user_id | $_Ucreate | $_Uupdate | $_Udelete | $_Uselect | $_Ualter | $u_id | $_username.<br>";
         $create=$_Ucreate==1 ? 'checked':'' ;
         $update=$_Uupdate==1 ? 'checked':'' ;
         $delete=$_Udelete==1 ? 'checked':'' ;
         $select=$_Uselect==1 ? 'checked':'' ;
         $alter=$_Ualter==1 ? 'checked':'' ;
              echo "<tr>
                          <th scope='row'>$_id</th>
                          <td>$_name</td>
                          <td>$_date</td>
                          <td>$u_user_id</td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' ".$create.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' ".$update.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' ".$delete.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' ".$select.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' ".$alter.">
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>

                        <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='role-name' type='hidden' name='role_id' value='$_id'>
                            <input type='submit' value='Edit' class='btn btn-info' name='role_edit'>
                          </div>
                       </form>

                          </td>
                          <td>

                       <form action='#' method='post'>
                          <div class='form-group'>
                            <input id='role-name' type='hidden' name='role_id' value='$_id'>
                            <input type='submit' value='Delete' class='btn btn-warning' name='role_delete'>
                          </div>
                       </form>

                         </td>
                   </tr>";
           //========== echo closs=======
         } 
  //========== wile loop closs=======       
 echo "</tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</div>";
    
  }


/*=============== for update show closs============*/

}
/*=======class closs======*/



//if(isset($role_id)){
 //     	echo "$_username";
      	//continue;
 //     }
?>