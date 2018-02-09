Hello!
<br>
<?php include 'menu.php';?>
<br>

<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo '<br>e ora ', $t, '??<br>';

$favcolor = "green";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
 echo "<br>";
 echo "-----while-----";
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "----do while------";
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "----for------";
for ($x = 0; $x <= 5; $x++) {
  echo "The number is: $x <br>";
}
echo "----foreach (array)------";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "----functie cu echo------";
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>
<?php include 'footer.php';?>
