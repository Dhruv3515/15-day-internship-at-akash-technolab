<?php
$conn=mysqli_connect("localhost","root","","student_table");
if($_POST)
{
	echo "<h3>day 6 intern at akash technolab</h3>";
	$firstname=$_POST['txt1'];
    $lastname=$_POST['txt2'];
	$middlename=$_POST['txt3'];
	$birthdate=$_POST['txt4'];
	$gender=$_POST['txt5'];
	$age=$_POST['txt6'];
	$monumber=$_POST['txt7'];
	$address=$_POST['txt8'];
	$pincode=$_POST['txt9'];
	$password=$_POST['txt10'];
	
	$query=mysqli_query($conn,"insert into student_info(student_firstname,student_lastname,student_middlename,
	student_birthdate,student_gender,student_age,student_monumber,student_address,student_pincode,
	student_password)values('$firstname','$lastname','$middlename','$birthdate','$gender',
	'$age','$monumber','$address','$pincode','$password')") or die(mysqli_error($conn));
if($query)
{
    echo "data added";
}
else
{
	echo"enter data";
}
}

echo"<a href=display.php>display data</a>"

?>
<html>
<body>
<table>
<form method="post">
<br>
Firstname:-<input type="text" name="txt1" required><br>
Lasttname:-<input type="text" name="txt2" required><br>
Middletname:-<input type="text" name="txt3"required><br>
Birthdate:-<input type="date" name="txt4" required><br>
Gender:-<br>male<input type="radio" value="male" name="txt5" >
<br>female<input type="radio" value="female" name="txt5" >
<br>others<input type="radio" value="others" name="txt5" >
Age:-<input type="number" name="txt6" required><br>
Mo-number:-<input type="number" name="txt7" required><br>
address:-<input type="text" name="txt8" required><br>
pincode:-<input type="number" name="txt9" required><br>
password:-<input type="password" name="txt10" required><br>
<input type="submit" >
</form>
</table>
</body>
</html>
