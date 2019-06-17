<?php
include 'usersignup.inc.php';
// class Showsign extends UserSignup {
	// public function showsignsInp(){
		// public $firstName;
		if (isset($_POST['submit'])) {
			$fname = $_POST['fullName'];
			$lname = $_POST['lastName'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			# code...
			// var_dump($fname, $lname);
			
			$use = new UserSignup($fname, $lname, $email, $password);
			$use->signUp();
			echo "<div class='btn btn-success'>User successfully registered</div>";
			// return $phpSuccessMsg;
		} else{
			return false;
		}
	// }
// }



?>