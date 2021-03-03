<section class="sidebar">
          <div class="search-2 blog">
            <form action="./search.php" method="get">
              <input type="text" name="input" placeholder="search..." />
              <button name="search" onclick="return searcher()"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <div class="blog"><h2>TOP STORIES</h2></div>
          <?php $sql = "SELECT * FROM `posts` WHERE `top_story` = 'true' AND `publish` = 'true'  ORDER BY `post_id` DESC";
            $result =  mysqli_query($con, $sql); 
      while($rows = mysqli_fetch_array($result)){ ?>
          <div class="blog">
            <div class="image">
              <center>
                <img src="./images/<?php echo $rows['image'];?>" alt="" />
              </center>
            </div>
            <div class="content">
              <h3> <a href="./singlepost.php?post_id=<?php echo $rows['post_id'];?>"> <?php echo $rows['title'];?> </a></h3>
            </div>
          </div>
          <?php } ?>
        </section>
      </section>