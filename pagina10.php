<?php include 'menu.php';?>
<?php include 'footer.php';?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo '<br>'."Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo '<br>'."Favorite animal is " . $_SESSION["favanimal"] . ".";
print_r($_SESSION);
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

?>


</body>
</html>
