<?php include 'menu.php';?>
<?php include 'footer.php';?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green pur";
$_SESSION["favanimal"] = "miau";
echo '<br>'."Session variables are set.";
?>

</body>
</html>
