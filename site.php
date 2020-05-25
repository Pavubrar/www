<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action ="site.php" method = "post">
 First Num:<input type = "number" step = "0.001" name ="num1"> <br>
 OP:<input type= "test" name ="op"> <br>
 Second Num:<input type = "number" name ="num2"> <br>
 <input type = "submit">


    <inpu type ="submit">
    </form>

    <?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
    echo $num1 + $num2;
}elseif ($op == "-") {
    echo $num1 - $num2 ;
}elseif ($op == "/") {
    echo $num1 / $num2;
}elseif ($op == "*") {
    echo $num1 * $num2;
}else {
    echo "Invalid operation";
}
 
?><br>
<h3>Student Honors:</h3>
<?php include "gpa.php"; ?><br>
<h3> Movie Rating:</h3>
<?php include "rating.php" ?>
<h3> Yummy Dishes:</h3>
<?php include "inherit.php" ?>
</body>
</html>