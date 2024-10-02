<?php 
  if(session_id() === '') session_start();
  if(isset($_SESSION['current_user']) && is_int($_SESSION['current_user']['id'])){
    header("location: ../Home/home.php");
    exit;
  }
   
  if(strtoupper($_SERVER["REQUEST_METHOD"]) == "POST") {
    $email_err = $password_err = $login_err = "";
    include "../config/dbconnect.php";

    if(isset($_POST['email']) && !empty(trim($_POST['email']))) {
      $email = trim($_POST['email']);
    }
    else{ echo '<script language="javascript">alert("Vui lòng nhập email"); window.location="authen_form.php";</script>'; die();}     

    if(isset($_POST['password']) && !empty(trim($_POST['password']))) {
      $password = trim($_POST['password']);
    }
    else { echo '<script language="javascript">alert("Vui lòng nhập mật khẩu"); window.location="authen_form.php";</script>'; die();}     

    if(empty($email_err) && empty($password_err)) {
      $sql = "SELECT tbl_customer.id AS customer_id, first_name, last_name, country, street_address, city, phone, email, pwd FROM tbl_customer INNER JOIN tbl_user_type ON tbl_customer.user_type_id = tbl_user_type.id AND user_type = ? AND email = ?";
      if($statement = $mysqli->prepare($sql)) {
        $statement->bind_param("ss", $param_user_type, $param_email);  
        $param_user_type = 'Customer'; 
        $param_email = $email;
        if($statement->execute()) {
          $mysqli_res = $statement->get_result();
          if($mysqli_res->num_rows == 1) {                    
            if($customer = $mysqli_res->fetch_object()) {
              if(password_verify($password, $customer->pwd)) {
                if(isset($_SESSION['users'][$customer->id])) {
                  $_SESSION['current_user'] = [
                    'id' => $_SESSION['users'][$customer->customer_id]['id'], 
                    'first_name' => $_SESSION['users'][$customer->customer_id]['first_name'],
                    'last_name' => $_SESSION['users'][$customer->customer_id]['last_name'], 
                    'country' => $_SESSION['users'][$customer->customer_id]['country_name'],
                    'address' => $_SESSION['users'][$customer->customer_id]['address'],
                    'city' => $_SESSION['users'][$customer->customer_id]['city'],
                    'phone' => $_SESSION['users'][$customer->customer_id]['phone'], 
                    'email' => $_SESSION['users'][$customer->customer_id]['email'],
                    'cart' => $_SESSION['users'][$customer->customer_id]['cart']
                  ];
                }                                        
                else {
                  $_SESSION['current_user'] = [
                    'id' => $customer->customer_id, 
                    'first_name' => $customer->first_name,
                    'last_name' => $customer->last_name, 
                    'country' => $customer->country,
                    'address' => $customer->street_address,
                    'city' => $customer->city,
                    'phone' => $customer->phone, 
                    'email' => $customer->email,
                    'cart' => []
                  ];
                  $_SESSION['users'][$customer->customer_id] = $_SESSION['current_user'];
                }
                header("location: ../Home/home.php");
              } 
              else { echo '<script language="javascript">alert("Thông tin đăng nhập không hợp lệ"); window.location="authen_form.php";</script>'; die();}     
            }
          }
        } else { echo '<script language="javascript">alert("Thông tin đăng nhập không hợp lệ"); window.location="authen_form.php";</script>'; die();}     
      } 
      else { echo '<script language="javascript">alert("Có lỗi xảy ra vui lòng thử lại"); window.location="authen_form.php?authen=signup";</script>'; die();}     
      $statement->close();
    }
  }
  $mysqli->close();
?>