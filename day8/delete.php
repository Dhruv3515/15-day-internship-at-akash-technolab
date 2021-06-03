<?php
$conn=mysqli_connect("localhost","root","","student_table");
$id=$_GET['deleteid'];
$query=mysqli_query($conn,"DELETE FROM `student_info` WHERE student_id='$id'")or die(mysqli_error($conn));
if($query)
{
	echo"<script>alert('record deleted');window.location='display.php'</script>";
}
?>