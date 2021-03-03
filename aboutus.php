<?php include('./separatedparts/header.php') ?>
        <section class="container">
          <div class="blog"><h2> ABOUT US</h2></div>
          <?php $sql = "SELECT `post_id`,`title`,`image`,SUBSTRING(`content`,1,250) AS `content` ,`category`,`date` FROM `posts` WHERE `category` = 'aboutus' AND `publish`= 'true' ORDER BY `post_id` DESC ";
          $result = mysqli_query($con,$sql);
           while ($rows = mysqli_fetch_array($result)){
          ?>
          <div class="blog">
            <div class="topic">
              <h3>
                <a href="./singlepost.php?post_id=<?php echo $rows['post_id'];?>">
                 <?php echo $rows['title']; ?></a
                >
              </h3>
              <p><?php echo $rows['date']; ?></p>
            </div>
            <div class="image">
              <center>
                <img src="./images/<?php echo $rows['image']; ?>" alt="" />
              </center>
            </div>
            <div class="content">
              <p>
              <?php echo $rows['content']; ?>
              </p>
              <br />

              <p><a href="./singlepost.php?post_id=<?php echo $rows['post_id'];?>">read more ...</a></p>
            </div>
          </div>
          <?php }?>
         
        </section>
        
      <?php include('./separatedparts/sidebar.php')?>
      <?php include('./separatedparts/footer.php')?>


