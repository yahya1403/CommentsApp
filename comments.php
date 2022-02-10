<?php 
include_once('db/config.php');
(!$_SESSION['user'])&&header('location:signin.php')&&exit;
$sql = "SELECT comments.comments,user_list.user_name FROM comments,user_list WHERE comments.user_id=user_list.id";
$result = mysqli_query($conn, $sql);

?>
<html>
<head>
  <title>Comments</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body  class="jumbotron">
    <div class="container">

    <h5 class="text-right"><a href="logout.php">Logout</a></h5>
        <div class="row">
            <div class="col-7">
             <h6>What would you like to share with word</h6>
                <textarea cols="100" class="form-control js-comment-text"  rows="7" maxlength="500"></textarea>
            </div>
            <div class="col-5 submit-btn" >
                <input type="submit" value="Submit" class="btn btn-success js-comment-btn"/>
            </div>
        </div>
    <div style="margin-top:20px">
        <div class="row wrap">
        <div class="col-9">
            <h3 style="margin-top:10px;margin-bottom:10px;">Comments<br/></h3>
            <div class="js-wrapper">
            <?php 
            while($row = mysqli_fetch_assoc($result)){?>
            <div class="content mt-2">
                <p class="<?php $row['user_name']==$_SESSION['user']&&print'text-primary' ?>"><?php echo $row['user_name']; ?></p>
                <div class="comment"><p class="mt-3"><?php echo $row['comments']; ?></p></div>
            </div>
            <?php } ?>
            </div>
       </div>
       <div class="col-3 filter-btn">
           <input type="submit" value="Filter" class="btn btn-success js-filter"/>
       </div>
        </div>
     </div>
    </div>

<script src="assets/js/custom.js"></script>
</body>
</html>
