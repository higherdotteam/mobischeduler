<?php
require "connect.php";
$today = null;
$hour = null;
$t2 = null;
$t3 = null;
$t4 = null;
$t5 = null;
$t6 = null;
$t7 = null;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HIGHER.TEAM MobiScheduler</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<style>
			body {
				background-color: #c0392b;
				font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
			}
			
			.jumbotron {
				background-color: #2c3e50;
				color: #fff;
			}
			
			.footer {
				background-color: #000000;
				color: #fff;
				padding: 60px;
			}
			
			.container {
				background-color: #c0392b;
				border-radius: 5px;
				color: #000000;
				padding: 40px;
			}
		</style>
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1><strong>HIGHER.TEAM</strong> <em>MobiScheduler</em></h1>
		</div>
		<div class="container">
			<fieldset>
			<form name="f1" action="handle_datetime.php" method="post">
				<legend>
				<strong>I am</strong>
				<select name="whoami">
				<?php
				$query = "SELECT * FROM students";
				$execute_query = @mysqli_query($conn, $query);
				
					while($row = mysqli_fetch_array($execute_query)){
						echo "<option>" . $row['slackusername'] . "</option>";
					}
				?>
				</select>
				<strong>and I would like to meet with Andrew on:</strong>
				</legend>
				<?php date_default_timezone_set('America/Los_Angeles');
					
					$today = strtotime('now'); 
					$t2 = $today + (3600*24*1); 
					$t3 = $today + (3600*24*2); 
					$t4 = $today + (3600*24*3); 
					$t5 = $today + (3600*24*4); 
					$t6 = $today + (3600*24*5); 
					$t7 = $today + (3600*24*6); 
				?>

				<table class="table">
					<tr>
						<td>Sun <?=date('m-d H', $today);?></td>
						<td>Mon <?=date('m-d H', $t2);?></td>
						<td>Tue <?=date('m-d H', $t3);?></td>
						<td>Wed <?=date('m-d H', $t4);?></td>
						<td>Thu <?=date('m-d H', $t5);?></td>
						<td>Fri <?=date('m-d H', $t6);?></td>
						<td>Sat <?=date('m-d H', $t7);?></td>
					</tr>
					<?php
					$hour = $today + (8*3600);
					for ($i=0; $i<14; $i++) { ?>
					<tr>
					<?php for ($j=0; $j<7; $j++) { ?>
					<td><a style="color: black;" onclick="document.getElementById('foo').val = '<?= $hour ?>'; return false;" href="#"><?= date('g i A', $hour) ?></a></td>
					<?php 
					} ?>
					</tr>
					<?php 
					$hour = $hour + 3600;
					} ?>
				</table>
				<input type="hidden" name="h1" id="h1" value="123">
			</form>
			</fieldset>
		</div>
		<br><br><br><br><br><br><br><br><br><br>
		<div class="footer">
			<h3>Copyright 2017 &copy; <a href="http://higher.team" target="_blank">higher.team</a></h3>
		</div>
		
		<!-- Javascript and jQuery CDN links -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
