<?php
session_start();
$username=$_POST['usernamesignup'];
$email=$_POST['emailsignup'];
$password=$_POST['passwordsignup'];
$cpass=$_POST['passwordsignup_confirm'];
if($cpass==$password)
{
	$connect = mysqli_connect("localhost","root","","crazycabs");
	mysqli_query($connect,"INSERT INTO register VALUES ('".$username."','".email."','".$password."','".$cpass."');");
	if(mysqli_affected_rows($connect) > 0)
	{
		echo 'Success signup';
		header('Location: http://localhost/pratho1/logi.html');
	}
	else
	{
		echo 'login error';
			header('Location: http://localhost/pratho1/regis.html');
	}

}
else
{
	header('Location: http://localhost/pratho1/regis.html');
	echo 'Password Error. Please enter password correctly';
}
