<?php 
session_start();
 include('connect.php'); 
if (isset($_POST['reg_btn'])) {

	$username   = mysqli_real_escape_string($con, $_POST['username']);
	$email	    = mysqli_real_escape_string($con, $_POST['email']);
	$phone	    = mysqli_real_escape_string($con, $_POST['phone']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);
	$cpass = mysqli_real_escape_string($con, $_POST['cpass']);

	// checking filled
	if (empty($username)) { 
		echo "Username required";
	}

	if (empty($email)) {
		echo "Email required";
	}
	if (empty($phone)) {
		echo "phone number required";
	}

	if ($pass != $cpass) {
		echo "Password you typed doesn't match";
	} 

	if (empty($pass)) {
		echo "Password required";
	}

	$user_check_query = "SELECT * FROM users WHERE name='$username' OR email='$email' LIMIT 1";
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
	if ($pass = md5($pass)) 
	{
		$query = "INSERT INTO users (name, email, phone, pass) VALUES ('$username', '$email', '$phone', '$pass')";
		mysqli_query($con, $query);
		$_SESSION['username'] = $username;
		header('location: index.php');
	}

}

// Click Login
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);

	if (empty($username)) {
		echo "Username is required";
	}

	if (empty($pass)) {
		echo "Password is required";
	}

	if ($pass = md5($pass)) 
	{
		;

		$query = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
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