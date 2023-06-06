<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Edu_Ecom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include_once "Nav3.php" ?>

    <?php
    $a=0
    
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
               <h2>My Cart</h2>
            </div>
            <div class="col-lg-8">
            <table class="table">
  <thead class='text-center'>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class='text-center'>
    <?php
    $total=0;
    if (isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $key =>$value)
        {    
            $price=$value['Price'];
            
            $total=$total + $price ;
            
            echo "
            <tr>
            <td>1</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]</td>
            <td><input class='text-center' type='number' value='$value[Quantity]' /></td>
            <td>
            <form action='manage_cart.php' method='post'>
            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]' />
            </form>
            </td>
            </tr>
            ";
        }
    }
    ?>
    
  </tbody>
</table>
            </div>

            <div class="col-lg-4 ">
               <div class="border bg-light rounded p-4">
               <h4>Total :</h4>
                <h5><?php echo $total ?></h5>
                <br>
                <form action="">
                <div class="form-check">
         <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
         <label class="form-check-label" for="exampleRadios1">
          Cash On Delivery
          <br>
         </label>
          </div>
          <br>

                   
                </form>
                <div>
                <a href="../CheckOut.php"><button class="btn btn-primary btn-block"  >Check Out</button></a>
                </div>
               </div>
            </div>
        </div>
    </div>


    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>