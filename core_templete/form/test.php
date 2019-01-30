<?php
 // $a=1;
  //$view=!isset($a)? 0: $a;
  //echo $view;
/*
 $_POST["view"]=1;

 $role_name=2;
 $user_password='';
 $user='';
 if($role_name==true && $user_password==true || $user==true){
  $ok=trim(isset($_POST["view"])?$_POST["view"]: 0) ;
  echo $ok.'<br>';
  echo $user;
 }else{
     echo "false";
 }
*/

 $ch=1;
 $check=$ch==1 ? 'checked':'0' ;
 //echo $check;

echo "<h1  ".$check." ></h1>";

$a='1';
$b='15';
$c='2018';
$birth_date=$a.'-'.$b.'-'.$c;
echo "$birth_date";
?>