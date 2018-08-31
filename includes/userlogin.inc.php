<?php

session_start();
if(isset($_POST['submit']))
{

	include_once('db.inc.php');
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);	

    // echo $email."</br>";
    // echo $password;
    // exit();

$sql="Select * from information where username='$email' or email='$email'";
$result=mysqli_query($con,$sql);
$resultchekc=mysqli_num_rows($result);
if($resultchekc<1)
{
	header("Location:../userlogin.php?Username_or_Email_is_not_registered");
	exit();
}
else
{
	$row=mysqli_fetch_assoc($result);
	$p=$row['password'];

	$hased=password_verify($password,$p);

	if($hased==True)
	{

            $_SESSION['uid']=$row['id'];
			header("Location:../home.php?Succeded_login");
			exit();
			
	}
	else
	{
			header("Location:../userlogin.php?Password_is_Wrong");
	        exit();
	}
}

}
// 	$username=mysqli_real_escape_string($con,$_POST['username']);
// 	$email=mysqli_real_escape_string($con,$_POST['email']);
// 	$phoneno=mysqli_real_escape_string($con,$_POST['phone']);
// 	$birthdate=mysqli_real_escape_string($con,$_POST['birthdate']);
// 	$city=mysqli_real_escape_string($con,$_POST['city']);
// 	$country=mysqli_real_escape_string($con,$_POST['country']);
// 	$password=mysqli_real_escape_string($con,$_POST['password']);
// 	$terms=mysqli_real_escape_string($con,$_POST['terms']);


// 	// echo $firstname."</br>";
// 	// echo $lastname."</br>";
// 	// echo $username."</br>";
// 	// echo $email."</br>";
// 	// echo $phoneno."</br>";
// 	// echo $birthdate."</br>";
// 	// echo $city."</br>";
// 	// echo $country."</br>";
// 	// echo $password."</br>";
// 	// echo $terms."</br>";
// 	// exit();



