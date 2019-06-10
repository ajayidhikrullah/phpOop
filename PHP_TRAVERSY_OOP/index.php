<?php

if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	
	class User{
		/////properties
		public $id;
		private $first_name;
		///yo STRINGMETHOD
		public $age = "I am just a YEAR Older in this ".__CLASS__."";

		//USING STATIC TO ACCESS PROPETIES
		public static $staticProperties = 'tHIS is static properties called' . '<br>';
		public static $staticMethod = 'This is astatc method or function called';

		//constructor
		public function __construct(){
			// echo 'Construct';
			// $this->id = $id;
			// $this->first_name = $first_name;
		}

		///this is a method
			public function register($student){
				$this->auth_user($student);
			}
		
			public function auth_user($student){
				echo $student . 'is authenticated successfully';
			}
		//the method above stopes here
		
			//PROPERTIES AND METHODS
			public function user_properties(){
				// $this->id = $id;
				// $this->first_name = $first_name;
				// $this->auth_properties();
			}

			public function auth_properties(){
				// echo $id . ' is called from properties with method or user_prop functions' . $this->first_name;
			}
		///properties stops here///

			///another method
			public function login($uname){
				if (empty($uname)) {
					# code...
					echo "<button class='btn btn-danger'>please type in something</button>";
				} else{
					echo "<button class='btn btn-success'>$uname is now logged in</button>";
				}
			}
			public function __destruct(){
				// echo 'deconstuct';
			}

			public function logout($first_name){
				echo $first_name . ', You have been logged out';
			}
				// TO STRING METHOD
			public function __toString(){
				echo "toString method: ";
				return $this->age;

			}

			//STATIC PROPERTIES AND METHODS
			public static function staticPropeties() {
				return self::$staticMethod;

			}
	}

	///instantiation
$user = new User();
// echo $user;  //this wilL print== [toString method: I am just a YEAR Older in this User]

// unset($user);
// $user->register('Ade'); //this print User Registered
// $user->login($uname);
// $user->user_properties();
///
// $user->logout('ajayi'); //ajayi , You have been logged out

//STATIC properties OUTPUT
// echo User::$staticProperties; //this print 100

//STATIC METHODS OR FUNCTIONS PROPERTIES
// echo User::staticPropeties(); //also print 100

}

////////////INITIALISE OBJECT PROPERTIES IN OBJECT ORIENTED
class Students{
	// properties and methods of the student
	public $first;
	public $last;
	public $basic;
	public $session;
	public $position;


	public function __construct(/*$first, $last, $basic, $session, $position*/){
		// $this->first = $first;
		// $this->last = $last;
		// $this->basic = $basic;
		// $this->session = $session;
		// $this->position = $position;
	}

	public function studentsPosition($position){
		$this->position = $position;
		// $this->first = $first;
		echo "the ".__CLASS__." position inn class is $this->position and ";
		echo $this->fullName('Ade', 'Kunle');
	}

	//get names
	public function fullName($first, $last){
		$this->first = $first;
		$this->last = $last;
		return "The ".__CLASS__." fullname is $this->first $this->last";
	}

}

$student = new Students(/*'Ajayi', 'dhikr', 5, '2nd', '1st'*/);

$student->studentsPosition('4th');


















?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<form class="form-horizontal" role="form" action="" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="uname">First Name:</label>
			<input type="text" name="uname" id="uname" class="form-control">
		</div>

		<div class="form-group">
			<label for="email" class="control-label col-sm-2">Email</label>
			<input type="text" name="email" class="form-control" id="email">
		</div>

		<div class="from-group">
			<label for="password" class="control-label col-sm-2">Password:</label>
			<input type="password" class="form-control" id="password" name="password">	
		</div>
		<br>

				<button class="btn btn-primary" type="submit" name="submit">Submit</button>

	</form>
<div>

</body>
</html>

