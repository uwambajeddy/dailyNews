
<section class="sidebar">
            <div class="blog">
              <center>
                <h1>Privilage : <?php echo $_SESSION["username"] ?></h1>
              </center>
            </div>
          <div class="search-2 blog">
            <form action="./search.php" method="get">
              <input type="text" name="input" placeholder="search..." />
              <button name="search"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <div class="blog"><a href="./admin.php"> <i class="fas fa-user"></i> EDIT PROFILE</a></div>
          <div class="blog"><a href="./dashboard.php"> <i class="fas fa-home"></i> LATEST POST</a></div>
          <div class="blog"><a href="./categories.php?category=sports"> <i class="far fa-futbol"></i> SPORTS</a></div>
          <div class="blog"><a href="./categories.php?category=music"><i class="fas fa-music"></i> MUSIC</a></div>
          <div class="blog"><a href="./categories.php?category=politics"><i class="fas fa-users"></i> POLITICS</a></div>
          <div class="blog"><a href="./categories.php?category=history"><i class="fa fa-history" aria-hidden="true"></i> HISTORY</a></div>
          <div class="blog"><a href="./topstories.php?category=top_story"><i class="fa fa-trophy" aria-hidden="true"></i> TOP STORIES</a></div>
          <div class="blog"><a href="./published.php?category=published"><i class="fa fa-upload" aria-hidden="true"></i> PUBLISHED STORIES</a></div>
          <div class="blog"><a href="./categories.php?category=aboutus"><i class="fa fa-folder"></i>  ABOUT US</a></div>


        </section>
      </section>