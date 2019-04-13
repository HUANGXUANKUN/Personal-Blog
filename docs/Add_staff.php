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

<form name="staff" action="add_staff1.php" method="post"> 
<table border="1">
<tr><td>Staff ID</td><td><input type="text" name="FstaffID" required/></td></tr>
<tr><td>Staff Name</td><td><input type="text" name="Fname" required/></td><tr>
<tr><td>Department</td><td><input type="text" name="Fdept" required/></td></tr> 
<tr><td>Age</td><td><input type="text" name="Fage" required/></td></tr> 
<tr><td>Gender</td><td>
<input type="radio" name="Fgender" value="Male" required/>Male
<input type="radio" name="Fgender" value="Female" />Female</td></tr> 
<tr><td><input type="submit" value="Submit" /></td>
<td><input type="reset" value="Clear" /></td></tr> 
</table>
</form>

</center>
 
</body>
</html>
