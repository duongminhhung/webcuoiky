<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="view/css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php require 'header.php'?>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="images/user-img.png" alt="">
        <h3>shaikh anas</h3>
        <a href="#">log out</a>
    </div>

    <nav class="navbar">
        <a href="?action=index"> <i class="fas fa-angle-right"></i> home </a>
        <a href="?action=about"> <i class="fas fa-angle-right"></i> about </a>
        <a href="?action=products"> <i class="fas fa-angle-right"></i> products </a>
        <a href="?action=contact"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="?action=login"> <i class="fas fa-angle-right"></i> login </a>
        <a href="?action=register"> <i class="fas fa-angle-right"></i> register </a>
        <a href="?action=cart"> <i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>

<!-- side-bar section ends -->

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

       <?php foreach ($result as $item) { ?>
        <div class="swiper-slide slide">
            <div class="image">
            <?php echo '<img  src="data:image/png;base64,'.base64_encode($item['img']).'" />'; ?>

            </div>
            <div class="content">
                <span>upto <?php echo $item['sale']?>% off</span>
                <h3><?php echo $item['name']?></h3>
                <a href="" class="btn">shop now</a>
            </div>
        </div>
         <?php  }?>

    

        

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">
        <?php foreach ($result_sale as $item) { ?>
            <a href="#" class="box">
            <?php echo '<img  src="data:image/png;base64,'.base64_encode($item['img']).'" />'; ?>
            <div class="content">
                <span>special offer</span>
                <h3>upto <?php echo $item['sale']?>% off</h3>
            </div>
        </a>
            <?php  }?>
       

        
        
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->

<section class="arrivals">

    <h1 class="heading"> new <span>arrivals</span> </h1>

    <div class="box-container">

        <?php foreach ($result as $item) { ?>
            <div class="box">
            <div class="image">
            <?php echo '<img class="main-img" src="data:image/png;base64,'.base64_encode($item['img']).'" />'; ?>
                <?php echo '<img class="hover-img" src="data:image/png;base64,'.base64_encode($item['imghover']).'" />'; ?>

            </div>
            <div class="content">
                <h3><?php echo $item['name'] ?></h3>
                <div class="price"> <?php echo '$'. $item['price'] - ($item['price']*$item['sale']/100)?><span> $<?php echo $item['price']?></span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <?php }?>



    </div>

</section>

<!-- arrivals section ends -->
















<!-- footer section starts  -->

<?php require 'footer.php'?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script>
    let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
    sideBar.classList.toggle('active');
}

document.querySelector('#close-side-bar').onclick = () =>{
    sideBar.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

window.onscroll = () =>{
    sideBar.classList.remove('active');
    searchForm.classList.remove('active');
};

document.querySelectorAll('.accordion-container .accordion').forEach(accordion =>{
    accordion.onclick = () =>{
        accordion.classList.toggle('active');
    }
});

var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCursor:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        450: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});
</script>

</body>
</html>