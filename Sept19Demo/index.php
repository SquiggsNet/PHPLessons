<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>New PHP Page</title>
    </head>
    <body>
        <?php
            $first_name = "Scott";
            $last_name = "Rafael";

            //echo "<h1>Hello from" . $first_name . "" . $last_name . "!</h1>";

            $message = "<h1>Hello from ";
            $message .= $first_name;
            $message .= " ";
            $message .= $last_name;
            $message .= " Cookie: ";
            $message .= $_COOKIE["XDEBUG_SESSION"];
            $message .= "!</h1>";

            echo $message;
        ?>
    </body>
</html>