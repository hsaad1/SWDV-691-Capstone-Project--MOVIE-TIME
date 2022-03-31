<html>
	<head>
	  <title>Login Panel</title>
	  <link rel="stylesheet" type="text/css" href="css/login.css" />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
	  <div id="main">
		<header>
		  <div id="logo">
			<div id="logo_text">
			 <h1><span class="admin">Movie Time</span></h1>
			</div>
		  </div>  
		</header>
		<div style="text-align:center">
			<span class="a">Login</span>
			<form method="post" action="login_database.php">
				<input type="email" name="email"  placeholder="Email" class="in" required><br>
				<input type="password" name="pass"  placeholder="Password" class="in" required><br>
				<button type="submit" name="sub" class="bt">Sign in</button>
				<p><a href="register.php">Not Member?Register</a></p>
			</form>
		</div>
		
	  </div>
	</body>
</html>
