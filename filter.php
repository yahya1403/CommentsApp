<?php 
include_once('db/config.php');
$sql = "SELECT comments.comments,user_list.user_name FROM comments,user_list WHERE comments.user_id=user_list.id AND comments.user_id=".$_SESSION['id'];
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){?>
    <div class="content mt-3">
        <p><?php echo $row['user_name']; ?></p>
        <div class="comment"><?php echo $row['comments']; ?></div>
    </div>
    <?php } 
} else {
  echo "<p>Comments not yet from your user name</p>";
}
?>