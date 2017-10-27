<!DOCTYPE html>
<title>Add Product</title><html>
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
<br>
<center>
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
$ProductID=mysql_real_escape_string($_POST['ProductID']);
$ProductName=mysql_real_escape_string($_POST['ProductName']);
$Description=mysql_real_escape_string($_POST['Description']);
$SellingPrice=mysql_real_escape_string($_POST['SellingPrice']);
$OriginalPrice=mysql_real_escape_string($_POST['OriginalPrice']);
$Size=mysql_real_escape_string($_POST['Size']);
$Type=mysql_real_escape_string($_POST['Type']);
$Brand=mysql_real_escape_string($_POST['Brand']);

$query1=mysql_query("insert into product values('$ProductID','$ProductName','$Description','$SellingPrice','$OriginalPrice','$Size','$Type','$Brand')");
echo "insert into product values('$ProductID','$ProductName','$Description','$DateArrival','$SellingPrice','$OriginalPrice','$Size','$Type','$Brand')";
if($query1)
{
header('location:product.php');
}
}
?>
<br/>
<fieldset style="width:500px;"><legend>ADD PRODUCT</legend>
<form method="post" action="">
<table class="hoverTable" data-responsive="table" style="text-align: left;">
<tr>
	<td>
		ProductID: <td><input type="text" name="ProductID"></td>
	</td>
</tr>

<tr>
	<td>
		Product: <td><input type="text" name="ProductName"></td>
	</td>
</tr>

<tr>
	<td>
		Description: <td><input type="text" name="Description"></td>
	</td>
</tr>

<tr>
	<td>
		SellingPrice: <td><input type="text" name="SellingPrice" onkeyup="sum();" Required></td>
	</td>
</tr>

<tr>
	<td>
		OriginalPrice: <td><input type="text" name="OriginalPrice" onkeyup="sum();" Required></td>
	</td>
</tr>

<tr>
	<td>
		Size: <td><input type="text" name="Size"></td>
	</td>
</tr>
<tr>
	<td>
		Type: <td><input type="text" name="Type"></td>
	</td>
</tr>

	<td>
		Brand: <td><input type="text" name="Brand"></td>
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
<br>
</body>
</html>