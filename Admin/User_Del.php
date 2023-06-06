<?php
include_once "connection.php";
$sql1=mysqli_query($conn,"DELETE FROM customer_details WHERE C_Id='".$_GET["C_Id"]."'");

if($sql1){
    header("Location:Product_control.php");
}
?>