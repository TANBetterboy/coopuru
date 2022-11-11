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
$hours = $row['hoursactivity']*100/30;
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="assets/css/templatemo2.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
  
<?php
require_once 'includes/header.php';
?>
    <!-- Start Team Member -->
    <section class="bg-light w-100">
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="recent-work-header row text-center  text-light ">
                <h2 class="h2 semi-bold-600 py-5">เว็บไซต์สำหรับนักศึกษา ยินดีต้อนรับ</h2> 
    </div>
    <div class="recent-work-header row text-center  text-light">
                <h3 class="col-md-6 m-auto h3 semi-bold-600 ">"<?php echo $row['nameprefix']; ?> <?php echo $row['fullname']; ?>"</h3>
    </div>
</div>
    <section class="container">
    <h1>ข้อมูลของสถานประกอบการที่มีในระบบ</h1>
  <table class="table table-bordered table-centered table-inverse m-0">
<thead>
<tr>
                                           
<th>ชื่อของสถานประกอบการ</th>
<th>ชื่อผู้ใช้งาน</th>
<th>อีเมล์</th>


</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"select * from enterpriseusers");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
<tr>
<?php 
} else {
while($row2=mysqli_fetch_array($query))
{
?>
 <tr>
    
<td><b><?php echo htmlentities($row2['nameenterprise']);?></b></td>
<td><?php echo htmlentities($row2['name'])?></td>
<td><?php echo htmlentities($row2['email'])?></td>

<?php } }?>
                                               
                                            </tbody>
                                        </table>
<br>

        
    </section>
    </section>
    <!-- End Feature Work -->



 



<?php
require_once 'includes/footer.php';
?>



</body>
</html>