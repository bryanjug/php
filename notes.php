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

