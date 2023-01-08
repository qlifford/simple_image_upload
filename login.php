<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animate Login/Signup</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <div class="form">
		<form action="functions.php" method="post">
           <h2>Login Here</h2> 
		   <div class="inputBox">
			<input type="text" name="username" required = "required">
			<span>Username</span>
			<i></i>
		   </div> 

		   <div class="inputBox">
			<input type="password" name="pass" required = "required">
			<span>Password</span>
			<i></i>
		   </div> 
		   
		   <div class="links">
				<a href="">Forgot Password?</a>
				<a href="register.php">Register</a>
			</div>
			<input type="submit" name="login_btn" value="Login">

			
        </div>
		</form>
    </div>
	
</body>
</html>