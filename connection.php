<?php

$con = mysqli_connect("localhost","root","","testing");

if(mysqli_connect_errno()){
    die("Cannot Connect to DataBase".mysqli_connect_errno());
}

define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/uploads");

define("FETCH_SRC", "http://127.0.0.1/uploads");

?>
