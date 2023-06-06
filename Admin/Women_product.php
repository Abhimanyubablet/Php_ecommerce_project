
<?php
include_once "connection.php";
if(isset($_GET['Sub_category'])){
  $Sub_category=$_GET['Sub_category'];
  $sql=mysqli_query($conn,"SELECT * FROM accessories WHERE category='Women' AND Sub_category ='$Sub_category' ");

}
else{
$sql=mysqli_query($conn,"SELECT * FROM accessories WHERE category='Women'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="Edu_Ecom.css">
    <link rel="stylesheet" href="Women_product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>

    <style>
      .zmdi {
       display: inline-block;
       font: normal normal normal 14px/1 'Material-Design-Iconic-Font';
       text-rendering: auto;
       }
       .zmdi-filter-list:before {
        content: '\f160';
       }
    </style>
</head>
<body>

<?php
include_once "Nav3.php";
?>
       <hr>

       <section class="container mt-5">
        <nav class="navbar navbar-expand-lg ">
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto mx-auto text-dark">
                <li class="nav-item active">
                  <a class="nav-link" href="Women_product.php">All Products <span class="sr-only">(current)</span></a>
                  <hr style="margin-top: -5px;" >
                </li>
               
                
                <li class="nav-item">
                  <a class="nav-link active" href="Women_product.php ? Sub_category=Skirt">Skirt</a>
                </li>
                
                
                <li class="nav-item">
                  <a class="nav-link active" href="Women_product.php ? Sub_category=Saree">Saree</a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link active" href="Women_product.php ? Sub_category=Shoes">Shoes</a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link active" href="Women_product.php ? Sub_category=Watches">Watches</a>
                </li>
               
              </ul>
              <form class="form-inline mx-4  btn btn-light">
               <span>
                <i class="fa-solid fa-filter"></i>
                Filter
               </span>
              </form>
              <form class="form-inline  btn btn-light">
                <span>
                 <i  class="fa-solid fa-magnifying-glass "></i>
                 Search
                </span>
               </form>
             
            </div>
          </nav>
       </section>

      <section>
        <div class="container">
          <div class="row">
          <?php
             $i=0;
              while($row=mysqli_fetch_array($sql))
             {
              if($row['status']==1){
             ?>
            <a href="women_details.php ?  Id= <?php echo $row["Id"] ; ?>">
            <div class="col-4">
              <div class="product-card">
                <img src="<?php echo $row["Image"] ; ?>" alt="Product Name" class="product-image">
                <h3 class="product-name"><?php echo $row["P_name"] ; ?></h3>
                <p class="product-description"><?php echo $row["Des"] ; ?></p>
                <div class="product-price">
                  <span class="original-price">$99.99</span>
                  <span class="discount-price"><?php echo $row["Price"] ; ?></span>
                </div>
                <!-- <button class="add-to-cart-button">Add to Cart</button> -->
              </div>
            </div>
            </a>
            <?php
          $i=0;
          }
        }
           ?>
            
          </div>
        </div>
      </section>
</body>
</html>
