<?php 
//user loggin
include("../database/database.php");

session_start();

if(isset($_POST["signin"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $privilage = $_POST["privilage"];

    if($privilage == "false"){ 
        ?>
        <html><script>alert("CHOOSE A PRVILAGE PLEASE !!")</script></html>
        <?php } 
          else{

    $sql = "SELECT * FROM `admin` WHERE `category` = '$privilage'";
    $result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($result);


    if($rows["username"] == $username || $rows["email"] == $username && $rows["password"] == $password){
   
         header("location:dashboard.php");
         $_SESSION["username"] = $rows["category"];
    }else{?>
        <html><script>alert("WRONG USERNAME/EMAIL OR PASSWORD")</script></html>
   <?php }
}
}


