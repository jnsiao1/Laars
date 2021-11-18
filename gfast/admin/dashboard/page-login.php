<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">

    <style>
      /* CSS */
      .button-9 {
      appearance: button;
      backface-visibility: hidden;
      background-color: #405cf5;
      border-radius: 6px;
      border-width: 0;
      box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
      box-sizing: border-box;
      color: #fff;
      cursor: pointer;
      font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
      font-size: 100%;
      height: 44px;
      line-height: 1.15;
      margin: 12px 0 0;
      outline: none;
      overflow: hidden;
      padding: 0 25px;
      position: relative;
      text-align: center;
      text-transform: none;
      transform: translateZ(0);
      transition: all .2s,box-shadow .08s ease-in;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: 100%;
      }

      .button-9:disabled {
      cursor: default;
      }

      .button-9:focus {
      box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
      }
    </style>

</head>

<body class="h-100">

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





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Admin Login</h4></a>

                                <form class="mt-5 mb-5 login-input" action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <!-- <input class="btn login-form__btn submit w-100" type="submit" name="btnLogin">Log In</button> -->
                                    	<input class="button-9" type="submit" value="Login" name="btnLogin">
                                </form>
                                <!-- <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p> -->
                            </div>
                        </div>
                        <br>
                        <a href="../../index.php" class="text-primary" style="margin-left:77%">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
      $con =mysqli_connect("localhost","root","","db_gfast");
      $err="";
      if($con){
        if(isset($_POST['btnLogin'])){
            $user=$_POST['username'];
            $pwd=$_POST['password'];
            $query="select * from admintbl where username='$user' and password='$pwd'";
            $result = mysqli_query($con,$query);
            $count = mysqli_num_rows($result);
            if($count ==0)
              echo "<script language='javascript'> alert('Incorrect username or password');</script>";
            else{
              $row=mysqli_fetch_assoc($result);
              $_SESSION['login']=$row['username'];
              header("Location: userTbl.php");
            }
        }

      }
     ?>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>
