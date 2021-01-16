<?php

require_once '../core/process.php';

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
  <link rel="stylesheet" href="../css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../img/icons/icon-96x96.png">
  <link rel="icons" type="image/png" sizes="192x192"  href="../img/icons/icon-192x192.png">
  <!-- <link rel="manifest" href="../manifest.json"> -->
  <!-- ios support -->
  <link rel="apple-touch-icon" href="../img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#ffd6d6">
</head>
<body>
  <!---------- Header ---------->
    <div class="container">
      <div class="navbar">
  
        <div class="logo">
          <a href="../index.php"><img src="../img/logo.png" alt="logo"></a>
        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="../index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php if (isset($_SESSION['username'])): ?>
              <li><a href="header.php?logout='1'" style="color: red;">Logout</a></li>
              <li><a href="productslist.php">Admin</a></li>
            <?php else: ?>
              <li><a href="userlogin.php">Login</a></li>
            <?php endif ?>
          </ul>
        </nav>
        <a href="cart.php"><img src="../img/cart.png" alt="cart" class="cart-icon"></a>
        <img src="../img/menu.png" alt="menu" class="menu-icon" onclick="menutoggle()">
  
      </div>
    </div>
