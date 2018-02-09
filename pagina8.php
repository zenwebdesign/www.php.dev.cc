<?php include 'menu.php';?>
<?php include 'footer.php';?>
<?php
// set the expiration date to one hour ago - to delete cookie
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>
<?php
$cookie_name = "user";
$cookie_value = "Adrian Dada";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_name2 = "lungime";
$cookie_value2 = "mare";
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<br>
<?php
if(!isset($_COOKIE[$cookie_name2])) {
    echo "Cookie named '" . $cookie_name2 . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name2 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name2];
}
?>
<br>
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
echo '<br>', 'exista ', count($_COOKIE), ' praji';
?>
</body>
</html>
