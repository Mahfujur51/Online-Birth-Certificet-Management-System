<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
    header('location:logout.php');
} else{
    if(isset($_POST['submit']))
    {

        $userid=$_SESSION['obcsuid'];
        $applicationid=mt_rand(100000000, 999999999);
        $birth=$_POST['birth'];
        $gender=$_POST['gender'];
        $fullname=$_POST['fullname'];
        $place=$_POST['place'];
        $fathername=$_POST['fathername'];
        $paddress=$_POST['paddress'];
        $postadd=$_POST['postadd'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $sql="SELECT * FROM tbl_application WHERE fathername='$fathername' AND birth='$birth'";
        $query=mysqli_query($con,$sql);
        $num=mysqli_num_rows($query);
        if ($num>0) {
           echo "<script>alert('Date of Birth and Father Name is  already exist. Please try again');</script>";
       }else{
        $rsql="INSERT INTO tbl_application (userid,applicationid,birth,gender,fullname,place,fathername,paddress,postadd,mobile,email) VALUES('$userid','$applicationid','$birth','$gender','$fullname','$place','$fathername','$paddress','$postadd','$mobile','$email')";
         $rquery=mysqli_query($con,$rsql);
         if ($rquery) {
             echo '<script>alert("Birth detail has been added.")</script>';
             echo "<script>window.location.href ='fill-birthregform.php'</script>";

         } else{
            echo '<script>alert("Something Went Wrong. Please try again")</script>';

        }
    }
    
}

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Birth Certificate Form | Online Birth Certificate System</title>

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
        <!-- modals CSS
            ============================================ -->
            <link rel="stylesheet" href="css/modals.css">
        <!-- normalize CSS
            ============================================ -->
            <link rel="stylesheet" href="css/normalize.css">
        <!-- forms CSS
            ============================================ -->
            <link rel="stylesheet" href="css/form/all-type-forms.css">
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
                                                <li><span class="bread-blod">Birth Registration Form</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Form Start -->
                <div class="basic-form-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline12-list shadow-reset mg-t-30">
                                    <div class="sparkline12-hd">
                                        <div class="main-sparkline12-hd">
                                            <h1>Application Form</h1>
                                            <div class="sparkline12-outline-icon">
                                                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline12-graph">
                                        <div class="basic-login-form-ad">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="all-form-element-inner">
                                                        <form method="post">
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <label class="login2 pull-right pull-right-pro">Date of Birth</label>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="date" class="form-control" name="birth" value="" required="true" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                        <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Gender</span></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                        <div class="bt-df-checkbox">
                                                                            <p style="text-align: left;"> <input type="radio"  name="gender" id="gender" value="Female" checked="true">Female</p>
                                                                            <p style="text-align: left;"> <input type="radio" name="gender" id="gender" value="Male">Male</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" name="fname" value="" required="true" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Place of Birth</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" required="true" value="" name="place" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Full Name of Father</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" required="true" value="" name="fathername" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Permanent Address</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea type="text" class="form-control" name="paddress" value="" required="true" /></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Postal Address</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea type="text" class="form-control" name="postadd" value="" required="true"/></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Contact Number</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" required="true" value="" name="mobile" maxlength="10" pattern="[0-9]+" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Email</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" required="true" name="email" value="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-3"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Add Details</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Form End-->
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
<!-- modal JS
    ============================================ -->
    <script src="js/modal-active.js"></script>
<!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
<!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
</body>
</html><?php }  ?>