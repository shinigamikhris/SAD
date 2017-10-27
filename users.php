<!DOCTYPE html>
<html>
<title>User</title>
<body>
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
<br/>
<div>
<center>
<center>
<h1><u>USERS</u></h1>

<br/>

<button id="myBtn" class="button">ADD USER</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="circle-close">&times;</span>
    <?php
include('config.php');
if(isset($_POST['submit']))
{
$admin_id=mysql_real_escape_string($_POST['admin_id']);
//$user_id=mysql_real_escape_string($_POST['user_id']);
$Username=mysql_real_escape_string($_POST['Username']);
$Password=mysql_real_escape_string($_POST['Password']);
$Lastname=mysql_real_escape_string($_POST['Lastname']);
$FirstName=mysql_real_escape_string($_POST['FirstName']);
$MiddleName=mysql_real_escape_string($_POST['MiddleName']);
$Email=mysql_real_escape_string($_POST['Email']);
$usertype=mysql_real_escape_string($_POST['usertype']);
$query1=mysql_query("insert into user values('$admin_id','$Username','$Password','$Lastname','$FirstName','$MiddleName','$Email','$usertype')");
echo "insert into user values('$admin_id','$user_id','$Username','$Password','$Lastname','$FirstName','$MiddleName','$Email','$usertype')";
if($query1)
{
header('location:users.php');
}
}
?>
<fieldset style="width:300px;"><legend>ADD USER</legend>
<form method="post" action="">
<table>



<tr>
	<td>
		Username: <td><input type="text" name="Username"></td>
	</td>
</tr>

<tr>
	<td>
		Password: <td><input type="password" name="Password"></td>
	</td>
</tr>
<tr>
	<td>
		Lastname: <td><input type="text" name="Lastname"></td>
	</td>
</tr>

<tr>
	<td>
		FirstName: <td><input type="text" name="FirstName"></td>
	</td>
</tr>

<tr>
	<td>
		MiddleName: <td><input type="text" name="MiddleName"></td>
	</td>
</tr>

<tr>
	<td>
		Email: <td><input type="email" name="Email"></td>
	</td>
</tr>

<tr><td><label for="usertype"> User Type: </label></td>
<td>
  <select name="usertype">
      <option type="text" value="Admin">Admin</option>
			<option type="text" value="User">User</option></select></td>

</table>
<br />
<input type="submit" name="submit">
<?php
?>
</center>
<script type="text/javascript">
              // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("circle-close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
            </script>

<br>
<center>
<?php
include('config.php');
include('header.php');
//$query1=mysql_query("select user.admin_id , usertype.userid , usertype.usertype , user.Username , user.Lastname , user.Firstname , user.MiddleName , user.Email , user.userid from usertype , user where user.userid=usertype.userid"); 
$query1=mysql_query("select * from user"); 

echo "<table cellpadding='1' cellspacing='1' class='db-table table-bordered'>
	<tr>
	<th>admin_id</th>
	<th>Username</th>
	<th>Lastname</th>
	<th>FirstName</th>
	<th>MiddleName</th>
	<th>Email</th>
	<th>UserType</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>";

while($query2=mysql_fetch_array($query1))
{
echo "<td>".$query2['admin_id']."</td>";	
echo "<td>".$query2['Username']."</td>";
echo "<td>".$query2['Lastname']."</td>";
echo "<td>".$query2['Firstname']."</td>";
echo "<td>".$query2['MiddleName']."</td>";
echo "<td>".$query2['Email']."</td>";
echo "<td>".$query2['usertype']."</td>";

echo "<td><a href='user_edit.php?ID=".$query2['Username']."'><button type=;button' class='btn btn-success'>Edit</a></td>";
echo "<td><a href='user_delete.php?ID=".$query2['Username']."' onclick='return confirmation()'><button type=;button' class='btn btn-danger'> Delete</a></td></tr>";
}
?>

</div>
</ol>
</table>
</center>
<br>
<br>
<br>
</body>
</html>