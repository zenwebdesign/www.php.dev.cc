<?php include 'menu.php';?>
<?php include 'footer.php';?>
<br>
<?php /* cod separat, proba creare fisier*/
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Lego 1\n";
fwrite($myfile, $txt);
$txt = "Lego 2\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

File upload in folderul uploads prin upload.php
<br>
<br>
<br>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
