<?php

session_start();
unset($_GET["username"]);
session_destroy();
header('location:index.php');