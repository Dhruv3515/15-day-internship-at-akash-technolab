<?php
$editid=$_GET['editid'];
$conn=mysqli_connect("localhost","root","","student_table");
$query=mysqli_query($conn,"select  * from student_info where student_id='$editid'") or die(mysqli_error($conn));
$editdata=mysqli_fetch_array($query);


?>
<html>
<body>
<html>
<body>
<table>
<form method="post">
<br>
Firstname:-<input type="text" name="txt1" value="<?php echo $editdata['student_firstname']?>"required><br>
Lasttname:-<input type="text" name="txt2"  value="<?php echo $editdata['student_lastname']?>"required><br>
Middletname:-<input type="text" name="txt3"value="<?php echo $editdata['student_middlename']?>"required><br>
Birthdate:-<input type="date" name="txt4" value="<?php echo $editdata['student_birthdate']?>"required><br>
Gender:-<br>
<input type="radio" name="txt5" value="male"<?php if($editdata['student_gender']=="male"){echo "checked";}?> required>male<br>
<input type="radio" name="txt5" value="female"<?php if($editdata['student_gender']=="female"){echo "checked";}?> required>female<br>
<input type="radio" name="txt5" value="others"<?php if($editdata['student_gender']=="others"){echo "checked";}?> required>others<br>

Age:-<input type="number" name="txt6" value="<?php echo $editdata['student_age']?>" required><br>
Mo-number:-<input type="number" name="txt7" value="<?php echo $editdata['student_monumber']?>"required><br>
address:-<input type="text" name="txt8" value="<?php echo $editdata['student_address']?>"required><br>
pincode:-<input type="number" name="txt9" value="<?php echo $editdata['student_pincode']?>"required><br>
password:-<input type="password" name="txt10" value="<?php echo $editdata['student_password']?>"required><br>
<input type="submit" >
</form>
</table>
</body>
</html>
</body>
</html>
<?php
if($_POST)
{
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
	$update=mysqli_query($conn,"update student_info set student_firstname='{$firstname}',student_lastname='{$lastname}',
	student_middlename='{$middlename}',student_birthdate='{$birthdate}',student_gender='{$gender}',
	student_age='{$age}',student_monumber='{$monumber}',student_address='{$address}',student_pincode='{$pincode}',
	student_password='{$password}' where student_id='{$editid}'") or die(mysqli_error($conn));
	
	if($update)
	{
		header("location:display.php");	
	}
}

?>