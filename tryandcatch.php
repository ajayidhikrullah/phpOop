<?php
// echo 'fff';
function checkNum($num){
	if($num>1){
		throw new Exception('Value must be 1');
	} else{
	return 'hyy';
	}
}

//now lets make an exception
//this shows if u pass the condition
try {
	checkNum(1);
	echo 'heeeyyy thats right';
}
//catch exception
catch(Exception $r){
	echo 'Message: ' .$r->getMessage();
}
// echo 'hey';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php
// echo 'fffff';
?>
</body>
</html>
