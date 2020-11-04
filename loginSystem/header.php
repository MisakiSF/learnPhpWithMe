<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Php First Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link ref="stylesheet" href="css/reset.css>"
    <link ref="stylesheet" href="css/style.css>"
</head>
<body>
<!--navbar-->
<nav>
    <div class="wrapper">
        <a href="index.php"> <img src="image/WexamSf.png" alt="Blogs Logo"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
            if (isset($_SESSION["useruid"])){
                echo " <li><a href=\"profile.php\">Profile Up</a></li>";
                echo "<li><a href=\"logout.php\">Log out</a></li>";
            }
            else{
                echo " <li><a href=\"signup.php\">Sign Up</a></li>";
                echo "<li><a href=\"login.php\">Log In</a></li>";
            }

            ?>

        </ul>
    </div>
</nav>

<div class="wrapper">