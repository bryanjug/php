
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<?php

	displayMsg();

	function displayMsg()
	{
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $calc = $number1 + $number2;
		print '<p>Adding to: '.$calc.'</p>';
	}

?>

</body>
</html>

