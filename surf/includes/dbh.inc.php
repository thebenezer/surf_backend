<?php

$servername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="surf";

$conn= mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  die("Connection Failed".mysqli_connect_error());
}
