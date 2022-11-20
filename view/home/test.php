<?php 
session_start();
if(empty($_SESSION['id'])){
    echo "<script>location.href='?action=login';</script>";
  exit;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="view/css/style.css">

</head>
<body>
    
<header class="header">

    <a href="?action=index" class="logo"> <i class="fas fa-store"></i> shopie </a>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="login.html" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>

</header>
<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="images/user-img.png" alt="">
        <h3>shaikh anas</h3>
        <a href="?action=logout">log out</a>
    </div>

    <nav class="navbar">
        <a href="?action=index"> <i class="fas fa-angle-right"></i> home </a>
        <a href="?action=about"> <i class="fas fa-angle-right"></i> about </a>
        <a href="?action=products"> <i class="fas fa-angle-right"></i> products </a>
        <a href="?action=contact"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="?action=login"> <i class="fas fa-angle-right"></i> login </a>
        <a href="?action=logout"> <i class="fas fa-angle-right"></i> logout </a>
        <a href="?action=cart"> <i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>

<!-- side-bar section ends -->

<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map"></i>
            <h3>address</h3>
            <p>P. Nguyen Trac, Yen Nghia, Ha Dong, Ha Noi</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>20010865@st.phenikaa-uni.edu.vn</p>
            <p>12345@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">

    <form action="">
        <h3>get in touch</h3>
        <p>Contact for us?</p>
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.786429216583!2d105.74501145014695!3d20.9610901859665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2s!4v1666683501989!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->



<!-- newsletter section ends -->



 











<!-- footer section starts  -->

<?php require 'footer.php'?>
<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>