<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM trend WHERE category='HotSales'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="HotSales.css">
    <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>
    

</head>
<body>
<section id="sellers">
        <div class="seller container">
            <h2 class="mx-5 ">Hot Sales</h2>
            <div class="best-seller row mt-3">
          <?php
             $i=0;
              while($row=mysqli_fetch_array($sql))
             {
             ?>
            <a href="HotSales_details.php ?  Id= <?php echo $row["P_Id"] ; ?>">
            <div class="best-p1 col-sm-12 col-md-6 col-lg-3 mx-auto">
                    <img src="<?php echo $row["Image"] ; ?>" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p><?php echo $row["P_name"] ; ?></p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price">
                        <?php echo $row["Price"] ; ?>
                            <div class="colors">
                                <i class='bx bxs-circle red'></i>
                                <i class='bx bxs-circle blue'></i>
                                <i class='bx bxs-circle white'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                        <button><a href="View_Address.php ?  P_Id= <?php echo $row["P_Id"] ; ?>">Buy  Now</a></button>
                        </div>
                        <!-- <div class="add-cart">
                            <button>Add To Cart</button>
                        </div> -->
                    </div>
                </div>
            </a>
            <?php
          $i=0;
          }
           ?>
            
          </div>
        </div>
      </section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>