<?php 
$connect = mysqli_connect('localhost:3306','root','','webcuoiky');
$sql = "SELECT * from home LIMIT 6;";
$result = mysqli_query($connect,$sql);
$sql = "SELECT *
FROM home
ORDER BY sale DESC
LIMIT 2";
$result_sale = mysqli_query($connect,$sql);

$sql = "SELECT *  from user  INNER JOIN comment  ";
$result_comment = mysqli_query($connect,$sql);

$sql = "SELECT  DISTINCT category.id_category, category.name_category, home.id_category, category.img_category

FROM home

INNER JOIN category

ON home.id_category = category.id_category;  ";
$result_category = mysqli_query($connect,$sql);
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "select * from home where id_category = $id and date is not null";
    $result_all_products = mysqli_query($connect,$sql);
    $data =[];
    if($result_all_products->num_rows>0){
        while($row = mysqli_fetch_array($result_all_products)){
            array_push($data,$row);
        }
    }
    $result_all_products = $data;
}
else{
    $sql = "SELECT *
    FROM home
    WHERE date IS NOT NULL ";
    $result_all_products = mysqli_query($connect,$sql);
}









