<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
} else{



  ?>
  <!doctype html>
  <html class="no-js" lang="en">

  <head>

    <title>Manage Application Form | Online Birth Certificate System</title>

    <!-- Google Fonts
      ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
      ============================================ -->
      <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
      ============================================ -->
      <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
      ============================================ -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
      ============================================ -->
      <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
      <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
      ============================================ -->
      <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
      ============================================ -->
      <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
      ============================================ -->
      <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
      ============================================ -->
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body class="materialdesign">

    <div class="wrapper-pro">
      <?php include_once('includes/sidebar.php');?>
      <?php include_once('includes/header.php');?>

      <!-- Breadcome start-->
      <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">

                            <div class="col-lg-12">
                                <ul class="breadcome-menu">
                                    <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Application Form</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>View <span class="table-project-n">Detail of</span> Application</h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                               <?php
                               $id=$_GET['viewid'];

                               $sql="SELECT * FROM tbl_application JOIN tbl_user on tbl_application.userid=tbl_user.id WHERE tbl_application.id='$id'";
                               $query=mysqli_query($con,$sql);
                               $num=mysqli_num_rows($query);
                               if ($num>0) {
                                while ($result=mysqli_fetch_array($query)) { ?>


                                    <table border="1" class="table table-bordered">
                                       <tr align="center">
                                        <td colspan="4" style="font-size:20px;color:blue">
                                        User Details</td></tr>
                                        <tr align="center">
                                            <td colspan="4" style="font-size:20px;color:red">
                                               Application Number:   <?php  echo $result['applicationid'];?></td></tr>
                                               <tr>
                                                <th scope>First Name</th>
                                                <td><?php  echo $result['fname'];?></td>
                                                <th scope>Last Name</th>
                                                <td><?php  echo $result['lname'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope>Mobile Number</th>
                                                <td><?php  echo $result['mobile'];?></td>
                                                <th>Address</th>
                                                <td><?php  echo $result['address'];?></td>
                                            </tr>
                                            <tr align="center">
                                                <td colspan="4" style="font-size:20px;color:blue">
                                                Application Details</td></tr>
                                                <tr>
                                                    <th scope>Full Name</th>
                                                    <td><?php  echo $result['fullname'];?></td>
                                                    <th scope>Gender</th>
                                                    <td><?php  echo $result['gender'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope>Date of Birth</th>
                                                    <td><?php  echo $result['birth'];?></td>
                                                    <th scope>Place of Birth</th>
                                                    <td><?php  echo $result['place'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope>Name of Father</th>
                                                    <td><?php  echo $result['fathername'];?></td>
                                                    <th scope>Permanent Address</th>
                                                    <td><?php  echo $result['paddress'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope>Postal Address</th>
                                                    <td><?php  echo $result['postadd'];?></td>
                                                    <th scope>Mobile Number</th>
                                                    <td><?php  echo $result['mobile'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope>Email</th>
                                                    <td><?php  echo $result['email'];?></td>
                                                    <th scope>Date of apply</th>
                                                    <td><?php  echo $result['applydate'];?></td>
                                                </tr>
                                                <tr>
                                                    <th scope>Remark</th>
                                                    <?php if($result['remark']==""){ ?>

                                                       <td><?php echo "Your apllication still pending"; ?></td>
                                                   <?php } else { ?>                  <td><?php  echo $result['remark'];?>
                                                   </td>
                                               <?php } ?>
                                               <th scope>Status</th>
                                               <?php if($result['status']==""){ ?>

                                                   <td><?php echo "Pending"; ?></td>
                                               <?php } else { ?>                  <td><?php  echo $result['status'];?>
                                               </td>
                                           <?php } ?>
                                       </tr>


                                   </table>
                               <?php  }
                           }
                           ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- Static Table End -->
</div>
</div>
<?php include_once('includes/footer.php');?>

    <!-- jquery
      ============================================ -->
      <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
      ============================================ -->
      <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
      ============================================ -->
      <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
      ============================================ -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
      ============================================ -->
      <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
      ============================================ -->
      <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
      ============================================ -->
      <script src="js/counterup/jquery.counterup.min.js"></script>
      <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
      ============================================ -->
      <script src="js/peity/jquery.peity.min.js"></script>
      <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
      ============================================ -->
      <script src="js/sparkline/jquery.sparkline.min.js"></script>
      <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
      ============================================ -->
      <script src="js/data-table/bootstrap-table.js"></script>
      <script src="js/data-table/tableExport.js"></script>
      <script src="js/data-table/data-table-active.js"></script>
      <script src="js/data-table/bootstrap-table-editable.js"></script>
      <script src="js/data-table/bootstrap-editable.js"></script>
      <script src="js/data-table/bootstrap-table-resizable.js"></script>
      <script src="js/data-table/colResizable-1.5.source.js"></script>
      <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
      ============================================ -->
      <script src="js/main.js"></script>


  </body>

  </html><?php }  ?>
