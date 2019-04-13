<!DOCTYPE html>
<html>
<head>
   <title>Admin - Staff Menu</title>
</head>

<body>
<center>
<h1>Main Screen</h1> 
<?php include 'menu.php';?>

<?php
$host       = "localhost";
$database   = "staff";
$table_name = "staff_admin";
$username   = "root";
$passwd     = "";

$connect = mysqli_connect($host,$username,$passwd,$database) or die("could not connect to database");

$adminID     = $_POST["username"];
$adminPasswd = $_POST["password"];
		
$query = "SELECT * FROM $table_name WHERE name='".$adminID."' And password='" .$adminPasswd. "'";
mysqli_select_db($connect,$database);
$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
if (!$myrow){
   print "<div class='h1'>Wrong admin ID or wrong password</div>";
   print "<div class='h1'>Please try again</p>";
}
else {
   header("Location: staff.php");
 
   }
mysqli_close($connect);
?>
<a href=staff_admin.html>Click here</a>

</body>
</html>
