
<!DOCTYPE html>
<html>
<head>
   <title>Hidden Field Example</title>
</head>
<body>
<center>
<h2>Hidden Field Example</h2>
<hr /> 
  <form action="" name="hiddenField" id="hiddenField" method="post">
  Student Name : <input  type="text" id="StudName" name="StudName" required><p />
  Student NRIC : <input  type="text" id="StudNRIC" name="StudNRIC" required><p />
  <input type="hidden" id="date" name="date" value="<?php echo date('M d, Y'); ?>">
  <input type="submit" name="submit" id="submit" value="submit">
  <input type="reset" name="reset" id="reset" value="Clear">
  </form>
  </center>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $StudName = $_POST['StudName'];
    $StudNRIC = $_POST['StudNRIC'];
    $date     = $_POST['date'];

echo "<p><center>";
echo "Your name is $StudName and your NRIC is $StudNRIC <p />";
echo "You fill up this form on $date";
echo "<p></center>";
}
?>

