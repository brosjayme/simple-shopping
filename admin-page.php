<?php
@include 'config.php';

if(isset($_POST['add_product'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_imaage']['name'];
    $product_image_tmp_name = $_POST['product_imaage']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;

if(empty($product_name) || empty($product_price) || empty($product_image)){
    $message[] = 'cannot be blank';
}
}

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!-- font awesomestyle link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
<!-- custom css link -->
<link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
    <div class="admin-product-form">
<form action="?php $_SERVER['PHP_SELF'] ?" method="post" enctype="multipart/form-data">
<h3>add a new product</h3>
<input type='text' placeholder='enter product name' name='product-name' class='box'>
<input type='number' placeholder='enter product price' name='product-price' class='box'>
<input type='file' accept="image/png, image/jpeg, image/jpg" name='product-image' class='box'>
<input type="submit" class="btn" name="add_product" value="add product">
</form>
    </div>
 </div>  
 
</body>
</html>