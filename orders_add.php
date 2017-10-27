<!DOCTYPE html>
<title>Add Orders</title>
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

$OrderID=mysql_real_escape_string($_POST['OrderID']);
$Date=mysql_real_escape_string($_POST['Date']);
$EmployeeID=mysql_real_escape_string($_POST['EmployeeID']);
$CustomerID=mysql_real_escape_string($_POST['CustomerID']);
$ProductID=mysql_real_escape_string($_POST['ProductID']);
$Price=mysql_real_escape_string($_POST['Price']);
$Qty=mysql_real_escape_string($_POST['Qty']);
$query1=mysql_query("insert into orders values('$OrderID','$Date','$EmployeeID','$CustomerID','$ProductID','$Price','$Qty')");
echo "insert into orders values('$OrderID','$Date','$EmployeeID','$CustomerID','$ProductID','$Price','$Qty')";
if($query1)
{
header('location:orders.php');
}
}
?>
<br/>
<fieldset style="width:300px;"><legend>ADD ORDERS</legend>
<form method="post" action="">
<table>
<br>

<tr>
	<td>
		OrderID: <td><input type="text" name="OrderID"></td>
	</td>
</tr>

<tr>
	<td>
		Date: <td><input type="date" name="Date"></td>
	</td>
</tr>



<tr><td><label>Employee:</td><td></label>
		<?php 
		include('config.php');
		$sql=mysql_query("SELECT * FROM employee");
		if(mysql_num_rows($sql));{
		$select= '<select name="EmployeeID">';
		while($rs=mysql_fetch_array($sql)){
	    $select.='<option value="'.$rs['EmployeeID'].'">'.$rs['E_LName'].'</option>';

		
	  		}
		}
		$select.='</select>';
		echo $select;
		?>


<tr><td><label>Customer:</td><td></label>
		<?php 
		include('config.php');
		$sql=mysql_query("SELECT * FROM customer");
		if(mysql_num_rows($sql));{
		$select= '<select name="CustomerID">';
		while($rs=mysql_fetch_array($sql)){
	    $select.='<option value="'.$rs['CustomerID'].'">'.$rs['CustomerName'].'</option>';

		
	  		}
		}
		$select.='</select>';
		echo $select;
		?>

<tr><td><label>Product:</td><td></label>
		<?php 
		include('config.php');
		$sql=mysql_query("SELECT * FROM product");
		if(mysql_num_rows($sql));{
		$select= '<select name="ProductID">';
		while($rs=mysql_fetch_array($sql)){
	    $select.='<option value="'.$rs['ProductID'].'">'.$rs['ProductName'].'</option>';

		
	  		}
		}
		$select.='</select>';
		echo $select;
		?>

<tr>
	<td>
		Price: <td><input type="text" name="Price"></td>
	</td>
</tr>

<tr>
	<td>
		Qty: <td><input type="text" name="Qty"></td>
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