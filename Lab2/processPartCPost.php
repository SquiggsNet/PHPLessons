<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Part C - POST - PHP</title>
</head>
<body>
    <?php

        function metricConversion($fHeight, $iHeight)
        {
            $imperialHeight = ($fHeight * 12) + $iHeight;
            return $metricHeight = $imperialHeight * 0.0254;
        }
        echo "<p>Your first name is: ".$_POST['fName']."</p>";
        echo "<p>Your last name is: ".$_POST['lName']."</p>";
        $mheight = number_format(metricConversion($_POST['fHeight'], $_POST['iHeight']), 2);
        echo "<p>your height in metres is: $mheight</p>";

        //Step 3
        $fileTmpName = $_FILES['userImage']['tmp_name'];
        $fileOrigName = $_FILES['userImage']['name'];
        $fileSize = $_FILES['userImage']['size'];
        $fileUploadError = $_FILES['userImage']['error'];
        $result = move_uploaded_file($fileTmpName,"uploads/".$fileOrigName);

        echo "<p>Tmp: ".$fileTmpName."</p>";
        echo "<p>Orig: ".$fileOrigName."</p>";
        echo "<p>Size: ".$fileSize."</p>";
        echo "<p>Error: ".$fileUploadError."</p>";
    ?>
</body>
</html>