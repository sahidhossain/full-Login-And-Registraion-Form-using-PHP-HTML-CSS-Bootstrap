<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/sahid.png" alt="IMG">
				</div>

				<form method="post"action="includes/userlogin.inc.php" class="login100-form validate-form">
					<span class="login100-form-title">
					                  <?php 
                  include_once('includes/db.inc.php');
                  if(isset($_SESSION['uid']))
                  {
                  	$id=$_SESSION['uid'];
                  	$sql="Select * from information where id='$id'";
                  	$result=mysqli_query($con,$sql);
                  	$row=mysqli_fetch_assoc($result);
                  	echo "<h1>".$row['firstname']." ".$row['lastname']."</h1>". " is Logged in";

                  }
                  else
                  	echo "not set session"; ?>
					</span>

				  
				 

					<div class="text-center p-t-12">
						<span class="txt1">
							Want to go Index Page?
						</span> <br>
						<a class="txt2" href="index.php">
							Click Here to GO
						</a>
					</div>

					<div class="text-center p-t-136">
						<span class="txt1">
							If you want to go Out?
						</span> <br>
						<a class="txt2" href="userlogout.php">
							 Log Out!!!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	







<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>