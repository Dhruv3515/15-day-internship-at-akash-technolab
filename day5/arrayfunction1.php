<?php
$arr= array(1,2,3,4,5);
$arr1= array(6,7,8,9,10);
//total count of the element of array
echo "total elements ".count($arr)." in the array";

//sum of the elments of array
echo "<br>";
echo "<br>";
echo "sum is ".array_sum($arr);

//multiplication  of the elments of array
echo "<br>";
echo "<br>";
echo "sum is ".array_product($arr);

//reverse the elments of array
echo "<br>";
$rev=array_reverse($arr);
echo "<pre>";
print_r($rev);


//merge the array
echo "<br>";
$newarr = array_merge($arr,$arr1);
print_r($newarr);


//for search the array
echo "<br>";
$check=array_search('8',$arr1);
echo $check;



?>