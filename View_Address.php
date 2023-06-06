<?php
session_start();
include_once "connection.php";
$C_Id=$_SESSION['C_Id'];
$P_Id=$_GET['P_Id'];
$sql=mysqli_query($conn,"SELECT * FROM customer_address WHERE C_Id='$C_Id'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <table border="2"" style="margin:auto; ">
        <form action=""> 
            <tr>
                <!-- <td>Id</td> -->
                <td>Country</td>
                <td>Name</td>
                <td>User_Id</td>
                <td>Address</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Order</td>
                <td>Add Address</td>
                
            </tr>
            <?php
            
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
                 <tr>
                    <!-- <td class="my" ><?php echo $row["Id"]; ?></td> -->
                    <td class="my" ><?php echo $row["Country"]; ?></td>
                    <td class="my" ><?php echo $row["Name"]; ?></td>
                    <td class="my" ><?php echo $row["User_Id"]; ?></td>
                    <td class="my" ><?php echo $row["Address"]; ?></td>
                    <td class="my" ><?php echo $row["Email"]; ?></td>
                    <td class="my" ><?php echo $row["Phone"]; ?></td>
                    <td class="my" ><?php echo "<a href='Order_View.php ? add_Id=" . $row['add_Id']." &P_Id=$P_Id &C_Id=$C_Id'>Order<a/>" ;?></td>

                    

                    
                    
                 </tr>
                <?php
                $i++;
            }
            ?>
             <tr>
                <td colspan='7'></td>
               <td class="my" ><a href="CheckOut.php">Add Address</a></td>
             </tr>
        </form>
    </table>
</body>
</html>