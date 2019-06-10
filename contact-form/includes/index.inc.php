<?php
//create ur class first
class User{
	//set the properties to b public for outside usage
	public $fullName;
	public $email;
	public $message;
	public $password = 'ajayi';

public function __construct($fullName = null, $email = null, $message = null, $password = null){
	$this->fullName = $fullName;
	$this->email = $email;
	$this->message = $message;
	$this->password = $password;
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
	
			return "<button class='btn btn-success'>Welcome, this is your message: $msg</button>";
	// header('Location: index.php');
	
		}
	}

	//login method
public function userLogin($email, $password){
	var_dump($email, $password);
	echo $this->password . '<br>';
	echo $password . '<br>';
	echo $email . '<br><br><br>';

	if ($password != $this->password) {
		# code...
		return "wrong email and password $password ";
	} else{
		return 'confirmentooooooooooo ';
	}




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