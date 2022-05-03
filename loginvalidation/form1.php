<?php
$a = $_POST['fullName'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buspassdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_register VALUES ('$a', '$b', '$c','$d')";
 

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo "<script> window.location.assign('Student_Login.php'); </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>