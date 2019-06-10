<?php
include 'includes/send.inc.php';
	// if (filter_has_var(INPUT_POST, 'submit')) {
	// 	echo "<div class='alert-success'>Submitted</div>";
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
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
		<li class='next'><a href="http://localhost:8000/contact-form/login.php"><span class='fa fa-arrow-right fa-1x'></span>Login</a></li>
	</div>
	<!-- <span class='glyphicon glyphicon-chevron-left'></span> -->

	<div class="container">
		<form method="POST" action="">
			<div class="form-group">
				<label for="name">Full-Name:</label>
				<input type="text" id="name" name="fullName" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="message">Your Message:</label>
				<textarea name="message" id="message" class="form-control"></textarea>	
			</div>
			
			<!-- <input type="submit" name="submit" value="submit"> -->

		<button type="submit" onclick="myFunc()" name="submit" class="btn btn-primary">
			Send Message
		</button>

		</form>
		
	</div>



	
	<!-- <div class="container">
    <ul class="pager"> -->
    <!-- <li><a href="http://localhost:8000/contact-form/index.php">Previous</a></li> -->
    <!-- <li class='next'><a href="http://localhost:8000/contact-form/login.php">Login</a></li> -->
  <!-- </ul> -->
	<!-- </div> -->


	<script src="script.js"></script>



	
</body>
</html>