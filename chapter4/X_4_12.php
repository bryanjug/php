<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0412 Field Validations</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Field Validations</h3>

<?php
	$randomNum = $_POST['randomNumber'];
	
	if (empty($randomNum)) {
		print "Field is blank: Enter an integer between 1-100";
		exit;
	} else if (!is_numeric($randomNum)) {
		print "Not Numeric: Enter an integer between 1-100";
		exit;
	} else if (!($randomNum <= 100 && $randomNum >= 1)) {
        print "Out of Range:  Enter an integer between 1-100";
        exit;
    } else if ($randomNum == 17) {
        print "That's the number I was thinking of!";
    } else {
        print "Nope.  That's not it.";
    }
?>

</body>
</html>
