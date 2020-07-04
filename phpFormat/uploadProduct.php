<?php
include 'dataBaseIni.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = mysqli_fetch_array(mysqli_query($con, "SELECT max(`id`)+1  FROM `products` "))[0];
    $brandName = strip_tags($_POST['brandName']);
    $model = strip_tags($_POST['model']);
    $shortDetails = strip_tags($_POST['shortDetails']);
    $longDetails = strip_tags($_POST['longDetails']);
    $category_id = strip_tags($_POST['category_id']);
    $type_id = strip_tags($_POST['type_id']);
    if (isset($_POST['photo'])) {
            $_imagePost = file_get_contents($_FILES['photo']);
          //  $imgData = addslashes(file_get_contents($_FILES['photo']['name']));
            $sqlStr = " INSERT INTO `products`(`id`, `brand_name`, `model`, `photo`, `short_details`, `long_details`, `category_id`, `type_id`) VALUES ('" . $id . "','" . $brandName . "','" . $model . "'," . $_imagePost . ",'" . $shortDetails . "','" . $longDetails . "','" . $category_id . "','" . $type_id . "')";
            $query=mysqli_query($con,$sqlStr);
            if($query){
                echo "<script type='text/javascript'>alert('Product Uploaded Successfuly'); window.open('../pages/AddProduct.php', '_self');</script>";
            }else{
                echo "<script type='text/javascript'>alert('Product Uploaded Failed' + ".mysqli_error($query)."); window.open('../pages/AddProduct.php', '_self');</script>";
            }
       
    }else{
        echo "<script type='text/javascript'>alert('error 2');</script>";
    }
}