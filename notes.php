<html>
<head><title>0301 Using PHP Script Tags</title>
<style>body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}</style>
</head>

<body>
	<h1>0301 Using PHP Script Tags</h1>
	<p>What are script tags and why do we need them to run PHP?</p>

	<?php
		$today = date('Y-m-d h:i:s');
		print "<p><b>Today is $today </b></p>";
	?>


	<p>Do you want to see that again?</p>
	<?php
		print "<p><b>Today is STILL $today </b></p>";
	?>


</body>

</html>

<?php
print "<html>\n";
print "<head><title>0302 Displaying HTML</title>\n";
print "<style>body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}</style>\n";
print "</head>";
print "\n ";
print "<body>\n";
print "	<h1>0302 Displaying HTML</h1>\n";
print "	<p>What are script tags and why do we need them to run PHP?</p>\n";
print "\n ";

$today = date('Y-m-d h:i:s');

print "<p><b>Today is $today </b></p>\n";
print " ";
print "</body>\n";
print " ";
print "</html>\n";
?>

<!DOCTYPE HTML>

<html>
<head>
	<title>308 Assigning Variables</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>How old are you really?</h3>

<form method="post" action="0303_HTML_Forms.php">

	<p>
		First Name:<br />
		<input type="text" name="firstname" size="30" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>


<!DOCTYPE HTML>

<html>
<head>
	<title>303 HTML Forms</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Success!</h3>

<?php
	$firstname = $_POST['firstname'];
	print "<p>Congratulations $firstname</p>";
?>

<p>You've just written your first PHP program!</p>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>308 Assigning Values</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>How old are you really?</h3>

<form method="post" action="0308_Assigning_Values.php">

	<p>
		First Name:<br />
		<input type="text" name="firstname" size="30" />
	</p>

	<p>
		Last Name:<br />
		<input type="text" name="lastname" size="30" />
	</p>

	<p>
		Your Age:<br />
		<input type="text" name="age" size="3" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>303 HTML Forms</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Success!</h3>

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$fullname = "$firstname $lastname";

	$factor = 5;

	$ageplus = $age + $factor;

	$current_year = date('Y');

	$birth_year = $current_year - $ageplus;

	print "<p>Your name is $fullname ";
	print "and you say your age is $age ";
	print "but I bet you are really $ageplus ";
	print "and were born in $birth_year</p>";
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>
<form method="post" action="X_3_4.php">

	<p>
		Amount of pets:<br />
		<input type="text" name="pets" size="3" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Success!</h3>

<?php
	$pets = $_POST['pets'];
	$petsDouble = $pets * 2;

	print "<p>You have $pets ";
	print "pets now, but wouldn't
	you rather have ";
	print "$petsDouble?</p>";
?>

</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>309 Appending Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Putting it together</h3>

<form method="post" action="0309_Appending_Text.php">

	<p>
		First Name:<br />
		<input type="text" name="firstname" size="30" />
	</p>

	<p>
		Last Name:<br />
		<input type="text" name="lastname" size="30" />
	</p>

	<p>
		Your Age:<br />
		<input type="text" name="age" size="3" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>309 Appending Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Appending Text</h3>

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$middle_init = 'Q.';

	$fullname = $firstname.' '.$middle_init.' '.$lastname;

	$factor = 5;

	$ageplus = $age + $factor;

	//$current_year = date('Y');

	$birth_year = date('Y') - $ageplus;

	print "<p>Regarding ".$fullname;
	print "<br />Entered age of ".$age;
	print "<br />Our profile program concludes that your real age is: ".$ageplus ;
	print "<br />and were born in the year: ".$birth_year;
	print "<br />The current year is ".date('Y')."</p>";
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>309 Appending Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Putting it together</h3>

<form method="post" action="X_3_5.php">

	<p>
		salutation:<br />
		<input type="text" name="salutation" size="5" />
	</p>

	<p>
		first name:<br />
		<input type="text" name="firstname" size="30" />
	</p>

	<p>
		last name:<br />
		<input type="text" name="lastname" size="30" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>309 Appending Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Appending Text</h3>

<?php
    $salutation = $_POST['salutation'];
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    $fullname = $salutation.' '.$firstname.' '.$lastname;
    
	print "<p>".$fullname." is a pretty formal way to
    address you, how about I just call you ".$firstname.'?';
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>304 Using a SELECT tag</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using a SELECT tag</h3>

<form method="post" action="0304_Using_Select.php">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30">
	</p>

	<p>
	Position:<br />
	<select name="position" size="1">
		<option value="Administrator">Administrator</option>
		<option value="Faculty">Faculty</option>
		<option value="Staff">Staff</option>
	</select>
	</p>

	<p>
	<input type="submit" value="Submit Information">
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>304 Using Select</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>College Report</h3>

<?php
	$firstname = $_POST['firstname'];
	$position = $_POST['position'];

	print "<p>You are <span class='textblue'> $firstname</span> and ";
	print "your position at the college is: <span class='textblue'> $position </span></p>";
?>

</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>305 Using the TextArea tag</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using the TextArea tag</h3>

<form method="post" action="0305_Using_TextArea.php">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30">
	</p>

	<p>
	Comments:<br />
	<textarea name="comments" rows="7" cols="50">
	</textarea>
	</p>

	<p>
	<input type="submit" value="Submit Information">
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>305 Using TextArea</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using TextArea</h3>

<?php
	$firstname = $_POST['firstname'];
	$comments = $_POST['comments'];

	print "<p>You are <span class='textblue'> $firstname</span> and ";
	print "your comments about the college are: </p>";

	//print "<p><span class='textblue'> $comments </span></p>";


	// alternate way to display information

	print "<textarea name='comments' rows='7' cols='50' disabled='disabled' class='textdisabled'>";
	print $comments;
	print "</textarea>";


?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>306 Using the RadioButtons</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using the RadioButtons</h3>

<form method="post" action="0306_Using_RadioButtons.php">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30">
	</p>

	<p>
	Employee Type:
	<input type="radio" name="etype" value="Fulltime" checked="checked"> Fulltime
	<input type="radio" name="etype" value="Parttime"> Partime
	</p>

	<p>
	<input type="submit" value="Submit Information">
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>306 Using RadioButtons</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using RadioButtons</h3>

<?php
	$firstname = $_POST['firstname'];
	$etype = $_POST['etype'];

	print "<p>You are <span class='textblue'> $firstname</span> and ";
	print "your employment type is: ";
	print "<span class='textblue'> $etype </span></p>";

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>307 Using Checkboxes</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using Checkboxes</h3>

<form method="post" action="0307_Using_Checkboxes.php">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30">
	</p>

	<p>
	Degrees Received:
	<br /><input type="checkbox" name="BA" value="BA"> BA
	<br /><input type="checkbox" name="MA" value="MA"> MA
	<br /><input type="checkbox" name="Phd" value="Phd"> PhD
	</p>

	<p>
	<input type="submit" value="Submit Information">
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>307 Using Checkboxes</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Using Checkboxes</h3>

<?php
	$firstname = $_POST['firstname'];

	if (isset($_POST['BA']))
	{
		$BA = $_POST['BA'];
	} else {
		$BA = "";
	}

	if (isset($_POST['MA']))
	{
		$MA = $_POST['MA'];
	} else {
		$MA = "";
	}

	if (isset($_POST['Phd']))
	{
		$Phd = $_POST['Phd'];
	} else {
		$Phd = "";
	}


	print "<p>You are <span class='textblue'> $firstname</span> and ";
	print "your the degrees you've earned are: </p>";

	print "<p><span class='textblue'> $BA  </span></p>";
	print "<p><span class='textblue'> $MA  </span></p>";
	print "<p><span class='textblue'> $Phd  </span></p>";


	/*
		if (isset($_POST['Phd']))
		{
			$Phd = $_POST['Phd'];
		} else {
			$Phd = "";
		}
	*/

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>401 String Delimiters</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<?php
	
	$currentyear = $_POST['currentyear'];
	$mybirthyear = $_POST['mybirthyear'];
	$numberofhoursIsleepeachnight = $_POST['mybirthyear'];

	$years_slept = ($currentyear - $mybirthyear) * $numberofhoursIsleepeachnight / 24;
	$total_slept = number_format($years_slept, 1);
	print "$total_slept hours"
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0403 HTML Table</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>HTML Table</h3>

<form method="post" action="0403_HTML_Table.php">

<table>
	<tr align="left">
		<th>Description</th>
		<th>Amount Entered</th>
	</tr>

	<tr>
		<td>Number of Apples:</td>
		<td><input type="text" name="apples" size="2" /></td>
	</tr>

	<tr>
		<td>Number of Pears:</td>
		<td><input type="text" name="pears" size="2" /></td>
	</tr>
</table>

<p>
	<input type="submit" value="Submit Information" />
</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0403 HTML Table</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>HTML Table</h3>

<?php
	$apples = $_POST['apples'];
	$pears = $_POST['pears'];

	$totalFruit = $apples + $pears;

	$diff = $apples - $pears;

	$reverseDiff = -$diff;

	$multpliedApples = $apples * 5;

	$dividedApples = $apples / 3;

	$moduloApples = $apples % 3;

?>

<table border='1'>
	<tr>
		<th>Description</th>
		<th>Calculated Amount</th>
	</tr>

<?php

	print "<tr><td>The number of Apples is </td><td>$apples</td></tr>\n";

	print "<tr><td>The number of Pears is </td><td>$pears</td></tr>\n";

	print "<tr><td>The number of Apples than Pears </td><td>$diff</td></tr>\n";

	print "<tr><td>The reverse of that would be </td><td>$reverseDiff</td></tr>\n";

	print "<tr><td>Five times as many Apples would be </td><td>$multpliedApples</td></tr>\n";

	print "<tr><td>Apples divided between three would get </td><td>";
	print $dividedApples;
	print "</td></tr>\n";

	print "<tr><td>Rounded to two decimal places would be: </td><td>";
	print number_format($dividedApples, 2);
	print "</td></tr>\n";

	print "<tr><td>Apples left over between three would be </td><td>";
	print $moduloApples;
	print "</td></tr>\n";
?>

</table>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0403 HTML Table</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>HTML Table</h3>

<?php
	$apples = 1;
	$pears = 2;
	$diff = 3;

?>

<table border='1'>
	<tr>
		<th></th>
        <th>2009</th>
        <th>2010</th>
        <th>2011</th>
        <th>2012</th>
	</tr>

<?php

	print "<tr><td>Mets </td><td>$apples</td><td>$apples</td><td>$apples</td><td>$apples</td></tr>\n";

	print "<tr><td>Pirates </td><td>$pears</td><td>$pears</td><td>$pears</td><td>$pears</td></tr>\n";

	print "<tr><td>Giants </td><td>$diff</td><td>$diff</td><td>$diff</td><td>$diff</td></tr>\n";
?>

</table>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0404 If Statement</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The IF Statement</h3>

<?php
	$firstname = $_POST['firstname'];
	$birthyear = $_POST['birthyear'];

	$current_year = date('Y');

	$age = $current_year - $birthyear;

	print "<p>Your name is $firstname and you are $age years old</p>";

	if ($age > 50)
	{
		print "<p>Better start planning for Retirement!</p>";
	}

	print "<p> - END - </p>";
?>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0412 Field Validations</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Field Validations</h3>

<form method="post" action="0412_Field_Validations.php">

	<p>
		First Name:<br />
		<input type="text" name="firstname" size="30" />
	</p>

	<p>
		How many hours do you sleep at night?:<br />
		<input type="text" name="hourslept" size="2" />
	</p>

	<p>
		Birth Year:<br />
		<input type="text" name="birthyear" size="3" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0412 Field Validations</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Field Validations</h3>

<?php
	$firstname = $_POST['firstname'];
	$hourslept = $_POST['hourslept'];
	$birthyear = $_POST['birthyear'];

	if (empty($firstname))
	{
		print "You must enter a First Name";
		print "<br />Go BACK and try again";
		print "</body></html>";
		exit;
	}

	if (empty($hourslept))
	{
		print "You must enter the hours you sleep";
		print "<br />Go BACK and try again";
		print "</body></html>";
		exit;
	}
	else
	{
		if (!is_numeric($hourslept))
		{
			print "The hours you sleep must be numeric";
			print "<br />Go BACK and try again";
			print "</body></html>";
			exit;
		}
	}

	if (empty($birthyear))
	{
		print "You must enter your Birth Year";
		print "<br />Go BACK and try again";
		print "</body></html>";
		exit;
	}
	else
	{
		if (!is_numeric($birthyear))
		{
			print "Your Birth Year must be numeric.'".$birthyear."'";
			print "<br />Go BACK and try again";
			print "</body></html>";
			exit;
		}
		else
		{
			$length_of_year = strlen($birthyear);

			if ($length_of_year != 4)
			{
				print "Your Birth Year must be exaclty four numbers";
				print "<br />Go BACK and try again";
				print "</body></html>";
				exit;
			}
		}
	}


	$current_year = date('Y');

	$age = $current_year - $birthyear;

	$years_slept = ($hourslept/24) * $age;

	print "<p>Your name is $firstname and you have ";
	print "spent $years_slept years of your life sleeping</p>";

	if ($age > 50)
	{
		print "<p>Better start planning for Retirement!</p>";

		if ($years_slept > 15)
		{
			print "<p>You sleep too much!</p>";
		}
	}
	else
	{
		print "<p>Time is on your side! Really.</p>";
		print "<p>Yes, I mean it to you too</p>";
	}

	print "<p> - END - </p>";

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0412 Field Validations</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Field Validations</h3>

<?php
	$randomNum = $_POST['randomNumber'];
	
	if (empty($randomNum)) {
		print "Field is blank: Enter an integer between 1-100";
		exit;
	} else if (!is_numeric($randomNum)) {
		print "Not Numeric: Enter an integer between 1-100";
		exit;
	} else if (!($randomNum <= 100 && $randomNum >= 1)) {
        print "Out of Range:  Enter an integer between 1-100";
        exit;
    } else if ($randomNum == 17) {
        print "That's the number I was thinking of!";
    } else {
        print "Nope.  That's not it.";
    }
?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0415 Debugging- Using Divs and Forms</title>

	<link rel="stylesheet" type="text/css" href="css/basic_3.css" />

</head>

<body>

<div id="fruits">

	<h3>Fruit</h3>

	<form method="post" action="0415_Fruits.php">

	<table>
		<tr align="left">
			<th>Description</th>
			<th>Amount Entered</th>
		</tr>

		<tr>
			<td>Number of Apples:</td>
			<td><input type="text" name="apple" size="2" /></td>
		</tr>

		<tr>
			<td>Number of Pears:</td>
			<td><input type="text" name="pears" size="2" /></td>
		</tr>
	</table>

	<p>
		<input type="submit" value="Submit Information" />
	</p>

	</form>
</div>

<br /><br />


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0415 Debugging - Fruits</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Debugging - Fruits Table</h3>

<?php
	$apples = $_POST['apples'];

	//print "<br />DEBUG: '".$apples."'";

	$pears = $_POST['pears'];

	$totalFruit = $apples + $pears;

	$diff = $apples - $pears;

	$reverseDiff = --$diff;

	print "<br />DEBUG reverseDiff: '".$reverseDiff."'";

	$multpliedApples = $apples * 5;

	$dividedApples = $apples / 3;

	$moduloApples = $apples % 3;

?>

<table border='1'>
	<tr>
		<th>Description</th>
		<th>Calculated Amount</th>
	</tr>

<?php

	print "<tr><td>The number of Apples is </td><td>$apples</td></tr>\n";

	print "<tr><td>The number of Pears is </td><td>$pears</td></tr>\n";

	print "<tr><td>The number of Apples than Pears </td><td>$diff</td></tr>\n";

	print "<tr><td>The reverse of that would be </td><td>$reverseDiff</td></tr>\n";

	print "<tr><td>Five times as many Apples would be </td><td>$multpliedApples</td></tr>\n";

	print "<tr><td>Apples divided between three would get </td><td>";
	print $dividedApples;
	print "</td></tr>\n";

	print "<tr><td>Rounded to two decimal places would be: </td><td>";
	print number_format($dividedApples, 2);
	print "</td></tr>\n";

	print "<tr><td>Apples left over between three would be </td><td>";
	print $moduloApples;
	print "</td></tr>\n";

?>


<p>-- END -- </p>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>King Library</title>
    <link rel="stylesheet" type="text/css" href="css/KingLib_2.css">
</head>

<body>
    <div id="logo">
        <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
    </div>
    <form method="post" action="assignment_2_add_patron.php">
        <p>Please sign up</p>
        <p>
            First Name:<br />
            <input type="text" name="firstname" size="30">
        </p>
        
        <p>
            Last Name:<br />
            <input type="text" name="lastname" size="30">
        <p>
        
        <p>
            Email:<br />
            <input type="text" name="email" size="40">
        </p>
        <p>
            Birth Year:<br />
            <input type="text" name="birthyear" size="4">
        </p>
        <p>
            City of Residence<br />
            <select name="position" size="1">
                <option disabled selected value> -- select an option -- </option>
                <option value="Chicago">Chicago</option>
                <option value="Detroit">Detroit</option>
                <option value="Toronto">Toronto</option>
            </select>

        </p>

        <p>
            <input type="submit" value="Submit Information">
        </p>

    </form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
    <head>
        <title>Assignment 2</title>
        <link rel="stylesheet" type="text/css" href="css/KingLib_2.css">
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
            ?>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>php tutorial</title>
    </head>
    <body>
        <form action='site.php' method='get'>
            Name: <input type='text' name='username'>
            <input type='submit'>
            <br>
            Your name is <?php echo $_GET["username"] ?>
            <br>
            Age: <input type='number' name='age'>
            <input type='submit'>
            <br>
            Your age is <?php echo $_GET['age'] ?>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action='site.php' method='get'>
            Color: <input type="text" name="color"> <br>
            Plural Noun: <input type="text" name="pluralNoun"> <br>
            Celebrity: <input type="text" name="celebrity"> <br>
            <input type='submit'>
        </form>
        <br>
        <br>
        
        <?php 
            $color = $_GET['color'];
            $pluralNoun = $_GET['pluralNoun'];
            $celebrity = $_GET['celebrity'];
            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action='site.php' method='post'>
            Password: <br><input type="password" name="password">
            <br>
            <input type='submit'>
        </form>
        <br><br>
        <?php 
            echo $_POST['password'];
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            $friends[4] = "Mike";

            echo count($friends);
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action='site.php' method='post'>
            Apples: <input type='checkbox' name='fruits[]' value='apples'>
            <br>
            Oranges: <input type='checkbox' name='fruits[]' value='oranges'>
            <br>
            Pears: <input type='checkbox' name='fruits[]' value='pears'>
            <br>
            <input type='submit'>
        </form>
        <?php
            $fruits = $_POST['fruits'];
            echo $fruits[0];
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action='site.php' method='post'>
            <input type='text' name='student'>    
            <br>
            <input type='submit'>
        </form>
        <?php
            $grades = array("Jim"=>"A+", "Pam"=>"A+", "Oscar"=>"C+");
            echo $grades[$_POST['student']];
        ?>
    </body>
</html>

<body>
    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age years old.<br>";
        }

        sayHi("Tom", 8);
        sayHi("Dave", 13);
        sayHi("Mom", 15);
    ?>
</body>

<body>
    <?php
        function cube($num){
            return $num * $num * $num;
        }

        $cubeResult = cube(4);
        echo $cubeResult;
    ?>
</body>

<body>
    <?php
        $isMale = false;
        $isTall = true;
        if ($isMale && $isTall){
            echo "You are tall male.";
        } elseif ($isMale && !$isTall) {
            echo "You are a short male.";
        } elseif (!$isMale && $isTall) {
            echo "You are not male but are tall.";
        } else {
            echo "You are not male and not tall.";
        }
    ?>
</body>

<body>
    <?php
        function getMax($num1, $num2, $num3) {
            if($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }

        echo getMax(300, 9000, 400);
    ?>
</body>

<body>
    <form action='site.php' method='post'>
        First Num:<input type="number" step="0.1" name='num1'>
        <br>
        OP:<input type="text" name='op'>
        <br>
        Second Num:<input type="number" name='num2'>
        <br>
        <input type='submit'>
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == '+'){
            echo $num1 + $num2;
        } elseif($op == '-'){
            echo $num1 - $num2;
        } elseif($op == '/'){
            echo $num1 / $num2;
        } elseif($op == '*'){
            echo $num1 * $num2;
        } else {
            echo "Invalid Operator";
        }
    ?>
</body>

<body>
    <form action='site.php' method='post'>
        What was your grade?
        <br>
        <input type='text' name='grade'>
        <input type='submit'>
    </form>
    <?php
        $grade = $_POST['grade'];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good!";
                break;            
            case "C":
                echo "You did poorly!";
                break;    
            case "D":
                echo "You did very bad!";
                break;
            case "F":
                echo "You FAIL!";
                break;
            default:
                echo "Invalid Grade";
        }
    ?>
</body>

<body>
    <?php
        $index = 6;

        do {
            echo "$index <br>";

            $index++;
            
        } while($index <= 5);
    ?>

</body>

<body>
    <?php
        $index = 1;

        while($index <= 5){
            echo "$index <br>";

            $index++;
        }
    ?>
</body>

<body>
    <?php
        $luckyNumbers = array(4, 8, 14, 16, 23, 42);
        
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }
    ?>

</body>

<body>
    <?php
        include "header.html"
    ?>
    <p>Hello world</p>
    <?php
        include "footer.html"
    ?>
</body>

<body>
    <?php
        $title = "My first post";
        $author = 'Mike';
        $wordCount = 400;
        include "article-header.php"
    ?>
</body>

<body>
    <?php
        include "useful-tools.php";
        sayHi('mike');
        echo $feetInMile;
    ?>
</body>

<!--useful-tools.php-->
<?php
    $feetInMile = 5280;
    
    function sayHi($name){
        echo "Hello $name";
    }
?>

<!--article-header.php-->
<h2><?php 
        echo $title;
    ?>
</h2>

<h4><?php 
        echo $author;
    ?>
</h4>

word count: 
<?php
    echo $wordCount;
?>

<!--Constructor classes-->
<body>
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book1->title = "Hunger Games";
        $book2 = new Book("Lord of the Rings", "Tolkein", 700);
        echo $book1->title;
    ?>
</body>

<!--Object functions-->
<body>
    <?php
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);

        echo $student2->hasHonors();
    ?>
</body>

<!--getters and setters-->

<body>
    <?php
        class Movie {
            public $title;
            private $rating;
            
            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating) {
                if($rating == 'G' || $rating == 'PG' || $rating == 'PG-13' || $rating == 'R' || $rating == 'NR') {
                    $this->rating = $rating;
                } else {
                    $this->$rating = "NR";
                }
            }
        }

        $avengers = new Movie('Avengers', 'Dog');
            //G, PG, PG-13, R, NR

        echo $avengers->getRating();
    ?>
</body>

<!--inheritance / adding class info together-->
<!--overriding functions-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>401 String Delimiters</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The FOR Loop</h3>

<form method="post" action="0501_FOR_loop.php">

<p>Enter Team Member Names
<br />1. <input type="text" name="member1" size="30">
<br />2. <input type="text" name="member2" size="30">
<br />3. <input type="text" name="member3" size="30">
<br />4. <input type="text" name="member4" size="30">
<br />5. <input type="text" name="member5" size="30">
</p>

<input type="submit" value="Submit Information">

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0501 The FOR Loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The FOR Loop</h3>

<h4>Simple For Loop</h4>
<?php
	for ($ii = 1; $ii <= 5; $ii++)
	{
		print "line: ".$ii."<br />";
	}
?>

<h4>Team Memebers</h4>
<?php
	for ($ii = 1; $ii <= 5; $ii++)
	{
		$member_html_name = 'member'.$ii;
		$member = $_POST[$member_html_name];
		
		print "Team Member : ".$ii.": ".$member;
	}
?>
</body>
</html>

<html>
<head>
	<title>Foor Loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>
<body>
    <h3>Grocery List</h3>
    <form method="post" action="X_5_1.php">
        <p>Enter up to 7 grocery items
        <br />1. <input type="text" name="item1" size="30">
        <br />2. <input type="text" name="item2" size="30">
        <br />3. <input type="text" name="item3" size="30">
        <br />4. <input type="text" name="item4" size="30">
        <br />5. <input type="text" name="item5" size="30">
        <br />6. <input type="text" name="item6" size="30">
        <br />7. <input type="text" name="item7" size="30">
        </p>
        <input type="submit" value="Submit Information">
    </form>
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0501 The FOR Loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Grocery List</h3>

<h4>Using For Loop</h4>

<?php
    print "<ul>";

    for ($ii = 1; $ii <= 7; $ii++)
	{
		$item_html_name = 'item'.$ii;
		$item = $_POST[$item_html_name];
        print "<li>Item : ".$ii.": ".$item."</li>";    
    }
    print "</ul>";
?>
</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0402 The WHILE loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The WHILE Loop</h3>

<form method="post" action="0502_WHILE_loop.php">

<p>Grocery List
<br />1. <input type="text" name="item1" size="30">
<br />2. <input type="text" name="item2" size="30">
<br />3. <input type="text" name="item3" size="30">
<br />4. <input type="text" name="item4" size="30">
<br />5. <input type="text" name="item5" size="30">
<br />6. <input type="text" name="item6" size="30">
<br />7. <input type="text" name="item7" size="30">
</p>

<input type="submit" value="Submit Information">

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0502 The WHILE loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The WHILE Loop</h3>

<h4>Simple For Loop</h4>
<?php
	$cntr = 1;
	
	while($cntr <= 7)
	{
		print "line: ".$cntr."<br />";
		$cntr++;   // Add 1 to $cntr
	}
?>

<h4>Grocery List</h4>
<?php

	$cntr = 1;

	$item = 'dummy';
	
	while(!empty($item))
	{
		$item_html_name = 'item'.$cntr;
		
		$item = $_POST[$item_html_name];
			
		if (!empty($item))
		{
			print "Item: ".$item."<br />";
			$cntr++;
		} 
	}

?>


<h4>Alternate Way to see Grocery List</h4>
<?php

	$cntr = 1;

	while(true)
	{
		$item_html_name = 'item'.$cntr;
		
		$item = $_POST[$item_html_name];
			
		if (empty($item))
		{
			break;
		} 
		
		$cntr++;
		
		print "Item: ".$item."<br />";
		
	}

?>

<h4>Grocery List - Skipping Pears</h4>
<?php

	$cntr = 1;

	while(true)
	{
		$item_html_name = 'item'.$cntr;
		
		$item = $_POST[$item_html_name];
			
		if (empty($item))
		{
			break;
		} 
		
		$cntr++;
		
		if ($item == 'Pears')
		{
			continue;  //go back to top and processes next iteration of the loop
		}
		
		print "Item: ".$item."<br />";
		
	}

?>
</body>
</html>

<html>
    <head>
        <title>0402 The WHILE loop</title>
        <link rel="stylesheet" type="text/css" href="css/basic.css" />
    </head>
    
    <body>
    <h3>The WHILE Loop</h3>
    <form method="post" action="X_5_2.php">
        <p>Enter up to 5 cities
        <br />1. <input type="text" name="city1" size="30">
        <br />2. <input type="text" name="city2" size="30">
        <br />3. <input type="text" name="city3" size="30">
        <br />4. <input type="text" name="city4" size="30">
        <br />5. <input type="text" name="city5" size="30">
        </p>
        
        <input type="submit" value="Submit Information">
        
    </form>
    
    </body>
</html>
    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0502 The WHILE loop</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>The WHILE Loop</h3>
<?php
    print "<ul>";
	$cntr = 1;

	while(true)
	{
		$city_html_name = 'city'.$cntr;
		
		$city = $_POST[$city_html_name];
			
		if (empty($city))
		{
			break;
		} 
		
		$cntr++;
		
		print "<li>Item: ".$city."</li><br />";
		
	}
    print "</ul>";
?>
</body>
</html>

<!DOCTYPE HTML>

<html>
<head>
	<title>0503_Reading_File</title>

	<link rel="stylesheet" type="text/css" href="css/king_2.css" />

</head>

<body>

<h3>Reading From a File</h3>

    <?php
		$filename = 'data/'.'cities.txt';

		$lines_in_file = count(file($filename));

		$fp = fopen($filename, 'r');   //opens the file for reading

		for ($ii = 1; $ii <= $lines_in_file; $ii++)
		{
			$line = fgets($fp);  //Reads one line from the file
			$city = trim($line);

			print 'City: '.$city.'<br />';
		}

		fclose($fp);

	?>
</body>
</html>

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

bob saget
howard stern
Beetlejuice

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0504 Write to File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Write to File</h3>

<form method="post" action="0504_Write_File.php">

<p>Grocery List
<br />1. <input type="text" name="item1" size="30">
<br />2. <input type="text" name="item2" size="30">
<br />3. <input type="text" name="item3" size="30">
<br />4. <input type="text" name="item4" size="30">
<br />5. <input type="text" name="item5" size="30">
<br />6. <input type="text" name="item6" size="30">
<br />7. <input type="text" name="item7" size="30">
</p>

<input type="submit" value="Submit Information">

</form>

</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0504_Write File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Write to File</h3>

<?php

	//************************************
	//  Write to File  (Overwrite)
	//************************************

	print "<h4>Writing to File<b/h4>>";

	$filename = 'data/'.'glist_1.txt';

	$fp = fopen($filename, 'w');   //opens the file for writing

	$cntr = 1;

	while(true)
	{
		$item_html_name = 'item'.$cntr;

		$item = $_POST[$item_html_name];

		if (empty($item))
		{
			break;
		}

		$cntr++;

		print "Item: ".$item."<br />";

		$output_line = $item."\n";

		fwrite($fp, $output_line);


	}


	//************************************
		//  Write to File  (Append)
	//************************************

	print "<h4>Appending File<b/h4>>";

	$filename = 'data/'.'glist_2.txt';

		$fp = fopen($filename, 'a');   //opens the file for appending

		$cntr = 1;

		while(true)
		{
			$item_html_name = 'item'.$cntr;

			$item = $_POST[$item_html_name];

			if (empty($item))
			{
				break;
			}

			$cntr++;

			print "Item: ".$item."<br />";

			$output_line = $item."\n";

			fwrite($fp, $output_line);

		}


?>

<p><a href="data/glist_1.txt">See Overwritten File</a></p>

<p><a href="data/glist_2.txt">See Appended File</a></p>

</body>
</html>

<html>
<head>
	<title>0504 Write to File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Write to File</h3>

<form method="post" action="X_5_4.php">

<p>First Name:
<br />1. <input type="text" name="item1" size="30">
<br />
Last Name: 
<br />2. <input type="text" name="item2" size="30">
<br />
Name of your pet: 
<br />3. <input type="text" name="item3" size="30">
</p>

<input type="submit" value="Submit Information">

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0504_Write File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Write to File</h3>

<?php
	print "<h4>Appending File<b/h4>>";

	$filename = 'data/'.'glist_2.txt';

		$fp = fopen($filename, 'a');   //opens the file for appending

		$cntr = 1;

		while(true)
		{
			$item_html_name = 'item'.$cntr;

			$item = $_POST[$item_html_name];

			if (empty($item))
			{
				break;
			}

			$cntr++;

			print "Item: ".$item."<br />";

			$output_line = $item."\n";

			fwrite($fp, $output_line);

		}
?>
<p><a href="data/glist_2.txt">See Appended File</a></p>

</body>
</html>

Smith|Bob|
Jones|Jane|
Smith|Jane|

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0505 Displaying Data in a Table</title>

	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />

</head>

<body>

<h3>Displaying Data in a Table</h3>


	<form method="post" action="0505_Displaying_Data_in_a_Table.php">
	<p>Add Names to the List</p>

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30" />
	</p>

	<p>
	Last Name:<br />
	<input type="text" name="lastname" size="30" />
	</p>

	<p>
	<input type="submit" value="Add Name" />
	</p>


	</form>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0505_Displaying_Data_in_a_Table.php</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>



<?php
//***************************************
// Gather Data from Form
//***************************************

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$filename = 'data/'.'namelist.txt';


//***************************************
//Add Name Information to File
//***************************************

$fp = fopen($filename, 'a');   //opens the file for appending

$output_line = $lastname.'|'.$firstname.'|'."\n";

fwrite($fp, $output_line);

fclose($fp);

print "<h3>$lastname, $firstname Added to File</h3>";


//*****************************************************
//Read Name Information from a File into an HTML table
//*****************************************************

?>

<table border='1'>

<tr>
	<th>Last Name</th>
	<th>First Name</th>
</tr>


<?php
$display = "";
$line_ctr = 0;

$fp = fopen($filename, 'r');   //opens the file for reading

while(true)
{
	$line = fgets($fp);

	if (feof($fp))
	{
		break;
	}

	$line_ctr++;

	$line_ctr_remainder = $line_ctr % 2;

	if ($line_ctr_remainder == 0)
	{
		$style = "style='background-color: #FFFFCC;'";
	} else {
		$style = "style='background-color: white;'";
	}

	list($lastname, $firstname) = explode('|', $line);

	$display .= "<tr $style>";
		$display .= "<td>".$lastname."</td>";
		$display .= "<td>".$firstname."</td>";
	$display .= "</tr>\n";  //added newline
}

fclose($fp );

print $display;   //This prints the table rows


?>

</table>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0505 Displaying Data in a Table</title>

	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />

</head>

<body>
    <h3>Displaying Data in a Table</h3>
    <form method="post" action="X_5_5.php">
        <p>Add names to the List!</p>
        <p>
        First Name:<br />
        <input type="text" name="firstname" size="30" />
        </p>
        <p>
        Last Name:<br />
        <input type="text" name="lastname" size="30" />
        </p>
        <p>
            Pet #1:<br />
            <input type="text" name="pet1" size="30" />
        </p>
        <p>
            Pet #2:<br />
            <input type="text" name="pet2" size="30" />
        </p>
        <p>
            Pet #3:<br />
            <input type="text" name="pet3" size="30" />
        </p>
        <p>
        <input type="submit" value="Add Names" />
        </p>
    </form>
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Table data</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>
<body>
<?php
//***************************************
// Gather Data from Form
//***************************************

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pet1 = $_POST['pet1'];
$pet2 = $_POST['pet2'];
$pet3 = $_POST['pet3'];

$filename = 'data/'.'namelist.txt';

//***************************************
//Add Name Information to File
//***************************************

$fp = fopen($filename, 'a');   //opens the file for appending

$output_line = $firstname.'|'.$lastname.'|'.$pet1.'|'.$pet2.'|'.$pet3."\n";

fwrite($fp, $output_line);

fclose($fp);

print "<h3>$firstname, $lastname, $pet1, $pet2, $pet3 Added to File</h3>";


//*****************************************************
//Read Name Information from a File into an HTML table
//*****************************************************

?>

<table border='1'>

<tr>
	<th>First</th>
    <th>Last</th>
    <th>Pet1</th>
    <th>Pet2</th>
    <th>Pet3</th>
</tr>

<?php
$display = "";
$line_ctr = 0;

$fp = fopen($filename, 'r');   //opens the file for reading

while(true)
{
	$line = fgets($fp);

	if (feof($fp))
	{
		break;
	}

	$line_ctr++;

	$line_ctr_remainder = $line_ctr % 2;

	if ($line_ctr_remainder == 0)
	{
		$style = "style='background-color: #FFFFCC;'";
	} else {
		$style = "style='background-color: white;'";
	}

	list($firstname, $lastname, $pet1, $pet2, $pet3) = explode('|', $line);

	$display .= "<tr $style>";
		$display .= "<td>".$firstname."</td>";
        $display .= "<td>".$lastname."</td>";
        $display .= "<td>".$pet1."</td>";
        $display .= "<td>".$pet2."</td>";
        $display .= "<td>".$pet3."</td>";
	$display .= "</tr>\n";  //added newline
}

fclose($fp );
print $display;   //This prints the table rows
?>

</table>
</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0506 Debugging - Part 3</title>

	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />

</head>

<body>

<h3>Debugging - Part 3</h3>


	<form method="post" action="0506_Debugging_3.php">
	<p>Add Names to the List</p>

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30" />
	</p>

	<p>
	Last Name:<br />
	<input type="text" name="lastname" size="30" />
	</p>

	<p>
	<input type="submit" value="Add Name" />
	</p>


	</form>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0506 Debugging - Part 3</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>
<h3>Debugging - Part 3</h3>

<?php
//***************************************
// Gather Data from Form
//***************************************

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$filename = $DOCUMENT_ROOT.'data/'.'namelist.txt';


//***************************************
//Add Name Information to File
//***************************************

$fp = fopen($filename, 'a');   //opens the file for appending

$output_line = $lastname.'|'.$firstname.'|'."\n";

fwrite($fp, $output_line);

fclose($fp);

print "<h3>$lastname, $firstname Added to File</h3>";


//*****************************************************
//Read Name Information from a File into an HTML table
//*****************************************************

?>

<table border='1'>

<tr>
	<th>Last Name</th>
	<th>First Name</th>
</tr>


<?php
$display = "";  //empty string
$line_ctr = 0;

$fp = fopen($filename, 'r');   //opens the file for reading

while(true)
{
	$line = fgets($fp);

	if (feof($fp))
	{
		break;
	}

	$line_ctr++;

	$line_ctr_remainder = $line_ctr % 2;

	if ($line_ctr_remainder == 0)
	{
		$style = "style='background-color: #FFFFCC;'";
	}
	else
	{
		$style = "style='background-color: white;'";
	}

	list($lastname, $firstname) = explode('|', $line);

	print "$lastname, $firstname";

	$display .= "<tr $style>";
		$display .= "<td>".$lastname."</td>";
		$display .= "<td>".$firstname."</td>";
	$display .= "</tr>\n";  //added newline
}

fclose($fp );

print $display;   //This prints the table rows


?>

</table>

</div>
</body>
</html>