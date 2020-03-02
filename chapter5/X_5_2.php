
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0502 The WHILE loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The WHILE Loop</h3>
<?php
    print "<ul>";
	$cntr = 1;

	while(true)
	{
		$city_html_name = 'city'.$cntr;
		
		$city = $_POST[$city_html_name];
			
		if (empty($city))
		{
			break;
		} 
		
		$cntr++;
		
		print "<li>Item: ".$city."</li><br />";
		
	}
    print "</ul>";
?>
</body>
</html>