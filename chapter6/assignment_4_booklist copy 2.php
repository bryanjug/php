<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Titles</title>
    <style>
        tr:nth-of-type(n) {
            background-color: white;
        }
        tr:nth-of-type(2n) {
            background-color: #fff0b3;
        }
    </style>
</head>
<body style="background-color: lightblue;">
    <div id="logo">
        <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
    </div>
    <?php
        $sortOrder = $_POST['sortOrder'];
        $searchTerm = $_POST['search_title'];
        $filename = 'data/'.'booklist.txt';

        if (!file_exists($filename)) {
            print "<strong>Book list is missing!</strong>";
            exit;
        }

        $lines_in_file = count(file($filename));

        $fp = fopen($filename, 'r');

        if ($sortOrder == 'ascending') {
            $titles = array();

            for ($ii = 1; $ii <= $lines_in_file; $ii++) {
                $line = fgets($fp);  //Reads one line from the file
                $title = trim($line);

                if (feof($fp))
                {
                    break;
                }

                $pos = stripos($title, $searchTerm);
                
                if ($searchTerm == '') {
                    $display = "<h1>Current Titles</h1>\n\n<strong>(Sorted in Alphabetical Order)</strong>\n\n";
                    $display .= "\n\n<table border='1'>";
                    $display .= "<tr>";
                    $display .= "<th>Title</th>";
                    $display .= "<th>Type</th>";
                    $display .= "<th>Publication Date</th>";
                    $display .= "<th>ISBN</th>";       
                    $display .= "</tr>\n\n"; 

                    for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                        $line = fgets($fp);  //Reads one line from the file
                        $title = trim($line);

                        array_push($titles, $title);
                    }

                    sort($titles);
                    //$titles = implode('', $titles);

                    for ($ii = 0; $ii <= $lines_in_file; $ii++) {
                        list($Title, $Type, $PubDate, $ISBN) = explode('*', $titles[$ii]);

                        if ($Title == '') {
                            continue;
                        } else {
                            $display .= "<tr>";
                                $display .= "<td>".$Title."</td>";
                                $display .= "<td>".$Type."</td>";
                                $display .= "<td>".$PubDate."</td>";
                                $display .= "<td>".$ISBN."</td>";
                            $display .= "</tr>\n";  //added newline
                        }
                    }
                    
                    $display .= "</table>";
                    fclose($fp);

                    print $display;

                } else if ($searchTerm != '') {
                    $titles = array();

                    $display = "<h1>Current Titles that match: ".$searchTerm."</h1>\n\n<strong>(Sorted in Alphabetical Order)</strong>\n\n";
                    $display .= "\n\n<table border='1'>";
                    $display .= "<tr>";
                    $display .= "<th>Title</th>";
                    $display .= "<th>Type</th>";
                    $display .= "<th>Publication Date</th>";
                    $display .= "<th>ISBN</th>";       
                    $display .= "</tr>\n\n"; 
                    
                    for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                        $line = fgets($fp);  //Reads one line from the file
                        $title = trim($line);

                        array_push($titles, $title);
                    }

                    sort($titles);
                    //$titles = implode('', $titles);

                    for ($ii = 0; $ii <= $lines_in_file; $ii++) {
                        list($Title, $Type, $PubDate, $ISBN) = explode('*', $titles[$ii]);
                        
                        $pos2 = stripos($Title, $searchTerm);

                        if ($pos2 !== false) {       
                            $display .= "<tr>";
                                $display .= "<td>".$Title."</td>";
                                $display .= "<td>".$Type."</td>";
                                $display .= "<td>".$PubDate."</td>";
                                $display .= "<td>".$ISBN."</td>";
                            $display .= "</tr>\n";  //added newline
                        } else if ($pos2 === false){
                            continue;
                        }
                    }
                    
                    $display .= "</table>";
                    fclose($fp);

                    print $display;
                }
            }
        } else if ($sortOrder == 'descending') {
            $titles = array();

            for ($ii = 1; $ii <= $lines_in_file; $ii++) {
                $line = fgets($fp);  //Reads one line from the file
                $title = trim($line);

                if (feof($fp))
                {
                    break;
                }

                $pos = stripos($title, $searchTerm);
                
                if ($searchTerm == '') {
                    $display = "<h1>Current Titles</h1>\n\n<strong>(Sorted in Reverse Alphabetical Order)</strong>\n\n";
                    $display .= "\n\n<table border='1'>";
                    $display .= "<tr>";
                    $display .= "<th>Title</th>";
                    $display .= "<th>Type</th>";
                    $display .= "<th>Publication Date</th>";
                    $display .= "<th>ISBN</th>";       
                    $display .= "</tr>\n\n"; 

                    for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                        $line = fgets($fp);  //Reads one line from the file
                        $title = trim($line);

                        array_push($titles, $title);
                    }

                    rsort($titles);
                    
                    for ($ii = 0; $ii <= $lines_in_file; $ii++) {
                        list($Title, $Type, $PubDate, $ISBN) = explode('*', $titles[$ii]);
                        if ($Title == '') {
                            continue;
                        } else {
                            $display .= "<tr>";
                            $display .= "<td>".$Title."</td>";
                            $display .= "<td>".$Type."</td>";
                            $display .= "<td>".$PubDate."</td>";
                            $display .= "<td>".$ISBN."</td>";
                            $display .= "</tr>\n";  //added newline
                        }
                    }
                    
                    $display .= "</table>";
                    fclose($fp);

                    print $display;

                } else if ($searchTerm != ''){
                    $titles = array();

                    $display = "<h1>Current Titles that match: ".$searchTerm."</h1>\n\n<strong>(Sorted in Reverse Alphabetical Order)</strong>\n\n";
                    $display .= "\n\n<table border='1'>";
                    $display .= "<tr>";
                    $display .= "<th>Title</th>";
                    $display .= "<th>Type</th>";
                    $display .= "<th>Publication Date</th>";
                    $display .= "<th>ISBN</th>";       
                    $display .= "</tr>\n\n"; 
                    
                    for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                        $line = fgets($fp);  //Reads one line from the file
                        $title = trim($line);

                        array_push($titles, $title);
                    }

                    rsort($titles);
                    //$titles = implode('', $titles);

                    for ($ii = 0; $ii <= $lines_in_file; $ii++) {
                        list($Title, $Type, $PubDate, $ISBN) = explode('*', $titles[$ii]);
                        
                        $pos2 = stripos($Title, $searchTerm);

                        if ($pos2 !== false) {       
                            $display .= "<tr>";
                                $display .= "<td>".$Title."</td>";
                                $display .= "<td>".$Type."</td>";
                                $display .= "<td>".$PubDate."</td>";
                                $display .= "<td>".$ISBN."</td>";
                            $display .= "</tr>\n";  //added newline
                        } else if ($pos2 === false){
                            continue;
                        }
                    }
                    
                    $display .= "</table>";
                    fclose($fp);

                    print $display;
                }
            }
        }
    ?>
</body>
</html>