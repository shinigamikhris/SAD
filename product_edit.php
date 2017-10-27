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
$Description=$_POST['Description'];
$Quantity=$_POST['Quantity'];
$SellingPrice=$_POST['SellingPrice'];
$OriginalPrice=$_POST['OriginalPrice'];
$Size=$_POST['Size'];
$Type=$_POST['Type'];
$Brand=$_POST['Brand'];

$query3=mysql_query("update product set ProductID='$ProductID',Quantity='$Quantity', ProductName='$ProductName', Description='$Description', SellingPrice='$SellingPrice', OriginalPrice='$OriginalPrice', Size='$Size', Type='$Type', Brand='$Brand' where ProductID='$ID'");
if($query3)
{
header('location:product.php');
}
}
$query1=mysql_query("select * from product where ProductID='$ID'");
$query2=mysql_fetch_array($query1);
?>

<center>
<form method="post" action="">
<fieldset style="width:300px;"><legend>UPDATE PRODUCT</legend>
<table>

<br>
<tr>
<td>
ProductID: <td><input type="text" name="ProductID" value="<?php echo $query2['ProductID']; ?>" readonly/></td>
</td>
</tr>

<tr>
<td>
Product: <td><input type="text" name="ProductName" value="<?php echo $query2['ProductName']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Description: <td><input type="text" name="Description" value="<?php echo $query2['Description']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Quantity: <td><input type="text" name="Quantity" value="<?php echo $query2['Quantity']; ?>" readonly/></td>
</td>
</tr>

<tr>
<td>
SellingPrice: <td><input type="text" name="SellingPrice" value="<?php echo $query2['SellingPrice']; ?>" /></td>
</td>
</tr>

<tr>
<td>
OriginalPrice: <td><input type="text" name="OriginalPrice" value="<?php echo $query2['OriginalPrice']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Size: <td><input type="text" name="Size" value="<?php echo $query2['Size']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Type: <td><input type="text" name="Type" value="<?php echo $query2['Type']; ?>" /></td>
</td>
</tr>

<tr>
<td>
Brand: <td><input type="text" name="Brand" value="<?php echo $query2['Brand']; ?>" /></td>
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