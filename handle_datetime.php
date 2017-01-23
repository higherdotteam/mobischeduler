<?php
require "connect.php";

$student = $_GET['whoami'];
$date_time = $_GET['h1'];

$query = "INSERT INTO appointments (id, teacher_id, happens_at, flavor, student_id)
			VALUES (NULL, NULL, $date_time, NULL, $student)";
			
$enter_data = @mysqli_query($conn, $query);

if($enter_data){
	header("Location: index.php");
	die();
}
?>