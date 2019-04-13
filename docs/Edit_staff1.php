<html> 
<head> 
<title>Add New Database Record</title> 
</head> 
<body> 
<p>Main Screen</p> 
<?php include 'menu.php';?>

<?php include 'db_connect.php';?>
<h1>Edit Database Record</h1> 
<?php 
$server = 'localhost'; 
$user = 'root'; 
$passwd = ''; 
$database = 'staff'; 
$table_name = 'staff_table'; 
$connect = mysqli_connect($server,$user,$passwd,$database) or die("could not connect to database"); 
$AstaffID = $_POST["FstaffID"]; 
$query = "SELECT * FROM $table_name WHERE staffID='".$AstaffID."'"; 
mysqli_select_db($connect,$database); 
$result = mysqli_query($connect,$query); 
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
$AstaffID=$myrow['staffID']; 
$Aname=$myrow['Name']; 
$Adept=$myrow['Department']; 
$Aage=$myrow['Age']; 
$Agender=$myrow['Gender']; 
if (!$myrow){ 
print "<p>No such record</p>"; 
} 
else { 
print "<form name='editform' action ='edit_staff2.php' method='post'> 
<table> 
<tr><td>Staff ID</td><td><input type='text' name='FstaffID' value='$AstaffID' readonly></td></tr> 
<tr><td>Staff Name</td><td><input type='text' name='Fname' value='$Aname'></td></tr> 
<tr><td>Department</td><td><input type='text' name='Fdept' value='$Adept'></td></tr> 
<tr><td>Age</td><td><input type='text' name='Fage' value='$Aage'></td></tr> 
<tr><td>Gender</td><td><input type='text' name='Fgender' value='$Agender'></td></tr> 
<tr><td><input type='submit' value='submit' /> 
<input type='reset' value='Reset Form'/></td> 
</tr> 
</table> 
</form>"; 
} 
mysqli_close($connect); 
?> 
</center>
</body> 
</html>
