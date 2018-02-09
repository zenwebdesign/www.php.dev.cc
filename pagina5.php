pagina 5 - pt vectori si advanced stuff
<br>
<?php include 'menu.php';?>
<br>
vector multidimensional
<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
<br>date
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"). "<br>";
$d1=strtotime("+4 days");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until peste 4 zile.";

?>

<?php
$startdate=strtotime("+1 week");
  echo date("d m Y", $startdate) . "<br>";
?>
<?php include 'footer.php';?>
