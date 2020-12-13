<?php

if (isset($_POST['visited'])) {
  require 'dbh.inc.php';

}

else if (isset($_POST['bucket'])) {
    require 'dbh.inc.php';
  
  }
else {
  header("Location: ../index.php");
  exit();
}