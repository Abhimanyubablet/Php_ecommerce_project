<?php
session_start();
include_once "connection.php";
echo $_SESSION["Email"] ." . ";
$sql=mysqli_query($conn,"SELECT * FROM people WHERE Id= '".$_SESSION["Id"]."' ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
  
  <?php
      $i=0;
      while($row=mysqli_fetch_array($sql))
      {
        ?>
           <img style="width:"100px" src="<?php echo $row["Image"] ; ?>" alt="">
            
           <tr>
            <!-- <td>
              <p>For Changing some data visit <a href="update.php ?  Id= <?php echo $row["Id"] ; ?> " >update page </a> </p>
            </td>
           </tr> -->
        <?php
        $i=0;
      }
      ?>

 <?php
// echo " For  <a href='logout.php'> Log out.</a>" . "<br>" ;
 ?>




</body>
</html>
