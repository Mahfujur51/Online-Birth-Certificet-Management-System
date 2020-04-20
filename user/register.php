<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
    $fname   =$_POST['fname'];
    $lname   =$_POST['lname'];
    $mobile  =$_POST['mobile'];
    $address =$_POST['address'];
    $password=md5($_POST['password']);

    $sql   ="SELECT * FROM tbl_user WHERE mobile='$mobile'";
    $query =mysqli_query($con,$sql);
    $result=mysqli_num_rows($query);
    if ($result>0) {
     echo "<script>alert('This Mobile Number already exist. Please try again');</script>";
     
 }else{
    $regsql="INSERT INTO tbl_user(fname,lname,mobile,address,password) VALUES('$fname','$lname','$mobile','$address','$password')";
    $regquery=mysqli_query($con,$regsql);
    if ($regquery) {
        echo "<script>alert('You have signup  Succesfully');</script>";

    }
    else{
        echo "<script>alert('Something Wrong Please Try agian!!')</script>";

    }
}







}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>

    <title>Register | Online Birth Certificate System</title>


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
      <link rel="stylesheet" href="css/normalize.css">
    <!-- style CSS
      ============================================ -->
      <link rel="stylesheet" href="css/form.css">
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

        <!-- Register Start-->
        <div class="login-form-area mg-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <form class="adminpro-form" method="post">
                        <div class="col-lg-6">
                            <div class="login-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="logo">
                                            <h3 style="font-weight: bold;color: blue">OBCS</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="login-title">
                                            <h1 style="color: red">User Registration Form</h1>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>First Name</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" name="fname" required="true" />
                                            <i class="fa fa-user login-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Last Name</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" name="lname" required="true" />
                                            <i class="fa fa-user login-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Mobille Number</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" name="mobile" maxlength="11" pattern="[0-9]+" required="true" />
                                            <i class="fa fa-mobile login-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Address</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="text" name="address" />
                                            <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Password</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="password" name="password" required="true" />
                                            <i class="fa fa-lock login-user"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <div class="login-keep-me register-check">
                                         <p>
                                            <small>Do you have an account ?</small>
                                            <a href="login.php">SIGN IN</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">

                                        <button type="submit" class="login-button login-button-lg" name="submit">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- Register End-->
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
    <!-- form validate JS
      ============================================ -->
      <script src="js/jquery.form.min.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/form-active.js"></script>
    <!-- main JS
      ============================================ -->
      <script src="js/main.js"></script>
  </body>

  </html>