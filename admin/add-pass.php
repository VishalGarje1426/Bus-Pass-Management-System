<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


 $fname=$_POST['fullname'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$itype=$_POST['identitytype'];
$icnum=$_POST['icnum'];
$cat=$_POST['category'];
$source=$_POST['source'];
$des=$_POST['destination'];
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$cost=$_POST['cost'];
$passnum=mt_rand(100000000, 999999999);
$propic=$_FILES["propic"]["name"];
$extension = substr($propic,strlen($propic)-4,strlen($propic));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$propic=md5($propic).time().$extension;
 move_uploaded_file($_FILES["propic"]["tmp_name"],"images/".$propic);
$sql="insert into tblpass(PassNumber,FullName,ProfileImage,ContactNumber,Email,IdentityType,IdentityCardno,Category,Source,Destination,FromDate,ToDate,Cost)values(:passnum,:fname,:propic,:cnum,:email,:itype,:icnum,:cat,:source,:des,:fdate,:tdate,:cost)";
$query=$dbh->prepare($sql);
$query->bindParam(':passnum',$passnum,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':cnum',$cnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':itype',$itype,PDO::PARAM_STR);
$query->bindParam(':icnum',$icnum,PDO::PARAM_STR);
$query->bindParam(':cat',$cat,PDO::PARAM_STR);
$query->bindParam(':source',$source,PDO::PARAM_STR);
$query->bindParam(':des',$des,PDO::PARAM_STR);
$query->bindParam(':fdate',$fdate,PDO::PARAM_STR);
$query->bindParam(':tdate',$tdate,PDO::PARAM_STR);
$query->bindParam(':cost',$cost,PDO::PARAM_STR);
$query->bindParam(':propic',$propic,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Pass detail has been added.")</script>';
echo "<script>window.location.href ='add-pass.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  

}
}
?>
<?php
$to      = 'vishalgarje16@gmail.com';
$subject = 'You Have Successfully appied for pass.';
$message = 'Thanks for Booking pass on our portal.';
$headers = 'From: vishalgarje17@gmail.com' . "\r\n" .
    'Reply-To: vishalgarje16@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Bus Pass Management System | Add Pass</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php include_once('includes/header.php');?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include_once('includes/sidebar.php');?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Pass</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" enctype="multipart/form-data"> 
                                    
    <div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Profile Image</label> <input type="file" name="propic" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Department</label><select type="text" name="identitytype" value="" class="form-control" required='true'>
<option value="">Departmet</option>
<option>B. Tech. Man made Textile Technology </option>
                                                                            <option value="5">B. Tech. Textile Plant Engineering</option>
                                                                            <option value="6">B. Tech. Textile Chemistry.</option>
                                                                            <option value="7">B. Tech. Fashion Technology</option>
                                                                            <option value="8">B. Tech. Mechanical Engineering</option>
                                                                            <option value="9">B. Tech. Electronics Engineering</option>
                                                                            <option value="10">B. Tech. Electronics & Tele-Communication Engineering</option>
                                                                            <option >B. Tech. Computer Science & Engineering</option>
                                                                            <option value="12">B. Tech. Civil Engineering</option>
                                                                            <option value="13">B. Tech. Electrical Engineering</option>
                                                                            <option value="14">B. Tech. Computer Science & Engineering (Artificial Intelligence)</option>
                                                                            <option value="15">B. Tech. Artificial Intelligence (AI) and Data Science.</option>
                                                                            <option value="16">M. Tech. Textile Engineering </option>
                                                                            <option value="17">M. Tech. Electronics & Tele-Communication Engineering.</option>
                                                                            <option value="18">M. Tech. Mechanical Engineering.</option>
                                                                            <option value="19">M. Tech. Computer Science & Engineering.</option>
                                                                            <option value="20">M. Tech. Defence Technology.</option>
                                                                            <option value="21">Master of Business Administration. (MBA).</option>
                                                                            <option value="22">B. Voc. Web Design And Mobile Application Development</option>
                                                                            <option value="23">B. Voc. Solar PV Panel Installation And Maintenance</option>
                                                                            <option value="24">B. Voc. Fashion Technology & Apparel Designing</option>
                                                                            <option value="25">B. Voc. Mobile And Telephone Mechanic</option>
                                                                            <option value="26">Diploma In Textile Manufactures (DTM)</option>
                                                                            <option value="27">Diploma In Textile Technology. (DTT).</option>
                                                                            <option value="28">Diploma in Fashion & Clothing Technology (DFCT)</option>
     </select></div>
    <div class="form-group"> <label for="exampleInputEmail1">PRN</label> <input type="text" name="icnum" value="" class="form-control" required='true'> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Source</label> <select type="text" name="source" value="" class="form-control" required='true'> </div>
    <option value="">Choose Source</option>
    <option value="">DKTE,Ichalkaranji</option>
    <option value="">YCP, Ichalkaranji</option>
    </select>
    <div class="form-group"> <label for="exampleInputEmail1">Destination</label><select type="text" name="category" value="" class="form-control" required='true'>
<?php 

$sql2 = "SELECT * from   tblcategory";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->CategoryName);?>"><?php echo htmlentities($row->CategoryName);?></option>
 <?php } ?>
     </select></div>
     
     <!--<div class="form-group"> <label for="exampleInputEmail1">Destination</label> <input type="text" name="destination" value="" class="form-control" required='true'> </div>-->
<div class="form-group"> <label for="exampleInputEmail1">From Date</label> <input type="date" name="fromdate" value="" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">To Date</label> <input type="date" name="todate" value="" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">Cost</label> <input type="text" name="cost" value="" class="form-control" required='true' readonly required> </div>
     <p style="padding-left: 450px"> <a href="../paypal/index.php"></abbr><button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button> </a></p>
                                    <a href="../paypal/index.php"><button type="submit" class="btn btn-danger" >Reset</button></a></p> </form>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <script type="text/javascript">
        let = 

    </script>
</body>

</html>
<?php }  ?>