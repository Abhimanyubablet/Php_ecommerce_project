<?php
  include_once 'connection.php';
   $Id=$_POST['Id'];
   $C_Name=$_POST['C_Name'];
   $P_name=$_POST['P_name'];
   $Price=$_POST['Price'];
   $Rating=$_POST['Rating'];
   $Offer=$_POST['Offer'];
   $Delivery=$_POST['Delivery'];
   $Return_policy=$_POST['Return_policy'];
   $Size=$_POST['Size'];
   $Des=$_POST['Des'];

   $file=$_FILES['photo'];
   $Sub_category=$_POST['Sub_category'];
   $Category=$_POST['Category'];
$Product=$_POST['Product'];
   
$fille_name=$file['name'];
$fille_tmp=$file['tmp_name'];
$pic="../Product_Upload/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql1="UPDATE `accessories` SET `C_Name`='$C_Name',`P_name`='$P_name',`Price`='$Price',`Rating`='$Rating',`Offer`='$Offer',`Delivery`='$Delivery',`Return_policy`='$Return_policy',`Size`='$Size',`Des`='$Des',`Image`='$pic',`Sub_category`='$Sub_category',`Category`='$Category',`Product`=$Product WHERE `Id`='$Id' && Category='$Category' ";
  $query1=mysqli_query($conn,$sql1);
if($query1){
    echo "
    update is successful";
    header('location:Product_control.php');
    }


    


else{
    echo "NOT UPDATE";
}

mysqli_close($conn);

?>