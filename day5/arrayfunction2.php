<?php
$arr= array(1,2,3,4,5);
$arr1= array(7,4,8,9,10);

//for sorting the array
echo "sort the array";
sort($arr1);
echo "<pre>";
print_r($arr1);

//for sorting the array in reverse order
echo "<br>";
echo "reverse the array";
rsort($arr1);
echo "<pre>";
print_r($arr1);

//shuffeling the array
echo "<br>";
echo "shuffle the array";
echo "<br>";
shuffle($arr1);
print_r($arr1);
?>