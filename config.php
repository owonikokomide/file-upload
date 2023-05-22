<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "file_upload";

$connection = mysqli_connect($servername, $username, $password, $databasename);
if($connection){
  // echo "connected";
}
else{
  die("not connected").mysqli_connect_erron;
}
?>