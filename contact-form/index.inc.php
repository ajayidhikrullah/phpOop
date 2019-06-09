<?php

// $fullName = $_POST['fullName'];
// $email = $_POST['email'];
// $msg = $_POST['message'];


class Send{
	public $fullName;
	public $email;
	public $message;

public function __construct($fullName, $email, $message){
	$this->fullName = $fullName;
	$this->email = $email;
	$this->message = $message;
	}

public function sendMessage(){
	$msg = $this->message;
	return "<button class='btn btn-success'>Welcome, this is your message: $msg</button>";
	}
}

?>




























<!-- 
// echo '<p>Im here</p>';
	
	/*
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
*/ -->