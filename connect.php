<?php

//SQL login info
$host = "138.197.209.226";
$username = "root";
$password = "root";
$database = "hdt";

$connection = @mysqli_connect($host, $username, $password) or die("Could not connect.");

$db_select = @mysqli_select_db($connection, $database) or die("Could not select database");
?>
