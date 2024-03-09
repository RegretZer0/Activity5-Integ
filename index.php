<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Try</title>
</head>
<body>

	<main>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
			<label for="Firstname">First Name: </label>
			<input type="text" name="firstname"><br>
			<label for="Lastname">Last Name: </label>
			<input type="text" name="lastname"><br>
			<br>
			<button>Submit</button>
		</form>
	</main>

	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "GET"){
		$firstname = htmlspecialchars($_GET["firstname"]);
		$lastname = htmlspecialchars($_GET["lastname"]);

		echo "<br>";
		echo $firstname, " ", $lastname;
	}
	?>
</body>
</html>