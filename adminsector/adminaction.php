<?php
session_start();
if(isset($_POST['submit']))
{
$adminname=$_POST['name'];
$adminpassword=$_POST['password'];

if(($adminname=="admin")&&($adminpassword=="admin"))
{

	$_SESSION['admin']=1;
	header("Location:showinformations.php");
	exit();
}
else
{
		header("Location:adminlogin.php?Username_Password_is_NOT_right");
	exit();
}

}
?>