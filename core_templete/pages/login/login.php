<?php
if(isset($_GET['active'])){
$result=$_GET['active'];
echo "$result";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
*{margin:0;padding:0;}
body{
  background-color: #59778e;
  background-image: -webkit-radial-gradient(center, rgba(255,255,255,0.05) 50%, #59778e 50%);
  background-size: 10px 10px;  
}
.container{
  width: 300px;
  height: 300px;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top, #eee,#f8f8f8, #eee);
  margin: 10% auto;
  border-radius: 10px;
  border: 1px solid #566d7f;
  box-shadow: inset 0px 0px 0px 1px #fff, 0px 20px 15px -10px rgba(0,0,0,0.5);
  position: relative;
  overflow: hidden;

}
.container>label{
  position: absolute;
  top: 0;
  left:0;
  width: 0px;
  height: 0px;
  cursor: pointer;
}
.top, .bottom{
  width: 300px;
  height: 149px;
  display: block;
  background:#333;
  background:rgba(0,100,100,0.95);
  position: absolute;
  -webkit-transition: all 600ms;
  position: relative;
  box-shadow: inset 0px 0px 40px rgba(0,0,0,0.4);
}
.top{
  top: 0;
  border-bottom: 1px solid #222;
}
.top:before{
  content: '';
  width: 170px;
  height: 30px;
  display:block;
  background: rgba(0,140,100,1);
  position: absolute;
  left: 150px;
  bottom: -30px;
  z-index:100;
  -webkit-transform: skew(45deg);
  border-radius: 0px 0px 5px 5px;
  box-shadow: -1px 1px #111, 1px -1px #111, -2px 2px #444, 2px -2px #333;
}
.bottom{
  bottom:0;
  border-top: 1px solid #222;
}
.bottom:before{
  content: '';
  width: 170px;
  height: 30px;
  display:block;
  background: rgba(0,140,100,1);
  position: absolute;
  right: 160px;
  top: -30px;
  z-index:100;
  -webkit-transform: skew(45deg);
  border-radius: 5px 5px 0px 0px;
  box-shadow: 1px -1px #111, 2px -2px #333;
}
input[type=checkbox]{display: none;}
.container input[type=checkbox]:checked + label b.top{
  top: -140px;
  background: rgba(0,140,100,1);
}

.container input[type=checkbox]:checked + label span{
  display: none;
}
.container input[type=checkbox]+label span{
  color: white;
  font-size: 50px;
  position: relative;
  left: 100px;
  top: 70px;
  z-index: 200;
}
.container input[type=checkbox]+label p{
  color: white;
  font-size: 50px;
  position: relative;
  left: 110px;
  bottom: -5px;
  z-index: 200;
}
.container input[type=checkbox]:checked + label b.bottom{
  bottom: -140px;
  background: rgba(0,140,100,1);
}
.login h1{
  padding: 10px 0px 5px 10px;
  border-bottom: 1px solid #ddd;
  box-shadow: 0px 1px #fff;
}
.login form{
  margin-top: 10px;
}
.login form p{
  padding: 10px 0px;
}
.login form label{
  display: block;
  width: 70px;
  margin-left: 20px;
  background: #ccc;
  padding: 0px 3px;
  border-radius: 0 30px 0 0;
  color: #111;
  text-shadow: 0px 1px 0px #eee;
  border-top: 1px solid #f8f8f8;
  border-right: 1px solid #fff;
}
.login form input{
  border: 1px solid #ccc;
  padding: 10px 0;
  border-radius: 0 5px 5px 0;
  width: 259px;
  margin-left: 20px;
  box-shadow: 1px 1px #fff;
}
.login form input[type=submit]{
  margin: 10px 0px 0px 180px;
  width: 100px;
  background: #62a1d1;
  border: 1px solid #446f8e;
  border-radius: 3px;
  box-shadow: inset 0px 20px 0px rgba(255,255,255,0.3);
  font-size: 20px;
  font-weight: 900;
  color: #fff;
  text-shadow: 0px 1px 0px rgba(0,0,0,0.5);
}
.login form input[type=submit]:hover{
  box-shadow: inset 0px -20px 0px rgba(255,255,255,0.3);
  cursor: pointer;
}
</style>

</head>

<body>
<div class="container">
    <input type="checkbox" id="switch">
    <label for="switch">
      <b class="top"><span>click</span></b>
      <b class="bottom"><p>me</p></b>
    </label>
  <div class="login">
    <h1>Login</h1>
    <form action="lib_login.php" method="post">
      <p>
        <label for="user">Username</label>
        <input type="text" name="username">
      </p>
      <p>
        <label for="pass">Password</label>
        <input type="password" name="possword">
      </p>
      <p>
        <input type="submit" name="btnLogin" value="login">
      </p>
    
    </form>
  </div>

</div>      <!--       <span class="fontawesome-google-plus"></span> -->
      <i class="fa fa-google-plus" aria-hidden="true"></i>
    </a>
  </div>
</form>
</body>
</html>
