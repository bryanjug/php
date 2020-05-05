
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<?php

    $userNumber = $_POST['number'];

	displayMsg($userNumber);

	function displayMsg($number)
	{
        $calc = $number + 5;
        print '<p>Added: '.$calc.'</p>';
	}

?>

</body>
</html>

