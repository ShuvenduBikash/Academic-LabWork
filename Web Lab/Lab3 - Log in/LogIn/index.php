<!DOCTYPE html>
<html>
<head>
	<title>Log in Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<?php


	    if(isset($_POST['Username']) && isset($_POST['Password'])){
			$username = $_POST['Username'];
			$password= $_POST['Password'];

	    	if($username=="bikash" && $password=="pass"){
		        echo "Welcome";
		        header('Location: welcome.php');
		    } else {
		    	echo "Username or password is incorrect";
		    }
	    } else {
		    	?>
		    		<div class = "container">
				<div class="wrapper">
					<form action="index.php" method="post" name="Login_Form" class="form-signin">
					    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
						  <hr class="colorgraph"><br>
						  
						  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
						  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		  
						 
						  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
					</form>			
				</div>
			</div>

		    	<?php
		    	
		    }
	?>
		
</body>
</html>
