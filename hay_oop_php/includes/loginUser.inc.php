<?php
include 'logging.inc.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	// instantiate
	$logIN = new LogUser($email, $password);
	$logIN->loguser();
	


}

?>