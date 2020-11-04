<?php
include_once 'header.php';
?>

<section class="login-form">
    <h2>Log In !</h2>
    <!--inc is include-->
    <form action="includes/login.inc.php" method="post">

        <input type="text" name="uid" placeholder="UserName/Email ...">
        <input type="password" name="pwd" placeholder="Password ...">

        <button type="submit" name="submit">Connect </button>
    </form>
</section>
<?php
if (isset($_GET["error"])){
    if ($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields !</p>";
    }
    elseif ($_GET["error"]== "wrongLogin"){
        echo "<p> Incorrect Login Information !</p>";
    }
}

?>
<?php
include_once 'footer.php';
?>
