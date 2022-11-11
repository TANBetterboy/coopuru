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
        $stmt = $db->query("SELECT * FROM teacherusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt1 = $db->query("SELECT AVG(result) AS Avg_result FROM sp12 WHERE schoolyear012 = 2563 ");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
        $stmt2 = $db->query("SELECT AVG(result) AS Avg_result FROM sp12 WHERE schoolyear012 = 2564 ");
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
        $stmt3 = $db->query("SELECT AVG(result) AS Avg_result FROM sp12 WHERE schoolyear012 = 2565 ");
        $stmt3->execute();
        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
        
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
            <!-- App css -->
           

</head>
<body>
  
 <!-- Header -->
 <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="president.php">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <span class="text-dark h4">CWIE</span> <span class="text-success h4">URU</span>
                <span class="text-dark h6"><br>สหกิจศึกษากับการศึกษา<br></span>
                <span class="text-dark h6">เชิงบุรณาการกับการทำงาน<br></span> <span class="text-success h6">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-1 mb-1">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-1 text-center text-dark">

                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                  Hello,<?php echo mb_strimwidth( $row['fullname'], 0, 10, "..." ); ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="editPT.php">ตั้งค่า</a></li>
                  <li><a class="dropdown-item" href="change-password.php">เปลี่ยนรหัสผ่าน</a></li>
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

               <!-- Start Team Member -->
               <section class="bg-light w-100">
      <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="recent-work-header row text-center  text-light ">
                <h2 class="h2 semi-bold-600 py-5">เว็บไซต์สำหรับผู้บริหาร ยินดีต้อนรับ</h2> 
    </div>
    <div class="recent-work-header row text-center  text-light">
                <h3 class="col-md-6 m-auto h3 semi-bold-600 ">"<?php echo $row['nameprefix']; ?> <?php echo $row['fullname']; ?>"</h3>
    </div>
</div>

                  <!-- Start pricing -->
    <div class="container-lg py-1">
        <div class="col-md-12 m-auto text-center py-5">
            <h1 class="pricing-header h2 semi-bold-600">แดชบอร์ด</h1>
            <p class="pricing-footer">
                แดชบอร์ด สำหรับดูรายการที่เกี่ยวกับงารสหกิจศึกษากับการศีกาาเชิงบูรณาการ.
                 
            </p>
        </div>

     <!-- Bar Chart -->
     <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ผลประเมินความพึงพอใจนักศึกษา</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                    <hr>
                                    ค่าเฉลี่ยผลประเมินความพึงพอใจนักศึกษา ประจำปี
                                </div>
                            </div>
        <div class="row px-lg-1">



            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนนักศึกษา</h2>
                        <?php $query=mysqli_query($con,"select * from users ");$countcat=mysqli_num_rows($query);?>  
                        <h2><?php echo htmlentities($countcat);?> <small></small></h2>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนสถานประกอบการ</h2>
                        <?php $query=mysqli_query($con,"select * from enterpriseusers");$countposts=mysqli_num_rows($query);?>
                        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนอาจารย์ที่ปรึกษา</h2>
                        <?php $query=mysqli_query($con,"select * from teacherusers where urole = 'อาจารย์ที่ปรึกษา' ");$countposts=mysqli_num_rows($query);?>
                        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนอาจารย์นิเทศ</h2>
                        <?php $query=mysqli_query($con,"select * from teacherusers where urole = 'อาจารย์นิเทศ' ");$countposts=mysqli_num_rows($query);?>
                        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                              
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนผู้นิเทศ</h2>
                        <?php $query=mysqli_query($con,"select * from teacherusers where urole = 'ผู้นิเทศ' ");$countposts=mysqli_num_rows($query);?>
                        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                              
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนMOU</h2>
                        <?php $query=mysqli_query($con,"select mou from dashboard");$countcat=mysqli_fetch_array($query);?>  
                        <h2><?php echo $countcat['mou'];?> <small></small></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนโครงงาน</h2>
                        <?php $query=mysqli_query($con,"select project from dashboard");$countcat=mysqli_fetch_array($query);?>  
                        <h2><?php echo $countcat['project'];?> <small></small></h2>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนรางวัล</h2>
                        <?php $query=mysqli_query($con,"select award from dashboard");$countcat=mysqli_fetch_array($query);?>  
                        <h2><?php echo $countcat['award'];?> <small></small></h2>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">จำนวนนักศึกษาที่ได้งานทำ</h2>
                        <?php $query=mysqli_query($con,"select gotwork from dashboard");$countcat=mysqli_fetch_array($query);?>  
                        <h2><?php echo $countcat['gotwork'];?> <small></small></h2>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">ความพึงพอใจนักศึกษาสหกิจศึกษาจากสถานประกอบการ</h2>
                        <?php $query=mysqli_query($con,"select satisfaction from dashboard");$countcat=mysqli_fetch_array($query);?>  
                        <h2><?php echo $countcat['satisfaction'];?> <small></small></h2>                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <!-- End Content -->




 
</section>


<?php
require_once 'includes/footer.php';
?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- <script src="js/chart-bar-demo.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
    var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["2563", "2564", "2565", '2566', '2567', '2568', '2569'],
    datasets: [{
      label: "ค่าเฉลี่ย ร้อยละ",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: ['<?php echo $row1['Avg_result']*100/40;?>','<?php echo $row2['Avg_result']*100/40;?>','<?php echo $row3['Avg_result']*100/40;?>','0','0','0','0'],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});

    </script>
</body>
</html>