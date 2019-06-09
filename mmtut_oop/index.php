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
		
		<form class="form-group" action="calc.php" method="POST">
		<div class="form-control">
			<label for="num1">Number1</label>
			<input type="text" name="num1">
		</div>
		<button class="btn btn-primary" type="submit">Calculate</button>		

		
		<div class="form-control">
			<label for="num2">Number2</label>
			<input type="text" name="num2">
		</div>
			<select name="cal" id="">
				<option value="add">Add</option>
				<option value="sub">Subtract</option>
				<option value="mul">Multiply</option>
			</select>
		</form>
	</div>

</body>
</html>