<?php

session_start();

if (isset($_SESSION['name'])) {
	$_SESSION['msg']="You must log in first to view this page";
	header("location:login.php");
}

if (isset($_GET['LOGOUT'])) {
	session_destroy();
	unset($_SESSION['name']);
	header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
</head>
<body>

	<?php
       if (isset($_SESSION['success'])):
	?>
<div>
	<h3>
		<?php 
		echo $_SESSION['success'];
		unset($_SESSION['success']);

		?>
	</h3>
</div>
<?php endif ?>


<?php if (isset($_SESSION['name'])):?> 
   	
   	<h3><strong></strong>> <?php echo $_SESSION['name'];?></h3>strong></h3>
   	
   	<button><a href=" Member.php?logout='1"></a></button>
   <
   ?php endif ?>


</body>
</html>
