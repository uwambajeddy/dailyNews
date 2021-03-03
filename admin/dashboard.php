
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
                <h1>Privilage : <?php echo $_SESSION["username"] ?></h1>
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

          <div class="blog flex-content"><h2>Latest posts</h2><p class="create"  onclick="return   create();"><button name="creater"><i class="fa fa-plus" aria-hidden="true"></i> Add a new post</button></p></div>
<div class="overflow blog">
          <table class="table mt-3">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date Posted</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <?php
               $sql = "SELECT * FROM `posts` ORDER BY `post_id` DESC" ;
                 $result = mysqli_query($con,$sql);
                 while($rows = mysqli_fetch_array($result)){?>
              <tr>
                <td><?php echo $rows["post_id"] ?></td>
                <td><?php echo substr($rows["title"],0,40) ?>...</td>
                <td><?php echo $rows["category"] ?></td>
                <td><?php echo $rows["date"] ?></td>
                <td ><a href="./categories.php?category=<?php echo $rows["category"] ?>">Details </a></a></td>
              </tr>
              <?php }?>
              
              
              
             
            </tbody>
          </table>
        </div>
          </section>
          <?php include("./separatedparts/sidebar.php");
     include("./separatedparts/footer.php"); 