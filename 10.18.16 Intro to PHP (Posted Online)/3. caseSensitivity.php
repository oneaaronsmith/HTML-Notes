<!DOCTYPE html>
<!-- Document was created by Nick on October 17, 2016-->
<html>
<head>
	<title>Case Sensitivity</title>
</head>
<body>

	<?php

		/* All keywords (e.g. if, else, while, echo, etc.), classes, functions, 
			and user-defined functions are NOT case-sensitive */
		ECHO "Hello World!<br>";
		echo "Hello World!<br>";
		EcHo "Hello World!<br>";



		/* However, all variable names ARE case-sensitive */
		$color = "red";
		echo "My car is " . $color . "<br>";
		echo "My house is " . $COLOR . "<br>";
		echo "My boat is " . $coLOR . "<br>";
	?>

</body>
</html>
