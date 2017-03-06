<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        CSC 2410 Web Programming
        Chapter 5 Lab
        Part 1 - Bowler Registration

        Author: Brandon Young
        Date: 03/05/2017

        Filename: RegisterBowlerYoung.php
        Supporting Files: BowlerRegistrationYoung.html, bowlers.txt
    -->
    <meta charset="UTF-8">
    <title>Bowler Registration</title>
</head>
<body>

<p>
    <?php
        /**
         *
         * Author: Brandon Young
         */

        // Check if the user entered anything
        if( isset($_POST['name'], $_POST['age'], $_POST['average']) ) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $average = $_POST['average'];

            $newBowler = "$name, $age, $average\n";

            $bowlersFile = fopen("bowlers.txt", "ab");

            // Write Bowler info to file and check if it was successful
            if(fwrite($bowlersFile, $newBowler) > 0) {
                echo "Thank you for registering!";
            } else {
                echo "Registration Error!";
            } // end if else
            // close the bowlers file
            fclose($bowlersFile);
        } else {

        }
    ?>
</p>


</body>
</html>