<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New PHP Page</title>
</head>
<body>
    <?php
        echo "<h1>Greetings from Lab1.</h1>";
    ?>

    <p>Here is a section of text added for the purposes of Step 1.5 to display output html text.</p>

    <?php
        echo "<h3>Inserted another tag! Step 2 to follow:</h3>";
    ?>

    <?php
        $name = "Scott Rafael";           //step 2
        echo "My name is $name";

        $greeting = "Welcome";
        $labInfo =  "Lab 1B";

        $message = "<h5>"."$greeting $name, to the $labInfo working document"."</h5>";      //step 3
        echo $message;

        $numA1 = 32;            // Step 4
        $numA2 = 14;
        $numA3 = 83;
        $numAResult = ($numA1 * $numA2) + $numA3;
        $numB1 = 1024;
        $numB2 = 128;
        $numB3 = 7;
        $numBResult = ($numB1 / $numB2) - $numB3;
        $numC1 = 769;
        $numC2 = 6;
        $numCResult = $numC1 % $numC2;

        echo "<h3>Step 4</h3>";
        echo "<p>a. ($numA1 * $numA2) + $numA3 = $numAResult</p>";
        echo "<p>b. ($numB1 / $numB2) - $numB3 = $numBResult</p>";
        echo "<p>c. The remainder of $numC1 devided by $numC2 is: $numCResult</p>";

        echo "<h3>Step 5</h3>";   //step 5
        $count = 10;
        echo "<p>";
        while($count > 0) {
          echo "$count...";
          $count--;
        }
        echo"Blast Off</p>";

        echo "<h3>Step 6</h3>";   //step 6

        $colours = array("Blue", "Purple", "Green", "Yellow", "Orange", "Red", "Teal");

        echo "<h5>a</h5>";

        for($colourCounter=0; $colourCounter < count($colours);$colourCounter++)
        {
            echo "<p>$colours[$colourCounter].</p>";
        }

        echo "<h5>b</h5>";

        foreach ($colours as $colour)
        {
            echo "<p>$colour</p>";
        }

        echo "<h5>c</h5>";

        echo "<pre>";
        print_r($colours);
        echo "</pre>";

    ?>



</body>
</html>