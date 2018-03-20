<?php
session_start();

$username = "";
$email = "";
$errors = array();

$conn = mysqli_connect('localhost','root', '', 'db_logsystem');

if (isset($_POST['register'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password1 = mysql_real_escape_string($_POST['password1']);
	$password2 = mysql_real_escape_string($_POST['password2']);

	if (empty($username)){
		array_push($errors, "Username is required");
	}
	if (empty($email)){
		array_push($errors, "Email is required");
	}
	if (empty($password1)){
		array_push($errors, "Password is required");
	}
	if ($password1 != $password2){
		array_push($errors, "Password do not match");
	}


	//if good to go
	if (count($errors) == 0) {
		$password = md5($password1);
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($conn, $sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}
}



if (isset($_POST['login'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	if (empty($username)){
		array_push($errors, "Username is required");
	}
	
	if (empty($password)){
		array_push($errors, "Password is required");
	}


	//if good to go
	if (count($errors) == 0) {
		$password = md5($password);
		$sql2 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}else{
			array_push($errors, "Wrong password or username");
		}
	}
}


if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}


?>