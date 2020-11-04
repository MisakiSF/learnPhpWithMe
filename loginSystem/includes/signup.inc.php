<?php
//security!!
//isset(): if this is set inside the code then continue
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["Email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
//if the user forgets to fill something
    //era handlers
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (pwMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordDontMatch");
        exit();
    }
    if (iudExists($conn, $username,$email) !== false) {
        header("location: ../signup.php?error=userNameTaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

} else {
    header("location: ../signup.php");
    exit();
}