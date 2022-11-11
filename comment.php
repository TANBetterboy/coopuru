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
          
    <section class="container">
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

        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="team-member  col-lg-3">
            <img class="team-member-img img-fluid rounded p-4" src="upload/user/<?php echo $row['image']; ?>" alt="Card image">
                    
            </div>
            <div class="creative-progress col-md-9">
            <ul class="team-member-caption list-unstyled  pt-4 text-dark  light-300">
                        <li>ชื่อ : <?php echo $row['fullname']; ?></li>
                        <li>คณะ : <?php echo $row['faculty']; ?></li>
                        <li>สาขา : <?php echo $row['branch']; ?></li>
                    </ul>
                    <div class="row mt-6 mt-sm-9">
                        <div class="col-6">
                            <h4 class="h5 text-dark ">ต้องการชั่วโมงเตรียมความพร้อม30ชั่วโมง</h4>
                        </div>
                        <div class="col-6 text-right text-dark ">คุณมี <?php echo $row['hoursactivity'];?> ชั่วโมง</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $hours; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="30"></div>
                    </div>
                    <br /> 
                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 recent-work card border-5 shadow-lg py-3" href="pre-register.php" role="button">สมัครเตรียมความพร้อมสหกิจศึกษา</a>
                </div>
                
        </div>
        
    </section>
    </section>
<!-- Start Recent Work -->
<section class="py-2 mb-2">
  <div class="container py-3">
  <div class="row gy-1 g-lg-1 mb-1">
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="spfirst.php?hour=<?php echo $row['hoursactivity'];?>" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/n1.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="pre.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/n2.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="dataenterprise.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/n3.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                </div>
        </div>
    </section>
    <!-- End Recent Work -->
 <!-- Start Feature Work -->
 <section class="bg-light py-5">
        <div class="feature-work container my-1 ">
            <div class="row d-flex d-flex align-items-center ">
                
                
                    <div class="row">
                        <a class="col recent-work card border-5 shadow-lg py-3" data-type="image" data-fslightbox="gallery" href="images/5.png">
                            <img class="img-fluid" src="images/5.png">
                        </a>
                       
                    </div>
                    
                
            </div><hr>
            <div class="row d-flex d-flex align-items-center">
            
                    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.3652937852107!2d100.0930440843475!3d17.632849602684697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30df303aeba49521%3A0xf0346c6d9b33160!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lit4Li44LiV4Lij4LiU4Li04LiV4LiW4LmM!5e0!3m2!1sth!2sth!4v1660835028083!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                
            </div><hr>
            
        </div>
        
    </section>
    <!-- End Feature Work -->



 



<?php
require_once 'includes/footer.php';
?>



</body>
</html>
