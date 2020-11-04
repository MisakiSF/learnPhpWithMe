<?php
//$serverName="localhost";
//$dbUserName="root";
//$dbPassword="";
//$dbName="miniform";

//connection to data base

$conn = mysqli_connect("localhost", "root", "", "miniform");

if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
else{
    echo "suceeess";
}
