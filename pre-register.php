<?php 
session_start();
include('includes/config.php');
require_once('connection.php');
error_reporting(0);
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $db->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $fullname1 = $row['fullname'];
    }

//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  $fullname=$_POST['fullname'];
  $faculty=$_POST['faculty'];
  $studentid=$_POST['studentid'];
  $postid=$_POST['id'];
  $query = mysqli_query($con, "SELECT * FROM tblposts WHERE id ='$postid' ");
  $lim = mysqli_fetch_assoc($query);
  $limitcount = $lim['limitcount'];
  $userlimit = $lim['userlimit'];


  
      if($limitcount<$userlimit)
      {
        $query1 = mysqli_query($con, "SELECT * FROM tblcomments WHERE postId ='$postid' and user_id = $user_id");
        $lim1 = mysqli_fetch_assoc($query1);
        $postId1= $lim1['postId'];
        if ($postid == $postId1) 
        {
          echo "<script>alert('ท่านสมัครโครงการแล้ว กรุณารอการยืนยันจากแอดมิน');</script>";
        }
        else{
            $query=mysqli_query($con,"insert into tblcomments(postId,fullname,faculty,studentid,status,user_id) values('$postid','$fullname','$faculty','$studentid','0','$user_id')");
            if($query):
              echo "<script>alert('สมัครเสร็จสิ้น');</script>";
              unset($_SESSION['token']);
              // $query1=mysqli_query($con,"update tblposts set limitcount = '$limitcount'+'1' where id='$postid'");
            else :
            echo "<script>alert('เกิดข้อผิดผลาดเกี่ยวกับฐานข้อมูล');</script>";  

            endif;
          }
            
      }
      else{echo "<script>alert('โครงการนี้เต็มแล้ว');</script>";}
 
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
  <?php include('includes/header.php');?>
  
  <div class="container py-3">
  <h2>ตารางโครงการเตรียมความพร้อม</h2>
  <p>ลงชื่อเพื่อสมัครเตรียมความพร้อม</p>  
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ชื่อ</th>
        <th>จำนวนนักศึกษาที่เข้าร่วม</th>
        <th>จำนวนที่รับ</th>
        <th>ลงชื่อเพื่อสมัครเตรียมความพร้อม</th>
      </tr>
    </thead>
          <?php 
$query=mysqli_query($con,"Select * from tblposts where status='0'");

while($row1=mysqli_fetch_array($query))
{
?>
    <tbody>
      <tr>
      <td><?php echo htmlentities($row1['PostTitle']);?></td>
      <td><?php echo htmlentities($row1['limitcount']);?></td>
      <td><?php echo htmlentities($row1['userlimit']);?></td>
      <td>
      <form name="Comment" method="post">

  <div class="form-group">
  <input type="hidden" name="id" class="form-control" value="<?php echo htmlentities($row1['id']);?>" required>
  </div>
  <div class="form-group">
  <input type="hidden" name="fullname" class="form-control" value="<?php echo htmlentities($row['fullname']);?>" required>
  </div>
  <div class="form-group">
  <input type="hidden" name="faculty" class="form-control" value="<?php echo htmlentities($row['faculty']);?>" required>
  </div>
  <div class="form-group">
  <input type="hidden" name="studentid" class="form-control" value="<?php echo htmlentities($row['studentid']);?>" required>
  </div>
  
                <button type="submit" class="btn btn-primary" name="submit" href="unapprove-comment.php?disid=<?php echo htmlentities($row['id']);?>">ลงทะเบียนเตรียมความพร้อมสหกิจศึกษา</button>
              </form>
      
      
      </tr>
    </tbody>
    <?php } ?>
  </table>
  </table>
  <hr>


<h1>โครงการที่นักศึกษาสมัครอบรมแล้ว</h1>
<table class="table table-bordered">
                                                      <thead class="table-dark">
                                                          <tr>
                                                              <th>#</th>
                                                              <th> ชื่อ</th>
                                                              <th>คณะ</th>
                                                            
                                                              <th>ชั่วโมงกิจกรรม</th>
                                                               
                                                              <th width="400">โพส</th>
                                                              <th>วันที่ลงทะเบียน</th>
                                                        
                                                          </tr>
                                                      </thead>
                                                      <tbody>
<?php 
$query=mysqli_query($con,"Select tblcomments.id,tblcomments.fullname,tblcomments.faculty,tblcomments.postingDate,tblposts.id as postid,tblposts.PostTitle,tblposts.hourspost,tblcomments.user_id,users.hoursactivity from  tblcomments join tblposts on tblposts.id=tblcomments.postId join users on users.id=tblcomments.user_id where users.id ='$user_id' && tblcomments.status=0");
$cnt=1; 

while($row=mysqli_fetch_array($query))
{
?>

<tr>
  <th scope="row"><?php echo htmlentities($cnt);?></th>
  <td><?php echo htmlentities($row['fullname']);?></td>
  <td><?php echo htmlentities($row['faculty']);?></td>
  <td><?php echo htmlentities($row['hourspost']);?></td>

  <td><a><?php echo htmlentities($row['PostTitle']);?></a> </td>
  <td><?php echo htmlentities($row['postingDate']);?></td>
 
  
  


</tr>
<?php
$cnt++;
} ?>
</tbody>
                                              
                                                  </table><hr>


<h1>โครงการที่ยืนยันการสมัครอบรมแล้ว</h1>  

                                                  <table class="table table-bordered">
                                                      <thead class="table-dark">
                                                          <tr>
                                                              <th>#</th>
                                                              <th> ชื่อ</th>
                                                              <th>คณะ</th>
                                                              
                                                              <th>ชั่วโมงกิจกรรม</th>
                                                              
                                                              <th width="400">โพส</th>
                                                              <th>วันที่โพส</th>
                                                             
                                                          </tr>
                                                      </thead>
                                                      <tbody>
<?php 
$query=mysqli_query($con,"Select tblcomments.id,tblcomments.fullname,tblcomments.faculty,tblcomments.postingDate,tblposts.hourspost,tblposts.id as postid,tblposts.PostTitle,tblposts.hourspost,tblcomments.user_id,users.hoursactivity from  tblcomments join tblposts on tblposts.id=tblcomments.postId join users on users.id=tblcomments.user_id where users.id ='$user_id' && tblcomments.status=1");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

<tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['fullname']);?></td>
<td><?php echo htmlentities($row['faculty']);?></td>
<td><?php echo htmlentities($row['hourspost']);?></td>
<td><a><?php echo htmlentities($row['PostTitle']);?></a> </td>
<td><?php echo htmlentities($row['postingDate']);?></td>

</tr>
<?php
$cnt++;
} ?>
</tbody>
                                                
                                                  </table><hr>

  <h1>โครงการที่นักศึกษาได้ชั่วโมงกิจกรรม</h1>  

                                                  <table class="table table-bordered">
                                                      <thead class="table-dark">
                                                          <tr>
                                                              <th>#</th>
                                                              <th> ชื่อ</th>
                                                              <th>คณะ</th>
                                                              
                                                              <th>ชั่วโมงกิจกรรม</th>
                                                              
                                                              <th width="400">โพส</th>
                                                              <th>วันที่โพส</th>
                                                             
                                                          </tr>
                                                      </thead>
                                                      <tbody>
<?php 
$query=mysqli_query($con,"Select tblcomments.id,tblcomments.fullname,tblcomments.faculty,tblcomments.postingDate,tblposts.hourspost,tblposts.id as postid,tblposts.PostTitle,tblposts.hourspost,tblcomments.user_id,users.hoursactivity from  tblcomments join tblposts on tblposts.id=tblcomments.postId join users on users.id=tblcomments.user_id where users.id ='$user_id' && tblcomments.status=2");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

<tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['fullname']);?></td>
<td><?php echo htmlentities($row['faculty']);?></td>
<td><?php echo htmlentities($row['hourspost']);?></td>
<td><a><?php echo htmlentities($row['PostTitle']);?></a> </td>
<td><?php echo htmlentities($row['postingDate']);?></td>

</tr>
<?php
$cnt++;
} ?>
</tbody>
                                                
                                                  </table><hr>

</div>
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
