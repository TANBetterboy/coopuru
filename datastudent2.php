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
        $stmt = $db->query("SELECT * FROM enterpriseusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id=intval($_GET['id']);
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
            <a class="navbar-brand h1" href="enterprise.php">
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
                    <a class=" nav-link" href="editPT.php "><i class='bx bx-cog bx-sm text-success'></i><?php echo mb_strimwidth( $row['nameenterprise'], 0, 10, "..." ); ?> </a></i></a>
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
                <h2 class="h2 semi-bold-600 py-5">เว็บไซต์สำหรับเจ้าหน้าที่สถานประกอบการ ยินดีต้อนรับ</h2> 
    </div>
    <div class="recent-work-header row text-center  text-light">
                <h3 class="col-md-6 m-auto h3 semi-bold-600 ">"<?php echo $row['nameenterprise']; ?>"</h3>
    </div>
</div>








 <!-- Start Feature Work -->
 <section class="bg-light py-5">
 <div class="container py-3">
 <h1>ข้อมูลส่วนตัวของนักศึกษา</h1><br>
  <table class="table table-bordered table-centered table-inverse m-0">
<thead class="table-dark">
<tr>
                                           
<th>หัวข้อ</th>
<th>รายละเอียด</th>



</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"select * from users where id=$id");
$row2=mysqli_fetch_array($query)
?>
 <tr>
 <td><b>คำนำหน้า</b></td>
<td><b><?php echo htmlentities($row2['nameprefix']);?></b></td>
<tr>

<td><b>ชื่อ-นามสกุล</b></td>
<td><b><?php echo htmlentities($row2['fullname']);?></b></td>
<tr>

<td><b>ชื่อ-นามสกุลภาษาอังกฤษ</b></td>
<td><b><?php echo htmlentities($row2['fullnameeng']);?></b></td>
<tr>

<td><b>อีเมล์</b></td>
<td><b><?php echo htmlentities($row2['email']);?></b></td>
<tr>

<td><b>คณะ</b></td>
<td><b><?php echo htmlentities($row2['faculty']);?></b></td>
<tr>

<td><b>สาขา</b></td>
<td><b><?php echo htmlentities($row2['branch']);?></b></td>
<tr>

<td><b>รหัสนักศึกษา</b></td>
<td><b><?php echo htmlentities($row2['studentid']);?></b></td>
<tr>

<td><b>หลักสูตร</b></td>
<td><b><?php echo htmlentities($row2['course']);?></b></td>
<tr>

<td><b>ชั้นปี</b></td>
<td><b><?php echo htmlentities($row2['yearclass']);?></b></td>
<tr>

<td><b>ชื่ออาจารย์ที่ปรึกษา</b></td>
<td><b><?php echo htmlentities($row2['teacher']);?></b></td>
<tr>

<td><b>ชั่วโมงกิจกรรม</b></td>
<td><b><?php echo htmlentities($row2['hoursactivity']);?></b></td>
<tr>

<td><b>โทรศัพท์</b></td>
<td><b><?php echo htmlentities($row2['phone']);?></b></td>
<tr>

<td><b>บ้านเลขที่</b></td>
<td><b><?php echo htmlentities($row2['housenumber']);?></b></td>
<tr>

<td><b>หมู่</b></td>
<td><b><?php echo htmlentities($row2['village']);?></b></td>
<tr>

<td><b>ซอย</b></td>
<td><b><?php echo htmlentities($row2['alley']);?></b></td>
<tr>

<td><b>ถนน</b></td>
<td><b><?php echo htmlentities($row2['road']);?></b></td>
<tr>

<td><b>ตำบล</b></td>
<td><b><?php echo htmlentities($row2['subdistrict']);?></b></td>
<tr>

<td><b>อำเภอ</b></td>
<td><b><?php echo htmlentities($row2['district']);?></b></td>
<tr>

<td><b>จังหวัด</b></td>
<td><b><?php echo htmlentities($row2['province']);?></b></td>
<tr>

<td><b>รหัสไปรษณีย์</b></td>
<td><b><?php echo htmlentities($row2['postalcode']);?></b></td>
<tr>

<td><b>gpa</b></td>
<td><b><?php echo htmlentities($row2['gpa']);?></b></td>
<tr>

<td><b>gpax</b></td>
<td><b><?php echo htmlentities($row2['gpax']);?></b></td>
<tr>


                                               
                                            </tbody>
                                        </table>

  </div>
    </section>
    <!-- End Feature Work -->



 



<?php
require_once 'includes/footer.php';
?>



</body>
</html>