<?php
$colors = ['red', 'blue', 'green'];

foreach($colors as $color){
    echo "<li> $color </li>";
}
$students = array(
array("name"=>"Parveen Kaur",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 4, 'Level'=> 2),
array("name"=>"Gurveen Kaur",'Course'=> 'Computer Science', 'Age' => 3, 'Grade' => 5, 'Level'=> 1),
array("name"=>"Gurbir Singh",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 3.5, 'Level'=> 3, 'Collection' => ['Music','Books']), 'name' => 'Sampi');
echo"<hr/>";
print_r(array_keys($students, 'Sampi'));
echo"<br/><hr/>";

//ADDing into ARRAy more than one item Learbn more array functions from php documentation
array_push($students,["name"=>" Kaur",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 3, 'Level'=> 3],
["name"=>"Singh",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 4, 'Level'=> 2],
["name"=>"Parveen ",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 4, 'Level'=> 2]);

//to ADD SINGLE ITEM
$students[] = ["name"=>"Brar",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 4, 'Level'=> 2];

//DELETE last item from an ARRAY
array_pop($students);

echo count($students);
 require 'templates/index.tpl.php';

// echo "<h2>List of Students</h2>";

// foreach ($students as $key => $value) {
//     echo"<ul>";
//     if(is_array($value)){
//         foreach($value as $attribute =>$val){
//             echo "<li> $attribute  : $val </li>";
//         }
//     }else {
//         echo "<li> $key  : $value </li>";
//     }
//     echo"</ul><hr/>";
// }
?>