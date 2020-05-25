<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>
<body>
    <?php
    $characterName =" Gurbir";
    $characterAge= 34 ;
    echo "<h1>Parveen's Site</h1>";
    echo"<hr>";
    echo("Hello World");
    echo"<hr>";
    echo"<p>This is my lovely site</p>";
    echo"<h2>A Story</h2>";
    echo"There once is a man named $characterName <br>";
    echo"He is $characterAge years old <br>";
    $characterName = "Parveen";
    echo"He really liked the name $characterName <br>";
    echo"But didn't like being $characterAge <br>";
    ?>
    <br>
    <form action="site.php" method = "post"> 
    Name:<input type="text" name="name"><br>
    <input type="submit"> <br>
    Apple<input type="checkbox" name="fruits[]" value= "apple"> <br>
    Oranges<input type="checkbox" name="fruits[]" value= "oranges"> <br>
    Apricot<input type="checkbox" name="fruits[]" value= "apricot"> <br>
    Ananaas<input type="checkbox" name="fruits[]" value= "ananaas"> <br>
    <input type="submit">
    </form>
    <br>
<?php 
// echo $_POST["name"] ;
$fruits = $_POST["fruits"];
echo $fruits[3];
$friends = array("jot","kirri","navu");
// echo $friends[1];

echo $friends[1] = "happy ";

?><br>
<?php
function sayHi($name, $age)
{
    echo "Hello $name, you are $age year old <br>";
}
sayHi("Parveen", 33);
sayHi("Sampi",30);
sayHi("Gurveen",3);
?>
<?php
function cube($number){
    return $number * $number *$number;
}
echo cube(3);
?><br>
<!-- if statement -->
<?php
$isMale =false;
if($isMale){
    echo "You are a Male";
}else{
    echo "You are not Male";
}
?><br>
<form action ="site.php" metod = "post">
 First Num:<input type = "number" step = "0.001" name ="num1"> <br>
 OP:<input type= "test" name ="op"> <br>
 Second Num:<input type = "number" name ="num2"> <br>
 <input type = "submit">

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

?>

</body>
</html>