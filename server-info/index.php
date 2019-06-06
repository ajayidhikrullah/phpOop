<?php
include 'server-info.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SERVER Info</title>
	<link rel="stylesheet" href="css/css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron">
		<h1>Server & File Info</h1>
		<?php
			if($server): ?>
				<ul class="list-group">
					<?php foreach ($server as $key => $value): ?>
						<li class="list-group-item">
							<b><i> <?php echo $key; ?> </i></b>
							<?php echo $value; ?>			
						</li>
					<?php endforeach; ?>			
				
				</ul>
			<?php endif; ?>
	
		<h1>SERVER INFO/CLIENT SIDE</h1>
		<?php
			if($client): ?>
				<ul class="list-group">
					<?php foreach ($client as $key => $value): ?>
						<li class="list-group-item">
							<b><i> <?php echo $key; ?> </i></b>
							<?php echo $value; ?>			
						</li>
					<?php endforeach; ?>			
				
				</ul>
			<?php endif; ?>


	</div>
	
</body>
</html>