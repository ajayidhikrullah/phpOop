<?php
include 'includes/index.inc.php';
// include 'login.php';
	function sendTry(){
	// var_dump($message);
	//try{
		if (isset($_POST['submit'])) {
			$fullName = $_POST['fullName'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			if (empty($fullName) || empty($email) || empty($message)) {
				# code...
				throw new Exception('Input Message field SIR!');
			} else{
				return true;
			// echo "<b>$message</b>";
			}
		//instantiate the class
		//then send it out to users what is inside this function
		

	} $send = new User($fullName, $email, $message);
	echo $send->sendMessage();
	sendTry();
		
	}


	try{
		echo 'we';

	}

	catch(Exception $e){
		echo $e->getMessage();
	}

?>