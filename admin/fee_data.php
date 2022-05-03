<?php
$a = $_POST['name'];
$b = $_POST['amount'];
      

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

$sql = "INSERT INTO fee VALUES ('$a', '$b')";
      

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Details has been added.")</script>';
    echo "<script>window.location.href ='fee.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>