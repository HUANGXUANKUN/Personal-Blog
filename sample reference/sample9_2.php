<?php 
$pcount=0;
session_start(); 
if (!isset($_SESSION["pcount"])) { 
$message = "Hi, this is the first time I see you"; 
$_SESSION["pcount"] = $pcount; 
} 
elseif ($_SESSION["pcount"] < 5){ 
$_SESSION["pcount"]++; 
$pcount=$_SESSION["pcount"];
$message = "Hi, you have visited me <b>$pcount</b> times"; 
} 
else { 
session_unset(); 
session_destroy();
$message = "Sorry, your session has been destroyed"; 
} 
?> 
<html> 
<head> 
<title>PHP session</title> 
</head> 
<body> 
<h1>Welcome to my place</h1> 
<?php 
print("<p>$message</p>"); 
?> 
</body> 
</html> 
