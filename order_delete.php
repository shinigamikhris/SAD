<?php
session_start();
if($_SESSION['logged'] != 'true'){
	header('location:index.php');
}
?>

<html>
<body>
<?php
include('config.php');
if(isset($_GET['ID']))
{
$ID=$_GET['ID'];
$query1=mysql_query("delete from orders where OrderID='$ID'");

if($query1)
{
header('location:orders.php');
}
}
?>
</body>
</html>