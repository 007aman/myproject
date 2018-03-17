<?php
$con=mysqli_connect("localhost","root","","webpage");
if(isset($_POST['subs']))
{
	$email=$_POST['email'];
	$query="INSERT INTO subscribe(email)VALUES('$email')";
    mysqli_query($con,$query);
}
?>
