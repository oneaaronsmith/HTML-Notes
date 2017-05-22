<?php
    /*
        References:
            http://www.w3schools.com/tags/ref_httpmethods.asp
            http://php.net/manual/en/reserved.variables.php
        
        GET is used for...
            Requesting something
            Navigation
        
        POST is used for...
            Submitting data
            Actions
            Login
            File Upload
    */
    
    
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
    	print "\nThe server request method is POST!\n\n<br><br>"; 
    }
    
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
    	print "\nThe server request method is GET!\n\n<br><br>"; 
    }

    // Print GET data
    foreach ($_GET as $key => $value) {
        print "$key = $value<br>\n";
    }

    // Print POST data
    foreach ($_POST as $key => $value) {
        print "$key = $value<br>\n";
    }

?>