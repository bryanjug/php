<!DOCTYPE HTML>

<html>
<head>
	<title>0503_Reading_File</title>

	<link rel="stylesheet" type="text/css" href="css/king_2.css" />

</head>

<body>

<h3>Reading From a File</h3>

    <?php
		$filename = 'data/'.'X_5_3.txt';

		$lines_in_file = count(file($filename));

		$fp = fopen($filename, 'r');   //opens the file for reading

		for ($ii = 1; $ii <= $lines_in_file; $ii++)
		{
			$line = fgets($fp);  //Reads one line from the file
			$name = trim($line);

			print 'Baseball Member : '.$ii.' : '.$name.'<br />';
		}

		fclose($fp);

	?>
</body>
</html>