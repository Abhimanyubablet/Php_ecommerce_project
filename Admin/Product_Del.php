<?php
include_once "connection.php";
$sql1=mysqli_query($conn,"DELETE FROM accessories WHERE Id='".$_GET["Id"]."'");
if($sql1){ 
header("Location:Product_control.php");
}
?>