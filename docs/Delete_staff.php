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

<p>Please enter the Staff ID you want to DELETE</p> 
<form name="deleteform" action ="delete_staff1.php" method="post"> 
<table> 
<tr> 
<td>Staff ID</td> 
<td><input type="text" name="FstaffID" size="10"></td> 
</tr> 
<tr> 
<td colspan="2"><input type="submit" value="submit"/> 
<input type="reset" value="Reset Form"/></td> 
</tr> 
</table> 
</form> 
</center>

</body> 
</html> 
