<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buspassdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(!empty($_POST['save'])){
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $query="select * from student_register where user='$name' and pass='prn'";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    echo "Log in success";

  }
  else{
    echo "Log in Not Successful";
  }
}
$conn->close();
?>
<form method="POST">
  <label>Username</label>
  <input type="text" name="user">
  <label>Pass</label>
  <input type="pass" name="pass">
  <input type="submit" name="save" value="Login">
  
</form>