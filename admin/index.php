<?php include('./login.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../images/Plugin.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css" />
    <link rel="stylesheet" href="../fonts/nunito/stylesheet.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="./css/login.css" />

    <title>Daily News | | login</title>
  </head>
  <body>
    <main>
      <section class="submition-form">
        <p><i class="fas fa-sign-in-alt"></i> LOGIN FORM</p>
        <form action="./index.php" method="post">
          <select name="privilage" id="">
            <option value="false">select privilage</option>
            <?php $sql = "SELECT `category` FROM `admin`";
                   $result = mysqli_query($con,$sql);
                  while($rows = mysqli_fetch_array($result)){ ?>
            <option value="<?php echo $rows["category"] ?>"><?php echo $rows["category"] ?></option>
            <?php } ?>
          </select><br>
          <span><i class="fas fa-user"></i></span>
          <input type="text" name="username" placeholder="username or email" /><br />
          <span><i class="fas fa-lock"></i></span>
          <input type="password" name="password" placeholder="password" /><br />
          <button name="signin">sign in</button>
        </form>
      </section>
    </main>
    <div class="circle1 circle"></div>
    <div class="circle2 circle"></div>
    <div class="circle3 circle"></div>
    <div class="circle4 circle"></div>
  </body>
</html>
