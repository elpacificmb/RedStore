<?php

require_once 'core/process.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Shop Store Ecommerce Web App">
    <meta name="keywords" content="Shop, Store, Ecommerce, Web App">
    <meta name="author" content="El Pacific Binagha">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffd6d6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RedStore | Ecommerce </title>
  <!-- all css -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/icons/icon-96x96.png">
  <link rel="icons" type="image/png" sizes="192x192"  href="img/icons/icon-192x192.png">
  <!-- <link rel="manifest" href="manifest.json"> -->
  <!-- ios support -->
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#ffd6d6">
</head>
<body>
  <!---------- Header ---------->
  <div class="header">
    <div class="container">

      <div class="navbar">
  
        <div class="logo">
          <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="pages/products.php">Products</a></li>
            <li><a href="pages/about.php">About Us</a></li>
            <li><a href="pages/contact.php">Contact Us</a></li>
            <?php if (isset($_SESSION['username'])): ?>
              <li><a href="core/process.php?logout='1'" style="color: red;">Logout</a></li>
              <li><a href="pages/productslist.php">Admin</a></li>
            <?php else: ?>
              <li><a href="pages/userlogin.php">Login</a></li>
            <?php endif ?>
          </ul>
        </nav>
        <a href="pages/cart.php"><img src="img/cart.png" alt="cart" class="cart-icon"></a>
        <img src="img/menu.png" alt="menu" class="menu-icon" onclick="menutoggle()">
  
      </div>
      <div class="row">
  
        <div class="col-2">
          <h1>Right place <br>for new Style!</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br> Deserunt sint beatae atque autem iure vel sunt officiis omnis tempore aliquid.
          </p>
            <!-- Successfull login message -->
            <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
              <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
            <?php endif ?>
            <!-- End Successfull login message -->
          
          <a href="pages/products.php" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="img/image1.png" alt="banner">
        </div>
  
      </div>
  
    </div>
  </div>