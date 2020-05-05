<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6-11</title>
</head>
<body>
    <?php
        $cities = array();
        
        $filename = 'data/'.'cities.txt';
        $lines_in_file = count(file($filename));

        $fp = fopen($filename, 'r');
        
        $findCity = $_POST['find_city'];

        if (!empty($findCity)) {
            print "<h4>Searching for Cities that contain: $findCity</h4>";
            
            for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                $line = fgets($fp);  //Reads one line from the file
                $city = trim($line);
                array_push($cities, $city); //puts .txt list into array: cities
            }
            
            fclose($fp);
        }

        $cities = implode(' ', $cities);

        $pos = stripos($cities, $findCity);

        if ($pos === false) {
            print "<br>$findCity not found in $cities";
        } else {
            print "<br>$findCity is in $cities";
        }
    ?>
</body>
</html>