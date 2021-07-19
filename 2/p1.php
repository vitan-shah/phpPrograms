<?php

$str = "This is to check palindrome and count vowels";
echo "Sentence : $str<br>";
$str_arry = str_split($str,1);

//  Count Vowels
$a = 0;
$e = 0;
$i = 0;
$o = 0;
$u = 0;
$vowels = 0;

foreach($str_arry as $key){
    if($key == 'a' || $key == 'A' ){
        $a++;
        $vowels = $vowels + 1;
    }
    if($key == 'e' || $key == 'E' ){
        $e++;
        $vowels = $vowels + 1;
    }
    if($key == 'i' || $key == 'I' ){
        $i++;
        $vowels = $vowels + 1;
    }
    if($key == 'o' || $key == 'O' ){
        $o++;
        $vowels = $vowels + 1;
    }
    if($key == 'u' || $key == 'U' ){
        $u++;
        $vowels = $vowels + 1;
    }
}

echo "<br>Total Vowels : $vowels";
echo "<br>Total a/A : $a";
echo "<br>Total e/E : $e";
echo "<br>Total i/I : $i";
echo "<br>Total o/O : $o";
echo "<br>Total u/U : $u<br><br>";

//  Check Palindrome
$rev_str = array();
$len = count($str_arry) - 1;
while($len>=0){
    array_push($rev_str,$str_arry[$len]);
    $len--;
}

if($str_arry == $rev_str){
    echo "String is a palindrome";
}else{
    echo "String is not a palindrome";
}

?>