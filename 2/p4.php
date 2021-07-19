<?php

$ass_array = array('Dhruv' => 'Navsari',
                    'Kishan' => 'Junagadh',
                    'Darshit' => 'Girnar',
                    'Vitan' => 'Surat',
                    'Rahul' => 'Maroli');
//print_r($ass_array);

//  Displaying array Keys along with its value
echo "DISPLAYING ARRAY KEYS ALONG WITH ITS VALUES<br>";
foreach($ass_array as $key => $value){
    echo "$key => $value<br>";
}

//  Displaying size of an array
$ass_array_size = sizeof($ass_array);
echo "<br>SIZE OF AN ARRAY : $ass_array_size<br><br>";

//  Deleting an element from an array with specific index
echo "DLETING AN ARRAY FROM THE ARRAY<br>";
echo "<form action='prg4.php' method='POST'>
      Enter index : <input type='text' name='index'>
      <input type='submit' value='submit'>
      </form>";

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $index = $_POST['index'];
      
            //      Split
            $new = array_splice($ass_array,$index+1);
            //      Pop
            $new1 = array_pop($ass_array);
            //      Merge
            $ass_array = array_merge($ass_array,$new);

            echo "<br>AFTE REMOVING SPECIFIC ELEMENT FROM THE ARRAY : <br>";
            foreach($ass_array as $key => $value){
                echo "$key => $value<br>";
            }
      }

//  Reversing key-value pari

$ass_keys = array_keys($ass_array);
$ass_values = array_values($ass_array);

$ass_array = array();

echo "<br>";
$for_values = 0;
foreach($ass_keys as $key){
    $ass_array[$ass_values[$for_values]] = $key;
    $for_values = $for_values +1;  
}
//print_r($ass_array);

//  Displaying array after reversing key-value pair
echo "DISPLAYING ARRAY KEYS ALONG WITH ITS VALUES AFTER REVERSING KEY-VALUE PAIR<br>";
foreach($ass_array as $key => $value){
    echo "$key => $value<br>";
}

//  Traverse the array in random order

echo "<br>TRAVERSING ARRAY IN RANDOM ORDER<br><br>";
foreach($ass_array as $key => $value){
    echo array_rand($ass_array)."<br>";
}
?>