<?php
 echo "hello from first php";
?> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p> <?php 
    echo "testing first site";
    ?> </p><br>
    <?php
    // echo $var, "short tag"; 
    
    ?>
    <p><?php 
    $var = print "testing print statement". "<br>" ; 

    echo 3 + 4;
    ?></p>

    <!-- variable scope -->
    <?php
    echo $y = 10 ."<br>" ;
function estSope()
    {
        // // global $y;
        // // $x = $GLOBALS['y'];
        // // echo $y += 5 . "y inside a function";
        // $y = 5;
        // echo $x + $y;
        static $x = 1; // satic will preserve the value of x variable.
        echo $x;
        $x++;
    }
    // var_dump($GLOBALS);
    estSope();
    echo"<br>";
    estSope();
    echo"<br>";
    estSope();
    echo"<br>";
    estSope();
    echo"<br>";
    // integers 
    $int = 101; // decimal
    $int = -101;
    $octal = 0125; //octal = 85
    $hex = 0x1E; // hexadecimal = decimal 30
    $binary = 0b1111001; // = decimal 121

    $maximun_size = 9554475936854775999; // converts it into floating point = 9.5544....
    var_dump($maximun_size) . "<br";

    //HEREDOC   // instead of test EOT do the same thing
    echo <<<TEST
    Lets test the $hex
    TEST ;

    //NOWDOC
   
    echo<<<'EOT'
    I am using nowdoc $binary
    EOT . "<br/>";
    // echo"<br/>";
    
    //ARRAYS
    $students = array(
        'name'=> 'Tim', 'age' => 33, 'likes'=> array ('reading', 'eating', 'swiming')
    );
    $persons =['reading', 'eating', 'swiming'];
    echo $persons[0];
    echo"<br/>";
    echo $students['name'];   //associative arrays.
    echo"<br/>";
    print_r ($students['likes']) ; // prints the info stored in a variable.
    echo"<br/>";
    echo $students['likes'][1];
  //  var_dump($students);
    echo "<br/>";
    include "constant.php" ;
    
    include "string.php";
    include "array.php";
    require "conditional.php";
    
?>
    </body>
</html>