<h2>Leave a Comment</h2>
<form method="POST" action="comment_box.php">

    
     <label for="id">Id:</label><br>
    <input type="number" id="id" name="id"><br>
    
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="comment">Comment:</label><br>
    <textarea id="comment" name="comment"></textarea><br>

    <input type="submit" value="Submit">
</form>

<?php
// Connect to the MySQL database
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tracking_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn= new mysqli('localhost','root','','tracking_db')or die("Could not connect to mysql".mysqli_error($con));
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $id = intval($_POST['id']);
    echo "$id";
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    // $created_at = htmlspecialchars($_POST['created_at']);
   
    $sql = "INSERT INTO comments(id,name, comment)
    VALUES ($id, $name, $comment)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Validate the data
    if (empty($name) || empty($comment)) {
        echo '<p style="color: red;">Please enter a name and comment.</p>';
    } else {
        // Save the comment
        // You can store the comments in a database or a file, or send them via email, etc.
        echo '<p style="color: green;">Thanks for your comment!</p>';
    }
}
?>

