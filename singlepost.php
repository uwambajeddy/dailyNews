
       <?php include("./separatedparts/header.php")?>
       <section class="container">
          <div class="blog"><h2><?php echo $post_category ?>  post</h2></div>
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
                <img src="./images/<?php echo $post_image ?>" alt="" />
              </center>
            </div>
            <div class="content">
              <p>
              <?php echo $post_content ?>
              </p>
            </div>
          </div>

        </section>
        <?php include("./separatedparts/sidebar.php")?>
        <?php include("./separatedparts/footer.php")?>