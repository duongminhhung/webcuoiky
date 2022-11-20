<?php
if(isset($_POST['remember'])){
    $remember = true;
}else{
    $remember = false;
}
$connect = mysqli_connect('localhost:3306', 'root', '', 'webcuoiky');
if(isset($_POST['name']) && $_POST['password']){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $result  = mysqli_query($connect,"select * from user where  name = '$name' and password = '$password'");
    $row = mysqli_num_rows($result);
    if($row == 1){
        session_start();
        $each = mysqli_fetch_array($result);
        $_SESSION['id']= $each['id'];
        $_SESSION['name']= $each['name'];
        $_SESSION['img_user']= $each['img_user'];
        if($remember){
            setcookie('remember',$each['id'],time()+60*60*24*24);
        }
        echo "<script>alert('You are Sign In Success');</script>";
        echo "<script>location.href='?action=index';</script>";
        exit;

    }else{
        echo "<script>alert('Sign failed');</script>";
        echo "<script>location.href='?action=login';</script>";
        exit();
    }

}else{
    echo "<script>alert('User account or password incorrect ');</script>";

    echo "<script>location.href='?action=login&&erro=User account or password incorrect';</script>";
}
?>