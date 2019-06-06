<?php
	/*
	//check fr posted data
	if (filter_has_var(INPUT_POST, 'data')) {
		# code... 
		echo 'data found';
	} else{
		echo 'No data';
	};
*/



//CHECK IF EMAIL IS VALID
/*	
if (filter_has_var(INPUT_POST, 'data')) {
		# code...
		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
			echo 'Email is Valid';
		} else {
			echo 'eMAIL IS not valid';
		}
	}
*/

//SANITIZE out the wrong characters iin email field
/*
if (filter_has_var(INPUT_POST, 'data')) {
	# code...
	$email = $_POST['data']; //get d value and save
	//remove d back characters
	//this strips out wronc characters in d email
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	echo $email.'<br>';
	//check if email is now vlid too
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		# code...
		echo 'Email is Valid';
	} else{
		echo 'email AIN\'T valid';
	}
}
*/

//DIFFERENT VILADTIONS
// FILTER_VALIDATE_BOOLEAN
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_REGEXP
// FILTER_VALIDATE_URL

//SANITIZE
// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_ENCODED
// FILTER_SANITIZE_NUMBER_FLOAT
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_NUMBER_INT


//INTEGER VALIDATION
/*
if (isset($_POST['data'])) {
	# code...
	$inp = $_POST['data'];
	if (filter_var($inp, FILTER_SANITIZE_NUMBER_INT)) {
		# code...
		echo $inp. 'is a num';
	} else {
		# code...
		echo $inp. 'is not  num';
	};
}

// ====> FILTER_INPUT_ARRAY
$filters = array(
	
	"email" => FILTER_VALIDATE_EMAIL, //thischecks for mail field validation
	"phoneNum" => [ //phonenumber only to b numbers
		'filter' => FILTER_VALIDATE_INT,
		"opt" => [//numbers should start from minimum of 1 and max of 11;
			'min_range' => 1,
			'max_range' => 10-20
		] 
	],
);

print_r(filter_input_array(INPUT_POST, $filters));
// echo (filter_input_array($filters);
*/

//FILTER VAR ARRAY
$arr = [
	"name" => 'Ajayi Dhikrullah',
	'age'
]













?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<label for="email">Email</label>
	<input type="text" name="email">
	<hr>
	<label for="phone">Phone Number</label>	
	<input type="text" name="phoneNum">

	<button type="submit">Submit</button>
</form>