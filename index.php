<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<h5> Hello from html</h5>

<?php

$hello = "Hello World! olala!!";
echo "<br>";
print "da, merge! $hello";
echo "<br>da, merge si asa " .  $hello , "^_^";
echo "This " . "string ", "was ". "made ", "with multiple parameters.";
var_dump($hello);
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
define("GREETING", "<br>Welcome to W3Schools.com!", true);
echo greeting;
class Car {
    function Car() {
        $this->model = "HONDAAA";
        $this->PRET = "GRATIS";
        echo GReeTING, "<br>";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->PRET;
echo strrev("zlol>rb<>rb<");
echo "<br>";
echo strrev($hello);




?>

</body>
</html>
