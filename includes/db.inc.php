<?php

$localhost="localhost";
$user="root";
$database="final_login_form";
$password="";

$con=mysqli_connect($localhost,$user,$password,$database);

if($con==True)
{
 
}
else
{
	echo "Connection Problem";
	exit();
}
?>