<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Pro_form.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class='main_form_div container '>
    <table class="tab">
    <h3 class="head text-center mt-5"> FASHION ADD PRODUCT</h3>
    <hr class="border_bottom"/>
    <form class="QQQ" action="Fashion_Insert_product.php" method="post" enctype="multipart/form-data"  >
  <div class="col">
  <br>
    <div class=" col-sm-12 col-md-12 col-lg-6  mx-auto">
      <input name="Id" type="text" class="form-control" placeholder="Id">
    </div>
   
    <br>
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto">
      <input name="Pic"   type="file" class="form-control" placeholder="Image">
    </div>
    <br>
    
    
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto">
      <input name="Calender"   type="datetime-local" class="form-control" placeholder="Calender">
    </div>
    <br>
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto">
      <input name="F_Text"   type="text" class="form-control" placeholder="Fashion Text">
    </div>
    <br>
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto">
      <button name="insertdata" class="btn btn-primary" type="submit">Submit</button>
    </div>
  </div>
</form>
    
    </table>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>