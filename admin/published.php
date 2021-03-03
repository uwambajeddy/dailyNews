<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../fonts/nunito/stylesheet.css" />
    <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css" />
    <link rel="shortcut icon" href="../images/Plugin.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="./css/dashboard.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Daily News | | DASHBOARD</title>
  </head>
<?php include("./separatedparts/header.php");?>
<section class="flex-box">
        <section class="container username">
            <div class="blog">
              <center> 
                <h1>Privilage :  <?php $_SESSION["username"]?></h1>
              </center>
 
            </div>
        </section>
        <section class="container">
          <div class="search-1 blog">
            <form action="">
              <input type="text" placeholder="search..." />
              <button><i class="fas fa-search"></i></button>
            </form>
          </div>
          <div class="blog flex-content"><h2><?php echo $category ?> posts</h2> <p class="create" onclick="return   create();"><button name="creater"><i class="fa fa-plus" aria-hidden="true"></i> Add a new post</button></p></div>
          <div class="overflow blog">
          <table class=" table mt-3">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date Posted</th>
                <th>Publish</th>
              </tr>
            </thead>
            <tbody>
            <?php
                 while($row = mysqli_fetch_array($result_publish)){?>
                
              <tr>
                <td><?php echo $row["post_id"] ?></td>
                <td><img src="../images/<?php echo $row["image"] ?>" alt=""></td>
                <td><?php echo $row["title"] ?></td>
                <td><a href="./singlepost.php?post_id=<?php echo $row['post_id'];?>" class="none"><?php echo substr($row["content"],0,50 )?>...</a></td>
                <td><?php echo $row["date"] ?></td>
                <td ><a href="./published.php?publish=<?php echo $row["post_id"] ?>"  ><?php echo $row["publish"]?> </a></td>
              </tr>
              
              <?php } ?>
              
             
            </tbody>
          </table>
        </div>
          </section>
        
      <?php include("./separatedparts/sidebar.php");
     include("./separatedparts/footer.php"); 