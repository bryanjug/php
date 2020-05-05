
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0603 Function data out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>
    
<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

	$rtnData = displayMsg($number1, $number2);

	print $rtnData;

	function displayMsg($firstNumber, $secondNumber)
	{
        $calc = $firstNumber + $secondNumber;
		$display = '<p>Added together: '.$calc.'</p>';

		return $display;
	}

?>

</body>
</html>