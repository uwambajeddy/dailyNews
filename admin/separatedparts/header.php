<?php  include("./process.php"); 
?>
<?php 
 $category =$_GET["category"]??'none'; 
 $sql2 =  "SELECT * FROM `posts` WHERE `top_story` = 'true' ORDER BY `post_id` DESC" ;
 $sql3 =  "SELECT * FROM `posts` WHERE `publish` = 'true' ORDER BY `post_id` DESC" ;
$sql = "SELECT * FROM `posts` WHERE `category` = '$category' ORDER BY `post_id` DESC" ;
                 $results = mysqli_query($con,$sql); 
                 $result_top = mysqli_query($con,$sql2); 
                 $result_publish = mysqli_query($con,$sql3); 
                 $result = mysqli_query($con,$sql); ?>
  <body>
    <?php while($rows=mysqli_fetch_array($results)){?>
      <div class="updateCreate<?php echo $rows['post_id']?> updateCreate hidden">
            <button class="close-button">X</button>
            <h3>Update post</h3><br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="<?php echo $rows['post_id']?>"><br>
            <h1> Update title</h1>
                <input type="text" name="title" value="<?php echo $rows['title']?>"><br>
                <h1>Update image</h1>
                <input name="image"  accept="image/jpeg" type="file" ><br>
            <h1>Update content</h1>
                <textarea name="content" id="" cols="30" rows="5" ><?php echo $rows['content']?></textarea><br>
                <button name="update">Submit</button>
            </form>
        </div>
        <div class="overlay-1 hidden"></div>
        <?php }?>
      <div class="createUpdate hidden">
            <button class="close-button1">x</button>
            <h3>Create post</h3><br>
            <form action="" method="post" enctype="multipart/form-data">
              <h1>Select Category</h1>
              <select name="category" id="">
               <option value=""></option>
               <option value="sports">Sports</option>
               <option value="music">Music</option>
               <option value="politics">Politics</option>
               <option value="history">History</option>
               <option value="aboutus">About us</option>
              </select><br>
            <h1>Title</h1>
                <input type="text" name="title" ><br>
                <h1>Image</h1>
                <input type="file" accept="image/jpeg" name="image" ><br>
            <h1>Content</h1>
                <textarea name="content" id="" cols="30" rows="5" ></textarea><br>
                <button name="create">Submit</button>
            </form>
        </div>
        <div class="overlay-1 hidden"></div>
    <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <div class="navlist-2">
        <ul>
          <li>
            <h1>
              <a href="./admin.php"><i class="fas fa-user"></i> EDIT PROFILE</a>
            </h1>
          </li>
          <li>
            <h1>
              <a href="./dashboard.php"
                ><i class="fas fa-home"></i> LATEST POST</a
              >
            </h1>
          </li>
          <li>
            <h1>
              <a href="./categories.php?category=sports"><i class="far fa-futbol"></i> SPORTS</a>
            </h1>
          </li>
          <li>
            <h1>
              <a href="./categories.php?category=music"><i class="fas fa-music"></i> MUSIC</a>
            </h1>
          </li>
          <li>
            <h1>
              <a href="./categories.php?category=politics"><i class="fas fa-users"></i> POLITICS</a>
            </h1>
          </li>
          <li>
            <h1>
              <a href="./categories.php?category=history"
                ><i class="fa fa-history" aria-hidden="true"></i> HISTORY</a
              >
            </h1>
          </li>
          <li>
            <h1>
              <a href="./topstories.php?category=top_story"><i class="fa fa-trophy" aria-hidden="true"></i> TOP STORIES</a>
            </h1>
          </li>
          <li>
            <h1>
              <a href="./published.php?category=published"><i class="fa fa-upload" aria-hidden="true"></i> PUBLISHED STORIES</a>
            </h1>
          </li>
          <li><h1><a href="./categories.php?category=aboutus"><i class="fa fa-folder"></i> ABOUT US</a></h1></li>
          <li><span class="day day-night"></span></li>
          <li>
            <h1>
              <a href="./logout.php?username=<?php echo $_SESSION["username"]?>"> <i class="fas fa-sign-out-alt"></i> Logout</a>
            </h1>
          </li>
        </ul>
      </div>
    </div>
    <div class="overlay hidden"></div>

    <!-- main contains all the content except the above for mobile devices  -->
    <main class="background1">
        
      <section class="navbar">
        
        <div class="logo">
          <h1><a href="./dashboard.php"><i class="fas fa-tachometer-alt"></i> DAILY NEWS  DASHBOARD</a></h1>
        </div>
        <div class="show-modal">
          <i class="fas fa-bars"></i>
        </div>
        <div class="navlist">
          <ul>
            <li>
              <h1><a href="./logout.php?username=<?php echo $_SESSION["username"]?>"> <i class="fas fa-sign-out-alt"></i> Logout</a></h1>
            </li>
            <li><span class="day day-night"></span></li>
          </ul>
        </div>
      </section>
      
      