<?php
session_start();
include_once "connection.php";

if(isset($_POST["save"]))
{
    extract ($_POST);
    $Email=$_POST['Email'];
    $sql=mysqli_query($conn,"SELECT * FROM customer_details WHERE  ( Email='$Email' OR User_Id = '$Email') and Pass= '$Pass' ");
    
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["C_Id"]=$row["C_Id"];
        $_SESSION["Name"]=$row["Name"];
        $_SESSION["Email"]=$row["Email"];
        $_SESSION["User_Id"]=$row["User_Id"];

        header("Location:Edu_Ecom.php");
        // echo "success";
    }
    else{
        echo '<script language="javascript">';
        echo 'window.alert("You have Invalid Credential ")';
        echo '</script>';
        // header("Location:Login.html");
    }

}

   

?>
