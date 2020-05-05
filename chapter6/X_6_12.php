<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Finding Text in a File</title>
	<link rel="stylesheet" type="text/css" href="css/king_2.css" />
</head>

<body>
<h3>Finding Text in a File - Results</h3>
    <?php
        $states = array();

        $find_state = $_POST['find_state'];

        $filename = 'data/'.'cities.txt';

        if (!file_exists($filename)) {
            print "<strong>State list is missing!</strong>";
            exit;
        }

        $lines_in_file = count(file($filename));

        $fp = fopen($filename, 'r');

        for ($ii = 1; $ii <= $lines_in_file; $ii++) {
            $line = fgets($fp);  //Reads one line from the file
			$state = trim($line);

            $pos = stripos($state, $find_state);
            
            if ($find_state == '') {
                for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                    $line = fgets($fp);  //Reads one line from the file
                    $state = trim($line);
                    array_push($states, $state);
                }
                
                fclose($fp);
                $states = implode(' ', $states);
                print "$states";

            } else if ($pos !== false){
                print "$state<br>";
            }
        }
	?>
</body>
</html>
    
    