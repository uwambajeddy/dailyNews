<?php 
include("../database/database.php");
session_start();

if (!(isset($_SESSION["username"]))) {
    header("Location:logout.php");
  }





//get data of the given id to use it in single post

if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $sql = "SELECT * FROM `posts` WHERE `post_id` = '$post_id'";
          $result = mysqli_query($con,$sql);
          $rows = mysqli_fetch_array($result);
          $post_category = $rows['category'];
          $post_title = $rows['title'];
          $post_image = $rows['image'];
          $post_date = $rows['date'];
          $post_content = $rows['content'];
}


//get update for posts different categories

if(isset($_POST['update'])){
  $post_id = $_POST['post_id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  
  $sql = "SELECT * FROM `posts` WHERE `post_id` =$post_id";
   $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  $image = $_FILES['image']['error'] > 0 ? $row['image'] : time() . '_' . $_FILES['image']['name'];
  $imagetmp = $_FILES['image']['tmp_name'];
  $folder = '../images/' . $image;
  move_uploaded_file($imagetmp, $folder);


  $sql2 = "UPDATE `posts` SET `title`= '$title',`content`= '$content',`image`='$image' WHERE `post_id`=$post_id ";
  $query = mysqli_query($con, $sql2);
  if ($query) {
    ?>
    <html><script>alert("DATA UPDATED SUCCESSFULLY")</script></html>
    <?php 
  } else {
    ?>
    <html><script>alert("DATA UPDATE FAILED !!")</script></html>
    <?php 
  }
}

//create posts for different categories

if(isset($_POST['create'])){
  $title = $_POST['title'];
  $content = $_POST['content'];
  $category = $_POST['category'];
  $image = $_FILES['image']['error'] > 0 ? "NO IMAGE" : time() . '_' . $_FILES['image']['name'];
  $imagetmp = $_FILES['image']['tmp_name'];
  $folder = '../images/' . $image;
  move_uploaded_file($imagetmp, $folder);

  $sql = "INSERT INTO `posts` (`title`,`image`,`content`,`category`,`top_story`,`date`,`publish`) VALUES('$title','$image','$content','$category','false',CURDATE(),'false')";
  $result = mysqli_query($con,$sql);
  if($result){
  ?>
    <html><script>alert("NEW POST CREATED !!")</script></html>
    <?php }else{?>
    <html><script>alert("FAILED TO CREATE NEW POST !!")</script></html>
    <?php }

    }

    if(isset($_GET['delete'])){
      $post_id = $_GET["delete"];
      $sql = "SELECT `category` FROM `posts` WHERE `post_id` = $post_id";
      $result = mysqli_query($con,$sql);
      $row =mysqli_fetch_array($result);
      $category = $row['category'];
      $sql2= "DELETE FROM `posts` WHERE `post_id` = $post_id";
      $query = mysqli_query($con,$sql2);
      header("location:categories.php?category=$category");
      };

      if(isset($_GET['topstory'])){
        $post_id = $_GET["topstory"];
        $sql = "SELECT * FROM `posts` WHERE `post_id` = $post_id";
        $result = mysqli_query($con,$sql);
        $row =mysqli_fetch_array($result);
        $category = $row['category'];
        $current_type = $row['top_story'] == "true"?"false":"true";
        $sql2= "UPDATE `posts` SET  `top_story`='$current_type' WHERE `post_id` = $post_id";
        $query = mysqli_query($con,$sql2);
        header("location:categories.php?category=$category");
        };
        
        if(isset($_GET['publish'])){
          $post_id = $_GET["publish"];
          $sql = "SELECT * FROM `posts` WHERE `post_id` = $post_id";
          $result = mysqli_query($con,$sql);
          $row =mysqli_fetch_array($result);
          $category = $row['category'];
          $current_type = $row['publish'] == "true"?"false":"true";
          $sql2= "UPDATE `posts` SET  `publish`='$current_type' WHERE `post_id` = $post_id";
          $query = mysqli_query($con,$sql2);
          header("location:categories.php?category=$category");
          };
    
          /*********aDD a new user******** */
          
          
          if(isset($_POST['updateuser'])){
            $admin_id = $_POST['admin_id'];
            $sql = "SELECT * FROM `admin` WHERE `admin_id` =$admin_id";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            
            $oldpassword = $_POST['password'];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $bio = $_POST["bio"];
            $phonenumber = $_POST['phonenumber'];
            $image = $_FILES['image']['error'] > 0 ? $row['image'] : time() . '_' . $_FILES['image']['name'];
            $imagetmp = $_FILES['image']['tmp_name'];
            $folder = '../images/' . $image;
            
            if($oldpassword == $row["password"]){
            $password = $_POST['newpassword'];
            $Cpassword = $_POST['newpasswordconfirm'];

           if($password == $Cpassword){
            $newpassword = strlen($password) == 0?$row['password']:$password;
            if(strlen($newpassword) >=4){
            move_uploaded_file($imagetmp,$folder);

            $sql = "UPDATE `admin` SET `username`='$username', `email`='$email',`password`='$newpassword',`image`= '$image',`bio`='$bio',`phone_number` = '$phonenumber' WHERE `admin_id` = '$admin_id'";
            $result = mysqli_query($con,$sql);
            if($result){
              ?>
              <html><script>alert("PROFILE UPDATED SUCCESSUFULLY")</script></html>
              <?php 
            }else{
              ?>
              <html><script>alert("FAILED TO UPDATE PROFILE !!")</script></html>
              <?php 
            }

          }else{
            ?>
            <html><script>alert("THE PASSWORD SHOULD BE GREATER THAN 4 !!")</script></html>
            <?php 
            }
          
          }else{
            ?>
          <html><script>alert("THE TWO PASSWORD DOES'NT MATCH !!")</script></html>
          <?php 
          }
        }else{
          ?>
          <html><script>alert("WRONG OLD PASSWORD !!")</script></html>
          <?php }
          };



          if(isset($_POST['newuser'])){
            $category =  strtolower($_POST['privilage']);
            $sql = "SELECT * FROM `admin` WHERE `category` ='$category'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            if($row["category"] != $category){
              $sql2 = "INSERT INTO `admin` (`username`,`email`,`image`,`password`,`bio`,`phone_number`,`category`) VALUES('$category','admin@example.com','user_icon.png','admin','your biograph here','+2500000000','$category') ";
              $results = mysqli_query($con,$sql2);
              if($results){
              ?>
              <html><script>alert("NEW USER CREATED SUCCESSUFULLY")</script></html>
              <?php 
              }else{
                ?>
              <html><script>alert("FAILED TO CREATE NEW USER")</script></html>
              <?php 
              }
              

            }else{
              ?>
              <html><script>alert("PRIVILAGE ALREADY EXISTS")</script></html>
              <?php 
            }
          }

          /***********delete user */

          if(isset($_GET['deleteuser'])){
            $admin_id =  $_GET['deleteuser'];
            if($admin_id != 1){
            $sql = "DELETE FROM `admin` WHERE `admin_id` = $admin_id  ";
            $results = mysqli_query($con,$sql);
            if($results){
              ?>
              <html><script>alert("USER DELETE SUCCESSFULLY")</script></html>
              <?php 
            }else{
              ?>
              <html><script>alert("USER DELETE FAILED")</script></html>
              <?php 
            }
          }else{
            ?>
            <html><script>alert("U CAN'T DELETE ADMIN")</script></html>
            <?php 
          }
          }