<!DOCTYPE html>
<title>Add Employee</title>
<html>
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
$EmployeeID=mysql_real_escape_string($_POST['EmployeeID']);
$E_LName=mysql_real_escape_string($_POST['E_LName']);
$E_FName=mysql_real_escape_string($_POST['E_FName']);
$E_MName=mysql_real_escape_string($_POST['E_MName']);
$E_MobileNo=mysql_real_escape_string($_POST['E_MobileNo']);
$query1=mysql_query("insert into employee values('$EmployeeID','$E_LName','$E_FName','$E_MName','$E_MobileNo')");
echo "insert into employee values('$EmployeeID','$E_LName','$E_FName','$E_MName','$E_MobileNo')";
if($query1)
{
header('location:employee.php');
}
}
?>
<br/>
<div class="pad">
<fieldset style="width:300px;"><legend>ADD EMPLOYEE</legend>
<form method="post" action="">
<table>


<tr>
	<td>
		LastName: <td><input type="text" name="E_LName"></td>
	</td>
</tr>
<tr>
	<td>
		FirstName: <td><input type="text" name="E_FName"></td>
	</td>
</tr>

<tr>
	<td>
		MiddleName: <td><input type="text" name="E_MName"></td>
	</td>
</tr>

<tr>
	<td>
		MobileNo: <td><input type="text" name="E_MobileNo"></td>
	</td>
</tr>




</table>
<br />
<input type="submit" name="submit">
<input type="reset" value="Clear"/>
<?php
?>
</form>
</div>
</center>
</form>
</fieldset>
</body>
</html>