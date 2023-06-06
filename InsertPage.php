<?php
$server="localhost";
$user="root";
$password="";
$dbname="e_commerce";

$conn=mysqli_connect($server,$user,$password,$dbname);

// if(isset($_POST['insertdata'])){
$C_Id=$_POST["C_Id"];
$Name=$_POST["Name"];
$User_Id=$_POST["UserId"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];
$Address=$_POST["Address"];
$City=$_POST["City"];
$State=$_POST["State"];
$files=$_FILES['Photo'];



$filename=$files['name'];
$filetmp=$files['tmp_name'];
    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql="INSERT INTO `customer_details`(`C_Id`, `Name`, `User_Id`, `Email`, `Pass`, `Address`, `City`, `State`, `Photo`) VALUES ('$C_Id','$Name','$User_Id','$Email','$Pass','$Address','$City','$State','$destinationfile')";
    $result=mysqli_query($conn,$sql);

    if($result){
     
        header("Location:Edu_Ecom.php");
        echo "Success";
    }
   
// }
?> 