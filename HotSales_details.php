<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM trend WHERE P_Id= '".$_GET["Id"]."'");
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="Edu_Ecom.css">
    <link rel="stylesheet" href="product.css">
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
       .detail_img{
        height: 200px;
      
       }
    </style>
</head>
<body>

<?php
include_once "Nav1.php";
?>
       <hr>

       

      <section>
        <div class="container">
          <div class="row">
          <?php
             $i=0;
              while($row=mysqli_fetch_array($sql))
             {
             ?>
            
  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
        <form action="Admin/manage_cart.php" method="post">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div  class="tab-pane active" id="pic-1"><img class="detail_img" src="<?php echo $row["Image"] ; ?>" /></div>
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $row["C_Name"] ; ?></h3>
            <h1><?php echo $row["P_name"] ; ?></h1>
						<div class="rating">
							<div class="stars">
              <?php echo $row["Rating"] ; ?>
								
							</div>
							
						</div>
            <p></p>
            <p><?php echo $row["Offer"] ; ?>.</p>
						<p class=""><?php echo $row["Des"] ; ?>.</h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
            <?php echo $row["Size"] ; ?></h5>
						<h5 >
              <h4><?php echo $row["Delivery"] ; ?></h4>
              <h4><?php echo $row["Return_policy"] ; ?></h4>
              <h1><?php echo $row["Price"] ; ?></h1>
							
						</h5>
						<div class="action">
            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
             <input type="hidden" name="Item_Name" value="<?php echo $row["P_name"] ; ?>">
             <input type="hidden" name="Price" value="<?php echo $row["Price"] ; ?>" >
            <button class="btn btn-info">Buy Now</button>
            
						</div>
            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
            <?php
          $i=0;
          }
           ?>
            
          </div>
        </div>
      </section>
</body>
</html>