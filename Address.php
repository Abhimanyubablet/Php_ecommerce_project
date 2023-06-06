<?php
session_start();
include_once "connection.php";
if(isset($_POST['submit_address'])){
$add_Id=$_POST["add_Id"];
$Country=$_POST["Country"];
$Name=$_POST["Name"];
$User_Id=$_POST["User_Id"];
$Address=$_POST["Address"];
$Email=$_POST["Email"];
$Phone=$_POST["Phone"];
$C_Id=$_SESSION['C_Id'];

    $sql1="INSERT INTO `customer_address` VALUES ('$add_Id','$Country','$Name','$User_Id','$Address','$Email','$Phone','$C_Id')";
    $query=mysqli_query($conn,$sql1);

    if($query){
        echo ("<script LANGUAGE='JavaScript'>
         window.alert('Successfull');
         window.location.href='CheckOut.php';
         </script>");
    }
}
?>