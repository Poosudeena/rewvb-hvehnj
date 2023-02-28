<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $target_dir = "apex/"; // specify the directory where you want to save the file
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // get the name of the uploaded file

  // check if the file already exists in the directory
  if (file_exists($target_file)) {
    echo "Sorry, the file already exists.";
    exit();
  }

  // check the size of the file
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, the file is too large.";
    exit();
  }

  // allow only certain file types to be uploaded
  $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
  $file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if (!in_array($file_type, $allowed_types)) {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    exit();
  }

  // if all checks pass, attempt to upload the file
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

<!-- HTML form to allow users to select a file to upload -->

















<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        input[type=file] {
            display: block;
            margin: 0 auto;
            font-size: 16px;
            padding: 10px;
        }

        input[type=submit] {
            display: block;
            margin: 20px auto 0;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <form action="downloads.php" method="post" enctype= "multipart/form-data">
        <input type="file" name="myfile"><br><br>
        <input type="submit" name="upload" value="upload file">
    </form>
</body>
</html> -->