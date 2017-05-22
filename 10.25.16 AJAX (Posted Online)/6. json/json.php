<?php
    
    // Let's say we have some variables on the server that we want to package for the client
    $me = array("name" => "Mr. Wergeles", "pet" => "Tiger", "nick" => "yes nick");
    
    /* The client is anticipating JSON.
    
    Reference: http://www.w3schools.com/js/js_json_intro.asp
    	
     We want to output something like this:*/
	// {"name": "Justin", "pet": "frog"}
    
    // We could accomplish that by hand like this:
	//print '{"name": "' . $me['name'] . '", "pet": "' . $me['pet'] . '"}';
    
    // Or we could use json_encode
    
    // json_encode can create a JSON representation of the value you pass it
    // http://php.net/manual/en/function.json-encode.php
    print json_encode($me);

?>