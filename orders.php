
<?php

include('header.php');
session_start();
if($_SESSION['logged'] != 'true'){
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<title>ORDER</title>
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
  background: #f2f2f2;
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

<div>
<center>
<h1><u>SELECT PRODUCTS</u></h1>

<br>
<br>

<form name ="form1" method="post" action="">
<div id="search">
<td><label for="filter"> Search </label> 
<input type="text" name="filter" id="filter" value=""  placeholder="Search Product..." autocomplete="off"></td>

</form>
</div>
<table border="1" cellpadding="0" cellspacing="0" id="resultTable" class="db-table" table-bordered> 
	<thead>

		<th> <strong>Product Name</strong>
		<th> <strong>Description</strong>
		<th> <strong>Quantity Left</strong>
		<th> <strong>Original Price</strong>
		<th> <strong>Size</strong>
		<th> <strong>Type</strong>
		<th> <strong>Brand</strong>
		<th><strong>Pick</strong>

	</thead>

<center>
<tbody>
<?php
include('config.php');

$sql = "SELECT * from product";
$search= "";
$search= isset ($_POST['search']) ? $_POST['search'] : '';
$search= !empty ($_POST['search']) ? $_POST['search'] : '';

$query1=mysql_query("select * from product order by ProductName asc"); 

while($query2=mysql_fetch_array($query1))
{

echo "<td>".$query2['ProductName']."</td>";
echo "<td>".$query2['Description']."</td>";
echo "<td>".$query2['Quantity']."</td>";
echo "<td>".$query2['SellingPrice']."</td>";
echo "<td>".$query2['Size']."</td>";
echo "<td>".$query2['Type']."</td>";
echo "<td>".$query2['Brand']."</td>";
echo "<td><a href='transaction.php?ID=".$query2['ProductID']."'><button type=;button' class='btn btn-warning'> PICK</a></td><tr>";
}
?>
</div>
</ol>
</table>
</tbody>
</center>
<br>
<br>
<br>
</body>
</html>