        <?php
        session_start();
        error_reporting(0);
        include('includes/dbconnection.php');
        if (strlen($_SESSION['obcsuid']==0)) {
          header('location:logout.php');
      } else{



          ?>
          <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">

                    <a href="#"><img src="img/message/avatar.jpg" alt="" />
                    </a>
                    <?php 
                    $id=$_SESSION['obcsuid'];
                    $sql="SELECT * FROM tbl_user WHERE id='$id'";
                    $query=mysqli_query($con,$sql);
                    $result=mysqli_fetch_array($query);
                    ?>
                    <h3><?php echo $result['mobile']; ?></h3>
                    <p><?php echo $result['fname']; ?> <?php echo $result['lname']; ?></p>

                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                            
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Birth Reg Form</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="fill-birthregform.php" class="dropdown-item">Add Details</a>
                                <a href="view-birthregform.php" class="dropdown-item">Manage Details</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="certificates-list.php" role="button" aria-expanded="false"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Certificates</span> </a>
                            
                        </li>

                    </ul>
                </div>
            </nav>
        </div><?php }  ?>