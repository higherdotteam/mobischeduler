<?php
require "connect.php";

if(empty($_POST['select_name']) || empty($_POST['location']) || empty($_POST['date']) || empty($_POST['optradio'])){
	header("Location: inperson_form.php");
	die();
}

$name = $_POST['select_name'];
$location = $_POST['location'];
$date = $_POST['date'];
$time = $_POST['optradio'];

$query = "INSERT INTO appointments (id, name, teacher, date, time, flavor) VALUES (NULL, $name, 'Andrew', $date, $time, 'in_person')";

$execute_query = @mysqli_query($connection, $query);

if(!$execute_query){
	echo "Query was unsuccessful.";
}
?>