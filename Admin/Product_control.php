<?php
include_once "connection.php";
include_once "Header_admin.php";
$sql=mysqli_query($conn,"SELECT * FROM Accessories");

// if (mysqli_fetch_rows($sql)>0)
// {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
    <script src="table.js"></script>
    <style>
      .table-img{
        width: 50px;
      }
    </style>
</head>
<body>
    <section style="margin-top: 80px;" class="container mycon">
        
        <h1 style='color:black; margin:20px' 
        >Product Table</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>P_Name</th>
                <th>Image</th>
                <th>View</th>
                <th>Delete</th>
                <th>status</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">

            <tbody>
            <?php
             $i=0;
              while($row=mysqli_fetch_array($sql))
             {

              if($row['status']==1)
              {
             ?>
              <tr>
                <td><?php echo $row["Id"] ; ?></td>
                <td><?php echo $row["P_name"] ; ?></td>
                <td><img class="table-img" src="<?php echo $row["Image"] ; ?>" alt=""></td>
                <td>
                   <?php echo ' <a href="Product_Update.php? Id=' .$row['Id'].' & category=' .$row['category'] . '"  > <button>Edit</button> <a/> '; ?>
                  
                </td>
                <td>
                  <a href="Product_Del.php ?Id=<?php echo $row["Id"]; ?>">
                    <button class="btn btn-primary" > Delete</button>
                  </a></td>
                  <td>
                    <?php
                    // if ($row['status']==1) 
                    // {
                      echo '<p><a href="active.php? Id=' .$row['Id'].'&status=0">Block<a/></p>';
                    }
                    else{
                      echo '<p><a href="active.php? Id=' .$row['Id'].'&status=1">Unblock<a/></p>';
                    }
                     ?>
                  </td>
              </tr>
              <?php
          $i++;
          }
        // }
           ?>
           <?php
            //  }
           ?>
            </tbody>
          </table>
        </div>
      </section>
      
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
</body>
</html>