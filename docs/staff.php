<html>
<head>
   <title>View Staff</title>
</head>

<body>
<center>
<h1>Main Screen</h1> 
<?php include 'menu.php';?>

<?php include 'db_connect.php';?>
<?php
$database_table = "staff_table";
$connect = mysqli_connect("$server","$user","$passwd","$database") or die("could not connect to database");
$query = "SELECT * FROM $database_table";
mysqli_select_db($connect,$database);
$results = mysqli_query($connect, $query);
	if ($results)
	{
		echo "<table border='1'>";
		echo "<th>Staff ID</th><th>Staff Name</th><th>Department</th><th>Age</th><th>Gender</th>";
   while ($row = mysqli_fetch_row($results)){
     print '<tr>';
     foreach ($row as $field) {
 	print "<td>$field</td> ";
     }
     print '</tr>';
   }
 } else { die ("Query=$query failed!"); }
 mysqli_close($connect);
?>
</center>
</body>
</html>
