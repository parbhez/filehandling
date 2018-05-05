<?php 
	// $filer = fopen('hello.txt', 'r');
	// echo fread($filer, filesize('hello.txt'));


	// $filew = fopen('hello2.txt', 'w');
	// fwrite($filew, 'dhaka2 bangladesh');

	// $filea = fopen('parbhez.txt', 'a');
	// fwrite($filea, "goodbye \n");

if (isset($_POST['name']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

// //$string = "$name and $email \n";
	// $string = "name : $name and email : $email \n";
	// $date = date('d-m-y');
	// $file = fopen("{$date}.txt", 'a');
	// fwrite($file, $string);
	// fclose($file);

	
	$string = "name : $name and email : $email \n";
	$today = date("y-m-d");
	$file = fopen("{$today}.txt", 'a');
	fwrite($file, $string);
	fclose($file);


}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Filehandling</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2>All Person</h2>
			</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" />
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-outline-info">Add Person</button>
					</div>

				</form>		
			</div>
		</div>
	</div>
</body>
</html>