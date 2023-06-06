<?php
include_once "connection.php";
if(isset($_POST['InserData'])){
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Message=$_POST["Message"];

    $sql1="INSERT INTO `register` VALUES ('$Name','$Email','$Message')";
    $query=mysqli_query($conn,$sql1);

    if($query){
        header("Location: Edu_Ecom.php");
        // echo "success";
    }
}
?>