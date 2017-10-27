
<?php

include('header.php');
session_start();
if($_SESSION['logged'] != 'true'){
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<title>Product</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<body>
<link rel="stylesheet" type="text/css" href="mystyles.css">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="./js/application.js" type="text/javascript" charset="utf-8"></script> 
<script src="./js/function.js" type="text/javascript"></script>

<script type="text/javascript">
function confirmation(){
	return confirm('Are you sure you want to delete the record?');
}
</script> 	
<style>
body { 
  background: #ccc;
  font-family: helvetica, arial, serif;
  font-size: 13px;
  text-transform: uppercase;
  text-align: center;
}
 
.wrap {
  display: inline-block;
  -webkit-box-shadow: 0 0 70px #fff;
  -moz-box-shadow: 0 0 70px #fff;
  box-shadow: 0 0 70px #fff;
  margin-top: 40px;
}

/* a little "umph" */
.decor {
  background: #6EAF8D;
  background: -webkit-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -moz-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: -o-linear-gradient(left, #CDEBDB 50%, #6EAF8D 50%);
  background: linear-gradient(left, white 50%, #6EAF8D 50%);
  background-size: 50px 25%;;
  padding: 2px;
  display: block;
}

a {
  text-decoration: none;
  color: #fff;
  display: block;
}

ul {
  list-style: none;
  position: relative;
  text-align: left;
}

li {
  float: left;
}

/* clear'n floats */
ul:after {
  clear: both;
}

ul:before,
ul:after {
    content: " ";
    display: table;
}

nav {
  position: relative;
  background: #2B2B2B;
  background-image: -webkit-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -moz-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: -o-linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  background-image: linear-gradient(bottom, #2B2B2B 7%, #333333 100%);
  text-align: center;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px #0E0E0E;
  -webkit-box-shadow: 2px 2px 3px #888;
  -moz-box-shadow: 2px 2px 3px #888;
  box-shadow: 2px 2px 3px #888;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

/* prime */
ul.primary li a {
  display: block;
  padding: 20px 30px;
  border-right: 1px solid #3D3D3D;
}

ul.primary li:last-child a {
  border-right: none;
}

ul.primary li a:hover {
  
  color: #000;
}

/* subs */
ul.sub {
  position: absolute;
  z-index: 200;
  box-shadow: 2px 2px 0 #BEBEBE;
  width: 35%;
  display:none;
}

ul.sub li {
  float: none;
  margin: 0;
}

ul.sub li a {
  border-bottom: 1px dotted #ccc;
  border-right: none;
  color: #000;
  padding: 15px 30px;
}

ul.sub li:last-child a {
  border-bottom: none;
}

ul.sub li a:hover {
  color: #000;
  background: #eeeeee;
}

/* sub display*/
ul.primary li:hover ul {
  display: block;
  background: #fff;
}

/* keeps the tab background white */
ul.primary li:hover a {
  background: #fff;
  color: #666;
  text-shadow: none;
}

ul.primary li:hover > a{
  color: #000;
} 

@media only screen and (max-width: 600px) {
  .decor {
    padding: 3px;
  }
  
  .wrap {
    width: 100%;
    margin-top: 0px;
  }
  
   li {
    float: none;
  }
  
  ul.primary li:hover a {
    background: none;
    color: #8B8B8B;
    text-shadow: 1px 1px #000;
  }

  ul.primary li:hover ul {
    display: block;
    background: #272727;
    color: #fff;
  }
  
  ul.sub {
    display: block;  
    position: static;
    box-shadow: none;
    width: 100%;
  }
  
  ul.sub li a {
    background: #272727;
    border: none;
    color: #8B8B8B;
  }
  
  ul.sub li a:hover {
    color: #ccc;
    background: none;
  }
}
</style>
<head>
  <meta name="viewport" content="width=device-width">
</head>
<div class="wrap">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li>
      <a href="users.php">USER</a>
    </li>
    <li>
      <a href="employee.php">EMPLOYEE</a>
    </li>
    <li>
      <a href="customer.php">CUSTOMER</a>
    </li>
    <li>
      <a href="product.php">PRODUCT</a>
    </li>
    <li>
      <a href="sales.php">SALES</a>    
    </li>
    <li>
      <a href="supplier.php">SUPPLIER</a>
    </li>
    <li>
      <a href="loss.php">LOSS ITEM</a>
    </li>
    <li>
      <a href="orders.php">ORDER</a>    
    </li>
    <li>
      <a href="logout.php">LOG OUT</a>    
    </li>
  </ul>
</nav>
</div>

<div>
<center>
<center>

<hr/>

   <form method="POST">
 <?php
    
	if(isset($_POST['calculate']))
	{
	@$SellingPrice = $_POST['SellingPrice'];
	@$quant = $_POST['quant'];
	@$Total = $_POST['Total'];
	@$OriginalPrice = $_POST['OriginalPrice'];
	
	@$quant = $quant;
	@$Total = $SellingPrice * $quant;
	}
	
		?>
<?php
include('config.php');

$ID = $_GET['ID'];
$query2 = "SELECT * from product where ProductID = '$ID'";

{
$ID=$_GET['ID'];
if(isset($_POST['submit']))
{

$ProductID = $_GET['ID'];
	
$query3 = "SELECT Quantity from product where ProductID = '$ID'";

$order_id=mysql_real_escape_string($_POST['order_id']);
$dates=mysql_real_escape_string($_POST['dates']);
$ProductID=mysql_real_escape_string($_POST['ProductID']);
$ProductName=mysql_real_escape_string($_POST['ProductName']);
$Description=mysql_real_escape_string($_POST['Description']);
$SellingPrice=mysql_real_escape_string($_POST['SellingPrice']);
$Size=mysql_real_escape_string($_POST['Size']);
$Type=mysql_real_escape_string($_POST['Type']);
$Brand=mysql_real_escape_string($_POST['Brand']);
$Total=mysql_real_escape_string($_POST['Total']);
$quant = $_POST['quant'];

$query2=mysql_query("update product set Quantity = Quantity - '$quant' where ProductID='$ID'");

$query3=mysql_query("insert into sales values('$order_id','$dates','$ProductID','$ProductName','$Description','$SellingPrice','$quant','$Total')");

if($query3)
{
header('location:orders.php');
}
}

$query1=mysql_query("select * from product where ProductID='$ID'");
$query2=mysql_fetch_array($query1);
?>
<center>
<form method="post" action="">	
<fieldset style="width:300px;"><legend>TRANSACTION FORM</legend>
<table>

<br>
<tr>
    <td> Date Today: </td>
    <td> <input type="text" name="dates" id="txtbox" value="<?php echo "". date("Y/m/d")?>" readonly/> </td>
    </tr>

<tr>
	<td>
		Code: <td><input type="text" name="ProductID" value="<?php echo $query2['ProductID']; ?>" readonly /></td>
	</td>
</tr>


<tr>
	<td>
		Product: <td><input type="text" name="ProductName" value="<?php echo $query2['ProductName']; ?>" readonly /></td>
	</td>
</tr>

<tr>
<td>
Description: <td><input type="text" name="Description" value="<?php echo $query2['Description']; ?>" readonly /></td>
</td>
</tr>

<tr>
<td>
Price: <td><input type="text" name="SellingPrice" value="<?php echo $query2['SellingPrice']; ?>" readonly/></td>
</td>
</tr>

<tr>
<td>
Size: <td><input type="text" name="Size" value="<?php echo $query2['Size']; ?>" readonly/></td>
</td>
</tr>

<tr>
<td>
Type: <td><input type="text" name="Type" value="<?php echo $query2['Type']; ?>" readonly/></td>
</td>
</tr>

<tr>
<td>
Brand: <td><input type="text" name="Brand" value="<?php echo $query2['Brand']; ?>" readonly/></td>
</td>
</tr>

   <form method="POST">
    <td>Quantity:</td>
    <td><input type="number" id="txtbox" min="0" name="quant" placeholder="Quantity" value="<?php echo @$quant ?>"></td>
    </tr>
    <tr>
    <td>Total:</td>
    <td><input type="text" id="txtbox" name="Total" value="<?php echo @$Total ?>" readonly></td>
    <td><input type="submit" name="calculate" value="Compute" id="btncalc"></td>
    </tr>	

</table>

<input type="submit" name="submit" value="UPDATE" />
</form>
<?php
}
?>
</fieldset>
</body>
</html>