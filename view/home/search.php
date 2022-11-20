<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">


</head>
<body>
    <?php 
   $connect = mysqli_connect('localhost:3306','root','','webcuoiky');
    $sql = "SELECT  DISTINCT category.id_category, category.name_category, home.id_category, category.img_category

    FROM home
    
    INNER JOIN category
    
    ON home.id_category = category.id_category;  ";
    $result_category = mysqli_query($connect,$sql);
    if(isset($_GET['id_category'])){
        $id_category = $_GET["id_category"];
        $sql = "select * from home where id_category = $id_category and date is not null ";
        $result_all_products = mysqli_query($connect,$sql);
        // $result_all_products = mysqli_fetch_array($result_products);
    }else{
        $sql = "SELECT *
        FROM home
        WHERE date IS NOT NULL ";
        $result_all_products = mysqli_query($connect,$sql);
    }
    ?>
    <?php require 'header.php' ?>



<section class="category">

    <h1 class="heading"> shop by <span>category</span> </h1>

    <div class="box-container">

        <?php foreach ($result_category as $item) { ?>
            <a href="?action=select&&id_category=<?php echo $item['id_category'] ?>"><button data-id='<?php echo $item['id_category'] ?>' class="box box1">
                <?php echo '<img  src="data:image/png;base64,' . base64_encode($item['img_category']) . '" />'; ?>
                <h3><?php echo $item['name_category'] ?></h3>
            </button></a>
        <?php } ?>



    </div>

</section>



<section class="products">

    <h1 class="heading"> featured <span>products</span> </h1>

    <div class="box-container " id="box1">

        <?php foreach ($result_all_products as $item) { ?>
            <div class="box">
                <div class="image">
                    <?php echo '<img class="main-img" src="data:image/png;base64,' . base64_encode($item['img']) . '" />'; ?>

                    <?php echo '<img class="hover-img" src="data:image/png;base64,' . base64_encode($item['imghover']) . '" />'; ?>

                    <div class="icons">
                        <a href="?action=add_cart&&id=<?php echo $item['id'] ?>" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?php echo $item['name'] ?></h3>

                    <div class="price"> <?php echo '$' . $item['price'] - ($item['price'] * $item['sale'] / 100) ?><span> $<?php echo $item['price'] ?></span> </div>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        <?php  } ?>
















    </div>

</section>

<!-- products section ends -->

<!-- product banner section starts  -->

<section class="product-banner">

    <h1 class="heading"> <span>deal</span> of the day </h1>

    <div class="box-container">

        <?php foreach ($result_sale as $item) { ?>
            <div class="box">
                <?php echo '<img class="main-img" src="data:image/png;base64,' . base64_encode($item['img']) . '" />'; ?>

                <div class="content">
                    <span>special offer</span>
                    <h3>upto <?php echo $item['sale'] ?>% off</h3>
                    <a href="#" class="btn">shop now</a>
                </div>
            </div>
        <?php } ?>



    </div>

</section>

<!-- product banner section ends -->















<!-- footer section starts  -->

<?php require 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script>
    let sideBar = document.querySelector('.side-bar');

    document.querySelector('#menu-btn').onclick = () => {
        sideBar.classList.toggle('active');
    }

    document.querySelector('#close-side-bar').onclick = () => {
        sideBar.classList.remove('active');
    }

    let searchForm = document.querySelector('.search-form');

    document.querySelector('#search-btn').onclick = () => {
        searchForm.classList.toggle('active');
    }

    window.onscroll = () => {
        sideBar.classList.remove('active');
        searchForm.classList.remove('active');
    };

    document.querySelectorAll('.accordion-container .accordion').forEach(accordion => {
        accordion.onclick = () => {
            accordion.classList.toggle('active');
        }
    });

    var swiper = new Swiper(".home-slider", {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper = new Swiper(".review-slider", {
        loop: true,
        grabCursor: true,
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
    $(document).ready(function() {
        function fetch_data(){
            $.ajax({
                url: 'model/Home.php',
                method: 'GET',
                success: function(data){
                    $('#box1').html(data);
                }
            })
        }
        $(".box1").click(function() {
            let id = $(this).data('id');
            // alert(id); 
            $.ajax({
                    type: 'get',
                    url: 'model/Home.php',
                    data: {id:id},
                    dataType:'html',
                })
                


        });
    });
</script>
</body>
</html>