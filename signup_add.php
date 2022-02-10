<?php 
$email=$_POST['email'];
$pass=$_POST['pass'];
$secret=$_POST['secret'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo "Invalid email address";
}else if (empty($pass) || strlen($pass)<6 || strlen($pass)>15) {
  echo "Invalid Password";
}else if (empty($secret) || strlen($pass)<6 || strlen($pass)>15) {
  echo "Invalid Secret code";
}else{
  include_once('db/config.php');
  $s = "SELECT user_name FROM user_list WHERE user_name='".$email."'";
  $result = mysqli_query($conn, $s);
    if (mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO user_list (user_name, pass, secret_code)
            VALUES ('".$email."', '".$pass."', '".$secret."')";
            if (mysqli_query($conn, $sql)) {
              echo "Registered successfully";
                    } 
    }
    else{
      echo "User already added";
    }
}
?>