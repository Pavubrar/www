<?php
$year = 2012;
$isLeapYear = ($year % 4 == 0 && $year % 100 != 0) ||($year % 400 == 0);
echo"<br/>";
// if ($isLeapYear){
//     echo "$year is a Leap year";
// }else {
//     echo "$year is not a leap year";
// }
# WHILE LOOP
$i = 50;
while($i != 5) {
    echo "The current value of i is $i <br/>";
    $i -=5;
}
 #DO WHILE LOOP
 $total = 0;
 $num = 10;
 do {
     $total += $num;
     echo "Num is $num <br/>";
     $num--;
    }
    while ($num != 5);
    echo "Total is $total <br/>"; 
    
# FOR LOOP
for ($i=50; $i != 5 ; $i -=5) { 
   echo "The current value of i is $i<br/>";
}
# continue statement

for ($i = 1; $i<15; $i++){
    if($i ==5){
        echo"Skip number 5<br/>";
        continue;
    }
    echo "The valu of i is $i <br/>";
}

 require"templates/index.tpl.php";


?>