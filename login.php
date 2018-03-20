<?php include 'header.php';?>

<div class="wrapper">
	<h2 class="center wdd">Web Dev | Login</h2>
	<div id="login">
		<form action="login.php" method="POST">

			<?php include 'errors.php';?>

			<div class="input-group">
				 
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="input-group">
				 
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
			<p class="right">Not yet a member? <a href="register.php">Signup</a></p>
		</form>
	</div>
</div>

<?php include 'footer.php';?>