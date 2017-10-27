<?php
session_start();
require('config.php');

$quant = $_POST['quant'];
$dates = $_POST['dates'];
$Quantity=$_POST['Quantity'];

$ProductName=$_POST['ProductName'];
$Description=$_POST['Description'];
$Size=$_POST['Size'];
$Type=$_POST['Type'];
$Brand=$_POST['Brand'];
$SellingPrice=$_POST['SellingPrice'];
$quant=$_POST['quant'];
$Total=$_POST['Total'];

$query1= "INSERT INTO sales (order_id,dates,ProductName,Description,Size,Type,Brand,SellingPrice,Quantity,Total) VALUES ('$order_id','$dates','$ProductName','$Description','$Size','$Type','$Brand','$SellingPrice','$Quantity','$Total')";
if($query1)
{
header('location:sales.php');
}
}
?>
