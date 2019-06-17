<?php
include 'usersignup.inc.php';
class LogUser extends UserSignup{
	private $pwd;

	public function __construct($email, $pwd){
		$this->email = $email;
		$this->pwd = $pwd;
	}

	public function loguser(){
		$sql = "SELECT * FROM signups WHERE email = '$this->email' && password = '$this->pwd'";
		$result = $this->dbconnect()->query($sql);
		$resultCheck = mysqli_num_rows($result);
		//get users password
		$row = mysqli_fetch_assoc($result);
		// check if d value is lessdan 1
		if($resultCheck < 1){
			echo 'failed';
		} else{
			echo 'submitted successsfully!';
		}
	}

}
?>