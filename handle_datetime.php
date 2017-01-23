<?php
require "connect.php";

$date_time = $_GET['h1'];

$query = "INSERT INTO appointments (teacher_id, happens_at, flavor, student_id) VALUES ('1', now(), 'slack', '2')";
			
$enter_data = @mysqli_query($conn, $query);

if(!$enter_data){
	echo "The data could not be sent";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>This is a test</h1>
	</body>
</html>
