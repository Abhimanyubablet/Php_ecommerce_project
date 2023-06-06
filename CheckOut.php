
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
    <form method="post" action="Address.php">
      <div class="col-7 col">
        <h3 class="topborder"><span>Delivery Address</span></h3>
        <div class="width50 padright">
         
          <input type="hidden" name="add_Id" >
        </div>
        <label for="country">Country</label>
        <select name="Country" id="country" required>
          <option value="">Please select a country</option>
          <option >India</option>
          <option >Not India</option>
        </select>
        <div class="width50 padright">
          <label for="Name"> Name</label>
          <input type="text" name="Name" id="fname" required>
        </div>

        <div class="width50">
          <label for="lname">User_Id</label>
          <input type="text" name="User_Id" id="lname" required>
        </div>

        
        <label for="address">Address</label>
        <input type="text" name="Address" id="address" required>
      
        <div class="width50 padright">
          <label for="email">Email Address</label>
          <input type="text" name="Email" id="email" required>
        </div>

        <div class="width50">
          <label for="tel">Phone</label>
          <input type="text" name="Phone" id="tel" required>

          <input type="hidden" name="C_Id" id="tel" required>

          <input name="submit_address" type="submit">
        </div>
        
      </div>


      
    </form>
  </div>
</div>
</body>
</html>