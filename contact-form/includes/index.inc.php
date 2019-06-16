<?php
//create ur class first
class User{
	//set the properties to b public for outside usage
	private $fullName;
	private $email;
	private $message;
	// private $password;

public function __construct($fullName, $email, $message){
	$this->fullName = $fullName;
	$this->email = $email;
	$this->message= $message;
	// $this->password = $password;
	}

public function sendMessage(){
		$msg = $this->message;
		if(empty($this->fullName) || empty($this->email) || empty($this->message)){
			// "<div class='danger-alert'>
			// 	<span class='closebtn' onclick='"this.parentElement.style.display=none"';'>&times;</span>
			// 		<b>Please, Input something</b>
			// </div>";
			
			return "<button onclick='myFunc()' id='shw' class='btn btn-danger'>Welcome, Please input something!!!</button>";
		} else{
			// return '<div class="alert alet-success"> thanksssssss </div>';
			echo $this->email;
	
			return "<button class='btn btn-success'>Welcome, this is your message: $msg</button>";
	// header('Location: index.php');
		}
	}

	//login method
public function userLogin(){
	// var_dump($email, $password);
	// echo $this->password . '<br>';
	// echo $password . '<br>';
	// echo $email . '<br><br><br>';

	// if ($password != $this->password) {
	// 	# code...
	// 	return "wrong email and password $password ";
	// } else{
	// 	return 'confirmentooooooooooo ';
	// }

}

// //using magic methods to get a private properties
// public function __isset($password){
// 	return $this->password;

// }

}
//INHERITANCE
class Login extends User{
	//set the new variable to private
	private $password;
	//create a constructor to access the upper ones
	public function __construct($email, $password){
		// parent::__construct($fullName, $email, $message, $password);
		// echo 'this is a new ' .__CLASS__.' initiated <br>';
		$this->email = $email;
		$this->password = $password;

	}

	public function setPassword($password){ 
		$this->email = $email;
		$this->password = $password;
	}

	public function getPassword(){
		$result = "<button class='btn btn-success'>The Email You just entered is = $this->email <br> and your password is = $this->password<br><button>";
		return $result;
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