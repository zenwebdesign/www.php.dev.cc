<br>
<?php include 'menu.php';?>
<br>
Functii cu argumente
<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
2 argumente
<?php
function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
?>
default argument value
<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}
echo "The height is : $minheight <br>";
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>
cu return in loc de echo
<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
<br>
arrays cu for
<br>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo count($cars);
echo "<br>";
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
<br>
associative arrays cu foreach as =>
<br>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
<?php include 'footer.php';?>
