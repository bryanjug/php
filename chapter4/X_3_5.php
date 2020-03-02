<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>309 Appending Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Appending Text</h3>

<?php
    $salutation = $_POST['salutation'];
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    $fullname = $salutation.' '.$firstname.' '.$lastname;
    
	print "<p>".$fullname." is a pretty formal way to
    address you, how about I just call you ".$firstname.'?';
?>

</body>
</html>