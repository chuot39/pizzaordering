<?php 
  require_once("../../config/dbconnect.php");
  if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {

    $product_name_err = $price_err = $image_err = "";

    if(isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) && strlen(trim($_POST['product_name'])) <= 20) 
      $product_name = trim($_POST['product_name']);
    else {
      echo '<script language="javascript">alert("Tên mốn không hợp lệ"); window.location="../html/detail-product.php";</script>'; die();
    }

    if(isset($_POST['product_price']) && !empty(trim($_POST['product_price'])) && is_int((Int)($_POST['product_price']))) 
      $product_price = trim($_POST['product_price']);
    else {
      echo '<script language="javascript">alert("Giá tiền không hợp lệ"); window.location="../html/detail-product.php";</script>'; die();
    }

    if(isset($_POST['product_img']) && !empty(trim($_POST['product_img']))) {
      $product_img = trim($_POST['product_img']);
    }
    else {
      echo '<script language="javascript">alert("Link ảnh không hợp lệ"); window.location="../html/detail-product.php";</script>'; die();
    }
    if(isset($_POST['product_desc']) && !empty(trim($_POST['product_desc']))) {
      $product_desc= trim($_POST['product_desc']);
    }else{
      echo '<script language="javascript">alert("Mô tả sản phẩm trống"); window.location="../html/detail-product.php";</script>'; die();
    }

    if(isset($_POST['category'])) $category_id = $_POST['category'];

    if(empty($product_name_err) && empty($price_err) && empty($image_err)) {
      $sql = "INSERT INTO tbl_product (category_id, image, product_name, price, descp, intro) VALUES ('$category_id','$product_img','$product_name','$product_price','$product_desc',NULL)";
     
      if(mysqli_query($mysqli,$sql)) {
       
          header('location: ../html/detail-product.php?add=success');
        }
        else {
          header('location: ../html/detail-product.php?add=failed');
      }
    }
  }
?>