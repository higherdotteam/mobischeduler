<?php
//require "connect.php";

//$query = "SELECT fname, lname FROM students";
?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Video Chat</title>
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
				color: white;
			}
			
			.footer {
				background-color: #000000;
				color: #fff;
				padding: 60px;
			}
			
			.container {
				background-color: #c0392b;
				border-radius: 5px;
				color: #fff;
				padding: 40px;
			}
			
			table tr th {
				background-color: #fff;
			}
			
			table tr td {
				background-color: #bdc3c7;
			}
		</style>
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1><strong>HIGHER.TEAM</strong> <em>MobiScheduler</em></h1>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<form action="" method="post">
						<div class="form-group">
						  <label for="select_name">Select your name:</label>
						  <select class="form-control" name="select_name">
							<?php
								//$x = 0;
								//if($num_rows = @mysql_fetch_assoc($query)){
									//while($x < $num_rows){
										//echo "<option value=".$num_rows['fname']." ".$num_rows['lname'].>" . $num_rows['fname'] . " " . $num_rows['lname'] . "</option>";
										//$x++;
									//}
								//}
							?> 
							<option value="Eddie Ramos">Eddie Ramos</option>
							<option value="Rob Bartholme">Rob Bartholme</option>
							<option value="Christian Momdjian">Christian Momdjian</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="date">Date (dd/mm/yyyy):</label>
						  <input type="text" class="form-control" name="date">
						</div>
							<label class="radio-inline"><input type="radio" name="optradio">11:00am</label>
							<label class="radio-inline"><input type="radio" name="optradio">12:00pm</label>
							<label class="radio-inline"><input type="radio" name="optradio">1:00pm</label>
							<label class="radio-inline"><input type="radio" name="optradio">2:00pm</label>
							<label class="radio-inline"><input type="radio" name="optradio">3:00pm</label>
							<label class="radio-inline"><input type="radio" name="optradio">4:00pm</label>
						<br><br>
						<button type="submit" class="btn btn-info">Submit</button>
						&nbsp;&nbsp;&nbsp;
						<span><button type="button" class="btn btn-default" data-toggle="collapse" data-target="#demo">Instructor Schedule</button></span>
						<div id="demo" class="collapse">
						<br>
							<table class="table table-striped">
								<tr>
									<th>Student</th>
									<th>Date</th>
									<th>Time</th>
									<th>Instructor</th>
								</tr>
								<tr>
									<td>Example</td>
									<td>Example</td>
									<td>Example</td>
									<td>Example</td>
								</tr>
							</table>
					    </div>
						<br><br>
						<span><a href="index.html"><button type="button" class="btn btn-success">Start over</button></a></span>
					</form>
				</div>
				<div class="col-xs-12 col-md-6">
					<h2>
						Our mobile-app allows you to pick a method, time, place and date to meet with your Higher.team instructor.
					</h2>
				</div>
			</div>
		</div>
		<br><br><br><br>
		<div class="footer">
			<h3>Copyright 2017 &copy; <a href="http://higher.team" target="_blank">higher.team</a></h3>
		</div>
		
		<!-- Javascript and jQuery CDN links -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>