<?php

function emptyInputSignup($name, $email,$username,$pwd,$pwdRepeat){
    $result =NULL;
    if (empty($name)||empty($email)|| empty($username)|| empty($pwd)||empty($pwdRepeat)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}


function pwMatch($pwd,$pwdRepeat){
    $result=NULL;
    if ($pwd!==$pwdRepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uiExist($pwd,$pwdRepeat){
    $result=NULL;
    if ($pwd!==$pwdRepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidEmail($email){
    $result=NULL;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result=true; }

else{
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    $result=NULL;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }

    else{
        $result=false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat){
    $result=NULL;
    if ($pwd !== $pwdRepeat){
        $result=true;
    }

    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE userUid=? OR userEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO users(userName, userEmail,userUid,UserPsw) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    $hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name,$email,$username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLoging($username,$pwd){
    $result =NULL;
    if (empty($username)|| empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function loginUser($conn,$username,$pwd){
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists===false){
        header("location:../login.php?error=wrongLoging");
        exist();
    }
    $pwdHashed = $uidExists["userPsw"];
    $checkpwd = password_verify($pwd, $pwdHashed);
    if ($checkpwd===false){
       header("location: ../login.php?error=wrongLogin");
       exit();
    }
    elseif ($checkpwd===true){
        session_start();
        $_SESSION["userid"]=$uidExists["userId"];
        $_SESSION["useruid"]=$uidExists["userUid"];
        header("location:../index.php");
        exit();
    }
}






