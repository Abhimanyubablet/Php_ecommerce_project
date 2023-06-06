<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Edu_Ecom.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>

    <style>
      .Login_background{
      box-shadow:4px 8px 40px 8px rgba(88, 146, 255, 0.2);
      width: 30% ;
      margin: 3% auto;
      padding: 30px;
      border-radius: 5px;
  }
  @media only screen and (max-width: 900px) { 
         .Login_background{ 
              width: 80%;
          }
  }
      </style>
</head>
<body>
    
<?php
include_once "Nav1.php";
?>
   
  <div class="container Login_background mt-4">

    <form action="session.php" method="post" enctype="multipart/form-data" >
      <div style="display: flex;justify-content: center;">
        <i style="font-size: 30px;" class="fa-solid fa-user mt-2"></i>
       <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; " class="text-center mt-2 mx-2" >Login</h3>
       </div>

        <div class="form-group mt-3">
          <label for="exampleInputEmail1">Email/UserId</label>
          <input name="Email" type="text" class="form-control">

          <small id="emailHelp" class="form-text text-muted">We'll never share your email or userid with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="Pass" type="password" required class="form-control" >
        </div>

        <!-- <div class="form-group form-check">
          <input type="checkbox"
          required class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->

        <button type="submit" name="save" class="btn btn-primary">Submit</button>
      </form>
       </div>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>