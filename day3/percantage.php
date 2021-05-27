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
	echo "Grade A";
}
else if($percantage>70)
{
	echo "grade B";
}
else if($percantage>60)
{
	echo "grade C";
}
else if($percantage>40)
{
	echo "grade D";
}
else
{
	echo "you failed in  exam";
}

?>