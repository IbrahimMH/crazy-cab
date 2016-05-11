<?php
session_start();
$name=$_POST['name'];
$mob=$_POST['mob'];
$city=$_POST['city'];
if($name!='' && $mob!='')
{
	$connect = mysqli_connect("localhost","root","","crazycabs");
	mysqli_query($connect,"INSERT INTO booking VALUES ('".$name."','".$mob."','".$city."');");
	if(mysqli_affected_rows($connect) > 0)
	{
		echo 'Success signup';
		header('Location: http://localhost/pratho1/logi.html');
	}
	else
	{
		echo 'login error';

	}

}
else
{
	header('Location: http://localhost/pratho1/regis.html');
	echo 'Password Error. Please enter password correctly';
}
