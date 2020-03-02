
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <title>307 Using Checkboxes</title>
        <link rel="stylesheet" type="text/css" href="css/assignment_1_register.css">
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
                $position = $_POST['position'];
                print "<h4>Thank You for Registering!</h4>";
                print "<p>Name: ".$firstName." ".$lastName;
                print "<br />";
                print "<br />";
                print "Email: ".$email;
                print "<br />";
                print "<br />";
                print "City: ".$position."</p>";
                
            ?>
        </div>
    </body>
</html>

