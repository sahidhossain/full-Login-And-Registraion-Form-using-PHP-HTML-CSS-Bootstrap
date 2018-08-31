<?php
if(isset($_POST['submit']))
{

	include_once('db.inc.php');
	$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phoneno=mysqli_real_escape_string($con,$_POST['phone']);
	$birthdate=mysqli_real_escape_string($con,$_POST['birthdate']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	$country=mysqli_real_escape_string($con,$_POST['country']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$terms=mysqli_real_escape_string($con,$_POST['terms']);


	// echo $firstname."</br>";
	// echo $lastname."</br>";
	// echo $username."</br>";
	// echo $email."</br>";
	// echo $phoneno."</br>";
	// echo $birthdate."</br>";
	// echo $city."</br>";
	// echo $country."</br>";
	// echo $password."</br>";
	// echo $terms."</br>";
	// exit();


if(!preg_match("/^[a-zA-Z]*$/",$firstname)||!preg_match("/^[a-zA-Z]*$/",$lastname))
    	{
    		     		header('Location:../usersignup.php?Name_got_Some_Bad_Character');
	                    exit();
    	}
    	else
    	{
    		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    		{
    		     		header('Location:../usersignup.php?Proper_Email_is_not_given');
	                    exit();
    		}
    		else
    		{
    			$sql="select * from information where username='$username'";
    			$result=mysqli_query($con,$sql);
    			$resultcheck=mysqli_num_rows($result);

    			if($resultcheck>0)
    			{
    		     		header('Location:../usersignup.php?Username_is_Already_Taken');
	                    exit();
    			}
    			else
    			{
    				if($terms=="no")
    				{
    					header('Location:../usersignup.php?You_Dib_Not_Accept_The_Terms_And_Condition');
	                    exit();
    				}


    				else
    				{
    					    				$pass=password_hash($password,PASSWORD_DEFAULT);
    					    				$date=date("Y-m-d",strtotime($birthdate));
												$today = date("Y-m-d");
												$diff = date_diff(date_create($date), date_create($today));
												// echo 'Age is '.$diff->format('%y-%m-%d');
												// exit();

												if($diff->format('%y')<18)
												{
  						header('Location:../usersignup.php?Age_is_less_then_18');
	                    exit();

												}

												else
												{
$insert="insert into information(firstname,lastname,username,email,phoneno,birthdate,city,country,password,terms) values('$firstname','$lastname','$username','$email','$phoneno','$date','$city','$country','$pass','$terms')";
    					$lastvar=mysqli_query($con,$insert);
    					if($lastvar==True)
    					{
    						    		header('Location:../userlogin.php?Successfully_Registration_Completed');
    						    		exit();
    					}
    					else
    					{
    						    		header('Location:../signup.php?You_r_not_success');
    						    		exit();
    					}
												}

    				}

    				// move_uploaded_file($tmp,"../images/$image");

    			}
    		}   
    	}

}

?>