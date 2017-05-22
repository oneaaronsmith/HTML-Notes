<!DOCTYPE html>
<html>
	<head>
		<title>PHP Arrays</title>
	</head>
	<body>
        <?php
            /*
                References:
                    http://php.net/manual/en/function.array.php
                    http://php.net/manual/en/language.types.array.php
            */
            
            // Create an array
            $zoo = array("Monkey", "Tiger", "Crocs", "Penguins");

            // Add to the zoo array at the 4th index
            $zoo[4] = "Giraffe";
            // Add to the end of the zoo array
            $zoo[] = "Lion";

            // Print the contents of the zoo array in a human readable format
            // http://php.net/manual/en/function.print-r.php
            print_r($zoo);

            // Remove an item from the zoo array
            // http://php.net/manual/en/function.unset.php
            unset($zoo[0]);

            // Reindex the array
            // http://php.net/manual/en/function.array-values.php
            $zoo = array_values($zoo);

            // Print the array again to check that "Monkey" was removed
            print_r($zoo);


            // Print an unordered list
            print "<ul>\n";

            // Loop through the zoo animals and print list items
            for ($i = 0; $i < count($zoo); $i++) {
                print "<li>{$zoo[$i]}</li>\n";
            }

            // Close the unordered list
            print "</ul>\n";
        ?>
	</body>
</html>
