<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/assignment_8.css" />
    <title>Assignment 8 Log In</title>
</head>
<body>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <h1>Login Validation</h1>

        <h1>Enter UserId/Password to Login:</h1>
        <p class='info'>
            User ID
            <input type='text' name='userID' size='30' class='shortForm'>
        </p>
        <p class='info'>
            Password
            <input type='text' name='password' size='30' class='shortForm'>
        </p>
        <p><input type='submit' value='Login' name='login'>
        New User? <a href='assignment_8_new_user.php'>Register</a></p>
    </form>
    <section id='results'>
        <?php
            $userID = $_POST['userID'];
            $password = $_POST['password'];

            //**********************************************
            //*
            //*  Detect Server
            //*
            //**********************************************

            $server = $_SERVER['SERVER_NAME'];

            $positionFound = strpos($server, 'profperry');

            if ($positionFound === false)
            {
                $server = 'localhost';
            } else {
                $server = 'Practice Area';
            }

            //**********************************************
            //*
            //*  Connect to MySQL and Database
            //*
            //**********************************************

            if ($server == "Practice Area")
            {
                    require('../../DBtest_pptest.php');

                    $host =  'localhost';
                    $userid_server =  'P17';
                    $password_server = '7dosql7';
                    $dbname = 'testdb';

                    $db = mysqli_perry_pconnect($host, $userid_server, $password_server, $dbname);

                    if (!$db)
                    {
                        print "<h1>Unable to Connect to MySQLi</h1>";
                        exit;
                    }

            } else {

                $db = mysqli_connect('localhost','root','', 'test');

                if (!$db)
                {
                    print "<h1>Unable to Connect to MySQL</h1>";
                }
            }
            
            if (isset($_POST['login'])) {    
                if (empty($userID) || empty($password)) {    
                    print "<p>Please fill in every form box!</p>";
                } else {
                    $outputDisplay = doCheckLogin($db, $userID, $password);
                    print "<br>".$outputDisplay;
                }
            }
        ?>
    </section>
</body>
</html>

<?php
    function doCheckLogin($db, $userID, $password) {
        $sql_statement = 'SELECT * FROM patron WHERE userid = "'.$userID.'" AND ';
        $sql_statement .= 'password = "'.$password.'";';

        $result = mysqli_query($db, $sql_statement);  // Run SELECT

        if (!$result) {
            $outputDisplay = "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
            $outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
            $outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
        } else {
            $numresults = mysqli_num_rows($result);
            
            if ($numresults == 0)
            {
                $outputDisplay = "<p>Invalid Login</p>";
            } else {
                $outputDisplay = "<p>Valid Login</p>";
                $sql_statement = 'SELECT title, type FROM book ORDER BY title;';
                $result = mysqli_query($db, $sql_statement);

                if (!$result) {
                    $output = "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
                    $output .= "MySQL Error: ".mysqli_error($db)."<br>";
                    $output .= "<br>SQL: ".$sql_statement."<br>";
                    print "<br>".$output;
                } else {
                    $outputDisplay .= '<h1>Books</h1><br><table border="1">';
                    $outputDisplay .= "
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                        </tr>";

                    $numresults = mysqli_num_rows($result);

                    for ($i = 0; $i < $numresults; $i++) {
                        $row =  mysqli_fetch_array($result);
                        
                        $title_row  = $row['title'];
                        $type_row = $row['type'];

                        $outputDisplay .= "<td>".$title_row."</td>";
                        $outputDisplay .= "<td>".$type_row."</td>";

                        $outputDisplay .= "</tr>";
                    }

                    $outputDisplay .= "</table>";
                }
            }
        }

        return $outputDisplay;
    }
?>