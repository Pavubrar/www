<?php
$string = "evolveU you is the part of the InceptionU";
// echo strlen($string);
// echo ucwords($string);
// echo ucfirst($string);
// echo str_word_count($string);
echo strpos($string, 'u'); //tells the i position of char
echo"<br/>";
echo str_replace('u', 'U',$string);
?>