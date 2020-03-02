<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Success!</h3>

<?php
	$pets = $_POST['pets'];
	$petsDouble = $pets * 2;

	print "<p>You have $pets ";
	print "pets now, but wouldn't
	you rather have ";
	print "$petsDouble?</p>";
?>

</body>
</html>