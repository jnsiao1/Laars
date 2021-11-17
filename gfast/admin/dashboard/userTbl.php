<?php
  ob_start();
  $conn =mysqli_connect("localhost","root","","db_gfast");
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>G-FAST : A GPS-driven Delivering Application</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- modal -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="../../modal/css/ionicons.min.css">
		<link rel="stylesheet" href="../../modal/css/style.css">

    <!-- fa icons -->
    <link href="../../fa/css/fontawesome.css" rel="stylesheet">
    <link href="../../fa/css/brands.css" rel="stylesheet">
    <link href="../../fa/css/solid.css" rel="stylesheet">

    <style>
        /* CSS */
        .button-19 {
        appearance: button;
        background-color: #1899D6;
        border: solid transparent;
        border-radius: 16px;
        border-width: 0 0 4px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: din-round,sans-serif;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .8px;
        line-height: 20px;
        margin: 0;
        outline: none;
        overflow: visible;
        padding: 8px 11px;
        text-align: center;
        text-transform: uppercase;
        touch-action: manipulation;
        transform: translateZ(0);
        transition: filter .2s;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        width: 8%;
        }

        .button-19:after {
        background-clip: padding-box;
        background-color: #1CB0F6;
        border: solid transparent;
        border-radius: 16px;
        border-width: 0 0 4px;
        bottom: -4px;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: -1;
        }

        .button-19:main,
        .button-19:focus {
        user-select: auto;
        }

        .button-19:hover:not(:disabled) {
        filter: brightness(1.1);
        }

        .button-19:disabled {
        cursor: auto;
        }
    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                      <div style="color:white; font-size:25px">
                          G-Fast
                      </div>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">


                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./userTbl.php" aria-expanded="false">User Table</a></li>
                            <li><a href="./gasTbl.php" aria-expanded="false">Gas Table</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

          <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">User Table</h4>
                                <br>
                                <button type="button" class="button-19" data-toggle="modal" data-target="#addUser">Add User</button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>UserID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Phone</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          <?php
                                            $sql = "SELECT * FROM userTbl";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo "<tr><td>" . $row["userID"]. "</td><td>" . $row["firstName"] . "</td><td>"
                                            . $row["lastName"]. "</td><td>" . $row["email"] . "</td>
                                            <td>" . $row["password"] . "</td><td>" . $row["phone"] . "</td>
                                            <td>" . "<i class='fas fa-edit' data-toggle='modal'data-target='#updateUser".$row['userID']. "'>
                                            </i> &nbsp <i class='fas fa-trash-alt'></i>". "</td> </tr>";

                                            $sql2 = "SELECT * FROM userTbl WHERE userID = ' ".$row['userID']." ' ";
                                            $result2 = mysqli_query($conn,$sql2);
                                            $row2=mysqli_fetch_assoc($result2);

                                            echo "<div id='updateUser".$row['userID']."' class='modal fade' role='dialog'>

                                            <div class='modal-dialog'>

                                              <!-- Modal content-->
                                              <div class='modal-content'>
                                                <div class='modal-header'>

                                                </div>
                                                <div class='modal-body'>


                                                  <div class='modal-body p-4 py-5 p-md-5'>
                                                    <h3 class='text-center mb-3'>Update User</h3>
                                                    <br>
                                                    <form action='' class='signup-form'  method='POST'>
                                                      <input type='text' class='form-control' placeholder=' ". $row["userID"] ." ' name='userid' hidden>
                                                      <div class='form-group mb-2'>
                                                        <label for='name'>First Name</label>
                                                        <input type='text' class='form-control' placeholder=' ". $row["firstName"] ." ' name='fName'>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label for='name'>Last Name</label>
                                                        <input type='text' class='form-control' placeholder=' ". $row["lastName"] ." ' name='lName'>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label for='email'>Email</label>
                                                        <input type='text' class='form-control' placeholder=' ". $row["email"] ." ' name='Email' readonly>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >Password</label>
                                                        <input type='text' class='form-control' placeholder=' ". $row["password"] ." ' name='Password'>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >Phone</label>
                                                        <input type='text' class='form-control' placeholder=' ". $row["phone"] ." ' name='Phone'>
                                                      </div>
                                                      <br>
                                                      <div class='form-group mb-2'>
                                                        <button type='submit' class='form-control btn btn-primary rounded submit px-3' name='btnUpdateUser'>Upate User</button>
                                                      </div>

                                                    </form>
                                                  </div>


                                                </div>
                                                <div class='modal-footer'>
                                                  <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                </div>
                                              </div>

                                            </div>
                                          </div>";
                                            }
                                            // echo "</table>";
                                            } else { echo "0 results"; }
                                            // $conn->close();

                                           ?>

                                        </tbody>
                                        <tfoot>
                                            <!-- <tr>
                                                <th>UserID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Phone</th>
                                            </tr> -->
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

        <!-- Modal Add User -->
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
              </div>
              <div class="modal-body p-4 py-5 p-md-5">
                <h3 class="text-center mb-3">Add New User</h3>
                <br>
                <form action="#" class="signup-form"  method="POST">
                  <div class="form-group mb-2">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="" name="fname">
                  </div>
                  <div class="form-group mb-2">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" placeholder="" name="lname">
                  </div>
                  <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="" name="email">
                  </div>
                  <div class="form-group mb-2">
                    <label >Password</label>
                    <input type="password" class="form-control" placeholder="" name="password">
                  </div>
                  <div class="form-group mb-2">
                    <label >Phone</label>
                    <input type="text" class="form-control" placeholder="" name="phone">
                  </div>
                  <br>
                  <div class="form-group mb-2">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="btnAddUser">Add User</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Update User -->
        <div class="modal fade" id="updateUser<?php echo $row['userID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
              </div>
              <div class="modal-body p-4 py-5 p-md-5">
                <h3 class="text-center mb-3">Update User</h3>
                <br>
                <form action="#" class="signup-form"  method="POST">
                  <div class="form-group mb-2">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php $row["firstName"] ?>" name="fname">
                  </div>
                  <div class="form-group mb-2">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" placeholder="" name="lname">
                  </div>
                  <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="" name="email">
                  </div>
                  <div class="form-group mb-2">
                    <label >Password</label>
                    <input type="password" class="form-control" placeholder="" name="password">
                  </div>
                  <div class="form-group mb-2">
                    <label >Phone</label>
                    <input type="text" class="form-control" placeholder="" name="phone">
                  </div>
                  <br>
                  <div class="form-group mb-2">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="btnAddUser">Upate User</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <!-- modal -->
    <script src="../modal/js/jquery.min.js"></script>
    <script src="../modal/js/popper.js"></script>
    <script src="../modal/js/bootstrap.min.js"></script>
    <script src="../modal/js/main.js"></script>

</body>

<?php
    if(isset($_POST['btnAddUser'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $phone=$_POST['phone'];
        // $query="INSERT INTO usertbl (firstName, lastName, email, password, phone) VALUES ('$fname','$lname', '$email',SHA('$pwd'), '$phone')"; //for encryption of password utilize SHA()
        $query="INSERT INTO usertbl (firstName, lastName, email, password, phone) VALUES ('$fname','$lname', '$email','$pwd', '$phone')";
        mysqli_query($conn,$query);
        header("Location: userTbl.php");
        // $count = mysqli_num_rows($result);
        // if($count ==0)
        //   echo "<script language='javascript'> alert('Incorrect username or password');</script>";
        // else{
        //   $row=mysqli_fetch_assoc($result);
        //   $_SESSION['login']=$row['email'];
        //   header("Location: ../index.php");
        // }
    }
    else if(isset($_POST['btnUpdateUser'])){

        $userid = $POST["userid"];

        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $Email=$_POST['Email'];
        $Pwd=$_POST['Password'];
        $Phone=$_POST['Phone'];
        // $query="INSERT INTO usertbl (firstName, lastName, email, password, phone) VALUES ('$fname','$lname', '$email',SHA('$pwd'), '$phone')"; //for encryption of password utilize SHA()
        $query2="UPDATE usertbl SET firstName='$fName',lastName='$lName',email='$Email',password='$Pwd',phone='$Phone' WHERE userID = '$userid'";
        mysqli_query($conn,$query2);
        header("Location: userTbl.php");
        // $count = mysqli_num_rows($result);
        // if($count ==0)
        //   echo "<script language='javascript'> alert('Incorrect username or password');</script>";
        // else{
        //   $row=mysqli_fetch_assoc($result);
        //   $_SESSION['login']=$row['email'];
        //   header("Location: ../index.php");
        // }
    }
?>
 ?>

</html>
