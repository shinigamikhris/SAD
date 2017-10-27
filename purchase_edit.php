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
if(isset($_GET['ID']))
{
$ID=$_GET['ID'];
if(isset($_POST['submit']))
{
$ProductID=$_POST['ProductID'];
$ProductName=$_POST['ProductName'];
$DatePurchased=$_POST['DatePurchased'];
$Qty=$_POST['Qty'];
$SupplierID=$_POST['SupplierID'];

$query3=mysql_query("update product set ProductID='$ProductID', ProductName='$ProductName', DatePurchased='$DatePurchased', Qty='$Qty', SupplierID='$SupplierID' where ProductID='$ID'");
if($query3)
{
header('location:purchase.php');
}
}
$query1=mysql_query("select * from purchase where ProductID='$ID'");
$query2=mysql_fetch_array($query1);
?>

<center>
<form method="post" action="">
<fieldset style="width:300px;"><legend>UPDATE PURCHASE</legend>
<table>
<br>

<tr>
<td>
ProductName: <td><input type="text" name="Qty" value="<?php echo $query2['ProductName']; ?>" /></td>
</td>
</tr>

<tr>
<td>
DatePurchased: <td><input type="date" name="DatePurchase" value="<?php echo $query2['DatePurchased']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Qty: <td><input type="text" name="Qty" value="<?php echo $query2['Qty']; ?>" /></td>
</td>
</tr>

<tr><td><label>Supplier:</td><td></label>
		<?php 
		include('config.php');
		$sql=mysql_query("SELECT * FROM supplier");
		if(mysql_num_rows($sql));{
		$select= '<select name="SupplierID">';
		while($rs=mysql_fetch_array($sql)){
	    $select.='<option value="'.$rs['SupplierID'].'">'.$rs['Supplier'].'</option>';

		
	  		}
		}
		$select.='</select>';
		echo $select;
		?>

</table>

<br />
<input type="submit" name="submit" value="UPDATE" />
</form>
<?php
}
?>
</fieldset>
</body>
</html>