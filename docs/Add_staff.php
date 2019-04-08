<html> 
<head> 
<title>Add New Database Record</title> 
</head> 
<body> 
<center>
<h1>Main Screen</h1> 
<hr> 
<a href=staff.php>View Database Record</a> | 
<a>Add New Database Record</a> | 
<a href=edit_staff.html>Edit Database Record</a> | 
<a href=delete_staff.html>Delete Database Record</a>
<hr /> 
</center>

<?php 
$server         = "localhost";
$user           = "root";
$passwd         = "";
$database       = "staff";
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
