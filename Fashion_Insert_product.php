<?php
include_once "connection.php";
if(isset($_POST['insertdata'])){
$Id=$_POST["Id"];
$files=$_FILES['Pic'];
$Calender=$_POST["Calender"];
$F_Text=$_POST["F_Text"];


$filename=$files['name'];
$filetmp=$files['tmp_name'];
    $destinationfile='Trend_Upload_pic/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql1="INSERT INTO `fashion` VALUES ('$Id','$destinationfile','$Calender','$F_Text')";
    
    $query=mysqli_query($conn,$sql1);

    if($query){
        
        header("Location: Edu_Ecom.php");
       
    }
    
}

?>