<?php 
  require_once("../../config/dbconnect.php");
  if(strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {

    $product_name_err = $price_err = $image_err = "";

    if(isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) && strlen(trim($_POST['product_name'])) <= 20) 
      $product_name = trim($_POST['product_name']);
    else {
      $product_name_err = "<script>Tên món không hợp lệ</script>";
      echo $product_name_err;
    }

    if(isset($_POST['product_price']) && !empty(trim($_POST['product_price'])) && is_int((Int)($_POST['product_price']))) 
      $product_price = trim($_POST['product_price']);
    else {
      $product_price_err = "<script>Giá tiền không hợp lệ</script>";
      echo $product_price_err;
    }

    if(isset($_POST['product_img']) && !empty(trim($_POST['product_img']))) {
      $product_img = trim($_POST['product_img']);
    }
    else {
      $image_err = "<script>Link ảnh không hợp lệ</script>";
      echo $image_err;
    }

    if(isset($_POST['category'])) $category_id = $_POST['category'];
    if(isset($_POST['cid'])) $id = $_POST['cid'];

    $sql = "UPDATE tbl_product SET product_name= '$product_name', price='$product_price' WHERE id=$id";
      if(mysqli_query($mysqli,$sql)){
        echo '<script language="javascript">alert("Update thành công"); window.location="../html/product.php";</script>'; die();
        }
        else {
          echo '<script language="javascript">alert("Có lỗi xảy ra vui lòng thử lại sau"); window.location="../html/product.php";</script>'; die();
        }
  }
?>