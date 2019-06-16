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
			return $result;
		}
	}
}
?>