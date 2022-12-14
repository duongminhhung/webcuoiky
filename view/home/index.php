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
            <a href="?action=add_cart&&id=<?php echo $item['id'] ?>">
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
            </a>
        <?php }?>



    </div>

</section>

<!-- arrivals section ends -->
















<!-- footer section starts  -->

<?php require 'footer.php'?>

<!-- footer section ends -->




<!-- swiper js link      -->


</body>
</html>