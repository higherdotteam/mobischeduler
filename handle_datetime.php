<?php
require "connect.php";

$date_time = $_POST['h1'];

$query = "INSERT INTO appointments (teacher_id, happens_at, flavor, student_id) VALUES ('1', FROM_UNIXTIME($date_time), 'slack', '2')";
			
$enter_data = @mysqli_query($conn, $query);

if(!$enter_data){
	echo "The data could not be sent";
}
?>

