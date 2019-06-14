<?php
include 'includes/index.inc.php';
// $loginSubmit = $_POST['submit'];
		if (isset($_POST['submit'])) {
			# code...
			$email = $_POST['email'];
			$password = $_POST['password'];
			// var_dump($password);

		///INSTANTIATE
			// $login = new User(null, $email, null, $password);
		//CALL THE CLASS METHOD TO LOGIN
			// echo $login->userLogin();
			
			
			//ACCESSING THE PROPERTIES FROM THE MAIN CLASS
				// $login->password;



			//accessing the private properties from the magic method
				// $login->password = $password;
			//INHERITANCE CALLS
			$login = new Login($email, $password);
			echo $login->getPassword();






		}
		
		// $send->sendMessage();

?>