<?php
$servername="localhost";
$dbusername="root";
$password="";
$name="web_0.1";



$conn=mysqli_connect($servername,$username,$password,$name);


if(!$conn){
    die("connection failed: " .mysqli_error());
    exit();
}