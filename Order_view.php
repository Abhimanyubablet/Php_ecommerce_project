<?php
session_start();
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM trend WHERE P_Id= '".$_GET["P_Id"]."'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Check.css">
    <style>
        .Order_img{
            width: 100px;
        }
    </style>
</head>
<body>

<div class="white-space"></div>
<div class="wrapper">
  
  
  
  <div class="row mt-5">
    <form method="post" >

      <div class="col-5 col order">
        <h3 class="topborder"><span>Your Order</span></h3>
        <?php
             $i=0;
              while($row=mysqli_fetch_array($sql))
             {
             ?>
        <div class="row">
          <h4 class="inline">Product</h4>
          <h4 class="inline alignright">Order Total Product :</h4>
        </div>
        <div>
          <img class="Order_img" src="<?php echo $row["Image"] ; ?>" alt="">
          <p>Price : <?php echo $row["Price"] ; ?> </p>

          <p>Product Name : <?php echo $row["P_name"] ; ?></p>
        </div>

        
        
        <div>
          <h5 class="inline difwidth">Shipping and Handling</h5>
          <p class="inline alignright center">Free Shipping</p>
        </div>
        <div>
          
          <h5> Total Product Price :  <?php echo $row["Price"] ; ?> </h5>
        </div>
        <?php
          $i=0;
          }
           ?>
        <div>
          <h3 class="topborder"><span>Payment Method</span></h3>
          <input type="radio" value="banktransfer" name="payment" checked>
          <p> Only Cash On Delivery Available</p>
          
        </div>
        
        <input type="number" name="Product" >

        <input type="hidden" name="Order_Id"  class="redbutton">
       

        <input type="submit" name="submit_order" value="Place Order" class="redbutton">

      
      </div>
    </form>
  </div>
</div>
</body>
</html>

<?php
if (isset($_POST['submit_order'])){
    $Order_Id=$_POST['Order_Id'];
    $C_Id=$_SESSION['C_Id'];
    $P_Id=$_GET['P_Id'];
    $add_Id=$_GET['add_Id'];
    $Product=$_POST['Product'];
    
    $abhi=mysqli_query($conn,"INSERT INTO orders(Order_Id,Payment_method,C_Id,P_Id,add_Id,Product) VALUES('$Order_Id','Cash on delivery','$C_Id','$P_Id','$add_Id','$Product')");

    if($abhi){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Order Successfull');
        window.location.href='Edu_Ecom.php';
        </script>");
    }
}
?>
  

<?php
$P_Id=$_GET['P_Id'];
$Product=$_POST['Product'];

$qqq=mysqli_query($conn,"SELECT * FROM trend WHERE P_Id='$P_Id'");
if(mysqli_num_rows($qqq)>0)
{
    while ($data=mysqli_fetch_assoc($qqq))
    {
    $number=$data['Product']-$Product;
    $update=mysqli_query($conn,"UPDATE trend SET Product='$number' WHERE P_Id='$P_Id' ");
    }
}
?>

