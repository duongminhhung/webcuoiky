<?php 
$connect = mysqli_connect('localhost:3306', 'root', '', 'webcuoiky');
if (isset($_POST['name']) && isset($_POST['password']) && $_POST['confirm_password'] && $_POST['email']) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $result_email  = mysqli_query($connect, "select * from user where  email LIKE '$email%'");
    //    die($result_email);
    $row_email = mysqli_num_rows($result_email);
    if ($row_email == 0) {
        if ($password === $confirm_password) {
            $sql = "insert into user (name, password,email)
        VALUES ('$name', '$password','$email');";
            // die($sql);
            $add_user = mysqli_query($connect, $sql);

            $query_id = mysqli_query($connect, "SELECT    *
        FROM      user
        ORDER BY  id DESC
        LIMIT     1;");
            $result_user = mysqli_fetch_array($query_id);
            // echo $result['id'];
            // die();
            echo "<script>alert('You are Sign Up Success');</script>";

            echo "<script>location.href='?action=index';</script>";
        } else {
            echo "<script>alert('Sign failed');</script>";
            echo "<script>location.href='?action=login';</script>";
            exit();
        }
    }else{
        echo "<script>alert('email already exists');</script>";

        echo "<script>location.href='?action=login&&erro=email already exists';</script>";
    }


}?>