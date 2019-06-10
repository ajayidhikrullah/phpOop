<?php
include 'send.inc.php';
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
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Dhikr Solutions</a>
			</div>
		</div>
	</nav>

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

	<script src="script.js"></script>



	
</body>
</html>