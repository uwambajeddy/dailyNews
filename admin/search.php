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
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="./css/search.css" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <title>Daily News | | DASHBOARD</title>
  </head>
  <body>
    <?php include("./separatedparts/header.php")?>
    <?php if(isset($_GET["search"])){
            $content = $_GET["input"];
            $sql = "SELECT  * FROM `posts` WHERE `title` LIKE '%" . $content . "%' OR `date` LIKE '%" . $content . "%' OR `content` LIKE '%" . $content . "%' ";
            $result = mysqli_query($con, $sql);?>
      <section class="flex-box">
        <section class="container search-1">
          <div class="blog">
            <form action="./search.php" method="get">
              <input type="text" name="input" placeholder="search..." />
              <button name="search"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </section>
        <section class="container">
          <div class="blog">
            <h2>SEARCH RESULT : <b> <?php echo $content ?></b></h2>
          </div>
          <?php  
          if(mysqli_num_rows($result)){
           while ($rows = mysqli_fetch_array($result)){
           ?>
          <div class="flex-content blog">
            <div class="image">
              <img src="../images/<?php  echo  $rows["image"] ?>"  alt="" />
            </div>
            <div class="block-content">
              <div class="topic">
                <h3>
                  <a href="./categories.php?category=<?php  echo $rows["category"] ?>">
                  <?php  echo $rows["title"] ?>
                  </a>
                </h3>

                <p><?php  echo $rows["date"] ?></p>
              </div>
              <div class="content">
                <p>
                <?php echo substr($rows["content"],0,250) ?>...
                </p>
                <br />

                 <p><a href="./singlepost.php?post_id=<?php  echo $rows["post_id"] ?>"> more specific result...</a></p>    
              </div>
            </div>
          </div>
          <?php }}else{ ?>
             <div class="blog "><h3>NO RESULT FOR YOUR SEARCH</h3></div>
         <?php }}?>
        </section>
       <?php include('./separatedparts/sidebar.php');
       include('./separatedparts/footer.php');