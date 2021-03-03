<?php  include("./process.php");
 $category = $_SESSION["username"]; ?>
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
    <link rel="stylesheet" href="./css/userprofile.css" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Daily News | | ADMIN</title>
  </head>
  <?php 
$sql = "SELECT * FROM `admin` WHERE `category` = '$category'" ;
$sql2 = "SELECT * FROM `admin`" ;
                 $results = mysqli_query($con,$sql); 
                 $result = mysqli_query($con,$sql);
                 $result2 = mysqli_query($con,$sql2);
                 $row=mysqli_fetch_array($result) ?>
  <body>
 
    <div class="updateCreate1 updateCreate hidden">
      <button class="close-button">X</button>
      <h3>Create a new user</h3>
      <br />
      <form action="" method="post">
        <h1 style="color:green">USER PASSWORD BY DEFAULT IS "admin" AND USERNAME IS THE USER'S PRIVILAGE NAME</h1><br>
        <h1>enter user privillage</h1>
        <input type="text" name="privilage" /><br />
        <button name="newuser">SUBMIT</button>
      </form>
    </div>
   
    <div class="updateCreate2 updateCreate hidden">
      <button class="close-button">X</button>
      <h3>Table of user</h3>
      <br />
      <table class=" table mt-3">
        <thead  class="table-dark">
          <tr>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>phone number</th>
            <th>category</th>
            <th>DELETE USER</th>
          </tr>
        </thead>
        <tbody>
        <?php while($rows=mysqli_fetch_array($result2)){?>
          <tr><td><?php echo $rows["username"] ?></td>
          <td><?php echo $rows["email"] ?></td>
          <td><?php echo $rows["password"] ?></td>
          <td><?php echo $rows["phone_number"] ?></td>
          <td><?php echo $rows["category"] ?></td>
          <td ><a href="./admin.php?deleteuser=<?php echo $rows["admin_id"] ?>" >DELETE</a></td>
        </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
   
    <?php while($rows=mysqli_fetch_array($results)){?>
    <div class="createUpdate hidden">
      <button class="close-button1">x</button>
      <h3>Edit profile</h3>
      <br />
      <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="admin_id" value="<?php echo $rows["admin_id"] ?>" /><br />
        <h1>Username</h1>
        <input type="text" name="username" value="<?php echo $rows["username"] ?>" /><br />

        <h1>Phone number</h1>
        <input type="number" name="phonenumber" value="<?php echo $rows["phone_number"] ?>" /><br />

        <h1>Email</h1>
        <input type="email" name="email" value="<?php echo $rows["email"] ?>" /><br />

        <h1>Password</h1>
        <input type="password" name="newpassword" /><br />

        <h1>Confirm password</h1>
        <input type="password" name="newpasswordconfirm" /><br />
        <h1>Profile image</h1>
        <input type="file" name="image" accept="image/jpeg"/><br />
        <h1>Bio</h1>
        <textarea name="bio" id="" cols="30" rows="5"><?php echo $rows["bio"] ?></textarea><br />
        <h1 style="color: red">Enter old password to confirm changes</h1>
        <input type="password" name="password" required="required" /><br />
        <button name="updateuser">SUBMIT</button>
      </form>
    </div>
    <div class="overlay-1 hidden"></div>
    <?php }?>
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
          <h1>
            <a href="./dashboard.php"
              ><i class="fas fa-tachometer-alt"></i> DAILY NEWS DASHBOARD</a
            >
          </h1>
        </div>
        <div class="show-modal">
          <i class="fas fa-bars"></i>
        </div>
        <div class="navlist">
          <ul>
            <li>
              <h1>
                <a href="./logout.php?username=<?php echo $_SESSION["username"]?>"> <i class="fas fa-sign-out-alt"></i> Logout</a>
              </h1>
            </li>
            <li><span class="day day-night"></span></li>
          </ul>
        </div>
      </section>

      <section class="flex-box">
        <section class="container">
          <div class="blog">
            <center>
              <h2><?php echo $_SESSION['username'] ?> Profile</h2>
            </center>
          </div>
          <div class="blog userprofile">
            <img src="../images/<?php echo $row["image"] ?>" alt="" />
            <p><b>Username : </b> <?php echo $row["username"] ?></p>
            <p><b>Call : </b> <?php echo $row["phone_number"] ?></p>
            <p><b>Email : </b><?php echo $row["email"] ?></p>
            <br />
            <p><b>BIO : </b></p>
            <p>
            <?php echo $row["bio"] ?>
            </p>
          </div>
        </section>

        <section class="container">
          <div class="blog flex-content"><h2>Edit profile</h2></div>
          <div class="blog">
            <p class="create">
              <a href="#" onclick="return create()"
                ><i class="fa fa-plus" aria-hidden="true"></i> CLICK HERE TO
                EDIT
              </a>
            </p>
            
          </div>
          <div class="blog <?php echo $category ?> hidden">
            <p>
            <a   class="update" onclick="return   update(1);"><i class="fa fa-user" aria-hidden="true"></i> ADD NEW USER </a></p>
          </div>
          <div class="blog <?php echo $category ?> hidden">
            <p>
            <a   class="update" onclick="return   update(2);"><i class="fa fa-users" aria-hidden="true"></i> ALL USERS USER </a></p>
          </div>
        </section>

       
        <script> let admin = document.querySelectorAll(".admin");
          for(let a=0 ; a < admin.length;a++ ){
            admin[a].classList.remove("hidden");
          }
        </script>
        <?php include('./separatedparts/sidebar.php');
       include('./separatedparts/footer.php');
