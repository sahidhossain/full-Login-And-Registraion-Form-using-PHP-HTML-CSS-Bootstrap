<?php

if(isset($_POST['submit']))
{
	include_once("../includes/db.inc.php");
	
	$delete=mysqli_real_escape_string($con,$_POST['delete']);

$sql="Select * from information where username='$delete'";
$result=mysqli_query($con,$sql);
$resultchekc=mysqli_num_rows($result);
if($resultchekc<1)
{
	header("Location:showinformations.php?Username_is_Not_in_the_LIST");
	exit();
}
else
{
	$sql2="DELETE FROM `information` WHERE username='$delete'";
	$exe=mysqli_query($con,$sql2);

	if($exe==True)
	{
	header("Location:showinformations.php?Successfully_deleted");
	exit();
	}
	else
	{
			header("Location:showinformations.php?Something_Has_problem");
	exit();
	}
}
}
?>