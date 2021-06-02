<?php
$conn=mysqli_connect("localhost","root","","student_table");
$query=mysqli_query($conn,"select * from student_info") or die(mysqli_error($conn));

echo "<table border=1px solid black>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>FIRSTNAME</th>";
echo"<th>LASTNAME</th>";
echo"<th>MIDDLENAME</th>";
echo"<th>BIRTHDATE</th>";
echo"<th>GENDER</th>";
echo"<th>AGE</th>";
echo"<th>MONUMBER</th>";
echo"<th>ADDRESS</th>";
echo"<th>PINCODE</th>";
echo"<th>PASSWORD</th>";
echo"<th>ACTION</th>";
echo"</tr>";
$i=0;
while($row=mysqli_fetch_array($query))
{
	$i++;
	echo"<tr>";
    echo"<td>$i</td>";
    echo"<td>{$row['student_firstname']}</td>";
	echo"<td>{$row['student_lastname']}</td>";
	echo"<td>{$row['student_middlename']}</td>";
	echo"<td>{$row['student_birthdate']}</td>";    
	echo"<td>{$row['student_gender']}</td>";    
    echo"<td>{$row['student_age']}</td>";
	echo"<td>{$row['student_monumber']}</td>";
    echo"<td>{$row['student_address']}</td>";
    echo"<td>{$row['student_pincode']}</td>";
    echo"<td>{$row['student_password']}</td>";
    echo"<td><a href=delete.php?deleteid={$row['student_id']}>delete</a></td>";	   
	echo"</tr>";
}
	

?>
<?php
echo"<a href=database.php>insert record</a>";
?>