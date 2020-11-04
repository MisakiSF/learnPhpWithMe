<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h2>Sign Up!</h2>
    <!--inc is include-->
    <form action="includes/signup.inc.php" method="post">
<input type="text" name="name" placeholder="Full name ...">
<input type="email" name="Email" placeholder="Email@...">
<input type="text" name="uid" placeholder="User name ...">
<input type="password" name="pwd" placeholder="Password ...">
<input type="password" name="pwdrepeat" placeholder="confirme your password ...">
<button type="submit" name="submit">Sign Up</button>
    </form>
</section>
<?php
if (isset($_GET["error"])){
    if ($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields !</p>";
    }
    elseif ($_GET["error"]== "invaliduid"){
        echo "<p> choose a proper username !</p>";
    }
    elseif ($_GET["error"]== "invalidemail"){
        echo "<p> choose a proper email !</p>";
    }elseif ($_GET["error"]== "passwordDontmatch"){
        echo "<p> pwd dont Match !</p>";
    }elseif ($_GET["error"]== "stmtFailed"){
        echo "<p> smthg went wrong, try again!</p>";
    }
    elseif ($_GET["error"]== "usernametaken"){
        echo "<p> Username already taken !</p>";
    }
    elseif ($_GET["error"]== "none"){
        echo "<p> You Have signed Up !</p>";
    }
}

?>


<?php
include_once 'footer.php';
?>
