<?php
  include_once "Header_admin.php";
  include_once 'connection.php';
  $Id=$_GET['Id'];
  $category=$_GET['category'];
  $sql1="SELECT * FROM accessories WHERE Id ='$Id' and category='$category'";
//   $sql2="SELECT * FROM women_product WHERE Id ='$Id'";
//   $sql3="SELECT * FROM men_product WHERE Id ='$Id'";

  $result1=mysqli_query($conn,$sql1);
//   $result2=mysqli_query($conn,$sql2);
//   $result3=mysqli_query($conn,$sql3);
  
  if(mysqli_num_rows($result1)>0){
    while($row=mysqli_fetch_assoc($result1)){

        // if(mysqli_num_rows($result2)>0){
        //     while($row=mysqli_fetch_assoc($result2)){
     
                
    //  if(mysqli_num_rows($result3)>0){
    // while($row=mysqli_fetch_assoc($result3)){

               

?>



<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body> 
    <h1>
        sdj
    </h1>
      
    <table style="width: 18%; margin: auto; margin-top: 82px;" border="1">
    
        <form  action="action.php" method="post" enctype="multipart/form-data">
           
                <tr>
                <td>Id</td>
                <td ><input name="Id" type="text" value="<?php echo $row["Id"]; ?>"></td>
                </tr>
                <tr>
                <td>C_Name</td>
                <td><input name="C_Name" type="text" value="<?php echo $row["C_Name"]; ?>"></td>
                 </tr>
                 
                 <tr>
                <td>P_name</td>
                <td><input name="P_name" type="text" value="<?php echo $row["P_name"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Price</td>
                <td><input name="Price" type="text" value="<?php echo $row["Price"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Rating</td>
                <td><input name="Rating" type="text" value="<?php echo $row["Rating"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Offer</td>
                <td><input name="Offer" type="text" value="<?php echo $row["Offer"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Delivery</td>
                <td><input name="Delivery" type="text" value="<?php echo $row["Delivery"]; ?>"></td>
                 </tr>
                 
                 
                 <tr>
                <td>Return_policy</td>
                <td><input name="Return_policy" type="text" value="<?php echo $row["Return_policy"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Size</td>
                <td><input name="Size" type="text" value="<?php echo $row["Size"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Des</td>
                <td><input name="Des" type="text" value="<?php echo $row["Des"]; ?>"></td>
                 </tr>
                 

                 <tr>
                 <td>Image</td> 
                 <td>
                    <img class="pic" src="<?php echo $row["Image"]; ?>" alt="">
                    <br>
                    <input type="file" name="photo" value="<?php echo $row['Image'];?>"  style="margin-left: 145px;">
                </td>
                 </tr>

                 <tr>
                <td>Sub_category</td>
                <td><input name="Sub_category" type="text" value="<?php echo $row["Sub_category"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Category</td>
                <td><input name="Category" type="text" value="<?php echo $row["category"]; ?>"></td>
                 </tr>

                 <tr>
                <td>Product</td>
                <td><input name="Product" type="text" value="<?php echo $row["Product"]; ?>"></td>
                 </tr>

                <tr>
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
//  }
//    }  
   
// }
// } 
?>


