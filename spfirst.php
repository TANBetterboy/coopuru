<?php 
session_start();
include('includes/config.php');
require_once('connection.php');
if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
}
if( $_GET['hour']<'29')
{
    echo "<script>alert('คุณต้องมีชั่วโมงเตรียมความพร้อม 30 ชั่วโมง เพื่อที่จะผ่านคุณสมบัติการฝึกสหกิจศึกษา');</script>";
    header("refresh:0;user.php");
}

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $db->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $user_id;
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
 <?php 

$query1=mysqli_query($con,"Select status from sp01 where user_id=$id");
$row2=mysqli_fetch_array($query1);
$query2=mysqli_query($con,"Select status from sp03 where user_id=$id");
$row3=mysqli_fetch_array($query2);
$query3=mysqli_query($con,"Select status from sp04 where user_id=$id");
$row4=mysqli_fetch_array($query3);
$query4=mysqli_query($con,"Select status from sp07 where user_id=$id");
$row5=mysqli_fetch_array($query4);
$query5=mysqli_query($con,"Select status from sp08 where user_id=$id");
$row6=mysqli_fetch_array($query5);
$query6=mysqli_query($con,"Select status from sp09 where user_id=$id");
$row7=mysqli_fetch_array($query6);
?>
<!-- Start Recent Work -->
<section class="py-2 mb-2">
  <div class="container py-3">
    <div class="alert alert-danger" role="alert">
    <strong>คุณผ่านชั่วโมงเตรียมความพร้อม 30 ชั่วโมงแล้ว</strong>
    </div>
    <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ชื่อเอกสาร</th>
        <th>สถานะเอกสาร</th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <td>สก.01</td>
    <td><?php $st=$row2['status'];
if($st=='1'):
echo "ยืนยันความถูกต้องแล้ว";
elseif($st=='2'):
echo "เอกสารไม่ถูกต้อง";
else:
echo "รอการยืนยัน";
endif;
?></td>
      </tr>
      <tr>
    <td>สก.03</td>
    <td><?php $st=$row3['status'];
if($st=='1'):
echo "ยืนยันความถูกต้องแล้ว";
elseif($st=='2'):
echo "เอกสารไม่ถูกต้อง";
else:
echo "รอการยืนยัน";
endif;
?></td>
      </tr>
      <tr>
    <td>สก.04</td>
    <td><?php $st=$row4['status'];
if($st=='1'):
echo "ยืนยันความถูกต้องแล้ว";
elseif($st=='2'):
echo "เอกสารไม่ถูกต้อง";
else:
echo "รอการยืนยัน";
endif;
?></td>
      </tr>
    </tbody>

  </table>
  </table>
  <h1>คอมเมนต์จากอาจารย์</h1>
  <h4>ชื่อนักศึกษา <?php echo $row['fullname']; ?></h4>
 <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ชื่อเอกสารสก.</th>
        <th>คอมเมนต์จากอาจารย์</th>


      </tr>
    </thead>
<?php 
$query=mysqli_query($con,"Select * from comment where user_id=$user_id");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">ไม่พบคอมเมนต์จากอาจารย์</h3></td>
<tr>
<?php 
} else {
while($row1=mysqli_fetch_array($query))
{
?>
    <tbody>
      <tr>
      <td><?php echo htmlentities($row1['sp']);?></td>
      <td><?php echo htmlentities($row1['comment']);?></td>
      </tr>
    </tbody>
    <?php } ?>
    <?php } ?>
  </table>
  </table>
  <h1>กรอกเอกสาร</h1>
            <!-- <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">สหกิจศึกษา</h2>
            </div> -->
            <div class="row gy-1 g-lg-1 mb-1">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp01.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp01.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp03.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp03.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp04.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp04.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
            
                
        </div>
        <a href="splast.php?hour=<?php echo $row['hoursactivity'];?>" class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 recent-work card border-5 shadow-lg py-3">ขั้นตอนโครงการสหกิจศึกษา</a>
        <h1>ดาวน์โหลดเอกสาร</h1>
        <div class="row gy-1 g-lg-1 mb-1">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp01pdf.php?id=<?php echo $user_id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp01.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp03pdf.php?id=<?php echo $user_id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp03.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp04pdf.php?id=<?php echo $user_id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp04.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
            
                
        </div>
    </section>
    <!-- End Recent Work -->

<?php
require_once 'includes/footer.php';
?>

</body>
</html>