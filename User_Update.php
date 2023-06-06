<?php
//   include_once "Header_admin.php";
  include_once 'connection.php';
  $Id=$_GET['Id'];
  $sql1="SELECT * FROM customer_details WHERE C_Id ='$Id'";
 
  $result1=mysqli_query($conn,$sql1);
 
  
  if(mysqli_num_rows($result1)>0){
    while($row=mysqli_fetch_assoc($result1)){
               

?>



<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body> 
      
    <table style="width: 18%; margin: auto; margin-top: 82px;" border="1">
    
        <form  action="User_action.php" method="post" enctype="multipart/form-data">
           
                <tr>
                <td>Id</td>
                <td ><input name="Id" type="text" value="<?php echo $row["C_Id"]; ?>"></td>
                </tr>
                <tr>
                <td>Name</td>
                <td><input name="Name" type="text" value="<?php echo $row["Name"]; ?>"></td>
                 </tr>
                 
                 <tr>
                <td>UserId</td>
                <td><input name="UserId" type="text" value="<?php echo $row["User_Id"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Email</td>
                <td><input name="Email" type="text" value="<?php echo $row["Email"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Pass</td>
                <td><input name="Pass" type="text" value="<?php echo $row["Pass"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Address</td>
                <td><input name="Address" type="text" value="<?php echo $row["Address"]; ?>"></td>
                 </tr>

                 <tr>
                <td>City</td>
                <td><input name="City" type="text" value="<?php echo $row["City"]; ?>"></td>
                 </tr>
                 
                 
                 <tr>
                <td>State</td>
                <td><input name="State" type="text" value="<?php echo $row["State"]; ?>"></td>
                 </tr>

                 
                 

                 <tr>
                 <td>Image</td> 
                 <td>
                    <img class="pic" src="<?php echo $row["Photo"]; ?>" alt="">
                    <br>
                    <input type="file" name="photo" value="<?php echo $row['Photo'];?>"  style="margin-left: 145px;">
                </td>
                 </tr>

                 

                <td>Update</td> 
                <td><input type="submit" name="submit" value="SUBMIT" ></td>
                </tr>  
        </form>
    </table>

   
</body>
</html>
<?php
    }
}
 
?>


