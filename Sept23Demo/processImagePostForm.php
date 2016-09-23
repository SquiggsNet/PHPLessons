<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New PHP Page</title>
</head>
<body>
    <?php
        echo "Hello, " . $_POST['fName'] . " " . $_POST['lName'] . "!";

        $fileTmpName = $_FILES['userImage']['tmp_name'];
        $fileOrigName = $_FILES['userImage']['name'];
        $fileSize = $_FILES['userImage']['size'];
        $fileUploadError = $_FILES['userImage']['error']; // 0 means success
        $result = move_uploaded_file($fileTmpName,"uploads/".$fileOrigName);

        if($fileUploadError == 0){
            echo"<p>File uploaded</p>";
        }
    ?>
    <br />
    <a href="imageUploadForm.html">Go Back</a>
</body>
</html>