<!DOCTYPE html>
<title>Add Customer</title>
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
$CustomerID=mysql_real_escape_string($_POST['CustomerID']);
$CustomerName=mysql_real_escape_string($_POST['CustomerName']);
$C_MobileNo=mysql_real_escape_string($_POST['C_MobileNo']);
$query1=mysql_query("insert into customer values('$CustomerID','$CustomerName','$C_MobileNo')");
echo "insert into customer values('$CustomerID','$CustomerName','$C_MobileNo')";
if($query1)
{
header('location:customer.php');
}
}
?>
<br/>
<fieldset style="width:300px;"><legend>ADD CUSTOMER</legend>
<form method="post" action="">
<table>
<br>
<tr>
	<td>
		ID: <td><input type="text" name="CustomerID"></td>
	</td>
</tr>

<tr>
	<td>

		Name: <td><input type="text" name="CustomerName"></td>
	</td>

</tr>
<tr>
	<td>
		Mobile No: <td><input type="text" name="C_MobileNo"></td>
	</td>
</tr>


</table>
<br />
<input type="submit" name="submit">
<input type="reset" value="Clear"/>
<?php
?>
</center>
</form>
</fieldset>
</body>
</html>