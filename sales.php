<!doctype html>
<html>
<title>Sales</title>
<head>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script src="./js/function.js" type="text/javascript"></script>
<script type="text/javascript" src="tcal.js"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<body>
 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
<link rel="stylesheet" type="text/css" href="mystyles.css">
<?php
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

<div>
<center>
<?php 
include('header.php');
?>
<body>


<div class="container">
  <div class="hero-unit-clock">
      <form name="clock">
      <font color="black" style="float: center;">Time: <br></font>&nbsp;<input style="width:85px; background:rgb(146,226,112); align:center; float: center; " type="text" class="trans" name="face" value="" disabled>
      </form>
        </div>

<br /> 

<table border="0" align="center" cellpadding="0" cellspacing="0" width="80%">
      
      <tr>
      <form action="sales.php" method="get" ecntype="multipart/data-form">
        <td width="48%" height="37" align="right"><input type="date" name="d1" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="From Eg.2015-05-13" required /></td>
        <td width="15%" align="left"> <input type="date" name="d2" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="To Eg.2015-06-13" required  /> </td>
        <td width="0%" align="left"><input type="submit" id="btnsearch" class="btn btn-info" value="Search" name="search" /></td>
        </form>
      </tr>
    
    </table></th>
  </tr>
  
  <br>

<br>

<table border="1" cellpadding="0" cellspacing="0" id="resultTable" class="db-table" table-bordered> 
  <thead>

    <th> <strong>Date</strong>
    <th> <strong>Code</strong>
    <th> <strong>Item</strong>
    <th> <strong>Description</strong>
    <th> <strong>Quantity Sold</strong>
    <th> <strong>SellingPrice</strong>
    <th> <strong>Total Sales</strong>
  </thead>

<center>
 <?php
require('config.php');

if(isset($_GET['search'])){
      $d1 = $_GET['d1'];
      $d2 = $_GET['d2'];

$query1=mysql_query("SELECT * FROM sales WHERE dates BETWEEN '$d1' and '$d2'"); 

while($query2=mysql_fetch_array($query1))
{

echo "<td>".$query2['dates']."</td>";
echo "<td>".$query2['ProductID']."</td>";
echo "<td>".$query2['ProductName']."</td>";
echo "<td>".$query2['Description']."</td>";
echo "<td>".$query2['Quantity']."</td>";
echo "<td>".$query2['SellingPrice']."</td>";
echo "<td>".$query2['Total']."</td></tr>";
}
}
?>
</table> 
                        <br>
                        <br>
<?php

require('config.php');

if(isset($_GET['search'])){
      $d1 = $_GET['d1'];
      $d2 = $_GET['d2'];
                            $result = mysql_query("SELECT sum(Total) FROM sales where dates BETWEEN '$d1' and '$d2'") or die(mysql_error());
                            while ($query2 = mysql_fetch_array($result)) {
                                ?>

                                <div class="pull-right">
                                    <div class="span"><div class="alert alert-danger"><i class="icon-credit-card icon-large"></i>&nbsp;Total Amount:&nbsp;<b style="color:red; font-size:18px;"><?php echo $query2['sum(Total)']; ?></b></div></div>
                                </div>
                            <?php }
                          }
                            ?>
</div>                      
</body>
</html>