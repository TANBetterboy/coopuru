<?php 
session_start();
include('includes/config.php');
require_once('connection.php');
if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
}
error_reporting(0);
    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $db->query("SELECT * FROM teacherusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id=intval($_GET['id']);
    }
if( $_GET['appid01'])
{
	$id=intval($_GET['appid01']);
	$query=mysqli_query($con,"update sp01 set status='1' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['disid01'])
{
	$id=intval($_GET['disid01']);
	$query=mysqli_query($con,"update sp01 set status='2' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['appid03'])
{
	$id=intval($_GET['appid03']);
	$query=mysqli_query($con,"update sp03 set status='1' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['disid03'])
{
	$id=intval($_GET['disid03']);
	$query=mysqli_query($con,"update sp03 set status='2' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['appid04'])
{
	$id=intval($_GET['appid04']);
	$query=mysqli_query($con,"update sp04 set status='1' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['disid04'])
{
	$id=intval($_GET['disid04']);
	$query=mysqli_query($con,"update sp04 set status='2' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['appid07'])
{
	$id=intval($_GET['appid07']);
	$query=mysqli_query($con,"update sp07 set status='1' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['disid07'])
{
	$id=intval($_GET['disid07']);
	$query=mysqli_query($con,"update sp07 set status='2' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['appid08'])
{
	$id=intval($_GET['appid08']);
	$query=mysqli_query($con,"update sp08 set status='1' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['disid08'])
{
	$id=intval($_GET['disid08']);
	$query=mysqli_query($con,"update sp08 set status='2' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['appid09'])
{
	$id=intval($_GET['appid09']);
	$query=mysqli_query($con,"update sp09 set status='1' where user_id='$id'");
	$msg="Comment unapprove ";
}
if( $_GET['disid09'])
{
	$id=intval($_GET['disid09']);
	$query=mysqli_query($con,"update sp09 set status='2' where user_id='$id'");
	$msg="Comment unapprove ";
}
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
  
 <!-- Header -->
 <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="teachercourse.php">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <span class="text-dark h4">CWIE</span> <span class="text-success h4">URU</span>
                <span class="text-dark h6"><br>สหกิจศึกษาและการศึกษา<br>เชิงบูรณาการกับการทำงาน<br></span> <span class="text-success h6">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-1 mb-1">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                    

                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class=" nav-link" href="editPT.php "><i class='bx bx-cog bx-sm text-success'></i><?php echo mb_strimwidth( $row['fullname'], 0, 10, "..." ); ?> </a></i></a>
                    <a class=" nav-link" href="logout.php"><i class="btn btn-danger">ลงชื่อออก</a></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
 <!-- Bootstrap -->
 <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

            <!-- Start Team Member -->
            <section class="bg-light w-100">
      <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="recent-work-header row text-center  text-light ">
                <h2 class="h2 semi-bold-600 py-5">เว็บไซต์สำหรับประธานหลักสูตร ยินดีต้อนรับ</h2> 
    </div>
    <div class="recent-work-header row text-center  text-light">
                <h3 class="col-md-6 m-auto h3 semi-bold-600 ">"<?php echo $row['nameprefix']; ?> <?php echo $row['fullname']; ?>"</h3>
    </div>
</div>








 <!-- Start Feature Work -->
 <section class="bg-light py-5">
 <div class="container py-3">
    
 <h1>ข้อมูลส่วนตัวของนักศึกษา</h1><br>
 <?php 
$query=mysqli_query($con,"Select * from users  where id=$id");
$row1=mysqli_fetch_array($query);
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
<h4>ชื่อนักศึกษา <?php echo $row1['fullname']; ?></h4>
<div class="row gy-1 g-lg-1 mb-1">

       

    
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp01pdf.php?id=<?php echo $id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp01.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp03pdf.php?id=<?php echo $id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp03.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp04pdf.php?id=<?php echo $id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp04.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp07pdf.php?id=<?php echo $id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp07.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp08pdf.php?id=<?php echo $id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp08.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="sp09pdf.php?id=<?php echo $id?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/sp09.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                </div>
<br>
                <h2>ยืนยันความถูกต้องของเอกสาร</h2>
                <h4>ชื่อนักศึกษา <?php echo $row1['fullname']; ?></h4>
                <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ชื่อเอกสาร</th>
        <th>ยืนยันความถูกต้อง</th>
        <th>เอกสารไม่ถูกต้อง</th>
        <th>สถานะเอกสาร</th>
        
      </tr>
    </thead>
 
    <tbody>
      <tr>
    <td>สก.01</td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?appid01=<?php echo $id?>">ยืนยันความถูกต้อง</a></td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?disid01=<?php echo $id?>">เอกสารไม่ถูกต้อง</a></td>
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
    <td> <a class="btn btn-primary"href="dataspstudent.php?appid03=<?php echo $id?>">ยืนยันความถูกต้อง</a></td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?disid03=<?php echo $id?>">เอกสารไม่ถูกต้อง</a></td>
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
    <td> <a class="btn btn-primary"href="dataspstudent.php?appid04=<?php echo $id?>">ยืนยันความถูกต้อง</a></td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?disid04=<?php echo $id?>">เอกสารไม่ถูกต้อง</a></td>
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
      <tr>
    <td>สก.07</td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?appid07=<?php echo $id?>">ยืนยันความถูกต้อง</a></td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?disid07=<?php echo $id?>">เอกสารไม่ถูกต้อง</a></td>
    <td><?php $st=$row5['status'];
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
    <td>สก.08</td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?appid08=<?php echo $id?>">ยืนยันความถูกต้อง</a></td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?disid08=<?php echo $id?>">เอกสารไม่ถูกต้อง</a></td>
    <td><?php $st=$row6['status'];
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
    <td>สก.09</td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?appid09=<?php echo $id?>">ยืนยันความถูกต้อง</a></td>
    <td> <a class="btn btn-primary"href="dataspstudent.php?disid09=<?php echo $id?>">เอกสารไม่ถูกต้อง</a></td>
    <td><?php $st=$row7['status'];
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
  <h1>คอมเมนต์นักศึกษา</h1>
  <h4>ชื่อนักศึกษา <?php echo $row1['fullname']; ?></h4>
 <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ชื่อเอกสารสก.</th>
        <th>คอมเมนต์นักศึกษา</th>


      </tr>
    </thead>
          <?php 
$query=mysqli_query($con,"Select * from comment where user_id=$id");

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
  </table>
  </table>

  <a class="btn btn-primary"href="commentstudent3.php?id=<?php echo $id?>">เพิ่มคอมเมนต์นักศึกษา</a>
  </div>

    </section>
    <!-- End Feature Work -->



 



<?php
require_once 'includes/footer.php';
?>



</body>
</html>