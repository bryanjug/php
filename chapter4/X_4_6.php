<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>

<body>

<?php
	$firstName = $_POST['firstname'];
	$eyeColor = $_POST['eyecolor'];

	if ($eyeColor == "blue") {	
        if ($firstName == "steve") {
            print "You are the teacher.
            Hi blue eyes!";
        } else {
            print "You are $firstName. Hi blue eyes!";
        }
    } else {
        if ($firstName == "steve") {
            print "You are the teacher,
            but I thought you had blue eyes.";
        } else {
            print "You are $firstName
            and your eye color is $eyeColor";
        }
    }
?>


</body>
</html>

-- FORMATTING STARTS HERE --

    if (substr($student_pw, 0 , 4) == 'xije') {
        if ($student_first_name == 'Joe' && $student_last_name == 'Zedine') {

            $HOME = "/home/public/";

            $myStudentsRoster = $HOME."ROSTERS/r_students.txt";

            if (!file_exists($myStudentsRoster)) {
                print "</script></head><body>&nbsp;<p style='color: red; font-size: 18px;'>";
                print "<br><br><br><br><br><br><br>";
                print "&nbsp;&nbsp;Missing File  (Error code: 325)";
                print "</body></html>";
                exit;
            }

            $fpsr = fopen($myStudentsRoster, 'r');

            $myStudentOptionList = "";

            while(true) {
            $line = fgets($fpsr);

            if (feof($fpsr)) {
                break;
            }

            list($rnum, $rtimeperiod, $rinstitution, $rcourse_shortname, $rlast_name, $rfirst_name) = explode("|", $line);

            $myOptionValue = $rlast_name.'_'.$rfirst_name.'_'.$rstudent_id;
            $myOptionName =  $rlast_name.', '.$rfirst_name;

            if ($timeperiod == $rtimeperiod && $institution == $rinstitution  && $course_shortname == $rcourse_shortname) {
                $myStudentOptionList .= "<option value=\"".$myOptionValue."\">".$myOptionName."</option>";
                $myStudentNameList .= "<br>".$myOptionValue;  //??
            }
        }

        print "var myStudentOptionList = '".$myStudentOptionList."'; \n\n\n";

        print "var myStudentNameList = '".$myStudentNameList."'; \n\n\n";


        fclose($fpsr);

            } else {
            $myStudentOptionList = "<option>Life is full of many mysteries</option>";
        }
    } else {
    $myStudentOptionList = "<option>Life is full of many mysteries</option>";
}

&& == AND, || == OR, != or !() == NOT
