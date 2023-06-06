<?php
  include_once 'connection.php';
   $C_Id=$_POST['Id'];
   $Name=$_POST['Name'];
   $UserId=$_POST['UserId'];
   $Email=$_POST['Email'];
   $Pass=$_POST['Pass'];
   $Address=$_POST['Address'];
   $City=$_POST['City'];
   $State=$_POST['State'];
   $file=$_FILES['photo'];
  

   
$fille_name=$file['name'];
$fille_tmp=$file['tmp_name'];
$pic="upload/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql1="UPDATE `customer_details` SET `Name`='$Name',`UserId`='$UserId',`Email`='$Email',`Pass`='$Pass',`Address`='$Address',`City`='$City',`State`='$State',`Photo`='$pic' WHERE `C_Id`='$Id'";
  $query1=mysqli_query($conn,$sql1);

    
if ($query1){
     header('location:Edu_Ecom.php');
}

    


else{
    echo "NOT UPDATE";
}

mysqli_close($conn);

?>