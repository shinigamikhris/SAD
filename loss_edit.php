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
$Price=$_POST['Price'];
$Qty=$_POST['Qty'];


$query3=mysql_query("update product set ProductID='$ProductID', ProductName='$ProductName',Price='$Price',Qty='Qty', productID='$ID'");
if($query3)
{
header('location:loss.php');
}
}
$query1=mysql_query("select * from loss where ProductID='$ID'");
$query2=mysql_fetch_array($query1);
?>

<center>
<form method="post" action="">
<fieldset style="width:300px;"><legend>UPDATE PRODUCT</legend>
<table>

<br>
<tr>
<tr><td><label>Product:</td><td></label>
		<?php 
		include('config.php');
		$sql=mysql_query("SELECT * FROM product");
		if(mysql_num_rows($sql));{
		$select= '<select name="ProductID">';
		while($rs=mysql_fetch_array($sql)){
	    $select.='<option value="'.$rs['ProductID'].'">'.$rs['ProductID'].'</option>';
	  		}
		}
		$select.='</select>';
		echo $select;
		?>


<tr>
<td>
Product: <td><input type="text" name="productName" value="<?php echo $query2['ProductName']; ?>" /></td>
</td>
</tr>


<tr>
<td>
Price: <td><input type="text" name="Price" value="<?php echo $query2['Price']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Qty: <td><input type="text" name="Qty" value="<?php echo $query2['Qty']; ?>" /></td>
</td>
</tr>


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