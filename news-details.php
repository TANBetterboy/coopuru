<?php 
session_start();
include('includes/config.php');
require_once('connection.php');

    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $db->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>coopuru</title>
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo1.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

  

  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,tblposts.evendate,tblposts.evendate2 from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p><b>โพสเมื่อวันที่</b><?php echo htmlentities($row['postingdate']);?></p>
              <p><b>วันที่จัดกิจกรรม(ปี/เดือน/วัน) : </b><?php echo htmlentities($row['evendate']);?></p>
              <p><b>วันที่สิ้นสุดกิจกรรม(ปี/เดือน/วัน) : </b><?php echo htmlentities($row['evendate2']);?></p>
                <hr />

 <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
  
              <p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="pre-register.php" role="button">สมัครเตรียมความพร้อมสหกิจศึกษา</a>
            </div>
          </div>
<?php } ?>

        </div>
      </div>
      <!-- /.row -->
<!---Comment Section --->
<!-- 
 <div class="row" style="margin-top: -8%">
   <div class="col-md-8">
<div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form name="Comment" method="post">
      <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>

  <div class="form-group">
    <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
  </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
            </div>
          </div> -->

  <!---Comment Display Section --->
  <h2>รายชื่อนักศึกษาที่เข้าร่วม</h2>
 <?php 
 $sts=1;
 $query=mysqli_query($con,"select fullname,faculty,postingDate from  tblcomments where postId='$pid' ");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4 ">
            <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
            <div class="media-body">
              <h5 class="mt-0">ชื่อ: <?php echo htmlentities($row['fullname']);?> <br />
              คณะ: <?php echo htmlentities($row['faculty']);?><br />
                  <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
            </h5> </div>
          </div>
<?php } ?>

        </div>
      </div>
    </div>

  
      <?php include('includes/footer.php');?>
      <?php require_once 'includes/script.php';?>


  </body>

</html>
