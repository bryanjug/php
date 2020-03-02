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