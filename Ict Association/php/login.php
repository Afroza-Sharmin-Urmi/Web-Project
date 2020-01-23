
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form action="login.php" method="POST">



		<div>
			<label for="email">Email</label>
			<input type="text" name="email" required>
		</div>

		<div>
			<label for="password">Password</label>
			<input type="text" name="password" required>
		</div>
		
		<button type="submit" name="login_user"> Log In </button>
           
         <p> Not a user?<a href="registration.php"><b>Register Here</b></a></p>


	</form>

</body>
</html>