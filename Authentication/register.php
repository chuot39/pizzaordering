<?php 

  include "../config/dbconnect.php";
 
  // if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))

  $email = $password = $confirm_password = "";
  $email_err = $password_err = $confirm_password_err = "";
   
  if(strtoupper($_SERVER["REQUEST_METHOD"]) === "POST") {
    // Validate email
    if(empty(trim($_POST["email"]))) { echo '<script language="javascript">alert("chưa nhập email"); window.location="authen_form.php?authen=signup";</script>'; die();}
    elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {echo '<script language="javascript">alert("Email không hợp lệ"); window.location="authen_form.php?authen=signup";</script>';}
    else {
      $sql = "SELECT tbl_customer.id AS customer_id FROM tbl_customer INNER JOIN tbl_user_type ON tbl_customer.user_type_id = tbl_user_type.id AND email = ? AND user_type = ?";    
      if($statement = $mysqli->prepare($sql)) {
        $statement->bind_param("ss", $param_email, $param_user_type);     
        $param_email = trim($_POST["email"]);   
        $param_user_type = 'Customer';
        if($statement->execute()) {
          $statement->store_result();
          if($statement->num_rows == 1) 
          { echo '<script language="javascript">alert("Email đã tồn tại"); window.location="authen_form.php?authen=signup";</script>'; die();}
          else
            $email = trim($_POST["email"]);
        } 
        else
        { echo '<script language="javascript">alert("Có lỗi xảy ra vui lòng thử lại"); window.location="authen_form.php?authen=signup";</script>'; die();}
        $statement->close();
      }
    }  
    if(empty(trim($_POST["password"]))) { echo '<script language="javascript">alert("Vui lòng nhập mật khẩu"); window.location="authen_form.php?authen=signup";</script>'; die();}     
    elseif(strlen(trim($_POST["password"])) < 10) { echo '<script language="javascript">alert("Mật khẩu tối thiểu là 10 kí tự"); window.location="authen_form.php?authen=signup";</script>'; die();}    
    else $password = trim($_POST["password"]);
      
    if(empty(trim($_POST["confrm-password"]))) { echo '<script language="javascript">alert("Vui lòng nhập lại mật khẩu"); window.location="authen_form.php?authen=signup";</script>'; die();}     
    else {
      $confirm_password = trim($_POST["confrm-password"]);
      if(empty($password_err) && ($password != $confirm_password))
      { echo '<script language="javascript">alert("Mật khẩu không khớp"); window.location="authen_form.php?authen=signup";</script>'; die();}     
    }
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
      $sql = "INSERT INTO tbl_customer (user_type_id, first_name, last_name, country, street_address, city, phone, email, pwd) VALUES (2,NULL,NULL,NULL,NULL,NULL,NULL,?,?)";
      if($statement = $mysqli->prepare($sql)) {
        $statement->bind_param("ss", $param_email, $param_password);
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT); 
        if($statement->execute())
          header("location: authen_form.php?signup=success");
        else
        { echo '<script language="javascript">alert("Có lỗi xảy ra vui lòng thử lại"); window.location="authen_form.php?authen=signup";</script>'; die();}     
        $statement->close();
      }
    }
    $mysqli->close();
  }
