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