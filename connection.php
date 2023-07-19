<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "signup";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}
?>