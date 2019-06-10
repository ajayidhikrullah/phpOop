<?php
include 'includes/index.inc.php';
// $loginSubmit = $_POST['submit'];
		if (isset($_POST['submit'])) {
			# code...
			$email = $_POST['email'];
			$password = $_POST['password'];
			// var_dump($password);

			///instantiate
			$login = new User();
			//call the class method to login
			echo $login->userLogin($email, $password);
		}
		
		// $send->sendMessage();

?>