<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form action="registration.php" method="POST">

		<?php include('errors.php') ?>
		<div>
			<label for="id">Id</label>
			<input type="text" name="id" required>
		</div>

		<div>
			<label for="name">Name</label>
			<input type="text" name="name" required>
		</div>

		<div>
			<label for="department">Department</label>
			<input type="text" name="department" required>
		</div>

		<div>
			<label for="batch">Batch</label>
			<input type="text" name="batch" required>
		</div>

		<div>
			<label for="email">Email</label>
			<input type="email" name="email" required>
		</div>

		<div>
			<label for="password">Password</label>
			<input type="password" name="password" required>
		</div>
		
		<button type="submit" name="reg_user"> Submit </button>
           
         <p> Already a user?<a href="login.php"><b>Log in</b></a></p>
		







	</form>

</body>
</html>