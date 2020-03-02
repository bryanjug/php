<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0404 If Statement</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The IF Statement</h3>

<?php
	$degreeChoice = $_POST['degree'];
	
	if ($degreeChoice == "Bachelor")
	{	
    	print "<p>You have a $degreeChoice's degree.</p>";
    } else if ($degreeChoice == "Master") {
        print "<p>You have a $degreeChoice's degree.</p>";
    } else if ($degreeChoice == "Doctor") {
        print "<p>Hi there, $degreeChoice.</p>";
    }

	print "<p> - END - </p>";
?>


</body>
</html>
