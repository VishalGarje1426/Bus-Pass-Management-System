<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from student_register where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            echo "<script> window.location.assign('Student/student.html '); </script>";     
        }  
        else{  
            //echo "<h1> Login failed. Invalid username or password.</h1>";
            echo '<script>alert("Invalid username or password.")</script>';
             echo "<script> window.location.assign('Student_Login.php'); </script>";   
        }     
?>  