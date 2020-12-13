<?php

if (isset($_GET['visited'])) {
  require 'dbh.inc.php';
  session_start();
  $uid = $_SESSION['uid'];            
  $pid = (int)$_GET['visited'];            
  $sql="INSERT INTO travelled (tripid,uid,pid) values (?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql))
  {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../index.php?country=".$pid."&error=sqlerror_v");
    exit();
  }
  else
  {
    echo $uid;
    echo $pid;
    $tid=$uid.$pid;
    mysqli_stmt_bind_param($stmt, "ssi",$tid , $uid,$pid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }  
  header("Location: ../place.php?country=".$pid."&success_v");
  exit();
}

else if (isset($_GET['bucket'])) {
  require 'dbh.inc.php';
  session_start();
  $uid = $_SESSION['uid'];            
  $pid = (int)$_GET['bucket'];            
  $sql="INSERT INTO bucket_list (bid,uid,pid) values (?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql))
  {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../place.php?country=".$pid."&error=sqlerror_b");
    exit();
  }
  else
  {
    echo $uid;
    echo $pid;
    $bid=$uid.$pid;
    mysqli_stmt_bind_param($stmt, "ssi",$bid , $uid,$pid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }  
  header("Location: ../place.php?country=".$pid."&success_b");
  exit();
  }
else {
  header("Location: ../place.php?country=".$pid);
  exit();
}