<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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



<!-- side-bar section ends -->

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="./view/img/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>our story</h3>
        <p>Shopee là nền tảng thương mại điện tử hàng đầu tại Đông Nam Á và Đài Loan.
Ra mắt năm 2015, nền tảng thương mại Shopee được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua sắm trực tuyến thông qua hệ thống hỗ trợ thanh toán và vận hành vững mạnh.

Chúng tôi có niềm tin mạnh mẽ rằng trải nghiệm mua sắm trực tuyến phải đơn giản, dễ dàng và mang đến cảm xúc vui thích. Niềm tin này truyền cảm hứng và thúc đẩy chúng tôi mỗi ngày tại Shopee.?</p>
       
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Our target?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
            Chúng tôi tin tưởng vào sức mạnh khai triển của công nghệ và mong muốn góp phần làm cho thế giới trở nên tốt đẹp hơn bằng việc kết nối cộng đồng người mua và người bán thông qua việc cung cấp một nền tảng thương mại điện tử.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Our Positioning?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
            Đối với người dùng trên toàn khu vực, Shopee mang đến trải nghiệm mua sắm trực tuyến tích hợp với vô số sản phẩm đa dạng chủng loại, cộng đồng người dùng năng động và chuỗi dịch vụ liền mạch
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

    </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> clients <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">
            <?php foreach ($result_comment as $item) { ?>
                <div class="swiper-slide slide">
                <?php echo '<img  src="data:image/png;base64,'.base64_encode($item['img_user']).'" />'; ?>
                <h3><?php echo $item['name']?></h3>
                <span><?php echo $item['job']?></span>
                <p><?php echo $item['content']?></p>
            </div>
           <?php }?>
           
           


        </div>

    </div>

</section>













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