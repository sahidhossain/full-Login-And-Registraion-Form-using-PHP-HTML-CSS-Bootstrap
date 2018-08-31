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

				<form action="includes/usersignup.inc.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Sign Up
					</span>

					<div class="wrap-input100 validate-input" >
						<input method ="post" class="input100" type="text" name="firstname" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
					</div>
					
					
										<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="lastname" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</span>
					</div>
					
					
                    					<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>
					
					
										<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-reply-all" aria-hidden="true"></i>
						</span>
					</div>
					
										<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="phone" placeholder="Phone No">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</span>
					</div>
					
					
										<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="birthdate" placeholder="Birth Date YYYY-MM-DD">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-birthday-cake" aria-hidden="true"></i>
						</span>
					</div>
					
					
					
								<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="city" placeholder="City">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-area-chart" aria-hidden="true"></i>
						</span>
					</div>
					
					
					
					
								<div class="wrap-input100 validate-input" >
						<input method ="post"  class="input100" type="text" name="country" placeholder="Country">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
					</div>
					
					



					<div class="wrap-input100 validate-input">
						<input method ="post"  class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
					
					
					<div class="wrap-input100 validate-input">
					<span class="txt1 text-center">Terms and Condition Accepted or not</span> <br>

						<input method ="post"  type="radio" name="terms"
						<?php if (isset($terms) && $terms=="Yes") echo "checked";?>
						value="yes">Yes
						<input type="radio" name="terms"
						<?php if (isset($terms) && $terms=="No") echo "checked";?>
						value="no">No    
					    
					</div>
					
					
					
					<div class="container-login100-form-btn">
						<input method ="post" name="submit" type="submit" class="login100-form-btn">
 
						</input>
					</div>

				


						<div class="text-center p-t-15	">

					<span class="txt1">
							If you Already a memeber?
						</span> <br>
						<a class="txt2" href="userlogin.php">
							Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>



					<div class="text-center p-t-15">
						<span class="txt1">
							Want to go index Page?
						</span> <br>
						<a class="txt2" href="index.php">
							Click Here to Go!!
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