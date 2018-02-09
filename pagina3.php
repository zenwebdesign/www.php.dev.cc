<!DOCTYPE html>
<html>
<body>
<br>
<?php include 'menu.php';?>
<br>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>


Requeeest! form data
<form method="post" action="pagina4.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
</body>
</html>
<?php include 'footer.php';?>
