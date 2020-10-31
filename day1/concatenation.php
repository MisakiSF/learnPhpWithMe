<?php
$lessoname="concatenation";

$homepage="php - concatenation";
$heading=" welcome to concatenation";
$breif="php - this lesson talk about concatenation";


?>
<!DOCTYPE html>
<html>
<head>
 <title><?php  echo  $homepage; ?></title>
</head>
<body>
<h1><?php echo $heading ;?></h1>
<p><?php echo $breif ;?></p>
<p><?php echo "hello"." ". "php";?></p>
<p><?php echo $breif." "."php";?></p>
<p><?php echo $breif.$heading;?></p>
</body>

</html>
