
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0604 Function - data in out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>
    
<?php
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	
    $rtnmsg = displayPage($number1, $number2);
    
    print $rtnmsg;

	function displayPage($number_1, $number_2)
	{
		$added = $number_1 + $number_2;
        return $added;
	}
?>

</body>
</html>