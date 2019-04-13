<html> 
<head> 
<title>Add New Database Record</title> 
</head> 
<body> 
<?php include 'menu.php';?>

<?php include 'db_connect.php';?>
<?php 
$table_name     = "staff_table";

$connect = mysqli_connect($server,$user,$passwd,$database) or die("could not connect to database");

$query="INSERT INTO $table_name(staffID, Name, Department, Age, Gender) 
VALUES 
('$_POST[FstaffID]','$_POST[Fname]','$_POST[Fdept]','$_POST[Fage]','$_POST[Fgender]')"; 
if (!mysqli_query($connect,$query)) 
{ 
die('Error: ' . mysqli_error($connect)); 
} 
else
{
echo "1 record added"; 
mysqli_close($connect); 
}
?> 
</body> 
</html>
