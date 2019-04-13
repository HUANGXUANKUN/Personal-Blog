<html> 
<head> 
<title>Add New Database Record</title> 
</head> 
<body> 
<p>Main Screen</p> 
<?php include 'menu.php';?>

<?php include 'db_connect.php';?>

<?php 
$table_name = 'staff_table'; 
$connect = mysqli_connect($server,$user,$passwd,$database) or die("could not connect to database"); 
mysqli_select_db($connect,$database); 

$staffID =$_POST["FstaffID"]; 
$name =$_POST["Fname"]; 
$dept =$_POST["Fdept"]; 
$age  =$_POST["Fage"]; 
$gender =$_POST["Fgender"]; 
$sql="UPDATE $table_name SET staffID = '$staffID',Name='$name',Department='$dept', Age='$age' 
WHERE staffID = '".$staffID."'"; 

if (!mysqli_query($connect,$sql)) 
{ 
die('Error: ' . mysqli_error($connect)); 
} 
print "<p>Your information has been updated in the database</p>"; 
mysqli_close($connect); 
?> 
</body> 
</html>
