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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>King Library</title>
    <link rel="stylesheet" type="text/css" href="css/KingLib_3.css">
</head>

<body>
    <div id="logo">
        <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
    </div>
    <form method="post" action="assignment_3_add_patron.php">
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
        <p>
            For Admin Use Only: <a href='assignment_3_view_patrons.php'>View Patrons</a>
        </p>
    </form>

</body>
</html>

body {
    background-color: burlywood;
}
form {
    padding: 5%;
    background-color: whitesmoke;
    width: 40%;
    margin: 1%;
}
#results {
    padding: 5%;
    background-color: whitesmoke;
    width: 40%;
    margin: 1%;    
}

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


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<form method="post" action="0601_Simple_Function.php">

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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<?php

	displayMsg();

	function displayMsg()
	{
		$firstname = $_POST['firstname'];
		print '<p>Hi '.$firstname.'</p>';
	}

?>

</body>
</html>

Function with data in
City: Chicago
City: Detroit
City: Toronto
City: Los Angeles

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0602 Function with data in</title>

	<link rel="stylesheet" type="text/css" href="css/king_2.css" />

</head>

<body>

<h3>Function with data in</h3>

	<?php

		$filename = 'data/'.'cities.txt';

		displayFile($filename);

		function displayFile($a_filename)
		{

			$lines_in_file = count(file($a_filename));

			$fp = fopen($a_filename, 'r');   //opens the file for reading

			for ($ii = 1; $ii <= $lines_in_file; $ii++)
			{
				$line = fgets($fp);  //Reads one line from the file
				$city = trim($line);

				print 'City: '.$city.'<br />';
			}

			fclose($fp);
		}

	?>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<form method="post" action="X_6_1.php">

	<p>
		1st number:<br />
		<input type="text" name="number1" size="30" />
    </p>
    <p>
		2nd number:<br />
		<input type="text" name="number2" size="30" />
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
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<?php

	displayMsg();

	function displayMsg()
	{
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $calc = $number1 + $number2;
		print '<p>Adding to: '.$calc.'</p>';
	}

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<form method="post" action="X_6_2.php">

	<p>
		enter a number:<br />
		<input type="text" name="number" size="30" />
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
	<title>0601 Simple Function</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Simple Function</h3>

<?php

    $userNumber = $_POST['number'];

	displayMsg($userNumber);

	function displayMsg($number)
	{
        $calc = $number + 5;
        print '<p>Added: '.$calc.'</p>';
	}

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0603 Function - data out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Function - data out</h3>

<form method="post" action="0603_Function_data_out.php">

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

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0603 Function data out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Function data out</h3>

<?php

	$rtnData = displayMsg();

	print $rtnData;


	function displayMsg()
	{
		$firstname = $_POST['firstname'];
		$display = '<p>Hi '.$firstname.'</p>';

		return $display;
	}

?>

</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0603 Function - data out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Function - data out</h3>

<form method="post" action="X_6_3.php">

	<p>
		Enter the 1st number:<br />
		<input type="text" name="number1" size="30" />
	</p>

    <p>
		Enter the 2nd number:<br />
		<input type="text" name="number2" size="30" />
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
	<title>0603 Function data out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>
    
<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

	$rtnData = displayMsg($number1, $number2);

	print $rtnData;

	function displayMsg($firstNumber, $secondNumber)
	{
        $calc = $firstNumber + $secondNumber;
		$display = '<p>Added together: '.$calc.'</p>';

		return $display;
	}

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0604 Function data in and out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Function - data in and out</h3>

<form method="post" action="0604_Function_data_in_out.php">

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
	<title>0604 Function - data in out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Function - data in and out</h3>

<?php
	$in_firstname = $_POST['firstname'];
	$in_hourslept = $_POST['hourslept'];
	$in_birthyear = $_POST['birthyear'];

	$rtnmsg = doValidation($in_firstname, $in_hourslept, $in_birthyear);

	if ($rtnmsg == '')
	{
		displayPage($in_firstname, $in_hourslept, $in_birthyear);
	}
	else
	{
		print $rtnmsg;
		print "<br>Go BACK and try again!";
	}


	//************************************************
	//*  Begin Function Definitions
	//************************************************

	function doValidation($firstname, $hourslept, $birthyear)
	{

		$errmsg = '';

		if (empty($firstname))
		{
			$errmsg .= "<br />You must enter a First Name";
		}

		if (empty($hourslept))
		{
			$errmsg .= "<br />You must enter the hours you sleep";
		}
		else
		{
			if (!is_numeric($hourslept))
			{
				$errmsg .= "<br />The hours you sleep must be numeric";
			}
		}

		if (empty($birthyear))
		{
			$errmsg .= "<br />You must enter your birthyear";
		}
		else
		{
			if (!is_numeric($birthyear))
			{
				$errmsg .= "<br />Your Birth Year must be numeric";
			}
			else
			{
				$length_of_year = strlen($birthyear);

				if ($length_of_year != 4)
				{
					$errmsg .= "<br />Your Birth Year must be exaclty four numbers";
				}
			}
		}

		return $errmsg;
	}

	function displayPage($firstname, $hourslept, $birthyear)
	{
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
	}
?>

</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0603 Function - data out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<form method="post" action="X_6_4.php">

	<p>
		Enter the 1st number:<br />
		<input type="text" name="number1" size="30" />
	</p>

    <p>
		Enter the 2nd number:<br />
		<input type="text" name="number2" size="30" />
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
	<title>0604 Function - data in out</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>
    
<?php
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	
    $rtnmsg = displayPage($number1, $number2);
    
    print $rtnmsg;

	function displayPage($number_1, $number_2)
	{
		$added = $number_1 + $number_2;
        return $added;
	}
?>

</body>
</html>

Variable Scope

Insitution: Infinite Skills
Class:
Class Type:
rtr_info: Steve Perry*DEGREE:
Degree: MAED

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0605 Variable Scope</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Variable Scope</h3>

<?php

	$institution = "Infinite Skills";

	$rtr_info = doStartUp();

	print "<br />Insitution: ".$institution;
	print "<br />Class: ".$class;
	print "<br />Class Type: ".$class_type;
	print "<br />rtr_info: ".$rtr_info;
	print "<br />Degree: ".$degree;


	function doStartUp()
	{
		$class = "PHPMySQL";

		$classInstructorInfo = getClassInstructorInfo($class);
		return $classInstructorInfo."*DEGREE: ".$degree;
	}

	function getClassInstructorInfo($a_class)
	{

		global $degree;

		$class_type = "Video";

		if ($a_class == 'PHPMySQL')
		{
			$instructor = 'Steve Perry';
			$degree = 'MAED';
		}

		return $instructor;

	}

?>

</body>
</html>

Chicago
Detroit
Toronto
Los Angeles

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0606 Function returning multiple values</title>

	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />

</head>

<body>

<h3>Function Returning Multiple Values</h3>


	<form method="post" action="0606_Function_return_multiple_values.php">
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
	<title>0606 Function returning multiple values</title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3>Function Returning Multiple Values</h3>

<?php
//***************************************
// Gather Data from Form
//***************************************

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$filename = 'data/'.'namelist.txt';

$rtnmsg = addToFile($filename, $lastname, $firstname);

print $rtnmsg;

list($total_rows, $theTable) = displayTable($filename);

if ($total_rows != 'No File')
{
	print "<p>Total Rows in Table: ".$total_rows."</p>";

	print $theTable;   //This prints the table rows
}
else
{
	print "No file found";
}



//**************************************************
//*    Function Definitions
//**************************************************

function addToFile($filename, $lastname, $firstname)
{

	$fp = fopen($filename, 'a');   //opens the file for appending

	if ($fp)
	{
		$output_line = $lastname.'|'.$firstname.'|'."\n";

		fwrite($fp, $output_line);

		fclose($fp);

		$msg = "<h3>$lastname, $firstname Added to File</h3>";
	} else {
		$msg = "File not opened";
	}


	return $msg;
}

//*****************************************************
//Read Name Information from a File into an HTML table
//*****************************************************

function displayTable($filename)
{

	$myTable =  "\n<table border='1'>";

	$myTable .= "<tr>";
	$myTable .= "	<th>Last Name</th>";
	$myTable .= "	<th>First Name</th>";
	$myTable .= "</tr>\n\n";

	$line_ctr = 0;

	$fp = fopen($filename, 'r');   //opens the file for reading

	if ($fp)
	{
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

			$myTable .= "<tr $style>";
				$myTable .= "<td>".$lastname."</td>";
				$myTable .= "<td>".$firstname."</td>";
			$myTable .= "</tr>\n";  //added newline
		}

		fclose($fp );

		$myTable .= "</table>";

		$rtn = array($line_ctr, $myTable);


	} else {
		$rtn = array("No File", "dummy");
	}

	return $rtn;
}

?>


</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0608_Array_Basics</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Array Basics</h3>

<form method="post" action="0608_Array_Basics.php">

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
	<title>0608_Array_Basics</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Array Basics</h3>

<?php

 	$fruitArray = array('Apples', 'Oranges', 'Pears');  //creates new array

	print "<br />".$fruitArray[0];
	print "<br />".$fruitArray[1];
	print "<br />".$fruitArray[2];

?>

<h4>Team Members - Example 1</h4>
<?php
    $teamMembers = array();  //creates new empty array

	for ($ii = 1; $ii <= 5; $ii++)
	{
		$member_html_name = 'member'.$ii;
		$member = $_POST[$member_html_name];
		
		$array_index = $ii - 1;
		
		$teamMembers[$array_index] = $member;

		print "<br />".$ii.": ".$teamMembers[$array_index];
	}
?>


<h4>Team Members - Example 2</h4>
<?php
    $teamMembers = array();  //creates new empty array: EASIER TO IMPLEMENT

	for ($ii = 1; $ii <= 5; $ii++)
	{
		$member_html_name = 'member'.$ii;
		$member = $_POST[$member_html_name];
		
		array_push($teamMembers, $member);

		$array_index = $ii - 1;
		print "<br />".$ii.": ".$teamMembers[$array_index];
	}
?>
</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0609_Array_Sort</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Array Sort</h3>

<form method="post" action="0609_Array_Sort.php">

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
	<title>0609_Array_Sort</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Array Sort</h3>



<?php
    $teamMembers = array();  //creates new empty array

	//Load the Array
	for ($ii = 1; $ii <= 5; $ii++)
	{
		$member_html_name = 'member'.$ii;
		$member = $_POST[$member_html_name];

		if (!empty($member))
		{
			array_push($teamMembers, $member);
		}
	}

	sort($teamMembers);
?>

<h4>Team Members - Example 1</h4>

<?php
	$arrLen = sizeOf($teamMembers);

	for ($jj = 0; $jj < $arrLen; $jj++)
	{
		$display_num = $jj + 1;

		print "<br />".$display_num.": ".$teamMembers[$jj];
	}

?>

<h4>Team Members - Example 2</h4>

<?php
	$cntr = 0;

	foreach ($teamMembers as $element)
	{
		$cntr++;
		print "<br />".$cntr.": ".$element;
	}
?>


</body>
</html>

Steve
Mary
John
Shirley
Jane
George

-- TO --

1: George
2: Jane
3: John
4: Mary
5: Shirley
6: Steve

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0610 Load Array from a File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Load Array from a File</h3>

<?php
    $teamMembers = array();  //creates new empty array

	//Load the Array

	$filename = 'data/'.'team_members.txt';

	$lines_in_file = count(file($filename));

	$fp = fopen($filename, 'r');   //opens the file for reading

	for ($ii = 1; $ii <= $lines_in_file; $ii++)
	{
		$line = fgets($fp);  //Reads one line from the file
		$member = trim($line);
		array_push($teamMembers, $member);
	}

	fclose($fp);


	sort($teamMembers);
?>

<h4>Team Members - Example</h4>

<?php
	$cntr = 0;

	foreach ($teamMembers as $element)
	{
		$cntr++;
		print "<br />".$cntr.": ".$element;
	}
?>


</body>
</html>

<!DOCTYPE HTML>

<html>
<head>
	<title>0611 Using stripos</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
</head>

<body>

<h3>Finding Text in a String Using stripos</h3>

<form method="post" action="0611_Using_Stripos.php">

	<p>
		Enter Search Term:<br>
		<input type="text" name="search_term" size="30">
	</p>

	<p>
	<input type="submit" value="Submit Information">
	</p>

	<p>Fruit List:  apples, oranges, bananas, pears</p>

</form>

</body>
</html>

<!DOCTYPE HTML>

<html>
<head>
	<title>0611 Using stripos</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Finding Text with stripos</h3>


<?php

	$fruit_list = "apples, oranges, bananas, pears";

	$search_term = $_POST['search_term'];

	$pos = stripos($fruit_list, $search_term);      // use strpos for case-sensitive match

	if ($pos === false)
	{
		print "<br>$search_term not found in $fruit_list";
	} else {
		print "<br>$search_term is in $fruit_list";
	}

?>

</body>
</html>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0613 Finding Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Finding Text</h3>

<form method="post" action="0613_Finding_Text.php">

	<p>
		Find Team Member:<br />
		<input type="text" name="find_name" size="30" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

	<p>Team List: Steve, Tory, Jane, Judy, Mary, John

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0613_Finding_Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Finding Text</h3>


<?php

	$teamMembers = array();

	$teamMembers[0] = 'Steve - Shortstop';
	$teamMembers[1] = 'Tory - 2nd base';
	$teamMembers[2] = 'Jane :- Rightfield';
	$teamMembers[3] = 'Judy - Leftfield';
	$teamMembers[4] = 'Mary :- Catcher';
	$teamMembers[5] = 'John - CenterField';


	$find_name = $_POST['find_name'];

	if (!empty($find_name))
	{
		print "<h4>Searching for Team Member names that contain: $find_name</h4>";

		foreach ($teamMembers AS $member)
		{
			$member_formatted = str_replace(':', '', $member);

			$pos = stripos($member_formatted, '-');

			if ($pos === false)
			{
				//not found in list
			} else {
				$member_formatted = substr($member_formatted, 0, $pos);
				$member_formatted = trim($member_formatted);

				$pos2 = stripos($member_formatted, $find_name);  // use strpos for case-sensitive match

				if ($pos2 === false)
				{
					//not found in list
				} else {
					print "<br />Team Member Found: ".$member_formatted;
				}
			}
		}
	}

?>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0613 Finding Text</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Finding Text</h3>

<form method="post" action="X_6_11.php">

	<p>
		Find City:<br />
		<input type="text" name="find_city" size="30" />
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

	<p>City List: Chicago, Detroit, Toronto, Los Angeles

</form>

</body>
</html>

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


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0615 Finding Text In a File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Finding Text in a File</h3>

<form method="post" action="0615_Finding_Text_in_a_File_Short.php">

	<p>
		Find City:<br />
		<input type="text" name="find_city" size="30" />  (Leave blank to find all houses listed)
	</p>

	<p>
	<input type="submit" value="Submit Information" />
	</p>

	<p>Note: Cities in file are Chicago, Detroit, Toronto

</form>

</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0615 Finding Text in a File</title>

	<link rel="stylesheet" type="text/css" href="css/king_2.css" />

</head>

<body>

<h3>Finding Text in a File - Results</h3>

	<?php

	    $find_city = $_POST['find_city'];

		$filename = 'data/'.'cities.txt';

		if (!file_exists($filename))
		{
			print "<strong>Cities File is missing</strong>";
			exit;
		}

		$lines_in_file = count(file($filename));

		$fp = fopen($filename, 'r');   //opens the file for reading

		for ($ii = 1; $ii <= $lines_in_file; $ii++)
		{
			$line = fgets($fp);  //Reads one line from the file
			$city = trim($line);

			$pos = stripos($city, $find_city);

			if ($pos !== false)
			{
				print "<br>The text in <strong>".$find_city."</strong> ";
				print "was contained in <strong>".$city."</strong>";
			}
		}

		fclose($fp);
	?>


</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0615 Finding Text In a File</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Finding Text in a File</h3>

<form method="post" action="X_6_12.php">

	<p>
		Find State:<br />
		<input type="text" name="find_state" size="30" />
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
	<title>Finding Text in a File</title>
	<link rel="stylesheet" type="text/css" href="css/king_2.css" />
</head>

<body>
<h3>Finding Text in a File - Results</h3>
    <?php
        $states = array();

        $find_state = $_POST['find_state'];

        $filename = 'data/'.'cities.txt';

        if (!file_exists($filename)) {
            print "<strong>State list is missing!</strong>";
            exit;
        }

        $lines_in_file = count(file($filename));

        $fp = fopen($filename, 'r');

        for ($ii = 1; $ii <= $lines_in_file; $ii++) {
            $line = fgets($fp);  //Reads one line from the file
			$state = trim($line);

            $pos = stripos($state, $find_state);
            
            if ($find_state == '') {
                for ($ii = 1; $ii <= $lines_in_file; $ii++) { 
                    $line = fgets($fp);  //Reads one line from the file
                    $state = trim($line);
                    array_push($states, $state);
                }
                
                fclose($fp);
                $states = implode(' ', $states);
                print "$states";

            } else if ($pos !== false){
                print "$state<br>";
            }
        }
	?>
</body>
</html>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4 || Search For Titles</title>
</head>
<body style="background-color: lightblue;">
    <form method='post' action='assignment_4_booklist.php'>
        <div id="logo">
            <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
        </div>
        <h2 style="color: blue">Enter KeyWord to Search for Titles:</h2>
        <br>
        <input type="text" name="search_title" size="30">
        Sort Order: Ascending
        <input type='radio' name='sortOrder' value='ascending' checked="checked">
        Descending
        <input type='radio' name='sortOrder' value='descending'>
        <br>
        (leave blank to list all titles)
        <br>
        <br>
        <input type="submit" value="Find Title" />
    </form>
</body>
</html>

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

<?php
$db = mysqli_connect('localhost','root','', 'test');
if (!$db) {
	die('Could not connect to MySQL: ' . mysqli_connect_error());
}
echo 'Connection OK'; 
mysqli_close($db);
?> 
//tests connection mysql

//mysql interface 
<html>
<head>
  <title>MySQL Interface - for WAMP</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

  <style>

  body {
  	font-family: Arial, Helvetica, sans-serif;
  	color: black;
  }

  textarea {
  	font-size: 16px;
  	font-family: Arial, Helvetica, sans-serif;
  }

  table {
    	font-size: 16px;
    	font-family: Arial, Helvetica, sans-serif;
  }

  </style>

  <script>
  function deleteHistory()
  {
		myForm = document.getElementById('myform');
		deleteHistoryFlag = document.getElementById('deleteHistoryFlag');
		deleteHistoryFlag.value = "Y";

		myForm.submit();

		return false;
  }

  function clear_textarea( )
  {
  	document.getElementById('SQLStatement').value = "";
  }
  </script>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">

<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<input type="hidden" name="deleteHistoryFlag" id="deleteHistoryFlag" value="N">

<div style="position : absolute; top: 10px; left: 10px; width: 1100px;">

<h2 style="background-color: #F5DEB3;">Execute MySQL Statements - for WAMP</h2>

<?php

//Connect to MySQL and test database

$db = mysqli_connect('localhost','root','', 'test');

if (!$db) {
	die('Could not connect to MySQL: ' . mysqli_connect_error());
}

if (isset($_POST['deleteHistoryFlag']))
{
	$deleteHistoryFlag = $_POST['deleteHistoryFlag'];
} else {
	$deleteHistoryFlag = "N";
}


//Main

if (isset($_POST['action']))
{
	$action = $_POST['action'];
} else {
	$action = 'dummy';
}

$err_cntr = 0;
$myMsg = '';
$myDebug = '';

if ($action == 'update')
{

    $SQLStatement = $_POST['SQLStatement'];

	$contents = trim($SQLStatement);

	if ($contents == '')
	{
		$contents = '';
	}

	if ($deleteHistoryFlag != "Y")
	{

	  $mySQLArray = explode(';', $SQLStatement);  //Break up into individual SQL statements

	  foreach ($mySQLArray as $element)
	  {
		  $sqlstatement = trim($element);

		  //$contents = trim($SQLStatement);  //Big SQL statment from line 95!!

		  $sqlstatement = stripslashes($sqlstatement);

		//  print "<br>$sqlstatement";

		  if (trim($SQLStatement) == '')
		  {
			//$contents = '';

		  } else {

			$select_statement_flag = 'false';

			$pos1 = stripos($sqlstatement, "select ");

			if ($pos1 === false)
			{
				//skip
			} else {
				$select_statement_flag = "true";
			}

			if (trim($sqlstatement) != '')
			{

				$status_results = doSQLStatement($db, $sqlstatement, $select_statement_flag);


				if ($status_results == 'error')
				{
					$myDebug .= "<br><span style='color: red;'>Error: '".$sqlstatement."'</span>";
					$err_cntr++;
				} else {
					if ($status_results == 'ok')
					{
						$myMsg .= "<br><span style='color: blue;'>OK: '".$sqlstatement."'</span>";
					} else {
						$myMsg .= "<br><br>SELECT Statement: ".$sqlstatement.'<br>'.$status_results;
					}
				}
			}

		  }
	  }
	} else {
		//$contents = '';
	}

	if ($err_cntr > 0)
	{
		$myMsg .= "<h3><font color=red>There were errors in at least one of your statements!</font></h3>";
		$myMsg .= "<br><b>Try running this program one more time by clicking Reload/Refresh</b>";
		$myMsg .= "<br><b>If you get errors again, then email me!</b>";
	} else {
		if ($contents != '')
		{
			$myMsg .= "<br>SQL Statements were Sucessful.";
		}
	}
} else {
	$contents = '';
}

print "SQL Statement:  <span style='color: maroon; font-size: smaller;'>(end each SQL statement with a <b>;</b> (semi-colon)</span>";
print "<br><textarea cols=\"80\" rows=\"9\" name=\"SQLStatement\" id=\"SQLStatement\">";
print stripslashes($contents);
print "</textarea>";

?>

<br><br><input type="submit" value="Submit SQL Statements"> or <span style="border-bottom: thin solid Blue;"  onClick="clear_textarea();">Clear Box</span>


<input type=hidden name=action value=update>



<hr size="4" style="background-color: #F5DEB3; color: #F5DEB3;">

<?php
	print "$myMsg";
	print "<br>$myDebug";



function doSQLStatement($db, $a_sql_string, $select_statement_flag)
{
    global $myMsg;

	$b_sql_string = stripslashes($a_sql_string);

	// print "<br>doSQL2: '".$b_sql_string."'";

	$result = mysqli_query($db, $b_sql_string);


	if ($result) {
	   // if ($myrowcount == 0 && !$errors_found)
		//{
			if ($select_statement_flag == "true")
			{
			   $selectResultsTable = formatSelectResults($db, $result, $select_statement_flag, 'Y');
			   //print "<br>selectResultsTable";

			   writeSQLHistory($a_sql_string);

			   return $selectResultsTable;
			} else {
				$aff_rows = mysqli_affected_rows($db);

				$myMsg .= "<br><b>Rows Afffected: ".$aff_rows.'</b>';

				if ($aff_rows < 1)
				{
					$myMsg .= "<br>SQL Statement: ".$a_sql_string."<br>";
				}

				writeSQLHistory($a_sql_string);

				return 'ok';
			}
		//}

	} else {
		$myMsg .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
		$myMsg .= "MySQL Error: ".mysqli_error($db)."<br>";
		$myMsg .= "<br>SQL: ".$b_sql_string."<br>";
		$myMsg .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</p>";

		writeSQLHistory($a_sql_string);

		return 'error';
	}


}

function writeSQLHistory($a_sql_string)
{
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$sqlhistory_filename = $DOCUMENT_ROOT.'data/'.'sql_history.txt';

	if (file_exists($sqlhistory_filename))
	{
		$sqlhistory = file_get_contents($sqlhistory_filename);
		$sqlhistory = $a_sql_string.";\n\n".$sqlhistory;
		file_put_contents($sqlhistory_filename, $sqlhistory);
	} else {
		$fp = fopen($sqlhistory_filename, 'a');
		fwrite($fp, $a_sql_string);
		fclose($fp);
	}
}

function formatSelectResults($db, $result, $select_statement_flag, $show_statement_flag)
{

	$errors_found = false;

	 //print "<br>SELECT statement found";

	if (!empty($result))
	{
		if ($select_statement_flag == "true" || $show_statement_flag == "true")
		{
			$numresults = mysqli_num_rows($result);
			$numfields = mysqli_num_fields($result);

			 $selectResults  = '<table border=1 style="color: black;">';

			 $selectResults .= "<tr>";
			 
			// $myResult = mysqli_result($result);

			for ($k = 0; $k < $numfields; $k++)
			{
				 $selectResults .= "<th style=\"background-color: #F5DEB3;\">";
				 $fieldinfo=mysqli_fetch_field($result);
				 $selectResults .= $fieldinfo->name;
				 $selectResults .= "</th>";
			}

			$selectResults .= "</tr>";

			$myrowcount = 0;

			for ($i = 0; $i < $numresults; $i++)
			{
				$myrowcount++;

				$row = mysqli_fetch_row($result);

				if (!($i % 2) == 0)
				{
					 $selectResults .= "<tr style=\"background-color: #F5DEB3;\">";
				} else {
					 $selectResults .= "<tr style=\"background-color: white;\">";
				}

				for ($j = 0; $j < $numfields; $j++)
				{
					 $selectResults .= "<td>";

					 $celldata = stripslashes($row[$j]);

					 if (empty($celldata))
					 {
					 	$celldata = "<span style='color: maroon; font-size: 10px;'>(null)</span>";  //new
					 }

					 $selectResults .= $celldata;

					 $selectResults .= "</td>";
				}

				 $selectResults .= "</tr>";

			}

			$selectResults .= "</table>";

		} else  {
			 $selectResults .= '<br>ERROR: Not a SELECT/SHOW statement';
		}

	} else {
		 $selectResults .= '<br>ERROR: Empty Results';
	}


	$selectResults .= "<br><br><b>Number of Rows in Results: $myrowcount </b><br><br>";   //new new



	return  $selectResults;

}
?>
</div>



<div style="position: absolute; top: 10px;  left: 650px; width: 600px;">

<?php
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$sqlhistory_filename = $DOCUMENT_ROOT.'data/'.'sql_history.txt';

	if ($deleteHistoryFlag == "Y")
	{
		if (file_exists($sqlhistory_filename))
		{
			unlink($sqlhistory_filename);
		}

		$sqlhistory = '';

	} else {
		if (file_exists($sqlhistory_filename))
		{
			$sqlhistory = file_get_contents($sqlhistory_filename);
		} else {
			$sqlhistory = '';
		}
	}
?>

<h4>SQL Statement History (Most recent first)</h4>
<textarea style='background-color: #FFFFCC;' rows='11' cols='60'>
<?php print $sqlhistory ?>
</textarea>

<p><a href="" onClick="return deleteHistory();"><span style='color: blue;'>Delete History?</span></a>


</div>

</form>
</body>
</html>

//book list push to mysql
<html>
<head>
  <title>Reload Bookpub</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; color: Blue;">

<div class=toptext>
<?php
print  "<span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; font-stretch: wider; color: white\">&nbsp;&nbsp;&nbsp;Practice Server</span>";
?>
</div>

<div style="width: 780px;">
<br><br><br><br>
<h2 style="background-color: #F5DEB3;">Reload the Bookpub Database - Version 5</h2>


<?php

//Connect to MySQL and test database

$db = mysqli_connect('localhost','root','', 'test');

if (!$db) {
	die('Could not connect to MySQL: ' . mysqli_connect_error());
}


//Load BookPub database

$err_cntr = 0;

$bookpub_sql = getSQL();  //Retreive the entire SQL statement string

$mySQLArray = explode(';', $bookpub_sql);  //Break up into individual SQL statements

foreach ($mySQLArray as $element)
{
	//print "<br>$element";
	$sqlstatement = trim($element);
	
	if ($sqlstatement != '')
	{
		$status = doSQLStatement($db, $sqlstatement);
		
		if ($status == 'error')
		{
			$err_cntr++;
		}
	}
}

if ($err_cntr > 0)
{
	print "<h1><font color=red>There were errors!</font></h1>";
	print "<br><b>Try running this program one more time by clicking Reload/Refresh</b>";
    print "<br><b>If you get errors again, then email me!</b>";
} else {
	print "<h1>bookpub was re-loaded successfully</h1>";
	print "<br><b>Run this script any time you change the database</b>";
}


function doSQLStatement($db, $a_sql_string)
{
	$result = mysqli_query($db, $a_sql_string);

	if ($result) {
		return 'ok';
	} else {
		echo("<p style='color: red;'>MySQL No: ".mysqli_errno($result)."<br>");
		echo("MySQL Error: ".mysqli_error($result)."<br>");
		echo("SQL: ".$a_sql_string."</p");

		return 'error';
	}
}

?>

<?php
function getSQL()
{

$bookpub_all_sql = "
drop table IF EXISTS authors;  
drop table IF EXISTS publishers;
drop table IF EXISTS roysched;
drop table IF EXISTS titleauthors;
drop table IF EXISTS titles;
drop table IF EXISTS sales;
drop table IF EXISTS editors;
drop table IF EXISTS titleditors;
drop table IF EXISTS salesdetails;




DROP TABLE  IF EXISTS author;

DROP TABLE  IF EXISTS book ;

DROP TABLE  IF EXISTS bookauthor; 

DROP TABLE  IF EXISTS bookeditor ;

DROP TABLE  IF EXISTS city ;

DROP TABLE  IF EXISTS editor ;

DROP TABLE  IF EXISTS publisher ;

DROP TABLE  IF EXISTS zauthor ;

DROP TABLE  IF EXISTS zbookauthor; 

DROP TABLE  IF EXISTS zpublisher;


DROP TABLE IF EXISTS staff;






CREATE TABLE author (
  author_id int(11) NOT NULL,
  ssn varchar(11) ,
  lastname varchar(40)  NOT NULL,
  firstname varchar(20)  NOT NULL,
  phone varchar(12) ,
  address varchar(40) ,
  city varchar(20) ,
  state varchar(2) ,
  zip varchar(5) ,
  PRIMARY KEY (author_id)
) ;



CREATE TABLE  book (
  isbn varchar(13)  NOT NULL,
  title varchar(80)  NOT NULL,
  type varchar(12) ,
  pub_id varchar(4) ,
  price decimal(9,2) ,
  advance decimal(9,2) ,
  ytd_sales int(11) ,
  pubdate date ,
  PRIMARY KEY (isbn)
) ;



CREATE TABLE  bookauthor (
  author_id int(11) NOT NULL,
  isbn varchar(13)  NOT NULL,
  author_order int(11) NOT NULL,
  royaltyshare decimal(5,2) ,
  PRIMARY KEY (author_id,isbn)
) ;


CREATE TABLE  bookeditor (
  editor_id int(11) NOT NULL,
  isbn varchar(13)  NOT NULL,
  PRIMARY KEY (editor_id,isbn)
) ;


CREATE TABLE  city (
  name varchar(30)  NOT NULL,
  PRIMARY KEY (name)
) ;


CREATE TABLE  editor (
  editor_id int(11) NOT NULL,
  ssn varchar(11) ,
  lastname varchar(40)  NOT NULL,
  firstname varchar(20)  NOT NULL,
  phone varchar(12) ,
  editor_position varchar(20)  NOT NULL,
  salary decimal(9,2) NOT NULL,
  PRIMARY KEY (editor_id)
) ;


CREATE TABLE  publisher (
  pub_id int(11) NOT NULL,
  name varchar(40) ,
  address varchar(40) ,
  city varchar(20) ,
  state varchar(2) ,
  PRIMARY KEY (pub_id)
) ;



CREATE TABLE  zauthor (
  ssn varchar(11)  NOT NULL DEFAULT '',
  lastname varchar(40)  NOT NULL,
  firstname varchar(20)  NOT NULL,
  phone varchar(12) ,
  address varchar(40) ,
  city varchar(20) ,
  state varchar(2) ,
  zip varchar(5) ,
  PRIMARY KEY (ssn)
) ;


CREATE TABLE  zbookauthor (
  author_id varchar(11)  NOT NULL,
  isbn varchar(13)  NOT NULL,
  author_order int(11) NOT NULL,
  royaltyshare decimal(5,2) ,
  PRIMARY KEY (author_id,isbn)
) ;




CREATE TABLE  zpublisher (
  publisher_id int(11) NOT NULL,
  name varchar(40) ,
  address varchar(40) ,
  city varchar(20) ,
  state varchar(2) ,
  PRIMARY KEY (publisher_id)
) ;


CREATE TABLE IF NOT EXISTS staff (
  realtor_id int(30) NOT NULL AUTO_INCREMENT,
  lastname varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  firstname varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  phone varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  position varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  image_file varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (realtor_id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;




insert into author
values(998, '998-72-3567', 'Singer', 'Albert',
'801 826-0752', '123 3rd Street', 'St. George', 'UT', '84152')
;
insert into author
values(899, '899-46-2035', 'Singer', 'Anne',
'801 826-0752', '123 3rd Street', 'St. George', 'UT', '84152')
;
insert into author
values(722, '722-51-5454', 'Lance', 'Mike',
'219 547-9982', '3 Bald Eagle Drive', 'Chicago', 'IL', '60631')
;
insert into author
values(807, '807-91-6654', 'Parry', 'Sylvia',
'301 946-8853', '19 Main Street', 'Rockville', 'MD', '20853')
;
insert into author
values(893, '893-72-1158', 'McCluck', 'Serge',
'707 448-4982', '1 Fizzy Street', 'Anaheim', 'CA', '95688')
;
insert into author
values(728, '724-80-9391', 'MacDouglas', 'Spencer',
'415 354-7128', '47 Cumbre Ct.', 'Oakland', 'CA', '94612')
;
insert into author
values(427, '427-17-2319', 'Dingy', 'Ann',
'415 836-7128', '3410 RedWing St.', 'Santa Clara', 'CA', '94301')
;
insert into author
values(672, '672-71-3249', 'Suko', 'Ahi',
'415 935-4228', '3 Silver Ct.', 'Walnut Creek', 'CA', '94595')
;
insert into author
values(267, '267-41-2394', 'Farhey', 'Michael',
'408 286-2428', '44 Homestead Pkwy', 'San Jose', 'CA', '95128')
;
insert into author
values(472, '472-27-2349', 'Dunhill', 'Curt',
'707 938-6445', 'PO Box 792', 'Santa Clara', 'CA', '94301')
;
insert into author
values(527, '527-72-3246', 'Blue', 'Robert',
'615 297-2723', '22 Cowboy Rd.', 'Nashville', 'TN', '37215')
;
insert into author
values(172, '172-32-1176', 'Black', 'John',
'408 496-7223', '10932 Bigge Rd.', 'Menlo Park', 'CA', '94025')
;
insert into author
values(724, '724-08-9931', 'McGyver', 'Dirk',
'415 843-2991', '752 Telescope Rd.', 'Oakland', 'CA', '94609')
;
insert into author
values(274, '274-80-9391', 'Straight', 'Richard',
'415 834-2919', '5420 University Av.', 'Oakland', 'CA', '94609')
;
insert into author
values(756, '756-30-7391', 'Karsen', 'Lynda',
'415 534-9219', '72 James St.', 'Oakland', 'CA', '94609')
;
insert into author
values(712, '712-45-1867', 'Castillo', 'Jose',
'615 996-8275', '28 Park Pl. #86', 'Ann Arbor', 'MI', '48105')
;
insert into author
values(846, '846-92-7186', 'Hunter', 'Cindy',
'415 836-7128', '41 Smart St.', 'Palo Alto', 'CA', '94301')
;
insert into author
values(486, '486-29-1786', 'Lockley', 'Sharon',
'415 585-4620', '18 Brooklyn Av.', 'San Francisco', 'CA', '94130')
;
insert into author
values(648, '648-92-1872', 'Hall', 'Mark',
'503 745-6402', '55 Valley Blvd.', 'Corvallis', 'OR', '97330')
;
insert into author
values(341, '341-22-1782', 'Smith', 'Marge',
'913 843-0462', '10 Misisipi Dr.', 'Lawrence', 'KS', '66044')
;

insert into author
values(409, '409-56-7008', 'Adams', 'Abraham',
'415 658-9932', '622 Robin St.', 'Berkeley', 'CA', '94705')
;
insert into author
values (213, '213-46-8915', 'Blue', 'Maggie',
'415 986-7020', '397 83rd St. #431', 'Oakland', 'CA', '94618')
;
insert into author
values(238, '238-95-7766', 'Carson', 'Honey',
'415 548-7723', '89 MLK Blvd.', 'Berkeley', 'CA', '94705')
;




INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-8888-8888-x', 'Silicon Valley Start-ups', 'computer', '3', '40.00', '8000.00', 4095, '2012-06-12');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-1032-1032-x', 'One Hour Negotiations', 'business', '3', '29.99', '5000.00', 4095, '2012-06-12');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-3333-3333-x', 'Analyzing the Obsessive', 'psychology', '1', '29.99', '2000.00', 4072, '2012-06-12');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-1111-1111-x', 'Where is my Break-Even Point?', 'business', '3', '21.95', '5000.00', 3876, '2012-06-09');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-2222-2222-x', 'Treats and More Treats', 'cooking', '2', '29.99', '0.00', 2032, '2012-06-09');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-7777-7777-x', 'Gluten Free or Die', 'cooking', '2', '29.99', '8000.00', 4095, '2012-06-12');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-4203-4203-x', 'Twenty Meals you can make in 20 minutes', 'cooking', '2', '21.95', '4000.00', 15096, '2012-06-12');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-1035-1035-x', 'Usability Testing', 'computer', '3', '42.95', '7000.00', 8780, '2012-06-30');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-2075-2075-x', 'Are You Stressed for Success?', 'business', '1', '12.99', '10125.00', 18722, '2012-06-15');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-2091-2091-x', 'Sleep Depreviation and Mood Therapy', 'psychology', '1', '21.95', '2275.00', 2045, '2012-06-15');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-2106-2106-x', 'Instilling Courage', 'psychology', '1', '17.00', '6000.00', 111, '2012-10-05');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-3021-3021-x', 'Fresh and Easy?', 'cooking', '2', '12.99', '15000.00', 22246, '2012-06-18');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-3218-3218-x', 'Stop and Smell the Humus', 'cooking', '2', '40.95', '7000.00', 375, '2012-10-21');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-3026-3026-x', 'The Psychology of Social Networking', NULL, '2', NULL, NULL, NULL, NULL);
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-7832-7832-x', 'How to Choose a Computer', 'business', '3', '29.99', '5000.00', 4095, '2012-06-22');
INSERT INTO book (isbn, title, type, pub_id, price, advance, ytd_sales, pubdate) VALUES('1-1372-1372-x', 'Dealing with Behavior Problems in the Workplace', 'psychology', '1', '41.59', '7000.00', 375, '2012-10-21');



INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(409, '1-1032-1032-x', 1, '0.60');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(486, '1-5555-5555-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(486, '1-9999-9999-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(712, '1-2222-2222-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(172, '1-3333-3333-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(213, '1-1032-1032-x', 2, '0.40');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(238, '1-1035-1035-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(213, '1-2075-2075-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(998, '1-2091-2091-x', 1, '0.50');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(899, '1-2091-2091-x', 2, '0.50');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(998, '1-2106-2106-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(722, '1-3021-3021-x', 1, '0.75');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(899, '1-3021-3021-x', 2, '0.25');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(807, '1-3218-3218-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(274, '1-7832-7832-x', 1, '1.00');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(427, '1-8888-8888-x', 1, '0.50');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(846, '1-8888-8888-x', 2, '0.50');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(756, '1-1372-1372-x', 1, '0.75');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(728, '1-1372-1372-x', 2, '0.25');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(728, '1-1111-1111-x', 1, '0.60');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(267, '1-1111-1111-x', 2, '0.40');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(672, '1-7777-7777-x', 1, '0.40');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(267, '1-7777-7777-x', 2, '0.30');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(472, '1-7777-7777-x', 3, '0.30');
INSERT INTO bookauthor (author_id, isbn, author_order, royaltyshare) VALUES(648, '1-4203-4203-x', 1, '1.00');



INSERT INTO bookeditor (editor_id, isbn) VALUES(0, 'ISBN');
INSERT INTO bookeditor (editor_id, isbn) VALUES(2, '1-1111-1111-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(2, '1-2091-2091-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(2, '1-2106-2106-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(3, '1-1372-1372-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(3, '1-3021-3021-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(3, '1-7832-7832-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(3, '1-8888-8888-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(5, '1-1032-1032-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(5, '1-1372-1372-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(5, '1-2222-2222-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(5, '1-3333-3333-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(5, '1-5555-5555-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(5, '1-9999-9999-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(7, '1-1111-1111-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(7, '1-2091-2091-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(7, '1-3218-3218-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(7, '1-7777-7777-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(8, '1-3021-3021-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(8, '1-4203-4203-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(8, '1-7777-7777-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(8, '1-8888-8888-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(9, '1-1032-1032-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(9, '1-1035-1035-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(9, '1-2075-2075-x');
INSERT INTO bookeditor (editor_id, isbn) VALUES(9, '1-7777-7777-x');



INSERT INTO city (name) VALUES('Chicago');
INSERT INTO city (name) VALUES('Detroit');
INSERT INTO city (name) VALUES('Toronto');



INSERT INTO editor (editor_id, ssn, lastname, firstname, phone, editor_position, salary) VALUES(5, '955-72-3567', 'Penny', 'Anne', '801 826-0752', 'Managing Editor', '108000.00');
INSERT INTO editor (editor_id, ssn, lastname, firstname, phone, editor_position, salary) VALUES(9, '888-46-2035', 'Jones', 'Albert', '801 826-0752', 'Copy Editor', '77000.00');
INSERT INTO editor (editor_id, ssn, lastname, firstname, phone, editor_position, salary) VALUES(2, '722-51-5454', 'Lance', 'Mike', '219 547-9982', 'Project Editor', '88000.00');
INSERT INTO editor (editor_id, ssn, lastname, firstname, phone, editor_position, salary) VALUES(7, '807-91-6654', 'Parry', 'Sylvia', '301 946-8853', 'Managing Editor', '105000.00');
INSERT INTO editor (editor_id, ssn, lastname, firstname, phone, editor_position, salary) VALUES(3, '793-72-1158', 'Smith', 'Steve', '707 448-4982', 'Copy Editor', '76000.00');
INSERT INTO editor (editor_id, ssn, lastname, firstname, phone, editor_position, salary) VALUES(8, '714-80-9391', 'MacDonald', 'Ron', '415 354-7128', 'Project Editor', '87000.00');



INSERT INTO publisher (pub_id, name, address, city, state) VALUES(2, 'Binder and Smith', '2 2nd Ave.', 'New York', 'NY');
INSERT INTO publisher (pub_id, name, address, city, state) VALUES(3, 'All Techo Books', '3 3rd Dr.', 'Cupertino', 'CA');
INSERT INTO publisher (pub_id, name, address, city, state) VALUES(1, 'Sunshine Publishers', '1 1st St', 'Berkeley', 'CA');



INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('998-72-3567', 'Singer', 'Albert', '801 826-0752', '123 3rd Street', 'St. George', 'UT', '84152');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('899-46-2035', 'Singer', 'Anne', '801 826-0752', '123 3rd Street', 'St. George', 'UT', '84152');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('722-51-5454', 'Lance', 'Mike', '219 547-9982', '3 Bald Eagle Drive', 'Chicago', 'IL', '60631');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('807-91-6654', 'Parry', 'Sylvia', '301 946-8853', '19 Main Street', 'Rockville', 'MD', '20853');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('893-72-1158', 'McCluck', 'Serge', '707 448-4982', '1 Fizzy Street', 'Anaheim', 'CA', '95688');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('724-80-9391', 'MacDouglas', 'Spencer', '415 354-7128', '47 Cumbre Ct.', 'Oakland', 'CA', '94612');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('427-17-2319', 'Dingy', 'Ann', '415 836-7128', '3410 RedWing St.', 'Santa Clara', 'CA', '94301');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('672-71-3249', 'Suko', 'Ahi', '415 935-4228', '3 Silver Ct.', 'Walnut Creek', 'CA', '94595');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('267-41-2394', 'Farhey', 'Michael', '408 286-2428', '44 Homestead Pkwy', 'San Jose', 'CA', '95128');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('472-27-2349', 'Dunhill', 'Curt', '707 938-6445', 'PO Box 792', 'Santa Clara', 'CA', '94301');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('527-72-3246', 'Blue', 'Robert', '615 297-2723', '22 Cowboy Rd.', 'Nashville', 'TN', '37215');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('172-32-1176', 'Black', 'John', '408 496-7223', '10932 Bigge Rd.', 'Menlo Park', 'CA', '94025');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('724-08-9931', 'McGyver', 'Dirk', '415 843-2991', '752 Telescope Rd.', 'Oakland', 'CA', '94609');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('274-80-9391', 'Straight', 'Richard', '415 834-2919', '5420 University Av.', 'Oakland', 'CA', '94609');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('756-30-7391', 'Karsen', 'Lynda', '415 534-9219', '72 James St.', 'Oakland', 'CA', '94609');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('712-45-1867', 'Castillo', 'Jose', '615 996-8275', '28 Park Pl. #86', 'Ann Arbor', 'MI', '48105');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('846-92-7186', 'Hunter', 'Cindy', '415 836-7128', '41 Smart St.', 'Palo Alto', 'CA', '94301');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('486-29-1786', 'Lockley', 'Sharon', '415 585-4620', '18 Brooklyn Av.', 'San Francisco', 'CA', '94130');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('648-92-1872', 'Hall', 'Mark', '503 745-6402', '55 Valley Blvd.', 'Corvallis', 'OR', '97330');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('341-22-1782', 'Smith', 'Marge', '913 843-0462', '10 Misisipi Dr.', 'Lawrence', 'KS', '66044');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('409-56-7008', 'Adams', 'Abraham', '415 658-9932', '622 Robin St.', 'Berkeley', 'CA', '94705');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('213-46-8915', 'Blue', 'Maggie', '415 986-7020', '397 83rd St. #431', 'Oakland', 'CA', '94618');
INSERT INTO zauthor (ssn, lastname, firstname, phone, address, city, state, zip) VALUES('238-95-7766', 'Carson', 'Honey', '415 548-7723', '89 MLK Blvd.', 'Berkeley', 'CA', '94705');



INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('409-56-7008', '1-1032-1032-x', 1, '0.60');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('486-29-1786', '1-5555-5555-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('486-29-1786', '1-9999-9999-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('712-45-1867', '1-2222-2222-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('172-32-1176', '1-3333-3333-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('213-46-8915', '1-1032-1032-x', 2, '0.40');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('238-95-7766', '1-1035-1035-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('213-46-8915', '1-2075-2075-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('998-72-3567', '1-2091-2091-x', 1, '0.50');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('899-46-2035', '1-2091-2091-x', 2, '0.50');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('998-72-3567', '1-2106-2106-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('722-51-5454', '1-3021-3021-x', 1, '0.75');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('899-46-2035', '1-3021-3021-x', 2, '0.25');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('807-91-6654', '1-3218-3218-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('274-80-9391', '1-7832-7832-x', 1, '1.00');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('427-17-2319', '1-8888-8888-x', 1, '0.50');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('846-92-7186', '1-8888-8888-x', 2, '0.50');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('756-30-7391', '1-1372-1372-x', 1, '0.75');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('724-80-9391', '1-1372-1372-x', 2, '0.25');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('724-80-9391', '1-1111-1111-x', 1, '0.60');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('267-41-2394', '1-1111-1111-x', 2, '0.40');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('672-71-3249', '1-7777-7777-x', 1, '0.40');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('267-41-2394', '1-7777-7777-x', 2, '0.30');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('472-27-2349', '1-7777-7777-x', 3, '0.30');
INSERT INTO zbookauthor (author_id, isbn, author_order, royaltyshare) VALUES('648-92-1872', '1-4203-4203-x', 1, '1.00');



INSERT INTO zpublisher (publisher_id, name, address, city, state) VALUES(2, 'Binder and Smith', '2 2nd Ave.', 'New York', 'NY');
INSERT INTO zpublisher (publisher_id, name, address, city, state) VALUES(3, 'All Techo Books', '3 3rd Dr.', 'Cupertino', 'CA');
INSERT INTO zpublisher (publisher_id, name, address, city, state) VALUES(1, 'Sunshine Publishers', '1 1st St', 'Berkeley', 'CA');


INSERT INTO staff (realtor_id, lastname, firstname, phone, email, position, image_file) VALUES(1, 'Way', 'Lee', '777-555-1111', 'staff_lee@kinglibl.com', 'Front Desk', 'staff_lee.jpg');
INSERT INTO staff (realtor_id, lastname, firstname, phone, email, position, image_file) VALUES(2, 'Urkiddeng', 'Shirley', '777-555-3333', 'staff_shirley@kinglib.com', 'Childrens Section', 'staff_shirley.jpg');
INSERT INTO staff (realtor_id, lastname, firstname, phone, email, position, image_file) VALUES(3, 'Phoolary', 'Tom', '777-555-4444', 'staff_tom@kinglib.com', 'Reference Librarian', 'staff_tom.jpg');
";

return $bookpub_all_sql;
}


?>

</div>
</body>
</html>

CREATE TABLE students (
  student_id int(11) NOT NULL,
  name varchar(11) ,
  address varchar(40)  NOT NULL,
  app_date date NOT NULL,
  birth_date varchar(12) ,
  credits_earned int ,
  tuition_paid int ,
  PRIMARY KEY (student_id)
);

SELECT name, address FROM publisher WHERE state = 'CA';
SELECT * FROM book WHERE advance > 5000;
SELECT * FROM author where NOT (state="CA" or state="KS");
SELECT * FROM book WHERE (advance > 4000 or advance IS NULL);
SELECT * FROM book order by price DESC, title;
SELECT avg(advance), MIN(price), SUM(ytd_sales) FROM book;
SELECT * FROM author WHERE ssn LIKE '_2%';
INSERT INTO book (title) VALUES ('NewBook!');
update book set type = 'psychology', price = 20, advance = 0 WHERE title = 'The Psychology of Computer Cooking';
update book 
 set price = 39.99
 where price = 29.99;
update book
 set price = 39.95
 WHERE price = 29.99;
delete from publisher;
delete from publisher WHERE name LIKE 'New%';

SQL PROBLEMS - BEGIN  COPY & PASTE (Just the text, not the picture)

--------------------------------------------------------------------------------------
Problem 1.  Create a table named "Employee" with the 
following column specifications:

YOUR ANSWER HERE:

CREATE TABLE Employee (
  ssn varchar(11) NOT NULL,
  lastname varchar(40) NOT NULL,
  firstname varchar(30),
  department_code int(3) NOT NULL,
  annual_salary int,
  hire_date date NOT NULL,
  PRIMARY KEY (ssn)
);

--------------------------------------------------------------------------------------

Problem 2.  Create a table named "Department" with 
the following column specifications:

YOUR ANSWER HERE:

CREATE TABLE Department (
  department_code int(3) NOT NULL,
  department_name varchar(30) NOT NULL,
  PRIMARY KEY (department_code)
);

--------------------------------------------------------------------------------------

Problem 3.  Code the Insert statements required to add the 
following data to the Employee table.

	Employee:
	ssn: 111-22-3333
	lastname: Smith
	firstname: John
	department_code: 234
	annual_salary: $50,000
	hire_date: 1999-10-15


	Employee:
	ssn: 222-33-4444
	lastname: Jones
	firstname: Mary
	department_code: 234
	annual_salary: $56,000
	hire_date: 1998-01-02

YOUR ANSWER HERE:

insert into Employee 
    (ssn, lastname, firstname, department_code, annual_salary, hire_date)
    values('111-22-3333', 'Smith', 'John', 234,
    50000, '1999-10-15')
;

insert into Employee 
    (ssn, lastname, firstname, department_code, annual_salary, hire_date)
    values('222-33-4444', 'Jones', 'Mary', 234,
    56000, '1998-01-02')
;

--------------------------------------------------------------------------------------

Problem 4.  Code the Insert statements required to add the 
following data to the Department table.

	Department:
	department_code: 234
	department_name: Information Services

	Department:
	department_code: 456
	department_name: Systems Group

	Department:
	department_code: 657
	department_name: Payroll

YOUR ANSWER HERE:

insert into Department 
    (department_code, department_name)
    values(234, 'Information Services')
;

insert into Department 
    (department_code, department_name)
    values(456, 'Systems Group')
;

insert into Department 
    (department_code, department_name)
    values(657, 'Payroll')
;

--------------------------------------------------------------------------------------

Problem 5.  Display a list of Employee Names (lastname, firstname) and their hire date. 
Sort the results by Last Name.

YOUR ANSWER HERE:

SELECT lastname, firstname, hire_date FROM Employee ORDER BY lastname;

--------------------------------------------------------------------------------------

Problem 6.  Display the Average Salary of all the employees.

YOUR ANSWER HERE:

SELECT avg(annual_salary) FROM Employee;

--------------------------------------------------------------------------------------

Problem 7.  Code a SQL Statement that would remove John Smith 
from the database.   Do NOT use his SSN value to code this statement
just use the name criteria.

YOUR ANSWER HERE:

DELETE FROM Employee WHERE firstname = "John" AND lastname = "Smith";

--------------------------------------------------------------------------------------

Problem 8.  Code a SQL Statement that would raise everyone's salary by $1000.
You should code a statement that would actually change the data in the table.

YOUR ANSWER HERE:

update Employee 
 set annual_salary = annual_salary + 1000;

--------------------------------------------------------------------------------------

Problem 9.  Code a SQL Statement that would remove the Department table from the database.

YOUR ANSWER HERE:

DROP TABLE IF EXISTS Department;

--------------------------------------------------------------------------------------

SQL PROBLEMS - END  COPY & PASTE

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Test DB</title>

	<link rel="stylesheet" type="text/css" href="css/kinglib_6.css" />

</head>

<body>
<h1>Test Database Connection</h1>

<?php

    $db = connectDatabase();

	if ($db)
	{
		displayCity($db);
	} else {
		print "<br>Did not connect to the Data";
	}

?>

</body>
</html>

<?php

function connectDatabase()
{
	//**********************************************
	//*
	//*  Connect to MySQL and Database
	//*
	//**********************************************

		 require('../../DBtest_pptest.php');

		 $host =  'localhost';
		 $userid =  'P17';
		 $password = '7dosql7';
		 $dbname = 'testdb';

		 $db = mysqli_connect($host, $userid, $password, $dbname);

		 if (!$db)
		 {
		     print "<h1>Unable to Connect to MySQLi</h1>";
		     exit;
		 }

	     return $db;
}


function displayCity($db)
{

	$sql_statement  = "SELECT name ";
	$sql_statement .= "FROM city ";
	$sql_statement .= "ORDER BY name ";

	$result = mysqli_query($db, $sql_statement);

	if (!$result)
	{
				$output .= "ERROR";
				$output .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
				$output .= "MySQL Error: ".mysqli_error($db)."<br>";
				$output .= "<br>SQL: ".$sql_statement."<br>";
				$output .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";

	} else {

				$numresults = mysqli_num_rows($result);

				for ($i = 0; $i < $numresults; $i++)
				{
					$row = mysqli_fetch_array($result);

	                $name = $row['name'];

	                print "<br>$name";

				}
		}
}
?>

//including new php files
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>0607 Using Includes</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Using Includes</h3>

<form method="post" action="0607_Using_Includes.php">

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
	<title>0607 Using Includes</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<h3>Using Includes</h3>

<?php
	include "0607_Common_Functions.php";  //pulls in PHP functions from another file

	$in_firstname = $_POST['firstname'];
	$in_hourslept = $_POST['hourslept'];
	$in_birthyear = $_POST['birthyear'];

	$rtnmsg = doValidation($in_firstname, $in_hourslept, $in_birthyear);

	if ($rtnmsg == '')
	{
		displayPage($in_firstname, $in_hourslept, $in_birthyear);
	}
	else
	{
		print $rtnmsg;
		print "<br>Go BACK and try again!";
	}

?>

</body>
</html>

<?php

function doValidation($firstname, $hourslept, $birthyear)
{

	$errmsg = '';

	if (empty($firstname))
	{
		$errmsg .= "<br />You must enter a First Name";
	}

	if (empty($hourslept))
	{
		$errmsg .= "<br />You must enter the hours you sleep";
	}
	else
	{
		if (!is_numeric($hourslept))
		{
			$errmsg .= "<br />The hours you sleep must be numeric";
		}
	}

	if (empty($birthyear))
	{
		$errmsg .= "<br />You must enter your birthyear";
	}
	else
	{
		if (!is_numeric($birthyear))
		{
			$errmsg .= "<br />Your Birth Year must be numeric";
		}
		else
		{
			$length_of_year = strlen($birthyear);

			if ($length_of_year != 4)
			{
				$errmsg .= "<br />Your Birth Year must be exaclty four numbers";
			}
		}
	}

	return $errmsg;
}

function displayPage($firstname, $hourslept, $birthyear)
{
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
}

?>

//Enter State Code to see Authors by State
<html>
<head>
  <title>0802_Pass_Data_to_Select</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">

<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >


<h2 style="background-color: #F5DEB3;">Pass data to a Select Statement</h2>

<p>Enter State Code to see Authors by State:
<input type='text' name='statecode' size='2' />
</p>

<?php
//**********************************************
//*
//*  Get Statecode
//*
//**********************************************

if (isset($_POST['statecode']))
{
	$statecode = $_POST['statecode'];

	if (empty($statecode))
	{
		$statecode = 'ALL';
	}
} else {
	$statecode = 'ALL';
}


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
		 $userid =  'P17';
		 $password = '7dosql7';
		 $dbname = 'testdb';

		 $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);

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

//**********************************************
//*
//*  SELECT from table and display Results
//*
//**********************************************

$sql_statement  = "SELECT lastname, firstname, state ";
$sql_statement .= "FROM author ";

if ($statecode != 'ALL')
{
	$sql_statement .= "WHERE state = '".$statecode."' ";
}

$sql_statement .= "ORDER BY lastname, firstname ";

$result = mysqli_query($db, $sql_statement);  // Run SELECT

$outputDisplay = "";
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
	$outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
	$outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
} else {

	if ($statecode == 'ALL')
	{
		$outputDisplay  = "<h3>Authors who live in All States</h3>";
	} else {
		$outputDisplay  = "<h3>Authors who live in ".$statecode."</h3>";
	}


	$outputDisplay .= '<table border=1 style="color: black;">';
	$outputDisplay .= '<tr><th>Last Name</th><th>First Name</th><th>State</th></tr>';

	$numresults = mysqli_num_rows($result);

	for ($i = 0; $i < $numresults; $i++)
	{
		if (!($i % 2) == 0)
		{
			 $outputDisplay .= "<tr style=\"background-color: #F5DEB3;\">";
		} else {
			 $outputDisplay .= "<tr style=\"background-color: white;\">";
		}

		$myrowcount++;

		$row = mysqli_fetch_array($result);

		$lastname  = $row['lastname'];
		$firstname = $row['firstname'];
		$state = $row['state'];

		$outputDisplay .= "<td>".$lastname."</td>";
		$outputDisplay .= "<td>".$firstname."</td>";
		$outputDisplay .= "<td>".$state."</td>";

		$outputDisplay .= "</tr>";

	}

	$outputDisplay .= "</table>";

}


?>

<br /><br /><input type="submit" value="Submit SQL Statements" />

<hr size="4" style="background-color: #F5DEB3; color: #F5DEB3;" />

<?php
	$outputDisplay .= "<br /><br /><b>Number of Rows in Results: $myrowcount </b><br /><br />";
	print $outputDisplay;
?>


</form>
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Test DB</title>

	<link rel="stylesheet" type="text/css" href="css/kinglib_6.css" />

</head>

<body>
<h1>Test Database using Include File</h1>


<?php

	include "testdb_common_functions.php";

	$db = connectDatabase();

	if ($db)
	{
		$sql_statement  = "SELECT name ";
		$sql_statement .= "FROM city ";
		$sql_statement .= "ORDER BY name ";

		$result = mysqli_query($db, $sql_statement);

		if (!$result)
		{
				$output .= "ERROR";
				$output .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
				$output .= "MySQL Error: ".mysqli_error($db)."<br>";
				$output .= "<br>SQL: ".$sql_statement."<br>";
				$output .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";

		} else {

				$numresults = mysqli_num_rows($result);

				for ($i = 0; $i < $numresults; $i++)
				{
					$row = mysqli_fetch_array($result);

					$name = $row['name'];

					print "<br>$name";

				}
		}
	} else {
		print "<br>Did not connect to the Database";
	}

?>

</body>
</html>

<?php

require('../../DBtest_pptest.php');

function connectDatabase()
{
	 $host =  'localhost';
	 $userid =  '7admin7';   //Change to user YOUR USER ID!!
	 $password = '7dosql7';
	 $dbname = 'testdb';

	 $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);

	 if (!$db)
	 {
	     print "<h1>Unable to Connect to MySQLi</h1>";
	     exit;
	 }

	 return $db;
}

?>

//adding rows to a table
<html>
<head>
  <title>0803_Adding_Rows_to_a_Table</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

  <style>
	#addauthor {
		position: absolute;
		top: 80px;
		left: 400px;
		width: 300px;
		height: 500px;
		padding: 10px;
		background-color: #CCCCFF;
	}

	#displayauthor {
		position: absolute;
		top: 80px;
		left: 10px;
		width: 300px;
		height: auto;
		padding: 10px;
		background-color: #CCCCFF;
	}
  </style>

</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">

<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

<h2 style="background-color: #F5DEB3;">Adding Rows to a Table</h2>


<div id='addauthor'>
    <h3>Add Author</h3>

	<p>Enter SSN:<br>
		<input type='text' name='myssn' size='11' />
	</p>

	<p>Enter Last Name:<br>
		<input type='text' name='mylastname' size='20' />
	</p>

	<p>Enter First Name:<br>
		<input type='text' name='myfirstname' size='20' />
	</p>

	<br><input type="submit" name="addbutton" value="Add Author" />


<?php


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
		 $userid =  '7admin7';
		 $password = '7dosql7';
		 $dbname = 'testdb';

		 $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);

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



//**********************************************
//*
//*  Add Author to Table
//*
//**********************************************

if (isset($_POST['addbutton']))
{
	$myaddbutton = trim($_POST['addbutton']);
} else {
	$myaddbutton = '';
}

if ($myaddbutton == 'Add Author')
{

	if (isset($_POST['myssn']))
	{
		$myssn = trim($_POST['myssn']);
	} else {
		$myssn = '';
	}

	if (isset($_POST['mylastname']))
	{
		$mylastname = trim($_POST['mylastname']);
	} else {
		$mylastname = '';
	}

	if (isset($_POST['myfirstname']))
	{
		$myfirstname = trim($_POST['myfirstname']);
	} else {
		$myfirstname = '';
	}


	if (empty($myssn) || empty($mylastname) || empty($myfirstname))
	{
		print "<p style='color: red'>Must Fill Out All Fields</p>";
	} else {
		$rtninfo = insertAuthor($db, $myssn, $mylastname, $myfirstname);

		if ($rtninfo == "NotAdded")
		{
			print "<p style='color: red'>Author Not Added</p>";
		} else {
			print "<p style='color: green'>Author $myfirstname $mylastname ($myssn) has been Added";
		}
	}
}
?>

</div>  <!-- End addauthor DIV -->

<div id='displayauthor'>

<?php
//**********************************************
//*
//*  SELECT from table and display Results
//*
//**********************************************

$sql_statement  = "SELECT ssn, lastname, firstname ";
$sql_statement .= "FROM author ";
$sql_statement .= "ORDER BY lastname, firstname ";

$result = mysqli_query($db, $sql_statement);

$outputDisplay = "";
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
	$outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
	$outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
	$outputDisplay .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";
} else {

	$outputDisplay  = "<h3>Author Table Data</h3>";

	$outputDisplay .= '<table border=1 style="color: black;">';
	$outputDisplay .= '<tr><th>SSN</th><th>Last Name</th><th>First Name</th></tr>';

	$numresults = mysqli_num_rows($result);

	for ($i = 0; $i < $numresults; $i++)
	{
		if (!($i % 2) == 0)
		{
			 $outputDisplay .= "<tr style=\"background-color: #F5DEB3;\">";
		} else {
			 $outputDisplay .= "<tr style=\"background-color: white;\">";
		}


		$myrowcount++;

		$row = mysqli_fetch_array($result);

		$ssn 	   = $row['ssn'];
		$lastname  = $row['lastname'];
		$firstname = $row['firstname'];

		$outputDisplay .= "<td>".$ssn."</td>";

		$outputDisplay .= "<td>".$lastname."</td>";
		$outputDisplay .= "<td>".$firstname."</td>";

		$outputDisplay .= "</tr>";
	}

	$outputDisplay .= "</table>";

}


$outputDisplay .= "<br><br><b>Number of Rows in Results: $myrowcount </b><br><br>";
print $outputDisplay;

?>

</div>  <!-- End displayauthor DIV -->

</form>
</body>
</html>

<?php

function insertAuthor($db, $myssn, $mylastname, $myfirstname)
{

	$statement 	= "insert into author (ssn, lastname, firstname) ";
	$statement .= "values (";
	$statement .= "'".$myssn."', '".$mylastname."', '".$myfirstname."'";
	$statement .= ")";

	$result = mysqli_query($db, $statement);

	if ($result)
	{
		return $myssn;
	} else {
	    $errno = mysqli_errno($db);

	    if ($errno == '1062') {
			echo "<p style='color: red'>Author with SSN of ".$myssn. " is already in Table ";
		} else {
			echo("<h4>MySQL No: ".mysqli_errno($db)."</h4>");
			echo("<h4>MySQL Error: ".mysqli_error($db)."</h4>");
			echo("<h4>SQL: ".$statement."</h4>");
			echo("<h4>MySQL Affected Rows: ".mysqli_affected_rows($db)."</h4>");
		}

		return 'NotAdded';
	}


}
?>

<html>
<head>
  <title>0804_Deleting_Rows_from_a_Table</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

  <style>

	#displayauthor {
		position: absolute;
		top: 80px;
		left: 10px;
		width: 400px;
		height: auto;
		padding: 10px;
		background-color: #CCCCFF;
	}
  </style>

</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">

<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

<h2 style="background-color: #F5DEB3;">Deleting Rows from a Table</h2>

<div id='displayauthor'>


<?php


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
		 $userid =  '7admin7';
		 $password = '7dosql7';
		 $dbname = 'testdb';

		 $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);

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



//**********************************************
//*
//*  SELECT from table and display Results
//*
//**********************************************

$sql_statement  = "SELECT ssn, lastname, firstname ";
$sql_statement .= "FROM author ";
$sql_statement .= "ORDER BY lastname, firstname ";

$result = mysqli_query($db, $sql_statement);

$outputDisplay = "";
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
	$outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
	$outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
	$outputDisplay .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";
} else {

	$outputDisplay  = "<h3>Author Table Data</h3>";

	$outputDisplay .= '<table border=1 style="color: black;">';
	$outputDisplay .= '<tr><th>Delete?</th><th>SSN</th><th>Last Name</th><th>First Name</th></tr>'."\n";

	$numresults = mysqli_num_rows($result);

	for ($i = 0; $i < $numresults; $i++)
	{
		if (!($i % 2) == 0)
		{
			 $outputDisplay .= "<tr style=\"background-color: #F5DEB3;\">";
		} else {
			 $outputDisplay .= "<tr style=\"background-color: white;\">";
		}

		$row = mysqli_fetch_array($result);

		$ssn 	   = $row['ssn'];
		$lastname  = $row['lastname'];
		$firstname = $row['firstname'];

        if (isset($_POST[$ssn]))
        {
        	$checked = $_POST[$ssn];
        } else {
        	$checked = 'N';
        }

		if ($checked == 'Y')
		{
			deleteAuthor($db, $ssn, $lastname, $firstname);
		} else {

			$myrowcount++;

			$outputDisplay .= "<td><input type='checkbox' name='".$ssn."' value='Y'></td>";
			$outputDisplay .= "<td>".$ssn."</td>";
			$outputDisplay .= "<td>".$lastname."</td>";
			$outputDisplay .= "<td>".$firstname."</td>";
			$outputDisplay .= "</tr>\n";
		}
	}

	$outputDisplay .= "</table>";

}

$outputDisplay .= '<br><input type="submit" value="Delete Authors" />';

$outputDisplay .= "<br><br><b>Number of Rows in Results: $myrowcount </b><br><br>";
print $outputDisplay;

?>
</div>

</form>
</body>
</html>

<?php

function deleteAuthor($db, $ssn, $lastname, $firstname)
{
	$statement 	= "DELETE FROM author ";
	$statement .= "WHERE ssn = '".$ssn."' ";

	$result = mysqli_query($db, $statement);

	if ($result)
	{
		echo "<p style='color: green;'>Author deleted: ".$lastname.", ".$firstname;
	} else {
		$outputDisplay .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
		$outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
		$outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
		$outputDisplay .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";
	}
}
?>

//updating table
<html>
<head>
  <title>0805_Changing_Data_in_a_Table</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

  <style>
	#changeauthor {
		position: absolute;
		top: 80px;
		left: 400px;
		width: 300px;
		height: 500px;
		padding: 10px;
		background-color: #CCCCFF;
	}

	#displayauthor {
		position: absolute;
		top: 80px;
		left: 10px;
		width: 300px;
		height: auto;
		padding: 10px;
		background-color: #CCCCFF;
	}
  </style>

</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">

<form id="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

<h2 style="background-color: #F5DEB3;">Changing Information in a Table</h2>


<div id='changeauthor'>
    <h3>Change Author Information</h3>

	<p>Enter Author's SSN:<br>
		<input type='text' name='myssn' size='11' />
	</p>

	<p>New Last Name:<br>
		<input type='text' name='mylastname' size='20' />
	</p>

	<p>New First Name:<br>
		<input type='text' name='myfirstname' size='20' />
	</p>

	<br><input type="submit" name="changebutton" value="Change Author" />


<?php


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
		 $userid =  '7admin7';
		 $password = '7dosql7';
		 $dbname = 'testdb';

		 $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);

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


//**********************************************
//*
//*  Add Author to Table
//*
//**********************************************

if (isset($_POST['changebutton']))
{
	$mychangebutton = trim($_POST['changebutton']);
} else {
	$mychangebutton = '';
}

if ($mychangebutton == 'Change Author')
{

	if (isset($_POST['myssn']))
	{
		$myssn = trim($_POST['myssn']);
	} else {
		$myssn = '';
	}

	if (isset($_POST['mylastname']))
	{
		$mylastname = trim($_POST['mylastname']);
	} else {
		$mylastname = '';
	}

	if (isset($_POST['myfirstname']))
	{
		$myfirstname = trim($_POST['myfirstname']);
	} else {
		$myfirstname = '';
	}


	if (empty($myssn) || empty($mylastname) || empty($myfirstname))
	{
		print "<p style='color: red'>Must Fill Out All Fields</p>";
	} else {

		$rtninfo = updateAuthor($db, $myssn, $mylastname, $myfirstname);

		if ($rtninfo == "AuthorNotFound")
		{
			print "<p style='color: red'>Author Not Found - Check SSN</p>";
		} else {
			if ($rtninfo == "NotUpdated")
			{
				print "<p style='color: red'>Author Not Updated</p>";
			} else {
				print "<p style='color: green'>Author with SSN of $myssn <br>has been Changed to $myfirstname $mylastname";
			}
		}
	}
}
?>

</div>  <!-- End changeauthor DIV -->

<div id='displayauthor'>

<?php
//**********************************************
//*
//*  SELECT from table and display Results
//*
//**********************************************

$sql_statement  = "SELECT ssn, lastname, firstname ";
$sql_statement .= "FROM author ";
$sql_statement .= "ORDER BY lastname, firstname ";

$result = mysqli_query($db, $sql_statement);

$outputDisplay = "";
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
	$outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
	$outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
	$outputDisplay .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";
} else {

	$outputDisplay  = "<h3>Author Table Data</h3>";

	$outputDisplay .= '<table border=1 style="color: black;">';
	$outputDisplay .= '<tr><th>SSN</th><th>Last Name</th><th>First Name</th></tr>';

	$numresults = mysqli_num_rows($result);

	for ($i = 0; $i < $numresults; $i++)
	{
		if (!($i % 2) == 0)
		{
			 $outputDisplay .= "<tr style=\"background-color: #F5DEB3;\">";
		} else {
			 $outputDisplay .= "<tr style=\"background-color: white;\">";
		}


		$myrowcount++;

		$row = mysqli_fetch_array($result);

		$ssn 	   = $row['ssn'];
		$lastname  = $row['lastname'];
		$firstname = $row['firstname'];

		$outputDisplay .= "<td>".$ssn."</td>";

		$outputDisplay .= "<td>".$lastname."</td>";
		$outputDisplay .= "<td>".$firstname."</td>";

		$outputDisplay .= "</tr>";
	}

	$outputDisplay .= "</table>";

}


$outputDisplay .= "<br><br><b>Number of Rows in Results: $myrowcount </b><br><br>";
print $outputDisplay;

?>

</div>  <!-- End displayauthor DIV -->

</form>
</body>
</html>

<?php

function updateAuthor($db, $myssn, $mylastname, $myfirstname)
{

    //First check if SSN exists

	$sql_statement  = "SELECT ssn ";
	$sql_statement .= "FROM author ";
	$sql_statement .= "WHERE ssn = '".$myssn."' ";

	$result = mysqli_query($db, $sql_statement);  // Run SELECT

	$numresults = mysqli_num_rows($result);


	// If SSN exists then Update the Author Info

	if ($numresults > 0)
	{

		$statement 	= "update author ";
		$statement .= " set lastname = '".$mylastname."', ";
		$statement .= "     firstname = '".$myfirstname."' ";
		$statement .= "where ssn = '".$myssn."' ";

		$result = mysqli_query($db, $statement);

		if ($result)
		{
			return $myssn;
		} else {
			$errno = mysqli_errno($db);

			echo("<h4>MySQL No: ".mysqli_errno($db)."</h4>");
			echo("<h4>MySQL Error: ".mysqli_error($db)."</h4>");
			echo("<h4>SQL: ".$statement."</h4>");
			echo("<h4>MySQL Affected Rows: ".mysqli_affected_rows($db)."</h4>");

			return 'NotUpdated';
		}
	} else {

		return 'AuthorNotFound';
	}
}
?>

//populating a drop down list
<html>
<head>
  <title>0806_Populate_a_Select_Option_List</title>
  <link rel="stylesheet" href="http://profperry.com/Classes/Main.css" type="text/css">

</head>

<body style="font-family: Arial, Helvetica, sans-serif; color: Blue; background-color: silver;">


<h2 style="background-color: #F5DEB3;">Populate a Select Option List</h2>

<?php

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
		 $userid =  '7admin7';
		 $password = '7dosql7';
		 $dbname = 'testdb';

		 $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);

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


//**********************************************
//*
//*  SELECT from table and display Results
//*
//**********************************************

$sql_statement  = "SELECT name ";
$sql_statement .= "FROM city ";
$sql_statement .= "ORDER BY name ";

$result = mysqli_query($db, $sql_statement);

$outputDisplay = "";
$myrowcount = 0;

if (!$result) {
	$outputDisplay .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
	$outputDisplay .= "MySQL Error: ".mysqli_error($db)."<br>";
	$outputDisplay .= "<br>SQL: ".$sql_statement."<br>";
} else {

	$outputDisplay  = "<select>";

	$numresults = mysqli_num_rows($result);

	for ($i = 0; $i < $numresults; $i++)
	{
		$row = mysqli_fetch_array($result);

		$name  = $row['name'];

		$outputDisplay .= "<option value='".$name."'>".$name."</option>";
	}

	$outputDisplay .= "</select>";

}


?>

<?php
	print $outputDisplay;
?>

</body>
</html>

//assignment 6

CREATE TABLE patron (
	patron_id int(11) AUTO_INCREMENT NOT NULL,
	lastname varchar(40) NOT NULL,
	firstname varchar(40) NOT NULL,
	email varchar(100),
	city varchar(40),
	birthyear int(11) NOT NULL,
	userid varchar(10),
	password varchar(10),
	PRIMARY KEY (patron_id)
);


CREATE TABLE author (
  author_id int(11) NOT NULL,
  ssn varchar(11) ,
  lastname varchar(40)  NOT NULL,
  firstname varchar(20)  NOT NULL,
  phone varchar(12) ,
  address varchar(40) ,
  city varchar(20) ,
  state varchar(2) ,
  zip varchar(5) ,
  PRIMARY KEY (author_id)
) ;

//assignment 6
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>King Library</title>
    <link rel="stylesheet" type="text/css" href="css/KingLib_6.css">
</head>

<body>
    <div id="logo">
        <img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" > 
    </div>
    <form method="post" action="assignment_6_add_patron.php">
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
        <p>
            For Admin Use Only: <a href='assignment_6_view_patrons.php'>View Patrons</a>
        </p>
    </form>

</body>
</html>

//assignment_6_db_functions.php
<?php
    function connectDatabase()
    {
         require('../../DBtest_pptest.php');

         $host =  'localhost';
         $userid =  'P17';   //Change to user YOUR USER ID!!
         $password = '7dosql7';
         $dbname = 'testdb';
    
         $db = mysqli_perry_pconnect($host, $userid, $password, $dbname);
    
         if (!$db)
         {
             print "<h1>Unable to Connect to MySQLi</h1>";
             exit;
         }

         return $db;
    }
?>

//adds patron and form logic check
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
                    $sql_statement = "INSERT INTO ";
                    $sql_statement .= "patron (lastname, firstname, ";
                    $sql_statement .= "email, city, birthyear) VALUES ";
                    $sql_statement .= "('".$lastName."', '".$firstName."', ";
                    $sql_statement .= "'".$email."', '".$position."', '".$birthYear."');";

                    $result = mysqli_query($db, $sql_statement);

                    if (!$result) {
                        $output = "ERROR";
                        $output .= "<p style='color: red;'>MySQL No: ".mysqli_errno($db)."<br>";
                        $output .= "MySQL Error: ".mysqli_error($db)."<br>";
                        $output .= "<br>SQL: ".$sql_statement."<br>";
                        $output .= "<br>MySQL Affected Rows: ".mysqli_affected_rows($db)."</font><br>";
                        print "<br>".$output;
                    } else {
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
                        print "For Admin Use Only: <a href='assignment_6_view_patrons.php'>View Patrons</a>";
                    }
                } else {
                    print "<br>Did not connect to the data.";
                }

            ?>
        </div>
    </body>
</html>

//view list of patrons
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