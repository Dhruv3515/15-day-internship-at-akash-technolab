<?php
$arr= array(1,2,3,4,5);
$arr1= array(7,4,8,9,10);

$arrs =array(
"banana" =>"yellow",
"apple" =>"red"
);
$arrs1 =array(
"banana" =>"yellow",
"car" =>"black"
);

echo "it will display the key value in uppercase";
echo"<pre>";
$uppercase = array_change_key_case($arrs,CASE_UPPER);
print_r($uppercase);

echo "<br>";
echo "it will display the last value of the array";
echo"<br>";
echo "end of the arr is  ".end($arr);

echo "<br>";
echo "<br>";
echo "it will flip the array";
echo"<br>";
$fliparray=array_flip($arrs);
print_r($arrs);

echo "<br>";
echo "it will compare the vlaue of the two array";
echo"<br>";
$diffarray=array_diff($arr,$arr1);
print_r($diffarray);

echo "<br>";
echo "it will intersect the  array";
echo"<br>";
print_r(array_intersect($arrs,$arrs1));

?>