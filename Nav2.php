<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <span >
    <img class="Nav_icon" src="Image/Nav_icon.png" alt="">
    <a style="font-size: 25px;" class="navbar-brand" href="#"> <strong>EDU</strong> STORE</a>
 </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto text-transform: uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Customers</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="#">Products</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link active" href="#">Orders</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">Contact</a>
      </li>
      
      <form class="form-inline mx-5 p-2">
        <i style="color: white;font-size: 20px;" class="fa-solid fa-magnifying-glass mx-4"></i>
        <i style="color: white;font-size: 20px;" class="fa-solid fa-cart-plus mx-3"></i>
       </form>

       
    </ul>

    <form class="form-inline " action="" method="" >

      

     <button class="btn btn-primary mx-2" type="button" >
      <a style="text-decoration: none;color: white;" href="logout.php">Logout</a>
     </button>

     </form>

     <div style="color: white;">
     <?php
      echo $_SESSION["Email"] ;
      ?>
     </div>

   
  </div>
</nav>
</body>
</html>