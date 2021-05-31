<?php

	echo "Day 5 intern at akashtechnolabs";
	echo "<br>";
$a[0]=45;	
$a['b']="bootstrap";
$a['web']="devlopment";
$a['age']=10;
$a[50]=90.5;
$a[2]=2;
foreach ($a as $val)
{
	echo "<br> value is $val";
}
echo"<br>";
echo"<br>";
//it displays a value of array with index
foreach($a as $key =>$val)
{
	echo "key is $key and value is $val<br>";
}

echo "<pre>";
print_r($a);

var_dump($a);
echo "<pre>";
?>