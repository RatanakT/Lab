<?php
$server = "localhost";
$username = "root";
$password = "root";
$database = "webform";

$connection = mysqli_connect($server,$username,$password,$database);
if(!$connection){
    echo "<script>alert('Connection Failed.')</script>";
}
?>