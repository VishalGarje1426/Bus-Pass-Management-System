<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html>

<head>
   
    <title>PASS HISTORY | DKTE BUS</title>
    <!-- Core CSS - Include with every page -->
    <link href="../../admin/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../admin/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="../../admin/assets/css/style.css" rel="stylesheet" />
      <link href="../../admin/assets/css/main-style.css" rel="stylesheet" />
<link rel="icon" type="image/x-icon" href="https://bus.dkte.tech/assets/images/favicon.ico">
    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        body{
             
            background: linear-gradient(246deg, rgba(23,141,184,1) 0%, rgba(88,105,158,1) 100%);a
        }
        th{
            align-content: center;
            margin: 25px;
            padding: 15px;
            text-align: center;
        }
        thead{
            align-content: center;
            margin: 25px;
            padding: 15px;
            border-collapse: collapse;
        }
        .homebutton{
            margin-left: 700px;
            color: darkred;
            background-color: darkgoldenrod;
            border: 2px solid black;
            border-radius: 15px;
            text-decoration-color: rebeccapurple;
        }
        .homebutton:hover{
            background-color: lightpink;
            transform: none;
        }
    </style>

</head>

<body>
    <!--  wrapper 



         navbar top 
       <?php include_once('includes/header.php');?>
      
        <?php include_once('includes/sidebar.php');?>
      
        <div id="page-wrapper">

            
            <div class="row">
                  page header 
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Pass</h1>
                </div>
                end  page header -->
            </div>
            <div>
                <center>
                    <h4 style="font-family: sans-serif; color: whitesmoke;">Student Pass History Since january 2021  <a href="student.html">  <button class="homebutton"> GOTO TO HOMEPAGE </button></a></h4>
                  
                </center>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                      
                        <div class="panel-body" style="align-content:center;">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead style="align-content: center;">
                                        <tr style="background: radial-gradient(circle, rgba(210,154,0,1) 53%, rgba(228,95,95,1) 100%);">
                                            <th>Pass Number</th>
                                           <th>Student Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email ID</th>
                                            <th>Bus Route</th>
                                            <th>BUS Fee per month</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sql="SELECT * from student_pass where name='Pavan Dandale'";
/*$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);*/

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

                                       <tr>
                  <td><?php  echo htmlentities($row->passnum);?></td>
                  <td><?php  echo htmlentities($row->sname);?></td>
                  <td><?php  echo htmlentities($row->smob);?></td>
                  <td><?php  echo htmlentities($row->semail);?></td>
                  <td><?php  echo htmlentities($row->broute);?></td>
                  <td><?php  echo htmlentities($row->bfee);?></td>
                  <td><a href="view-pass-detail.php?viewid=<?php echo htmlentities ($row->ID);?>">View</a>  ||  <a href="edit-pass-detail.php?editid=<?php echo htmlentities ($row->ID);?>">Edit</a></td>
                </tr>
               <?php $cnt=$cnt+1;}} ?>  
                                       
                                        


                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../../admin/assets../../admin/assetsassets/plugins/jquery-1.10.2.js"></script>
    <script src="../../admin/assetsassets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../../admin/assetsassets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../admin/assetsassets/plugins/pace/pace.js"></script>
    <script src="../../admin/assetsassets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../../admin/assetsassets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../admin/assetsassets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
<?php }  ?>