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
        $stmt = $db->query("SELECT * FROM visitusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
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
            <a class="navbar-brand h1" href="visituser.php">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <span class="text-dark h4">CWIE</span> <span class="text-success h4">URU</span>
                <span class="text-dark h6"><br>สหกิจศึกษากับการศึกษาเชิงคุณภาพ<br></span> <span class="text-success h6">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-1 mb-1">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                    <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spteac2.php">ประวัติการกรอกข้อมูลเอกสารออนไลน์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spimg2.php">ประวัติการอัพโหลดรูปภาพข้อมูลเอกสาร</a>
                        </li>

                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                  Hello,<?php echo mb_strimwidth( $row['fullname'], 0, 10, "..." ); ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="editPV.php">ตั้งค่า</a></li>
                  <li><a class="dropdown-item" href="change-passwordVI.php">เปลี่ยนรหัสผ่าน</a></li>
                  <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
              </div>
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
 <!-- Bootstrap -->
 <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        new Chartist.Line('#traffic-chart', {
            labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
            series: [
                [23000, 25000, 19000, 34000, 56000, 64000]
            ]
            }, {
            low: 0,
            showArea: true
        });
    </script>
            <!-- Start Team Member -->
            <section class="bg-light w-100">
      <!-- Start Banner Hero -->
    <div   id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="recent-work-header row text-center  text-light ">
                <h2 class="h2 semi-bold-600 py-5">เว็บไซต์สำหรับผู้นิเทศ ยินดีต้อนรับ</h2> 
    </div>
    <div class="recent-work-header row text-center  text-light">
                <h3 class="col-md-6 m-auto h3 semi-bold-600 ">"<?php echo $row['nameprefix']; ?> <?php echo $row['fullname']; ?>"</h3>
    </div>
</div>
<!-- End Banner Hero -->       
    <section class="container">
        
<h1>สก.13</h1>

<div class="row gy-1 g-lg-1 mb-1">

<!-- Start Recent Work -->
<div class="col-md-4 mb-1">
<a href="sp13.php" class="recent-work card border-1 shadow-lg overflow-hidden">
    <img class="recent-work-img card-img" src="images/13b.png" alt="Card image">
    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            
        </div>
    </div>
</a>
</div><!-- End Recent Work -->
<!-- Start Recent Work -->
<div class="col-md-4 mb-1">
<a href="sp13up.php" class="recent-work card border-1 shadow-lg overflow-hidden">
    <img class="recent-work-img card-img" src="images/13a.png" alt="Card image">
    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            
        </div>
    </div>
</a>
</div><!-- End Recent Work -->

<h1>สก.14</h1>

<div class="row gy-1 g-lg-1 mb-1">

<!-- Start Recent Work -->
<div class="col-md-4 mb-1">
<a href="sp14.php" class="recent-work card border-1 shadow-lg overflow-hidden">
    <img class="recent-work-img card-img" src="images/14b.png" alt="Card image">
    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            
        </div>
    </div>
</a>
</div><!-- End Recent Work -->
<!-- Start Recent Work -->
<div class="col-md-4 mb-1">
<a href="sp14up.php" class="recent-work card border-1 shadow-lg overflow-hidden">
    <img class="recent-work-img card-img" src="images/14a.png" alt="Card image">
    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            
        </div>
    </div>
</a>
</div><!-- End Recent Work --><br></div>
</div>

<h1>ประวัติ</h1>

<div class="row gy-1 g-lg-1 mb-1">

<!-- Start Recent Work -->
<div class="col-md-4 mb-1">
<a href="spteac2.php" class="recent-work card border-1 shadow-lg overflow-hidden">
    <img class="recent-work-img card-img" src="images/10.png" alt="Card image">
    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            
        </div>
    </div>
</a>
</div><!-- End Recent Work -->
<!-- Start Recent Work -->
<div class="col-md-4 mb-1">
<a href="spimg2.php" class="recent-work card border-1 shadow-lg overflow-hidden">
    <img class="recent-work-img card-img" src="images/11.png" alt="Card image">
    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
            
        </div>
    </div>
</a>
</div><!-- End Recent Work --><br></div>
</div>
    </section>
    </section>




 



<?php
require_once 'includes/footer.php';
?>



</body>
</html>