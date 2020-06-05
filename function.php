<?php
$students = array(
    array("name"=>"Parveen Kaur",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 4, 'Level'=> 2),
    array("name"=>"Gurveen Kaur",'Course'=> 'Computer Science', 'Age' => 3, 'Grade' => 5, 'Level'=> 1),
    array("name"=>"Gurbir Singh",'Course'=> 'Computer Science', 'Age' => 33, 'Grade' => 3.5, 'Level'=> 3, 'Collection' => ['Music','Books']), 'name' => 'Sampi');
    echo"<br/><hr/>";

function courseName($name, $author, $pages){
    echo "The course $name, is made by $author, has $pages pages";
}
 function divide($num1, $num2, $swap = true){
     if(!is_int($num1)|| !is_int($num2)){
         return "ENter number for both argument 1 and 2";
     }
    if($swap && $num1 < $num2){
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

    }
    return $num1 / $num2;
 }
  # IS_CALLABLE
  function test(){
    echo "I am test";
  }
  $func_name = "test";
  if(is_callable($func_name)){
      echo "Function {$func_name} is callable <br/>";

  }else {
      echo "Function {$func_name} is not callable <br/>";
  }
  
  class Food
  {
      function rice(){
          echo "tatsy rice";
      }
    }
      $obj = new Food;
      $check = [$obj, 'rice'];
      if(is_callable($check,true, $name)){
          echo "yes $name<br/>";
      }else{
          echo "no<br/>";
      }


      #CALL_USER_FUNC
      function financeMinister($place, $name){
          echo" The FM of {$place} is {$name}<br/>";
      }
      
      call_user_func('financeMinister', "My Sweet Home", "Gurbir Singh Brar");

      #CALL_USER_FUNC_ARRAY



      #RECURSIVE FUNC

function arrayHelper($array)
{
    echo "<ul>";
    foreach($array as $attribute =>$value){
        if(is_array($value)){
            echo "<li>". $attribute;
                arrayHelper($value);
            echo "</li>";
        }else {
            echo "<li> $attribute: $value </li>";
        }
    }
    echo "</ul>";
}

 require "templates/index.tpl.php";
