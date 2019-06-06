<?php
	
	// echo '<p>Im here</p>';
	
	if (isset($_POST['submit'])) {
		# code...
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		if (!empty($name) || !empty($email) || !empty($message) ) {
			# code...
			echo "<button class='btn btn-danger'>please input in all fields</button>";
			// exit;
		} else{
			Location('Index.php');
		}
		
		"<div class='btn-group'>";
		
		echo "<button class='btn btn-primary'>This is my name $name </button>";
		echo "<button class='btn btn-primary'>This my email $email</button>";
		echo "<button class='btn btn-primary'> This is my message $message </button>";
		"</div>";
	}

?>