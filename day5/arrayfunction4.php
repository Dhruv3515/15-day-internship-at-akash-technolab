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

echo "it will push the value in the array";
array_push($arr,"6","7");
echo "<pre>";
print_r($arr);

echo "<br>";
echo "it will delete the last element of  the array";
echo "<br>";
array_pop($arrs);
print_r($arrs);

echo "<br>";
echo "it will used to disply to break a string into a array";
echo "<br>";
$string = "I am intern at aksh technolabs";
$breakarray =explode(" ",$string);
print_r($breakarray);

echo "<br>";
echo "it will used to convert array into a string";
echo "<br>";
$newarrrr =array("I","am","intern","at","akash","technolabs");
$mystring=implode(" ",$newarrrr);
echo $mystring;
?>