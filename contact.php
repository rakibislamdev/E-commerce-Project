<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>Contact Page</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta name="theme-color" content="#fafafa">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">

  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
  <header>
    <nav>
      <div class="logo"><img src="img/logo.png" alt="LOGO"></div>
      <ul class="nav-links">
        <li id="item"><a href="./index.php">Home</a></li>
        <li id="item"><a href="">About Us</a></li>
        <li id="item"><a href="">Pages</a></li>
        <li id="item"><a href="">Shop</a></li>
        <li id="item"><a href="">Blog</a></li>
        <li id="item"><a href="">Contact Us</a></li>
        <li id="item"><a href=""><img src="img/shopping-cart.png" alt=""></a></li>
        <li id="item"><a href=""><img src="img/heart.png" alt=""></a></li>
        <li id="item"><a href=""><img src="img/user.png" alt=""></a></li>
      </ul>

      <div class="mobile-menu">
        <span class=""></span>
        <span class=""></span>
        <span class=""></span>
      </div>

    </nav>
    <div class="nav-header">
      <h1>Contact Page</h1>
      <p>Home/Contact</p>
    </div>
  </header>
  <section id="contact">

    <!--google map section area start-->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.6949831025463!2d90.42098997887155!3d23.82944301588415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65cbecf4d41%3A0xbce2b71e1c301332!2sMannan%20Plaza!5e0!3m2!1sen!2sbd!4v1642864796910!5m2!1sen!2sbd">
      </iframe>
    </div>
    <!--google map section area end-->
    <section class="contact">
      <div class="message-area">
        <!-- <div class="message-title">
            <h1>Sent a message</h1>
          </div> -->
        <div class="message-item">
          <div class="inputbox">
            <label for="name">Your Name</label><br>
            <input type="text">
          </div>
          <div class="inputbox">
            <label for="name">Your Name</label><br>
            <input type="text">
          </div>
        </div>
        <div class="message-item">
          <div class="inputbox">
            <label for="name">Your Name</label><br>
            <input type="text">
          </div>
          <div class="inputbox">
            <label for="name">Your Name</label><br>
            <input type="text">
          </div>
        </div>
      </div>
      <div class="contact-address">
        <h1>Contact</h1>
      </div>
    </section>

    <?php
    require_once('./include/footer.php');
    require_once('./include/script.php');
    ?>