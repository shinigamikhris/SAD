<?php
include_once 'connect_db.php';
if(isset($_POST['submit'])){
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$position=$_POST['position'];
switch($position){
case 'user':
	$result=mysql_query("SELECT admin_id, Username FROM user WHERE Username='$Username' AND Password='$Password'");
	$row=mysql_fetch_array($result);
if($row>0){
session_start();
	$_SESSION['admin_id']=$row[0];
	$_SESSION['Username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/product.php");
}else{
	$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'employee':
	$result=mysql_query("SELECT EmployeeID, E_Lname,E_Fname,username FROM employee WHERE username='$username' AND password='$password'");
	$row=mysql_fetch_array($result);
if($row>0){
session_start();
	$_SESSION['EmployeeID']=$row[0];
	$_SESSION['E_Lname']=$row[1];
	$_SESSION['E_Fname']=$row[2];
	$_SESSION['username']=$row[3];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/cashier.php");
}else{
	$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}
?>

<!doctype html>
<html>

	<head>

 	<link rel="stylesheet" type="text/css" href="login.css">


<title>Login</title>
	</head>

<body>

<form method="post" action="checklogin.php">

<div class="container">
<img src="1.png">
<form>
	<div class="form-input">
	<input type="text" name="username" placeholder="Enter Username">
</div>
<div class="form-input">
	<input type="password" name="password" placeholder="Enter Password">
	</div>
	<input type="submit" name="submit" value="LOGIN" class="btn btn-login">
	</input>
	<select name="position">
			<option>--Select position--</option>
			<option>Admin</option>
			<option>Employee</option>
</form>

</form>
</body> 
</html>