<?php
include_once ('connection.php');

$C_Id= $_GET['C_Id'];
$status=$_GET['status'];
$q=mysqli_query($conn,"UPDATE customer_details SET status=$status WHERE C_Id=$C_Id");

if($q){
header('Location:User_details.php');
}
?>