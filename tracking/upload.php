<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
		.header {
  color: #007fff; /* Replace with the color code of your choice */
}
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
    <!-- <h2 class='header'><center>Upload Your Purchased Bill</h2></center> -->
    <form action="download.php" method="post" enctype= "multipart/form-data">

        <input type="file" name="myfile"><br><br>
        <input type="submit" name="upload" value="upload file">
    </form>
</body>
</html>