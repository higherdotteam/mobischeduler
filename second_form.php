<?php
if($_POST['meetup_form'] == ""){
	header("Location: index.html");
	die();
}

if($_POST['meetup_form'] == "in_person"){
	header("Location: inperson_form.php");
	die();
}

if($_POST['meetup_form'] == "video_chat"){
	header("Location: videochat_form.php");
	die();
}

if($_POST['meetup_form'] == "slack_chat"){
	header("Location: slackchat_form.php");
	die();
}
?>
