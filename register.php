<?php include 'server.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Design Davao Logs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="login">

<div class="wrapper">
	<h2 class="center wdd">Web Dev | Register</h2>

	<div id="login">
		<form action="register.php" method="POST">

			<?php include 'errors.php';?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username?>">
			</div>
			<div class="input-group">
				<label>Email Address</label>
				<input type="text" name="email" value="<?php echo $email?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password1">
			</div>
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="password" name="password2">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>
			<p class="right">Already a member? <a href="login.php">Login</a></p>
		</form>
	</div>
</div>


</body>
</html>