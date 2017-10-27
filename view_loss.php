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
        <td width="0%" align="left"><input type="submit" id="btnsearch" value="Search" name="search" /></td>
        </form>
      </tr>
    
    </table></th>
  </tr>
  
  <br>

<br>

<table border="1" cellpadding="0" cellspacing="0" id="resultTable" class="db-table" table-bordered> 
  <thead>
    <th> <strong>Order ID</strong>
    <th> <strong>Date</stron>
    <th> <strong>ProductName</strong>
    <th> <strong>Description</strong>
    <th> <strong>Size</strong>
    <th> <strong>Type</strong>
    <th> <strong>Brand</strong>
    <th> <strong>SellingPrice</strong>
    <th> <strong>Quantity</strong>
    <th> <strong>Total Sales</strong>
  </thead>

<center>
 <?php
require('config.php');

if(isset($_GET['search'])){
      $d1 = $_GET['d1'];
      $d2 = $_GET['d2'];

$query1=mysql_query("SELECT * FROM loss WHERE dates BETWEEN '$d1' and '$d2'"); 

while($query2=mysql_fetch_array($query1))
{
echo "<td>".$query2['order_id']."</td>";
echo "<td>".$query2['dates']."</td>";
echo "<td>".$query2['ProductName']."</td>";
echo "<td>".$query2['Description']."</td>";
echo "<td>".$query2['Size']."</td>";
echo "<td>".$query2['Type']."</td>";
echo "<td>".$query2['Brand']."</td>";
echo "<td>".$query2['SellingPrice']."</td>";
echo "<td>".$query2['Quantity']."</td>";
echo "<td>".$query2['Total']."</td></tr>";
}
}
?>
</table> 
                        

</div>                      
</body>
</html>