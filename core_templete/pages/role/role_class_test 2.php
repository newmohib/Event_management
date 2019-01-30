<?php
//session_start();
//require_once("../../database/config_database.php");
class role{
  private $name;
  private $password;
  private $view;
  private $create;
  private $update;
  private $delete;
  private $alter;

  function __construct($_role_name,$_user_password,$_view,$_create,$_update,$_delete,$_alter){
	  
	  $this->name=$_role_name;
	  $this->password=$_user_password;
	  $this->view=$_view;
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
	  list($_user_id,$_password)=$result->fetch_row();



/* for  insert*/
       if($_password==$this->password && $role_id==0 || $role_id==1){
	  $db->query("insert into role(name,user_id,Ucreate,Uupdate,Udelete,Uselect,Ualter)values('$this->name','$_user_id','$this->view','$this->create','$this->update','$this->delete','$this->alter')");
	 // return $db->insert_id;
	  echo "successfull insert";
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

	   $show_all_role=$db->query("select r.id,r.name,r.date,r.user_id,r.Ucreate,r.Uupdate,r.Udelete,r.Uselect,r.Ualter,u.id,u.username from users u,role r where u.id=r.user_id");
	   echo "<div class='row'>
<header> 
<h1 class='h3 display'>Role</h1>
</header>
<div class='col-lg-10'>
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

            
	   while(list($_id,$_name,$_date,$u_user_id,$_Ucreate,$_Uupdate,$_Udelete,$_Uselect,$_Ualter,$u_id,$_username)=$show_all_role->fetch_row()){
            
         
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
                   </tr>";
           
         } 
        echo "</tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>
</div>";
	  
  }




/*================ with table closs============*/

}

/*=======class closs======*/



//if(isset($role_id)){
 //     	echo "$_username";
      	//continue;
 //     }
?>