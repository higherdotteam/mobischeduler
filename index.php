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

<? date_default_timezone_set('America/Los_Angeles');
$today = strtotime('today'); 
$t2 = $today + (3600*24*1); 
$t3 = $today + (3600*24*2); 
$t4 = $today + (3600*24*3); 
$t5 = $today + (3600*24*4); 
$t6 = $today + (3600*24*5); 
$t7 = $today + (3600*24*6); 

?>

<table class="table">
<tr>
<td>Sun <?=date('m-d H', $today)?></td>
<td>Mon <?=date('m-d H', $t2)?></td>
<td>Tue <?=date('m-d H', $t3)?></td>
<td>Wed <?=date('m-d H', $t4)?></td>
<td>Thu <?=date('m-d H', $t5)?></td>
<td>Fri <?=date('m-d H', $t6)?></td>
<td>Sat <?=date('m-d H', $t7)?></td>
</tr>
<? for ($i=0; $i<18; $i++) { ?>
<tr>
<? for ($j=0; $j<7; $j++) { ?>
<td>8:00 AM</td>
<? } ?>
</tr>
<? } ?>
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
