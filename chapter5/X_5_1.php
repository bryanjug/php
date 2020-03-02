
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0501 The FOR Loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Grocery List</h3>

<h4>Using For Loop</h4>

<?php
    print "<ul>";

    for ($ii = 1; $ii <= 7; $ii++)
	{
		$item_html_name = 'item'.$ii;
		$item = $_POST[$item_html_name];
        print "<li>Item : ".$ii.": ".$item."</li>";    
    }
    print "</ul>";
?>
</body>
</html>