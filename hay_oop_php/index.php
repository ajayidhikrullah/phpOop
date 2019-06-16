<?php
include 'includes/dbh.inc.php';
include 'includes/showsign.inc.php';

// include 'includes/usersignup.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Document</title>
</head>
<body>

<?php
// $how = new Showsign();
			// $how->showsignsInp();
?>
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
				<label for="fname">Full-Name:</label>
				<input type="text" id="fname" name="fullName" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="lname">Last Name:</label>
				<input type="text" name="lastName" id="lname" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="password" id="pwd" class="form-control" value="">
			</div>

			<div class="form-group">
				<label for="re_pwd">Re-Enter password:</label>
				<input type="password" name="re_password" id="re_pwd" class="form-control" value="">
			</div>

			

			<!-- <div class="form-group">
				<label for="message">Your Message:</label>
				<textarea name="message" id="message" class="form-control"></textarea>	
			</div>
			 -->
			<!-- <input type="submit" name="submit" value="submit"> -->

		<button type="submit" onclick="myFunc()" name="submit" class="btn btn-primary">
			Send Message
		</button>

		</form>
		
	</div>















</body>
</html>