<?php
include 'index.inc.php';
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		var_dump($message);
		$send = new Send($fullName, $email, $message);
echo $send->sendMessage();

?>