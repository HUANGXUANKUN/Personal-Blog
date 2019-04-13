<!DOCTYPE html>
<html>
<head>
   <title>Admin - Staff Menu</title>
</head>

<body>
<center>
<h1>Main Screen</h1> 
<?php include 'menu.php';?>

<?php include 'db_connect.php';?>
<?php
$table_name = 'staff_table';
 
$connect = mysqli_connect($server,$user,$passwd,$database) or die("could not connect to database"); 
mysqli_select_db($connect,$database); 

$staffID = $_POST["FstaffID"]; 
$query = "SELECT * FROM $table_name WHERE staffID='".$staffID."'"; 
$sql = "DELETE FROM $table_name WHERE staffID='".$staffID."'"; 
mysqli_select_db($connect,$database); 
$result = mysqli_query($connect,$query); 

$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC); 
if (!$myrow){ 
print "<p>No such record</p>"; 
} 
else { 
mysqli_query($connect,$sql); 
print "Staff ID '$staffID' has been deleted from the Database"; 
} 
mysqli_close($connect); 
?> 
</center>
</body> 
</html> 

