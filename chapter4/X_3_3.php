<!DOCTYPE HTML>

<html>
<head>
	<title>303 HTML Forms</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Success!</h3>

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	print "<p>Your full name is $firstname $lastname</p>";
?>

</body>
</html>
