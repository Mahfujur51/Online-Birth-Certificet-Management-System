      <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
 <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="dashboard.php" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="all-birth-application.php" class="nav-link">All Applications</a>
                                        </li>
                                        <li class="nav-item"><a href="between-dates-report.php" class="nav-link">Report</a>
                                        </li>
                                       
                                        <li class="nav-item"><a href="search.php" class="nav-link">Search</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                               <li class="nav-item"><a href="new-birth-application.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                            <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                                <div class="notification-single-top">
                                                    <h1>Notifications <?php echo htmlentities($totneworder);?></h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="new-birth-application.php">
                                                  
                                                           
                                                            <div class="notification-content">
                                                                
                                                                
                                                                <h2><?php echo $row->ApplicationID;?></h2>
                                                                <p><?php echo $row->Dateofapply;?>.</p>
                                                              
                                                            </div>
                                                        </a>
                                                    </li>
                                               
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="all-birth-application.php">View All Notification</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <?php 
                                                $id=$_SESSION['obcsaid'];
                                                    $sql="SELECT * FROM tbl_admin WHERE id='$id'";
                                                    $query=mysqli_query($con,$sql);
                                                    $result=mysqli_fetch_array($query);

                                                 ?>

                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name"><?php  echo $result['name'];?></span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                
                                                <li><a href="profile.php"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                                </li>
                                                 <li><a href="change-password.php"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href="logout.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php }  ?>