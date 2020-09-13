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
        <h1>Add User/Password to User</h1>

        <h1>Add a UserId/Password to User:</h1>
        <p class='info'>
            First Name:
            <input type='text' name='firstName' size='30' class='longForm'>
        </p>
        <p class='info'>
            Last Name:
            <input type='text' name='lastName' size='30' class='longForm'>
        </p>
        <p class='info'>
            User ID
            <input type='text' name='userID' size='30' class='shortForm'>
        </p>
        <p class='info'>
            Password
            <input type='text' name='password' size='30' class='shortForm'>
        </p>
        <input type='submit' value='Update User' name='submit'>
    </form>
    <section id='results'>
        <?php
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
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
            
            if (isset($_POST['submit'])) {             
                if (empty($lastName) || empty($firstName) || empty($userID) || empty($password)) {    
                    print "<p>Please fill in every form box!</p>";
                } else {
                    $sql_statement_SELECT = 'SELECT * ';
                    $sql_statement_SELECT .= 'FROM patron WHERE lastname = "'.$lastName.'" ';
                    $sql_statement_SELECT .= 'AND firstname = "'.$firstName.'";';

                    $result_SELECT = mysqli_query($db, $sql_statement_SELECT);

                    $numresult_SELECT = mysqli_num_rows($result_SELECT);

                    if (!$numresult_SELECT) { //if firstname and lastname doesnt exist
                        //insert a new name, userid, and password
                        $sql_statement_INSERT = 'INSERT INTO patron (lastname, firstname, userid, password) ';
                        $sql_statement_INSERT .= 'VALUES ("'.$lastName.'", "'.$firstName.'", "'.$userID.'", "'.$password.'");';

                        $result_INSERT = mysqli_query($db, $sql_statement_INSERT); 
                        print "<p>TABLE INSERTED</p>";
                    } else {
                        $sql_statement_UPDATE = 'UPDATE patron ';
                        $sql_statement_UPDATE .= 'set userid = "'.$userID.'", ';
                        $sql_statement_UPDATE .= 'password = "'.$password.'" ';
                        $sql_statement_UPDATE .= 'WHERE lastname = "'.$lastName.'" AND ';
                        $sql_statement_UPDATE .= 'firstname = "'.$firstName.'";';

                        $result_UPDATE = mysqli_query($db, $sql_statement_UPDATE);
                        
                        print "<p>TABLE UPDATED</p>";
                    }
                }
            }
        ?>
    </section>
</body>
</html>