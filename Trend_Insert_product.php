<?php
include_once "connection.php";
if(isset($_POST['insertdata'])){
$P_Id=$_POST["P_Id"];
$C_Name=$_POST["C_Name"];
$P_name=$_POST["P_name"];
$Price=$_POST["Price"];
$Rating=$_POST["Rating"];
$Offer=$_POST["Offer"];
$Delivery=$_POST["Delivery"];
$Return_policy=$_POST["Return_policy"];
$Size=$_POST["Size"];
$Des=$_POST["Des"];
$Sub_category=$_POST["Sub_category"];
$files=$_FILES['Pic'];
$status=$_POST['status'];
$Category=$_POST['Category'];
$Product=$_POST['Product'];

$filename=$files['name'];
$filetmp=$files['tmp_name'];
    $destinationfile='Trend_Upload_pic/'.$filename;
    $anotherfile='../upload/'.$filename;
    // $destinationfile='Product_Upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql1="INSERT INTO `trend` VALUES ('$P_Id','$C_Name','$P_name','$Price','$Rating','$Offer','$Delivery','$Return_policy','$Size','$Des','$destinationfile','$Sub_category','$status','$Category','$Product')";
    
    $query=mysqli_query($conn,$sql1);

    if($query){
        // $sql2="INSERT INTO `accessories` VALUES ('$Id','$C_Name','$P_name','$Price','$Rating','$Offer','$Delivery','$Return_policy','$Size','$Des','$destinationfile','$Sub_category','$status','$Category','$Product')";
          
        // $result=mysqli_query($conn,$sql2);
        header("Location: Trend_Product_form.php");
        // echo "Success";
    }
    
}

?>