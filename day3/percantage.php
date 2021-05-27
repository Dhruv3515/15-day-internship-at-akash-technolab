<?php
echo "<h4>Day 3 intern at akash technolab</h4>";

$text1=$_POST['tx1'];
$text2=$_POST['tx2'];
$text3=$_POST['tx3'];
$text4=$_POST['tx4'];
$text5=$_POST['tx5'];

//for total

$total=$text1+$text2+$text3+$text4+$text5;
echo"total is $total";
echo "<br>";

$percantage=($total)*20/100;
echo "percantage is $percantage";
echo "<br>";

//for percantage

if($percantage>90)
{
	echo "<h4 style='background-color:green;'>Grade A</h4>";
}
else if($percantage>70)
{
	echo "<h4 style='background-color:blue;'>Grade B</h4>";
}
else if($percantage>60)
{
	echo "<h4 style='background-color:orange;'>Grade C</h4>";
}
else if($percantage>40)
{
	echo "<h4 style='background-color:yellow;'>Grade D</h4>";
}
else
{
	echo "<h4 style='background-color:red;'>You failed in exam</h4>";
}

?>