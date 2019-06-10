<?php
include 'index.inc.php';
		
		// var_dump($message);
		if (isset($_POST['submit'])) {
			$fullName = $_POST['fullName'];
			$email = $_POST['email'];
			$message = $_POST['message'];
		//instantiate
			$send = new Send($fullName, $email, $message);


			# code...
			echo $send->sendMessage();

		}
		
		// $send->sendMessage();
?>