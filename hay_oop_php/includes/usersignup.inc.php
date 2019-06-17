<?php
// include 'showsign.inc.php';
class UserSignup extends Dbh{
	private $fullName;
	private $lastName;
	private $email;
	private $password;

	public function __construct($fullName, $lastName, $email, $password){
		$this->fullName = $fullName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->password = $password;
	}
	
	public function signUp(){
		$sql = "INSERT INTO signups(f_name, l_name, email, password) VALUES('$this->fullName', '$this->lastName', '$this->email', '$this->password')";
		$result = $this->dbconnect()->query($sql);
		if ($result == false){
			echo 'No connection';
		} else{
			return ;
		}
	}
}

///LOGIN
// class LogUser extends UserSignup{
// 	private $pwd;

// 	public function __construct($email, $pwd){
// 		$this->email = $email;
// 		$this->pwd = $pwd;
// 	}

// 	public function loguser(){
// 		$sql = "SELECT * FROM signups WHERE email = '$this->email' && password = '$this->pwd'";
// 		//lets the query d sql sttement above
// 		$result = $this->dbconnect()->query($sql);
// 		//this fetches the total rows
// 		$resultCheck = mysqli_num_rows($result);
// 		//get users password
// 		$row = mysqli_fetch_assoc($result);
// 		// check if d value is lessdan 1
// 		if($resultCheck < 1){
// 			echo 'failed';
// 		} else{
// 			echo 'submitted successsfully!';
// 		}
		
// 	}

// }



?>