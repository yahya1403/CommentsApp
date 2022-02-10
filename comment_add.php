<?php 
$comment=trim($_POST['comment']);
empty($comment)&&exit;
include_once('db/config.php');
//insert comment
$sql = "INSERT INTO comments (user_id,comments)
VALUES (".$_SESSION['id'].", '".$comment."')";
if (mysqli_query($conn, $sql)) {
  //select comments
  $s = "SELECT comments.comments,user_list.user_name FROM comments,user_list WHERE comments.user_id=user_list.id";
  $result = mysqli_query($conn, $s);
  while($row = mysqli_fetch_assoc($result)){?>
    <div class="content mt-2">
        <p class="<?php $row['user_name']==$_SESSION['user']&&print'text-primary' ?>"><?php echo $row['user_name']; ?></p>
        <div class="comment"><p class="mt-3"><?php echo $row['comments']; ?></p></div>
    </div>
    <?php } 
}
else{
    echo false;
} 
?>