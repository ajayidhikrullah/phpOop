<?php
include 'includes/dbh.inc.php';
include 'includes/loginUser.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- <div class="navbar-header"> -->
				<a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Dhikr Solutions</a>
			<!-- </div> -->
		</div>
	</nav>

	<div class='container'>
		
			<li class='previous'><a href="http://localhost:8000/hay_oop_php/index.php"><span class='fa fa-arrow-left fa-1x'>Contact</a></li>
	</div>

<div class='container'>
	<form class='form-horizontal' role='form' action="" method="POST">
		<div class='form-group'>
			<label class='control-label col-sm-2'  for="email">Email:</label>
			<div class='col-sm-10'>
				<input type="email" name='email' class='form-control' id='email' placeholder='your email'>
			</div>
		</div>

		<div class='form-group'>
			<label for="pwd" class='control-label col-sm-2'>Password:</label>
			<div class='col-sm-10'>
				<input type="password" name='password' id='pwd' class='form-control' placeholder='enter password'>
			</div>
		</div>

		<div class='form-group'>
			<div class='col-sm-offset-2 col-sm-10'>
				<button name='submit' type='submit' class='btn btn-pimary'>Submit</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>