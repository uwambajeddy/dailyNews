<?php include('./separatedparts/header.php')?>
<?php if(isset($_GET["search"])){
            $content = $_GET["input"];
            $sql = "SELECT  * FROM `posts` WHERE `title` LIKE '%" . $content . "%' OR `date` LIKE '%" . $content . "%' OR `content` LIKE '%" . $content . "%' ";
            $result = mysqli_query($con, $sql);?>
        <section class="container">
         
          <div class="blog ">
            <h2>SEARCH RESULT : <b><?php echo $content ?></b></h2>
          </div>
          <div class="searcher blog hidden"><h3>NO RESULT FOR YOUR SEARCH</h3></div>
          <?php  
          if(mysqli_num_rows($result)){
           while ($rows = mysqli_fetch_array($result)){
           ?>
          <div class="flex-content blog <?php echo $rows['publish'] ?> hidden">
            <div class="image">
              <img src="./images/<?php  echo  $rows["image"] ?>" alt="" />
            </div>
            <div class="block-content">
              <div class="topic">
                <h3>
                  <a href="./singlepost.php?post_id=<?php  echo $rows["post_id"] ?>">
                  <?php  echo $rows["title"] ?></a
                  >
                </h3>
                <p><?php  echo $rows["date"] ?></p>
              </div>
              <div class="content">
                <p>
                <?php echo substr($rows["content"],0,250) ?>...
                </p>
                <br />

              <p><a href="./singlepost.php?post_id=<?php echo $rows['post_id'];?>"> more specific result...</a></p>
              </div>
            </div>
          </div>
          <?php 
         }
            } 
          }?>
        </section>
        <?php include('./separatedparts/sidebar.php')?>
        <?php include('./separatedparts/footer.php')?>
       