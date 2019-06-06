<?php
/*
if (isset($_POST['submit'])) {
	# code...
	$fname = $_POST['fname'];
	echo "<div class='container'>Welcome, Mr. $fname</div>";
	// echo $_POST['password'];
};

$f = $_SERVER['QUERY_STRING'];
echo "<div class='container'>Welcome, Mr. $f</div>";
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./server-info/css/css/bootstrap.min.css">
	<link rel="stylesheet" href="">
	<title>Document</title>
</head>
<body>
<div class="jumbotron">
	<form class="form" action="get_post.php" method="GET">
		<div>
			<label for="name">Name:</label>
			<input type="text" name="fname" id="name">
				
		</div>

		<div>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" required>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required>
		</div>

		<br>
		<input type="submit" name="submit">
		
	</form>
</div>
</body>
</html>