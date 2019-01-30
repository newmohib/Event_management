<?php
class User{
  private $username;
  private $password;
  private $role_id;
  private $inactive;

  function __construct($_username,$_password,$_role_id,$_inactive=0){
	  
	  $this->username=$_username;
	  $this->password=$_password;
	  $this->role_id=$_role_id;
	  $this->inactive=$_inactive; 
  }
  



  /*==========old============*/
  public function save(){	  
	  global $db;
	  $db->query("insert into user(username,password,role_id,inactive)values('$this->username','$this->password','$this->role_id','$this->inactive')");
	  return $db->insert_id;
  }
  
  public function update($_id){
	  global $db;
	  $db->query("update user set username='$this->username',password='$this->password',role_id='$this->role_id',inactive='$this->inactive' where id='$_id'");
		 
  }
  
  public static function delete($_id){
	  
	  global $db;
	  $db->query("delete from user where id='$_id'");
	
  }
  
  public static function show_all(){
	  /*
	  global $db;
	  $result=$db->query("select u.id,u.username,u.password,r.name,u.inactive from user u,role r where r.id=u.role_id");
	  while(list($id,$username,$password,$role,$inactive)=$result->fetch_row()){
		 
       $status=	$inactive==0?"Active":"Inactive";	

      echo "$id | $username | $password | $role | $status <br/>";
	   		  
	  }*/
	  
	  global $db;
	   $con_table=$db->query("select u.id,u.username,u.password,r.name,u.inactive from user u,role r where r.id=u.role_id");
   
   echo "<table class='table'>";
   echo "<tr><th>Id</th><th>Username</th><th>Password</th><th>Role</th><th>Status</th><th>&nbsp;</th></tr>";
   
   while(list($id,$username,$password,$rolename,$inactive)=$con_table->fetch_row()){
	   
	   //$added_on=date("d M Y h:i A",strtotime($added_on));
	   $status=$inactive==0?"Active":"Inactive";
	   
	 echo "<tr><td>$id</td><td>$username</td><td>$password</td><td>$rolename</td><td>$status</td><td><form action='home.php?page=3' method='post' style='display:inline'>
<input type='hidden' name='txtId' value='5' />
<input type='submit' name='btnEdit' class='material-icons red600' value='edit'>
</form><form action='home.php?page=5' method='post' style='display:inline' onsubmit='return confirm(\"Are you sure?\")'><input type='hidden' name='txtId' value='$id' /><input type='submit' name='btnDelete' class='material-icons red600' value='delete'></form></td></tr>";  
   }
   
   echo "</table>";
	  
	  
	  
  }
  
  public static function show($_id){
	  
	  global $db;
	  $result=$db->query("select u.id,u.username,u.password,r.name,u.inactive from user u,role r where r.id=u.role_id where u.id='$_id'");
	  while(list($id,$username,$password,$role,$inactive)=$result->fetch_row()){
		 
      $status=	$inactive==0?"Active":"Inactive";
      echo "Id: $id <br/> User Name: $username <br/> Password: $password <br/> Role: $role <br/> Status: $status <br/><br/>";
	   		  
	 }
	  
  }


}//end class


//$user=new User('mohib','34343','1');
//$user->save();