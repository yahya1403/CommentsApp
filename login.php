<?php 
include_once('db/config.php');
$sql = "SELECT * FROM user_list WHERE user_name='".$_POST['email']."' AND pass='".$_POST['pass']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user']=$row['user_name'];
    $_SESSION['id']=$row['id'];
    echo true;
} else {
  echo false;
}
?>