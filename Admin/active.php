<?php
include_once ('connection.php');

$Id= $_GET['Id'];
$status=$_GET['status'];
$q=mysqli_query($conn,"UPDATE accessories SET status=$status WHERE Id=$Id");

if($q){
header('Location:Product_control.php');
}
?>