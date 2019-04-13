<?php
$server = 'localhost'; 
$user = 'root'; 
$passwd = ''; 
$database = 'staff'; 
 
$connect = mysqli_connect($server,$user,$passwd,$database) or die("could not connect to database"); 
mysqli_select_db($connect,$database); 
?>