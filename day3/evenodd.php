<?php
echo "<h4>Day 3 intern at akash technolab</h4>";
echo "<br>";
echo"<table border='1'>";
for($i=1;$i<20;$i++)
{
	echo"<tr>";
	if($i%2==0)
	{
		echo "<td bgcolor='blue'>$i</td>";
	}
	else
	{
		echo "<td bgcolor='green'>$i</td>";
	}
	echo"</tr>";

}
echo"</table>";
?>
