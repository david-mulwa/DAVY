<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Account-David and Sons</title>
	<link rel="stylesheet" type="text/css" href="acc.css">
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
				<li><a href="account.php"><b>Account</b></a></li>
			</ul>
		</nav>
	</div>
	</div>
	</div>

	<div class="full-page">
		<div class="navbar">
			<nav>
			</nav>
		</div>

		<div Id="login-form" class="login-page">
			<div class="form-box">
				<div class="button-box">
					<div Id="btn"></div>
					<button type="button" onclick="login()" class="toggle-btn">Log In</button>
					<button type="button" onclick="register()" class="toggle-btn">Register</button>
				</div>
				<form Id="login" class="input-group-login" action="account.php" method="Post">
					<input type="text" class="input-field" placeholder="Email Id" name="email" required>
					<input type="password" class="input-field" placeholder="Enter Password" name="password" required>
					<input type="checkbox" class="check-box"><span>Remember Password</span>
					<a href="logbook.html"><button type="submit" class="submit-btn">Log in</button></a>
				</form>
				<form Id="register" class="input-group-register">
					<input type="text" class="input-field" placeholder="First Name" required>
					<input type="text" class="input-field" placeholder="Last Name" required>
					<input type="email" class="input-field" placeholder="Email Id" required>
					<input type="password" class="input-field" placeholder="Password" required>
					<input type="password" class="input-field" placeholder="Confirm Password" required>
					<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
					<button type="submit" class="submit-btn">Register</button>

				</form>
			</div>
		</div>
	</div>
    <script type="text/javascript">

        var x=document.getElementById('login');
	    var y=document.getElementById('register');
	    var z=document.getElementById('btn');
	    function register()
	    {

		    x.style.left="-400px";
		    y.style.left="50px";
		    z.style.left="110px";
	    }
	    function login()
	    {
	    	x.style.left="50px";
	    	y.style.left="450px";
	    	z.style.left="0px"

	    }
    </script>
    <script type="text/javascript">


        var modal =document.getElementById('login-form');
	    window.onclick = function(event)
	    {

	 	    if(event.target == modal)
		    {
			    modal.style.display="none";
		    }
	    }

    </script>

    <div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<img src="cars/davylogo.jpg">
					<p>our purpose is to ensure our people can afford quality cars at minimal prices and taxs charge in the import of the vehicles. And also to supply first hand cars </p>
				</div>
				<div class="footer-col-2">
					<h3>Useful Links</h3>
					<ul>
						<li>coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>

				</div>
						<div class="footer-col-3">
					<h3>Follow Us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
					</ul>

				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2020 - David and Sons</p>
		</div>
	</div>
</div>
</body>
</html>