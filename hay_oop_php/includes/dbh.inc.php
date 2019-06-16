<?php
class Dbh{
	//properties of d database should b set private
	private $servername;
	private $username;
	private $password;
	private$dbname;

		//it is protected bcx we wont b using it very much, and if we willl useit, it will be ussed through EXTENDED
	//this iss just used to be connecting to database
	protected function dbconnect(){

		$this->servername = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->dbname = 'hayjay';

		$conn = new mysqli(
			$this->servername,
			$this->username,
			$this->password,
			$this->dbname			
		);
		return $conn;	
	}





}





?>