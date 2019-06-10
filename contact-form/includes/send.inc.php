<?php
include 'includes/index.inc.php';
// include 'login.php';
		
		// var_dump($message);
		if (isset($_POST['submit'])) {
			$fullName = $_POST['fullName'];
			$email = $_POST['email'];
			$message = $_POST['message'];
		//instantiate the class
			$send = new User($fullName, $email, $message);


			# code...
			//then send it out to users what is inside this function
			echo $send->sendMessage();

		}
?>