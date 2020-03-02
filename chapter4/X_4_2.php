<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>401 String Delimiters</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<?php
	
	$currentyear = $_POST['currentyear'];
	$mybirthyear = $_POST['mybirthyear'];
	$numberofhoursIsleepeachnight = $_POST['mybirthyear'];

	$years_slept = ($currentyear - $mybirthyear) * $numberofhoursIsleepeachnight / 24;
	$total_slept = number_format($years_slept, 1);
	print "$total_slept hours"
?>

</body>
</html>
