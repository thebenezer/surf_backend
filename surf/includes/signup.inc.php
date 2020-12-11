<?php

if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $uid = $_POST['uid'];
  $name = $_POST['uid'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $confirmpwd = $_POST['conf_pwd'];

  // if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z1-9]*$/",$uid))
  // {
  //   header("Location: ../signup.php?error=invalidusernameandmail");
  //   exit();
  // }
  // else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  // {
  //   header("Location: ../signup.php?error=invalidmail&uid=".$uid);
  //   exit();
  // }
  // else if (!preg_match("/^[a-zA-Z1-9]*$/",$uid))
  // {
  //   header("Location: ../signup.php?error=invalidusername&mail=".$email);
  //   exit();
  // }
  if($password!=$confirmpwd)
  {
    header("Location: ../index.php?error=mismatchedpwd&uid=".$uid."&mail=".$email);
    exit();
  }
  else
  {
    $sql = "SELECT uid from users where uid=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location: ../index.php?error=sqlerror_1");
      exit();
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "s", $uid);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../index.php?error=uidtaken");
        exit();
      }
      else
      {
        // mysqli_close($conn);
        // mysqli_stmt_close($stmt);
        $sql="INSERT INTO users (uid,name,email,pwd) values(?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql))
        {
          header("Location: ../index.php?error=sqlerror_2");
          exit();
        }
        else
        {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "ssss", $uid,$uid,$email,$hashedPwd);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);
          session_start();
          // echo $uid."   ".$email."   ".$password."   ".$hashedPwd;
          $_SESSION['uid'] =$uid;
          
          $sql2="INSERT INTO user_profile (uid,name) values (?,?);";
          $stmt2 = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt2,$sql2))
          {
            mysqli_stmt_close($stmt2);
            mysqli_close($conn);
            header("Location: ../index.php?error=sqlerror_3");
            exit();
          }
          else
          {
            mysqli_stmt_bind_param($stmt2, "ss", $uid,$uid);
            mysqli_stmt_execute($stmt2);
            mysqli_stmt_close($stmt2);
            mysqli_close($conn);
          }  
          header("Location: ../profile.php?success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../index.php");
  exit();
}