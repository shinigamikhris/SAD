<!Doctype html>
<title>ADD USER</title>
<body>
<link rel="stylesheet" type="text/css" href="mystyles.css">
<?php
include('header.php');
session_start();
if($_SESSION['logged'] != 'true'){
	header('location:login.php');
}
?>

<script type="text/javascript">
function confirmation(){
	return confirm('Are you sure you want to delete the record?');
}
</script>
<br>
<br><center>
<table cellpadding='0' cellspacing='0' class='db-table table-bordered'>
<tr>
	<th><a href="users.php">User</a></th>
	<th><a href="employee.php">Employee</a></th>
	<th><a href="customer.php">Customer</a></th>
	<th><a href="product.php">Product</a></th>
	<th><a href="sales.php">Sales</a></th>
	<th><a href="supplier.php">Supplier</a></th>
	<th><a href="loss.php">Loss Item</a></th>
	<th><a href="orders.php">Order</a></th>
	<th><a href="logout.php">Log Out</a></th>
</td>
	</td>
</tr>
</table>
</center>
<hr/>
<br/>
<div>
<center>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$admin_id=mysql_real_escape_string($_POST['admin_id']);
//$user_id=mysql_real_escape_string($_POST['user_id']);
$Username=mysql_real_escape_string($_POST['Username']);
$Password=mysql_real_escape_string($_POST['Password']);
$Lastname=mysql_real_escape_string($_POST['Lastname']);
$FirstName=mysql_real_escape_string($_POST['FirstName']);
$MiddleName=mysql_real_escape_string($_POST['MiddleName']);
$Email=mysql_real_escape_string($_POST['Email']);
$usertype=mysql_real_escape_string($_POST['usertype']);
$query1=mysql_query("insert into user values('$admin_id','$Username','$Password','$Lastname','$FirstName','$MiddleName','$Email','$usertype')");
echo "insert into user values('$admin_id','$user_id','$Username','$Password','$Lastname','$FirstName','$MiddleName','$Email','$usertype')";
if($query1)
{
header('location:users.php');
}
}
?>
<br/>
<fieldset style="width:300px;"><legend>ADD EMPLOYEE</legend>
<form method="post" action="">
<table>


<tr>
	<td>
		Username: <td><input type="text" name="Username"></td>
	</td>
</tr>

<tr>
	<td>
		Password: <td><input type="password" name="Password"></td>
	</td>
</tr>
<tr>
	<td>
		Lastname: <td><input type="text" name="Lastname"></td>
	</td>
</tr>

<tr>
	<td>
		FirstName: <td><input type="text" name="FirstName"></td>
	</td>
</tr>

<tr>
	<td>
		MiddleName: <td><input type="text" name="MiddleName"></td>
	</td>
</tr>

<tr>
	<td>
		Email: <td><input type="email" name="Email"></td>
	</td>
</tr>

<tr><td><label for="usertype"> User Type: </label></td>
<td><select name="usertype"><option type="text" value="Admin">Admin</option>
			<option type="text" value="User">User</option></select></td>

</table>
<br />
<input type="submit" name="submit">
<?php
?>
</center>
</form>
</fieldset>e
</body>
</html>