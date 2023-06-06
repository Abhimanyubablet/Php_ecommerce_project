<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="Edu_Ecom.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/84b29d853c.js" crossorigin="anonymous"></script>


    <style>
    .Sign_Up_background{
    box-shadow:4px 8px 40px 8px rgba(88, 146, 255, 0.2);
    width: 50% ;
    margin: 3% auto;
    padding: 30px;
    border-radius: 5px;
}
@media only screen and (max-width: 900px) { 
       .Sign_Up_background{ 
            width: 80%;
        }
}
    </style>
</head>
<body >

<?php
include_once "Nav1.php";
?>

<h3 class="text-center mt-4">Create Account</h3>
<div class="container mt-4 Sign_Up_background">
    <form action="InsertPage.php" method="post" enctype="multipart/form-data" >
                
        <div class="form-row">
            
            <input name="C_Id" required type="hidden" class="form-control" id="inputEmail4">
             
          <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input name="Name" required type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">UserId</label>
            <input name="UserId" required type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input name="Email" required type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input name="Pass" required type="text" class="form-control" id="inputPassword4">
          </div>
        </div>

        <div class="form-group mt-2 ">
          <label for="inputAddress">Address</label>
          <input name="Address" required type="text" class="form-control mx-2" id="inputAddress" placeholder="1234 Main St">
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input name="City" required type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select name="State" required id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>Bihar</option>
              <option>Odisha</option>
              <option> West Bengal</option>
              <option>Delhi</option>
              <option>U.P</option>
              <option>Tamilnadu</option>
            </select>
          </div>  
          <div class="form-group col-md-6 mt-2">
            <label for="inputCity">Photo</label>
            <input name="Photo" required type="file" class="form-control" id="inputCity">
          </div>
          
        </div>
        <div class="form-group mt-2">
          
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" name="insertdata" class="btn btn-primary mt-2">Submit</button>
      </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>