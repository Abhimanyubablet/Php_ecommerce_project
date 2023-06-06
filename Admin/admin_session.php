<?php
session_start();
include_once "connection.php";

if(isset($_POST["save"]))
{
    extract ($_POST);
    
    $sql=mysqli_query($conn,"SELECT * FROM admin_log WHERE Username='$Username'  and Pass= '$Pass' ");
    
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Username"]=$row["Username"];
        
       
        header("Location:Dashboard.php");
        
    }
    else{
        
        echo "invalid";
       
    }
}
?>
