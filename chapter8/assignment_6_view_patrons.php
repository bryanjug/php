<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <title>Assignment 2</title>
        <link rel="stylesheet" type="text/css" href="css/KingLib_6.css">
    </head>

    <body>
        <div id="logo">
            <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
        </div>
        <div id="results">
            <?php
                include "assignment_6_db_functions.php";

                $server = $_SERVER['SERVER_NAME'];

                $positionFound = strpos($server, 'profperry');

                if ($positionFound === false)
                {
                    $server = 'localhost';
                } else {
                    $server = 'Practice Area';
                }

                if ($server == "Practice Area")
                {
                    $db = connectDatabase();

                } else {

                    $db = mysqli_connect('localhost','root','', 'test');

                    if (!$db)
                    {
                        print "<h1>Unable to Connect to MySQL</h1>";
                    }
                }
            
                if ($db) {
                    $sql_statement = "SELECT lastname, firstname, email, ";
                    $sql_statement .= "city, birthyear FROM patron ";
                    $sql_statement .= "ORDER BY lastname, firstname;";

                    $result = mysqli_query($db, $sql_statement);

                    if (!$result) {
                        $output = "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
                        $output .= "MySQL Error: ".mysqli_error($db)."<br>";
                        $output .= "<br>SQL: ".$sql_statement."<br>";
                        print "<br>".$output;
                    } else {
                        $output = "<h1>View Patrons</h1><br><table border='1'>";
                        $output .= "
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Birth Year</th>
                        </tr>";

                        $numresults = mysqli_num_rows($result);
                
                        for ($i = 0; $i < $numresults; $i++) {
                            if (!($i % 2) == 0) {
                                $output .= "<tr style=\"background-color: #F5DEB3;\">";
                            } else {
                                $output .= "<tr style=\"background-color: white;\">";
                            }

                            $row = mysqli_fetch_array($result);

                            $lastname_row  = $row['lastname'];
                            $firstname_row = $row['firstname'];
                            $email_row = $row['email'];
                            $city_row = $row['city'];
                            $birthyear_row = $row['birthyear'];

                            $output .= "<td>".$lastname_row."</td>";
                            $output .= "<td>".$firstname_row."</td>";
                            $output .= "<td>".$email_row."</td>";
                            $output .= "<td>".$city_row."</td>";
                            $output .= "<td>".$birthyear_row."</td>";

                            $output .= "</tr>";
                        }

                        $output .= "</table>";
                        print $output;
                    }
                } else {
                    print "<br>Did not connect to the data.";
                }
            ?>
        </div>
    </body>
</html>