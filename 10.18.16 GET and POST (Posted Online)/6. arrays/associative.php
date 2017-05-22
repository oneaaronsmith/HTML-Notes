<!DOCTYPE html>
<html>
	<head>
		<title>PHP Arrays 2</title>
	</head>
	<body>
        <?php
            // 2D zoo array
            $zoo = array(
                "cats" => array("Lion", "Tiger", "Cheetah"),
                "acquarium" => array("Sharks", "Jellyfish", "Stingrays"),
                "reptiles" => array("Alligators", "Snakes", "Lizards")
            );
            
            // We could print out the contents of zoo like this:
            //print_r($zoo);

            // Another way is to use a foreach
            // http://php.net/manual/en/control-structures.foreach.php
            foreach ($zoo as $animalType => $animals) {
                print "$animalType = $animals<br>\n";
                
                foreach ($animals as $animal) {
                    print "- $animal<br>\n";
                }
                
            }

            
        ?>
	</body>
</html>
