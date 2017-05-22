<!DOCTYPE html>
<!-- Document was created by Nick on October 17, 2016-->
<html>
<head>
	<title>Variables and Scope</title>
</head>
<body>
<?php
/* Creating (Declaring) PHP Variables */

	/*In PHP, a variable starts with the $ sign, followed by the name of the variable */
	$txt = "Hello world!";
	$x = 5;
	$y = 10.5;

	echo $txt;
	echo "<br>";
	echo $x;
	echo "<br>";
	echo $y;

	echo "<br><br>";
	/* output the sum of two variables */ 
	$x = 5;
	$y = 4;
	echo $x + $y;

	/* In the examples above, notice that we did not have to tell PHP which data type 
		the variable is. 

	PHP automatically converts the variable to the correct data type, depending on its value
	*/

/* Global and Local Scope */
	$x = 5; // global scope
 
	function myTest() {
		// using x inside this function will generate an error
		echo "<p>Variable x inside function is: $x</p>";
	} 
	myTest();

	echo "<p>Variable x outside function is: $x</p>";
	
	
	//NOTE: functions can not have the same name otherwise program will crash
	function myTest2() {
		$n = 10; // local scope
		echo "<p>Variable n inside function is: $n</p>";
	} 
	
	myTest2();

	// using x outside the function will generate an error
	echo "<p>Variable n outside function is: $n</p>";
	
	
	
	/* The global keyword is used to access a global variable from within a function. */
	$x = 5;
	$y = 10;

	function myTest3() {
   		global $x, $y;
    	$y = $x + $y;
	}

	myTest3();
	echo $y; // outputs 15
?>
</body>
</html>