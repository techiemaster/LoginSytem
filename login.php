<?php include 'server.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Design Davao Logs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="login">

<div class="wrapper">
	<h2 class="center wdd">Web Dev | Login</h2>
	<div id="login">
		<form action="login.php" method="POST">

			<?php include 'errors.php';?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
			<p class="right">Not yet a member? <a href="register.php">Signup</a></p>
		</form>
	</div>
</div>


</body>
</html>