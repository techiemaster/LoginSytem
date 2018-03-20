<?php include 'server.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Design Davao Logs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="login">

<div class="wrapper">
	<h2 class="center wdd">Web Dev | Homepage</h2>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
		<?php endif ?>	

		<?php if (isset($_SESSION['username'])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
		<?php endif ?>		
	</div>
</div>


</body>
</html>