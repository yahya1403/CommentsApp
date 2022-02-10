<?php 
include_once('db/config.php');
$sql = "SELECT * FROM user_list WHERE user_name='".$_POST['email']."' AND secret_code='".$_POST['secret']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Your Password is <u>".$row['pass']."</u>";
} else {
  echo "Invalid credentials";
}
?>