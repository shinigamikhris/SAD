<!DOCTYPE html>
<title>Add Supplier</title><html>
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
$SupplierID=mysql_real_escape_string($_POST['SupplierID']);
$Supplier=mysql_real_escape_string($_POST['Supplier']);
$S_MobileNo=mysql_real_escape_string($_POST['S_MobileNo']);
$query1=mysql_query("insert into supplier values('$SupplierID','$Supplier','$S_MobileNo')");
echo "insert into supplier values('$SupplierID','$Supplier','$S_MobileNo')";
if($query1)
{
header('location:supplier.php');
}
}
?>
<br/>
<fieldset style="width:300px;"><legend>ADD SUPPLIER</legend>
<form method="post" action="">
<table>
<br>

<tr>
	<td>
		ID: <td><input type="text" name="SupplierID"></td>
	</td>
</tr>
<tr>
	<td>
		Supplier: <td><input type="text" name="Supplier"></td>
	</td>
</tr>
<tr>
	<td>
		MobileNo: <td><input type="text" name="S_MobileNo"></td>
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