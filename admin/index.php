<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM tbladmin WHERE UserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['bpmsaid']=$result->ID;
}

  if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["user_login"])) {
setcookie ("user_login","");
if(isset($_COOKIE["userpassword"])) {
setcookie ("userpassword","");
        }
      }
}
$_SESSION['login']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html>

<head>
 
    <title> DKTE Bus Pass Management System | Login Page</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>STUDENT || LOG IN</title>
    <style>
        body{
            background-color: darkgoldenrod;
            background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)), url("images/dkte.jpg")no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

 <body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <h3 style="color: white;"> DKTE Bus Pass Management System</h3>
              <h4 style="color:white;">DEPARTMENT LOGIN</h4>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" name="login">
                            <fieldset>
                                <div class="form-group">
                                    <label for="login-username">Username</label>
                                     <input type="text" class="form-control"  required="true" name="username" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
                                                
                                </div>
                                <div class="form-group">
                                    <label for="login-password">Password</label>
                                    <input type="password" class="form-control" name="password" required="true" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
                                                
                                </div>
                                <div class="checkbox">
                                  
                                                 <!--      <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
 <label for="keep_me_logged_in">Keep me signed in</label>-->
                                   

<label style="padding-left: 40px; color:black; font-family: sans-serif;">
    <a href="forgot-password.php">Lost Password?</a></label>
                                </div>

                                
                               
                                <input type="submit" value="Login" class="btn btn-lg btn-warning btn-block" name="login" >
                            </fieldset>
                        </form>
                        <div>
                    <i class="fa fa-home" style="font-size: 30px" aria-hidden="true"></i>
                    <p><a href="../index.php"> Back Home </a></p>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- form --
    <section>
  <form action="student.html" onsubmit="return validate()>
    
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem; background: rgb(131,58,180);
              background: linear-gradient(18deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase"> Student Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
      
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="typeEmailX" class="form-control form-control-lg" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>"/>
                      <label class="form-label" for="typeEmailX">PRN</label>
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" />
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
      

      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                    <input type="submit" value="Login" class="btn btn-lg btn-success btn-block" name="login" >
                    <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
                <label for="keep_me_logged_in">Keep me signed in</label>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </section>-->

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <?php include_once('includes/footer.php');?> 
</body>

</html>
