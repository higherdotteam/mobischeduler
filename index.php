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
			<form id="f1" action="handle_datetime.php" method="post">
      <legend>
<strong>I am</strong>
<select name="whoami">
<?
$conn = mysqli_connect("138.197.209.226", "root", "root", "hdt");
    $query = mysqli_query($conn, "select * from students");
while ($row = mysqli_fetch_array($query)) { ?>
  <option><?= $row['slackusername'] ?></option>
<? } ?> 
</select>
and I would like to meet with andrew on:
</legend>

<table class="table">
<tr>
<td>Sunday Jan 22</td>
<td>Monday Jan 23</td>
<td>Tuesday Jan 24</td>
<td>Wednesday Jan 25</td>
<td>Thursday Jan 26</td>
<td>Friday Jan 27</td>
<td>Saturday Jan 28</td>
</tr>
<tr>
<td>7:00 AM</td>
<td>7:00 AM</td>
<td>7:00 AM</td>
<td>7:00 AM</td>
<td>7:00 AM</td>
<td>7:00 AM</td>
<td>7:00 AM</td>
</tr>
<tr>
<td>8:00 AM</td>
<td>8:00 AM</td>
<td><a href="#" onclick="document.getElementById('f1').submit(); return false;">8:00 AM</a></td>
<td>8:00 AM</td>
<td>8:00 AM</td>
<td>8:00 AM</td>
<td>8:00 AM</td>
</tr>
</table>
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
