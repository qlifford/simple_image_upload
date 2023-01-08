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
			<form method="post" action="functions.php">
           <h2>Login Here</h2> 
		   <div class="inputBox">
			<input type="text" name="username" required>
			<span>Username</span>
			<i></i>
		   </div> 
		   <div class="inputBox">
			<input type="email" name="email" required>
			<span>Email</span>
			<i></i>
		   </div> 

		   <div class="inputBox">
			<input type="phoneNumber" name="phone" required>
			<span>Phone</span>
			<i></i>
		   </div> 
		   <div class="inputBox">
			<input type="password" name="pass" required>
			<span>Password</span>
			<i></i>
		   </div> 
		   <div class="inputBox">
			<input type="password" name="cpass" required>
			<span>Confirm Password</span>
			<i></i>
		   </div> 

			<input type="submit" class="btn" name="reg_btn" value="Register">
			
			<div class="links">
				<p href="">Already a member?</p>
				<a href="login.php">Login</a>
			</div>
        </div>
		</form>
    </div>
   
</body>
</html>