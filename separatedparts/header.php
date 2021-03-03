<?php include("./process.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./fonts/nunito/stylesheet.css" />
    <link rel="shortcut icon" href="./images/Plugin.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Daily News</title>
  </head>
  <body>
    <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <div class="navlist-2">
        <ul>
          <li>
            <h1><a href="./index.php">Home</a></h1>
          </li>
          <li>
            <h1>
              <a href="#">Categories <i class="fas fa-caret-down"></i></a>
            </h1>
            <ul>
              <li>
                <h1><a href="./sports.php">Sports</a></h1>
              </li>
              <li>
                <h1><a href="./music.php">Music</a></h1>
              </li>
              <li>
                <h1><a href="./politics.php">Politics</a></h1>
              </li>
              <li>
                <h1><a href="./history.php">History</a></h1>
              </li>
            </ul>
          </li>
          <li>
            <h1><a href="./aboutus.php">About us</a></h1>
          </li>
          <li><span class="day"></span></li>
        </ul>
      </div>
    </div>
    <div class="overlay hidden"></div>

    <!-- main contains all the content except the above for mobile devices  -->
    <main class="background1">
      <section class="navbar">
        <div class="logo">
          <h1><a href="./index.php">DAILY NEWS</a></h1>
        </div>
        <div class="show-modal">
          <i class="fas fa-bars"></i>
        </div>
        <div class="navlist">
          <ul>
            <li>
              <h1><a href="./index.php">Home</a></h1>
            </li>
            <li>
              <h1>
                <a href="#">Categories</a>
              </h1>
              <ul>
                <span></span>
                <li>
                  <h1><a href="./sports.php">Sports</a></h1>
                </li>
                <li>
                  <h1><a href="./music.php">Music</a></h1>
                </li>
                <li>
                  <h1><a href="./politics.php">Politics</a></h1>
                </li>
                <li>
                  <h1><a href="./history.php">History</a></h1>
                </li>
              </ul>
            </li>
            <li>
              <h1><a href="./aboutus.php">About us</a></h1>
            </li>
            <li><span class="day day-night"></span></li>
          </ul>
        </div>
      </section>
      <section class="flex-box">
        <section class="container search-1">
          <div class="blog">
            <form action="./search.php" method="get">
              <input type="text" name="input" placeholder="search..." />
              <button name="search" onclick="return searcher()"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </section>