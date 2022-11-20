<?php 
session_start();
// unset($_SESSION['cart']);
// die();
$id = $_GET['id'];
if($_GET['id']){
    if(empty($_SESSION['cart'][$id])){
        $connect = mysqli_connect('localhost:3306', 'root', '', 'webcuoiky');
        $sql = "select * from home where id = '$id' ";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        $_SESSION['cart'][$id]['id']= $each['id'];
        $_SESSION['cart'][$id]['name']= $each['name'];
        $_SESSION['cart'][$id]['img']= $each['img'];
        $_SESSION['cart'][$id]['price']= $each['price'];
        $_SESSION['cart'][$id]['sale']= $each['sale'];
        $_SESSION['cart'][$id]['quantity']= 1;
    }else{
        $_SESSION['cart'][$id]['quantity']++;
    }
}else{

    echo "<script>location.href='?action=products';</script>";
    exit();
}



// print_r($_SESSION['cart']);
// die();
echo "<script>location.href='?action=cart';</script>";

?>