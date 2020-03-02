<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0403 HTML Table</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>HTML Table</h3>

<?php
	$apples = 1;
	$pears = 2;
	$diff = 3;

?>

<table border='1'>
	<tr>
		<th></th>
        <th>2009</th>
        <th>2010</th>
        <th>2011</th>
        <th>2012</th>
	</tr>

<?php

	print "<tr><td>Mets </td><td>$apples</td><td>$apples</td><td>$apples</td><td>$apples</td></tr>\n";

	print "<tr><td>Pirates </td><td>$pears</td><td>$pears</td><td>$pears</td><td>$pears</td></tr>\n";

	print "<tr><td>Giants </td><td>$diff</td><td>$diff</td><td>$diff</td><td>$diff</td></tr>\n";
?>

</table>


</body>
</html>
