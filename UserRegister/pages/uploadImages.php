<?php
    session_start();
    echo session_id() . "<br>";
    echo exec('whoami') . "<br>";
    echo sys_get_temp_dir() . "<br>";
    $fileTmpPath = $_FILES['upload-image']['tmp_name'];
    $fileName = $_FILES['upload-image']['name'];
    $fileSize = $_FILES['upload-image']['size'];
    $fileType = $_FILES['upload-image']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    echo $fileTmpPath . "<br>";
    echo $fileName . "<br>";
    echo $fileSize . "<br>";
    echo $fileType . "<br>";
    echo get_current_user() . "<br>";
    echo $_FILES["upload-image"]["error"] . "<br>";
 
    // sanitize file-name
    $newFileName = session_id() . '.' . $fileExtension;

    echo $newFileName . "<br>";
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
        // directory in which the uploaded file will be moved
        $uploadFileDir = __DIR__ . "/../public";
        $dest_path = $uploadFileDir . "/" . $newFileName;
        echo $dest_path. "<br>";
        if (is_dir($uploadFileDir) && is_writable($uploadFileDir)) {
            echo "El válido" . "<br>";
        } else {
            echo "No es válido" . "<br>";
        }

        if(move_uploaded_file($fileTmpPath, $dest_path)) 
        {
            echo 'File is successfully uploaded.';
            $auxFile = "../public/" . $newFileName;
            $_SESSION["image"] = $auxFile;
            header("Location: ./dashboard.php");
        }
        else
        {
            echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
    }
?>