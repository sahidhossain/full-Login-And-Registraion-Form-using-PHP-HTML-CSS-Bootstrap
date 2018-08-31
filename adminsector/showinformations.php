<?php

session_start();

?>

<?php
if(!isset($_SESSION['admin']))
{
		header("Location:adminlogin.php");
	exit();
}
else
{

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 5px;
	}
	th {
		text-align: left;
	}
</style>
<title>Login V1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../css/util.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div style="margin: 15px; 
	padding: 10px; 
	box-sizing: border-box;" class="limiter">
	<span class="login100-form-title">
		Information About Students
	</span>

	<?php
	include_once("../includes/db.inc.php");

	$sql="select * from information ";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	?>
	<table style="border-radius: 25px; font-family: Poppins-Regular;
	font-size: 12px;
	line-height: 1.7;	">
	<tr style="" >
		<th >Firstname</th>
		<th>Lastname</th> 
		<th>Username</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Birth</th>
		<th>City</th>
		<th>Country</th>
		<th>Password</th>
		<th>Terms Accepted</th>
	</tr>

	<?php
	while($row=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $row['firstname'];?></td>
			<td><?php echo $row['lastname'];?></td>
			<td><?php echo $row['username'];?></td>
			<td ><?php echo $row['email'];?></td>
			<td><?php echo $row['phoneno'];?></td>
			<td><?php echo $row['birthdate'];?></td>
			<td><?php echo $row['city'];?></td>
			<td><?php echo $row['country'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['terms'];?></td>
		</tr>

		<?php
	}

	?>
</table>



<span style="margin: 15px; 
padding: 10px; 
box-sizing: border-box;"class="login100-form-title">
<h3>Need to Delete information?</h3>
</span>
<form action="deleteinformation.php"method="post">
	
	<div method="post" class="wrap-input100 validate-input" data-validate = "Enter Username To delete">
	<input class="input100" type="text" name="delete" placeholder="Enter Username To delete">
	<span class="focus-input100"></span>
	<span class="symbol-input100">
		<i class="fa fa-lock" aria-hidden="true"></i>
	</span>
</div>

<div class="container-login100-form-btn">
	<input method ="post" name="submit" type="submit" class="login100-form-btn">

    </input>
</div>
</form>




					<div class="text-center p-t-15	">

						<span class="txt1">
							If you want to go? then
						</span> <br>
						<a class="txt2" href="adminlogout.php">
							LogOut as Admin
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>


					<div class="text-center p-t-15">
						<span class="txt1">
							Want to go index Page?
						</span> <br>
						<a class="txt2" href="../index.php">
							Click Here to Go!!
						</a>
					</div>

</div>





<!--===============================================================================================-->	
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/bootstrap/js/popper.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/tilt/tilt.jquery.min.js"></script>
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>
<!--===============================================================================================-->
<script src="../js/main.js"></script>


</body>
</html>
	<?php
}
?>