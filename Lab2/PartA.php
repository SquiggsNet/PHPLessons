<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lab 2 - Part A</title>
</head>
<body>
    <?php
        function headingSizes($message, $size)
        {
            if ($size > 0 && $size < 7)
            {
                echo "<h$size>$message</h$size>";
            }else{
                echo"<p>Sorry, the currently selected heading size is not an option.</p>";
            }//end if/else statement
        }//end headingSize function

        for($counter=1;$counter<8;$counter++)
        {
            headingSizes("This currrent heading size is: $counter", $counter);
        }
    ?>
</body>
</html>