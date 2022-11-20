<?php 
session_start();
if(empty($_SESSION['id'])){
    echo "<script>location.href='?action=login';</script>";
  exit;
}?>
<header class="header">

    <a href="?action=index" class="logo"> <i class="fas fa-store"></i> shopie </a>

    <form action="?action=search" method="get" class="search-form">
        <input type="search" id="search-box" placeholder="search products...">
        <!-- <label for="search-box" class="fas fa-search"></label> -->
        <button style="padding:15px;cursor: pointer;" class="fas fa-search"></button>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="?action=login" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="?action=cart" class="fas fa-shopping-cart"></a>
    </div>

</header>
<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
    <?php echo '<img class="main-img" src="data:image/png;base64,' . base64_encode($_SESSION['img_user']) . '" />'; ?>

        <h3><?php echo $_SESSION['name']?></h3>
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