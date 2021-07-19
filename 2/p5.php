<?php

$employee_salary = array('Rohan' => 15000,
                            'Rahul' => 25000,
                            'Suraj' => 20000,
                            'Darsh' => 17000,
                            'Meet' => 12000);
//DISPLAYING ORIGINAL ARRAY
echo "DISPLAYING ORIGINAL ARRAY<br>";
foreach($employee_salary as $key => $value){
    echo "$key => $value<br>";
}
echo "<br>";

//  Sort array in asending/desending order on basis value
echo "ASENDING ORDER SALARY : <br>";
$names = array_keys($employee_salary);
$salary = array_values($employee_salary);
for($i=0;$i<count($salary);$i++){
    for($j=$i;$j<count($salary);$j++){
        if($salary[$i]>$salary[$j]){
            $temp_s = $salary[$i];
            $salary[$i] = $salary[$j];
            $salary[$j] = $temp_s;

            $temp_n =$names[$i];
           $names[$i] =$names[$j];
           $names[$j] = $temp_n;
        }
    }
}
$asending = array();
$i=0;
foreach($names as $key){
    $asending[$key] = $salary[$i];
    $i++;
}
foreach($asending as $key => $value){
    echo "$key => $value<br>";
}

//  DESENDING ORDER
echo "<br><br>DESENDING ORDER SALARY : <br>";
$names = array_keys($employee_salary);
$salary = array_values($employee_salary);
for($i=0;$i<count($salary);$i++){
    for($j=$i;$j<count($salary);$j++){
        if($salary[$i]<$salary[$j]){
            $temp_s = $salary[$i];
            $salary[$i] = $salary[$j];
            $salary[$j] = $temp_s;

            $temp_n =$names[$i];
           $names[$i] =$names[$j];
           $names[$j] = $temp_n;
        }
    }
}
$asending = array();
$i=0;
foreach($names as $key){
    $asending[$key] = $salary[$i];
    $i++;
}
foreach($asending as $key => $value){
    echo "$key => $value<br>";
}
echo "<br><br>";

//  Sorting array by values without changing the keys
$v = array_values($employee_salary);
for($i=0;$i<count($v);$i++){
    for($j=$i+1;$j<count($v);$j++){
        if($v[$i]>=$v[$j]){
            $temp = $v[$i];
            $v[$i] = $v[$j];
            $v[$j] = $temp;
        }
    }
}
$k = array_keys($employee_salary);
$employee_salary = array();
$i=0;
foreach ($k as $key) {
    $employee_salary[$key] = $v[$i];
    $i++;
}
echo "SORTING VALUES WITHOUT CHANGING THE KEYS<br>";
foreach($employee_salary as $key => $value){
    echo "$key => $value<br>";
}

//  Filtering odd index elements


// Sort different arrays using single line function
$array1 = array('Fruit' => 'Apple',
                    'Car' => 'Mercedes',
                    'Area' => 'Gujart',
                    'Team' => 'India',
                    'Book' => 'Classmate');

asort($array1);
asort($employee_salary);

echo "<br>SINLGE LINE FUNCTION SORTING<br>";
foreach($array1 as $key => $value){
    echo "$key => $value<br>";
}
echo "<br>SINLGE LINE FUNCTION SORTING";
echo "<br>";
foreach($employee_salary as $key => $value){
    echo "$key => $value<br>";
}

//  Merging above two arrays i.e, array1 and employee_salary
$merged_array = array_merge($array1,$employee_salary);
echo "<br>MERGING ABOVE 2 ARRAYS<br>";
foreach($merged_array as $key => $value){
    echo "$key => $value<br>";
}

//  Intersection of 2 arrays

//  Union(mergeing) of 2 arrays
$union_array = array_merge($array1,$employee_salary);
echo "<br>UNION OF 2 ARRAYS<br>";
foreach($union_array as $key => $value){
    echo "$key => $value<br>";
}


?>