
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

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
<?php 
$cart = $_SESSION['cart'];
?>

<!-- side-bar section ends -->

<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">your <span>products</span></h1>

    <div class="box-container">
    <?php $sum=0;
        $sale = 0;
     foreach ($cart as $id => $each) { ?>
        <div class="box">
        <?php $sum+=$each['price']*$each['quantity'];
                    $sale+=$each['sale']*$each['quantity'];?>
                    <?php if($sum==0){ ?>
                        <h1>Bạn hãy đi mua sắm</h1>
                        <?php exit()?>
                      <?php  }?>
           <a href="?action=update_quantity&&id=<?php echo $each['id'] ?>&&type=decre_all"> <i class="fas fa-times"></i></a>
            <?php echo '<img  src="data:image/png;base64,' . base64_encode($each['img']) . '" />'; ?>
            <div class="content">
                <h3><?php echo $each['name']?></h3>
                <div class="price"> <?php echo '$'. $each['price'] - ($each['price']*$each['sale']/100)?><span> $<?php echo $each['price']?></span> </div>
                <h3><a href="?action=update_quantity&&id=<?php echo $each['id'] ?>&&type=decre">-</a>
                    <?php echo $each['quantity']?>
                    <a href="?action=update_quantity&&id=<?php echo $each['id'] ?>&&type=plus">+</a></h3>
                   
            </div>
        </div>
    <?php } ?>
    </div>

    <div class="cart-total">
        
        
        <h3> subtotal : <span>$<?php echo $sum?></span> </h3>
        <h3> discount : <span>-$<?php echo $sale?></span> </h3>
        <h3> subtotal : <span>$<?php echo $sum - $sale?></span> </h3>
        <a href="https://www.facebook.com/" class="btn">proceed to checkout</a>
    </div>

</section>

<!-- shopping cart section ends -->
















<!-- footer section starts  -->

<?php require 'footer.php';?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="view/js/script.js"></script>

</body>
</html>