<?php 
session_start();
 include('connect.php'); 
if (isset($_POST['reg_btn'])) {

	$username   = mysqli_real_escape_string($con, $_POST['username']);
	$email	    = mysqli_real_escape_string($con, $_POST['email']);
	$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

	// checking filled
	if (empty($username)) { 
		echo "Username is required";
	}

	if (empty($email)) {
		echo "Email is required";
	}

	if ($password_1 != $password_2) {
		echo "-Password you typed doesn't match";
	} 

	if (empty($password_1)) {
		echo "-Password is required";
	}

	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($con, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// Checking user in database
	if ($user) {
		if ($user['username'] === $username) {
			echo "Username already exists";
		}

		if ($user['email'] === $email) {
			echo "Email already exists";
		}
	}


	// Insert New Data
	if ($password = md5($password_1)) 
	{
		$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($con, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success']  = "You're now logged in";
		header('location: index.php');
	}

}

// Click Login
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	if (empty($username)) {
		echo "Username is required";
	}

	if (empty($password)) {
		echo "Password is required";
	}

	if ($password = md5($password)) 
	{
		;

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($con, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');
		} else {
			echo "Wrong username/password combination";
		}
	}
}

?>