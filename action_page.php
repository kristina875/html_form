<?php 
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo "<br></br>";

    $Full_Name = $_POST['name']; 
    $Gender = $_POST['gender'];
    $Country = $_POST['country'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hi_sheenah";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
    $sql = "INSERT INTO student_record (Id, Full_Name, Gender, Country)
    VALUES ('', '$Full_Name', '$Gender', '$Country')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>