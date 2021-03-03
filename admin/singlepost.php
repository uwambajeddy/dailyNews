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
                <h1>Privilage : <?php $_SESSION["username"]?></h1>
              </center>
 
            </div>
        </section>
        <section class="container">
          <div class="search-1 blog">
            <form action="./search.php" method="get">
              <input type="text" name="input" placeholder="search..." />
              <button name="search"><i class="fas fa-search"></i></button>
            </form>
          </div>

          <div class="blog flex-content"><h2><?php echo $post_category ?> posts</h2> <p class="create"  onclick="return   create();"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Add a new post</a></p></div>
<div class=" blog">
<section class="container">
          <div class="blog">
            <div class="topic">
              <h3>
                <a href="#"><?php  echo  $post_title ?></a
                >
              </h3>
              <p><?php echo $post_date ?></p>
            </div>
            <div class="image">
              <center>
                <img src="../images/<?php echo $post_image ?>" alt="" />
              </center>
            </div>
            <div class="content">
              <p>
              <?php echo $post_content ?>
              </p>
            </div>
          </div>

        </section>
        </div>
          </section>
          <?php include("./separatedparts/sidebar.php");
     include("./separatedparts/footer.php"); 