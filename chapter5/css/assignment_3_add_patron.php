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
            <?php

                $firstName = $_POST['firstname'];
                $lastName = $_POST['lastname'];
                $email = $_POST['email'];
                $birthYear = $_POST['birthyear'];
                $position = $_POST['position'];
                $current_year = date('Y');
                $userAge = $current_year - $birthYear;
                $section = "";
                
                $errorMessage = "";

                $firstNameErr = "N";
                $lastNameErr = "N";
                $emailErr = "N";
                $birthYearErr = "N";
                $positionErr = "N";
      
                if (empty($firstName)) {
                    $firstNameErr = "Y";
                    $errorMessage .= "Error: You must enter a first name<br />";
                } else if (is_numeric($firstName)) {
                    $firstNameErr = "Y";                   
                    
                    $errorMessage .= "Error: You must enter a first name, not a number<br />";
                }
                
                if (empty($lastName)) {
                    $errorMessage .= "Error: You must enter a last name<br />";
                    $lastNameErr = "Y";
                } else if (is_numeric($lastName)) {
                    $errorMessage .= "Error: You must enter a first name, not a number<br />";
                    $lastNameErr = "Y";
                }

                if (empty($email)) {
                    $errorMessage .= "Error: You must enter your email<br />";
                    $emailErr = "Y";
                }

                if (empty($birthYear)) {
                    $errorMessage .= "Error: You must enter your birth year<br />";
                    $birthYearErr = "Y";
                } else if (!(is_numeric($birthYear))) {
                    
                    $errorMessage .= "Error: You must enter a number for your birth year";
                    $birthYearErr = "Y";
                }

                if (empty($position)) {
                    $errorMessage .= "Error: You must select a city";
                    $positionErr = "Y";
                }

                if ($firstNameErr == "Y" ||
                $lastNameErr == "Y" ||
                $emailErr == "Y" ||
                $birthYearErr == "Y" ||
                $positionErr == "Y" || $positionErr == "Y") {
                    print "<p>$errorMessage<br /><br /> Go BACK and make corrections</p>";
                    exit;
                }

                if ($userAge >= 0 && $userAge <= 15) {
                    $section = 'Children';
                } else if ($userAge >= 16 && $userAge <= 54) {
                    $section = 'Adult';
                } else if ($userAge >= 55) {
                    $section = 'Senior';
                }

                $filename = 'data/'.'patrons.txt';
                $fp = fopen($filename, 'a');

                $output_line = $lastName.'|'.$firstName.'|'.$email.'|'.$birthYear.'|'.$position.'|'."\n";
                                
                fwrite($fp, $output_line);

                fclose($fp);

                print "<p>Thank You for Registering!</p>";
                print "<p>Name: ".$firstName." ".$lastName;
                print "<br />";
                print "<br />";
                print "Email: ".$email;
                print "<br />";
                print "<br />";
                print "City: ".$position;
                print "<br />";
                print "<br />";
                print "Section: ".$section."</p>";
                print "For Admin Use Only: <a href='assignment_3_view_patrons.php'>View Patrons</a>";
            ?>
        </div>
    </body>
</html>