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