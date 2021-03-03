<?php
include('./database/database.php');




//get data of the given id to use it in single post

if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $sql = "SELECT * FROM `posts` WHERE `post_id` = $post_id  AND `publish` = 'true'";
          $result = mysqli_query($con,$sql);
          $rows = mysqli_fetch_array($result);
          $post_category = $rows['category'];
          $post_title = $rows['title'];
          $post_image = $rows['image'];
          $post_date = $rows['date'];
          $post_content = $rows['content'];
}



/* <?php
$query_date = "INSERT INTO tablename (col_name, col_date) VALUE ('DATE: Auto CURDATE()', CURDATE() )”;
?> */