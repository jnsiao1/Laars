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
                            <li><a href="./tblAdmin.php" aria-expanded="false">Admin Table</a></li>
                            <li><a href="./riderTbl.php" aria-expanded="false">Rider Table</a></li>
                            <li><a href="./transactTbl.php" aria-expanded="false">Order Table</a></li>
                        </ul>
                    </li>
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
                                <h4 class="card-title">Transaction Table</h4>
                                <br>
                                <button type="button" class="button-19" data-toggle="modal" data-target="#addTransact">Add Order</button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>TransactID</th>
                                                <th>Date</th>
                                                <th>Mode of<br>Payment</th>
                                                <th>Payment</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th>Windshield<br>Cleaning</th>
                                                <th>UserID</th>
                                                <th>GasID</th>
                                                <th>RiderID</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          <?php
                                            $sql = "SELECT * FROM transactTbl";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo "<tr><td>" . $row["transactID"]. "</td><td>" . $row["transactDate"] . "</td><td>".
                                            $row["mop"]. "</td><td>" . $row["payment"] . "</td><td>" . $row["location"] . "</td><td>" .
                                            $row["status"] . "</td><td>" . $row["windshield"] . "</td><td>" . $row["userID"] . "</td><td>" .
                                            $row["gasID"] . "</td><td>" . $row["riderID"] ."</td><td>" . "<i class='fas fa-edit' data-toggle='modal'data-target='#updateTransact".
                                            $row['transactID']. "'></i> &nbsp <i class='fas fa-trash-alt' data-toggle='modal' data-target='#deleteTransact".
                                            $row['transactID']. "'></i>". "</td>
                                            </tr>";

                                            $sql2 = "SELECT * FROM transactTbl WHERE transactID = ' ".$row['transactID']." ' ";
                                            $result2 = mysqli_query($conn,$sql2);
                                            $row2=mysqli_fetch_assoc($result2);
                                            $transact = $row['transactID'];

                                            echo "<div id='updateTransact".$row['transactID']."' class='modal fade' role='dialog'>

                                            <div class='modal-dialog'>

                                              <!-- Modal content-->
                                              <div class='modal-content'>
                                                <div class='modal-header'>

                                                </div>
                                                <div class='modal-body'>


                                                  <div class='modal-body p-4 py-5 p-md-5'>
                                                    <h3 class='text-center mb-3'>Update Transact</h3>
                                                    <br>
                                                    <form class='signup-form'  method='POST'>
                                                        <input type='text' class='form-control' value='". $row2["transactID"] ."' name='transactID' hidden>
                                                      <div class='form-group mb-2'>
                                                        <label>Date</label>
                                                        <input type='date' class='form-control' value='". $row2["transactDate"] ."' name='date'>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label>Mode of Payment</label>
                                                        <select name='mop' class='form-control'>
                                                          <option value='Cash'>Cash</option>
                                                          <option value='Online Pay'>Online Pay</option>
                                                        </select>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label>Payment</label>
                                                        <input type='number' class='form-control' value='". $row2["payment"] ."' name='payment' step='0.01'>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label>Location</label>
                                                        <input type='text' class='form-control' value='". $row2["location"] ."' name='location' >
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >Status</label>
                                                        <select name='status' class='form-control'>
                                                          <option value='Pending'>Pending</option>
                                                          <option value='Complete'>Complete</option>
                                                        </select>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >Windshield Cleaning</label>
                                                        <select name='windshield' class='form-control'>
                                                          <option value='Yes'>Yes</option>
                                                          <option value='No'>No</option>
                                                        </select>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >UserID</label>
                                                        <select name='userID' class='form-control'>";

                                                            $users = "SELECT * FROM userTbl where userID !=" . $row2['userID'];
                                                            $resultUsers = $conn->query($users);
                                                            if ($resultUsers->num_rows > 0) {
                                                              echo "<option value='". $row2['userID'] ."' selected>". $row2['userID'] ."</option>";
                                                              while($rowUsers = $resultUsers->fetch_assoc()) {
                                                                echo "<option value=' " . $rowUsers["userID"] . " '>". $rowUsers['userID'] ."</option>"  ;
                                                              }
                                                            }else { echo "<option value='NA' selected>NO USERS</option>"  ; }
                                                          echo"
                                                        </select>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >GasID</label>
                                                        <select name='gasID' class='form-control'>";

                                                            $gas = "SELECT * FROM gasTbl where gasID !=" . $row2['gasID'];
                                                            $resultGas = $conn->query($gas);
                                                            if ($resultGas->num_rows > 0) {
                                                              echo "<option value='". $row2['gasID'] ."' selected>". $row2['gasID'] ."</option>";
                                                              while($rowGas = $resultGas->fetch_assoc()) {
                                                                echo "<option value=' " . $rowGas["gasID"] . " '>" . $rowGas["gasID"] . "</option>";
                                                              }
                                                            }else { echo "<option value='NA' selected>NO GAS</option>"; }
                                                          echo "
                                                        </select>
                                                      </div>
                                                      <div class='form-group mb-2'>
                                                        <label >RiderID</label>
                                                        <select name='riderID' class='form-control'>";

                                                            $rider = "SELECT * FROM riderTbl";
                                                            $resultRider= $conn->query($rider);
                                                            if ($resultRider->num_rows > 0) {
                                                              echo "<option value='". $row2['riderID'] ."' selected>". $row2['riderID'] ."</option>";
                                                              while($rowRider = $resultRider->fetch_assoc()) {
                                                                echo "<option value=' " . $rowRider["riderID"] . " '>" . $rowRider["riderID"] . "</option>";
                                                              }
                                                            }else { echo "<option value='NA' selected>NO RIDERS</option>"; }
                                                          echo"
                                                        </select>
                                                      </div>
                                                      <br>
                                                      <div class='form-group mb-2'>
                                                        <button type='submit' class='form-control btn btn-primary rounded submit px-3' name='btnUpdateTransact'>Upate Transaction</button>
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

                                          echo "<div id='deleteTransact".$row['transactID']."' class='modal fade' role='dialog'>

                                          <div class='modal-dialog'>

                                            <!-- Modal content-->
                                            <div class='modal-content'>
                                              <div class='modal-header'>

                                              </div>
                                              <div class='modal-body'>
                                                <div class='modal-body p-4 py-5 p-md-5'>
                                                  <h3 class='text-center mb-3'>Delete Transaction</h3>
                                                  <br>
                                                  <form class='signup-form'  method='POST'>
                                                      <input type='text' class='form-control' value=' ". $row2["transactID"] ." ' name='deltransactID' hidden>
                                                    <br>
                                                      <input type='text' class='form-control' value='". $row2["transactID"] ." ' name='transact_ID' readonly>
                                                    <p> Do you want to delete this Transaction? </p>
                                                    <div class='form-group mb-2'>
                                                      <button type='submit' class='form-control btn btn-primary rounded submit px-3' name='btnDeleteTransact'>Delete Transaction</button>
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
        <div class="modal fade" id="addTransact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
              </div>
              <div class="modal-body p-4 py-5 p-md-5">
                <h3 class="text-center mb-3">Add New Order</h3>
                <br>
                <form action="#" class="signup-form"  method="POST">
                  <div class="form-group mb-2">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="" name="date">
                  </div>
                  <div class="form-group mb-2">
                    <label>Mode of Payment</label>
                    <select name="mop" class="form-control">
                      <option value="Cash">Cash</option>
                      <option value="Online Pay">Online Pay</option>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label>Payment</label>
                    <input type="number" class="form-control" placeholder="" name="payment" step="0.01">
                  </div>
                  <div class="form-group mb-2">
                    <label >Location</label>
                    <input type="text" class="form-control" placeholder="" name="location">
                  </div>
                  <div class="form-group mb-2">
                    <label >Status</label>
                    <select name="status" class="form-control">
                      <option value="Pending">Pending</option>
                      <option value="Complete">Complete</option>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label >Windshield Cleaning</label>
                    <select name="windshield" class="form-control">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label >UserID</label>
                    <select name="userID" class="form-control">
                      <?php
                        $users = "SELECT * FROM userTbl";
                        $resultUsers = $conn->query($users);

                        if ($resultUsers->num_rows > 0) {
                          while($row = $resultUsers->fetch_assoc()) {
                            echo "<option value=' " . $row["userID"] . " '>" . $row["userID"] . "</option>";
                          }
                        }else { echo "<option value='NA'>NO USERS</option>"; }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label >GasID</label>
                    <select name="gasID" class="form-control">
                      <?php
                        $gas = "SELECT * FROM gasTbl";
                        $resultGas = $conn->query($gas);
                        if ($resultGas->num_rows > 0) {
                          while($row = $resultGas->fetch_assoc()) {
                            echo "<option value=' " . $row["gasID"] . " '>" . $row["gasID"] . "</option>";
                          }
                        }else { echo "<option value='NA'>NO GAS</option>"; }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mb-2">
                    <label >RiderID</label>
                    <select name="riderID" class="form-control">
                      <?php
                        $rider = "SELECT * FROM riderTbl";
                        $resultRider= $conn->query($rider);
                        if ($resultRider->num_rows > 0) {
                          while($row = $resultRider->fetch_assoc()) {
                            echo "<option value=' " . $row["riderID"] . " '>" . $row["riderID"] . "</option>";
                          }
                        }else { echo "<option value='NA'>NO RIDERS</option>"; }
                      ?>
                    </select>
                  </div>
                  <br>
                  <div class="form-group mb-2">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="btnAddTransact">Add Order</button>
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
                <p>Copyright &copy; Designed & Developed by LARSS GROUP 2021</p>
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
    if(isset($_POST['btnAddTransact'])){
        $date=$_POST['date'];
        $mop=$_POST['mop'];
        $payment=$_POST['payment'];
        $location=$_POST['location'];
        $status=$_POST['status'];
        $windshield=$_POST['windshield'];
        $userID=$_POST['userID'];
        $gasID=$_POST['gasID'];
        $riderID=$_POST['riderID'];
        // $query="INSERT INTO usertbl (firstName, lastName, email, password, phone) VALUES ('$fname','$lname', '$email',SHA('$pwd'), '$phone')"; //for encryption of password utilize SHA()
        $query="INSERT INTO transacttbl (transactDate, mop, payment, location, status, windshield, userID, gasID, riderID)
        VALUES ('$date','$mop', '$payment','$location', '$status', '$windshield', '$userID', '$gasID', '$riderID')";
        mysqli_query($conn,$query);
        header("Location: transactTbl.php");

    }
  if(isset($_POST['btnUpdateTransact'])){
        $date=$_POST['date'];
        $mop=$_POST['mop'];
        $payment=$_POST['payment'];
        $location=$_POST['location'];
        $status=$_POST['status'];
        $windshield=$_POST['windshield'];
        $userID=$_POST['userID'];
        $gasID=$_POST['gasID'];
        $riderID=$_POST['riderID'];
        $transact=$_POST['transactID'];
        $sql3 = mysqli_query($conn,"UPDATE transacttbl set transactDate='$date',mop='$mop',payment='$payment',location='$location',
        status='$status', windshield='$windshield', userID='$userID', gasID='$gasID', riderID='$riderID' where transactID = $transact");
        header("Location: transactTbl.php");

    }
    if(isset($_POST['btnDeleteTransact'])){
            $deltransact=$_POST['deltransactID'];
            $sql4 = mysqli_query($conn,"DELETE FROM transactTbl WHERE transactID = $deltransact");
            header("Location: transactTbl.php");

      }
?>


</html>
