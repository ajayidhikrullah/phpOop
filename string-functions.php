<?php
// substring - this returns part of a string
$output = substr(123456, 2);
// echo $output; //this prints 3456
$output2 = substr('frip', -2, 1);
// echo $output2; this print i

//strpos
$output3 = strpos('Ajayi', 'j');
// echo $output3; //prints 2

//trim
$text = 'helo world guys                              ';
// var_dump($text);
$trimmed = trim($text);
// echo $trimmed;
// var_dump($trimmed);

//strtoupper-changes to Uppercase
$output4 = 'i am always SMALL letter';
// echo strtoupper($output4).'<br>';
// echo strtolower($output4);
// echo ucwords($output4);

// str_replace,emt (search for, replace with, what we are searching )
$rep = 'Ajayi Sikiru';
$output5 = str_replace(1 , 'Hayjay', $rep);
// echo $output5;

//is_string
$val = 'Dhikrullaj';
$output6 = is_string($val);
// echo $output6;

//loop through to s=check for string
/*
$numbers = [true, false, null, 'abc', 'dhikrullah', 33, 44, 55, 1, '  ', 0, '0'];
foreach ($numbers as $value => $key) {
	# code...
	if (is_string($key)) {
		# code...
		echo "{$key} is a string <br>";
	}
};
*/

// gzcompress- compresses a string
$str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, accusantium eius nostrum quasi facilis non explicabo libero in beatae id ipsam aperiam tempora eveniet, itaque quia nobis ducimus tempore reiciendis!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex illum perferendis tenetur voluptas amet cupiditate necessitatibus voluptates possimus atque itaque dolor ipsa beatae, corrupti placeat officia libero cum, nisi dolore.
Lorem";
$comp = gzcompress($str);
echo $comp;
//uncompresses
$original = gzuncompress($comp) .'<br>'; 
echo $original;


?>