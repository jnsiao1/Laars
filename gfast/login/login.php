<?php
session_start();
include "database.php";

if(isset($_POST['uname']) && isset ($_POST['password'])) {

    function validate($data){
      $data = trim(data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $uname = validate ($_POST['uname']);
    $pass = validate ($_POST['password']);

    if (empty($uname)) {
      header('Location: login.html?error=User Name is required');
      exit();
    }else if(empty($pass)){
      header("Location: login.html?error=Password Password is required");
      exit();
    }else{
      $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
          $row = mysqli_fetch_assoc($result);
          if ($row['username'] === $uname && $row ['password'] === $pass) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSIOn['id'] = $row ['row'];
            header("Location: login.html");
            exit();
          }else{
              header("Location: login.html?error=Incorrect User name or Password");
              exit();
          }
      }
    }
}else{
  header("Location:login.html");
}
