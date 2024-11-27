<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>log in-David and Sons</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<div class="header">
		<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="cars/davylogo.jpg" width="200px">

		</div>
		<nav>
			<ul>
				<li><a href="project.html"><b>Home</b></a></li>
				<li><a href="products.html"><b>Products</b></a></li>
				<li><a href="aboutus.html"><b>About Us</b></a></li>
				<li><a href="contact.html"><b>Contact</b></a></li>
			</ul>
		</nav>
		<img src="cars/carts.png" width="30px" height="30px">
	</div>
	</div>
	</div>
	</div>
	<div class="container">
		<div class="header">
			
		</div>
		<form action="login.php" method="post">
			<?php include('errors.php')?>
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="pass_1" required>
			</div>
			<button type="submit" name="login">Log in</button>
			<p>Does not have an account yet<a href="registration.php"> <b>Register</b></a></p>

		</form>


	</div>

</body>
</html>