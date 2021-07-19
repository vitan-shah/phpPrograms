<?php

$str1 = "This is first string";
$str2 = "This is second string";

//  Check strings equality
if($str1 == $str2){
    echo "Both strings are equal";
}else{
    echo "Both are different strings";
}

echo "<br><br>";
$check = strcmp($str1,$str2);
echo "Check using strcmp() : $check";

echo "<br><br>";

//  Append seconf string at the end of the first string
$str1 = $str1 . $str2;
echo $str1; 
?>