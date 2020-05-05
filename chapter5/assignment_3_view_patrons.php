<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <title>Assignment 2</title>
        <link rel="stylesheet" type="text/css" href="css/KingLib_3.css">
    </head>

    <body>
        <div id="logo">
            <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
        </div>
        <div id="results">
            <h1>View Patrons</h1>
            <table border='1'>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Birth Year</th>
            </tr>
                
            <?php
                $display = "";  //empty string
                $line_ctr = 0;

                $filename = 'data/patrons.txt';

                $fp = fopen($filename, 'r');   //opens the file for reading

                if (file_exists($filename))
                {
                    echo "";
                } else {
                    echo "<h1>The file $filename does not exist</h1>";
                }

                while(true) {
                    $line = fgets($fp);
                    if (feof($fp)) {
                        break;
                    }

                    $line_ctr++;

                    $line_ctr_remainder = $line_ctr % 2;

                    if ($line_ctr_remainder == 0) {
                        $style = "style='background-color: #FFFFCC;'";
                    } else {
                        $style = "style='background-color: white;'";
                    }   

                    list($lastName, $firstName, $email, $birthYear, $position) = explode('|', $line);

                    $display .= "<tr $style>";
                        $display .= "<td>".$lastName."</td>";
                        $display .= "<td>".$firstName."</td>";
                        $display .= "<td>".$email."</td>";
                        $display .= "<td>".$birthYear."</td>";
                        $display .= "<td>".$position."</td>";
                    $display .= "</tr>\n";  //added newline
                }

                fclose($fp );
                print $display;   //This prints the table rows
            ?>
        </div>
    </body>
</html>