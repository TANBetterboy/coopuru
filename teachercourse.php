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
                <span class="text-dark h6"><br>สหกิจศึกษากับการศึกษาเชิงคุณภาพ<br></span> <span class="text-success h6">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
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
<h1>ข้อมูลส่วนตัวของนักศึกษา</h1>
 <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ชื่อ</th>
        <th>คณะ</th>
        <th>สาขา</th>
        <th>ดูข้อมูลส่วนตัวของนักศึกษา</th>
        <th>ดูเอกสารสก.ของนักศึกษา</th>

      </tr>
    </thead>
          <?php 
$query=mysqli_query($con,"Select * from users");

while($row1=mysqli_fetch_array($query))
{
?>
    <tbody>
      <tr>
      <td><?php echo htmlentities($row1['fullname']);?></td>
      <td><?php echo htmlentities($row1['faculty']);?></td>
      <td><?php echo htmlentities($row1['branch']);?></td>
      <td>
        <a class="btn btn-primary"href="datastudent.php?id=<?php echo htmlentities($row1['id']);?>">ข้อมูลส่วนตัวของนักศึกษา</a>
    </td>
    <td>
        <a class="btn btn-primary"href="dataspstudent.php?id=<?php echo htmlentities($row1['id']);?>">ข้อมูลเอกสารสก</a>
    </td>

    </td>
    
      
      
      </tr>
    </tbody>
    <?php } ?>
  </table>
  </table>

<br>
<h1>ข้อมูลของสถานประกอบการ</h1>
  <table class="table table-bordered table-centered table-inverse m-0">
<thead>
<tr>
                                           
<th>ชื่อของสถานประกอบการ</th>
<th>ชื่อผู้ใช้งาน</th>
<th>ที่อยู่</th>


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
<td></td>

<?php } }?>
                                               
                                            </tbody>
                                        </table>
<br>
<h1>ข้อมูลของสถานประกอบการที่นักศึกษาสมัคร</h1>
  <table class="table table-bordered table-centered table-inverse m-0">
<thead>
<tr>
                                           
<th>ชื่อของสถานประกอบการ</th>
<th>ชื่อนักศึกษา</th>



</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"Select users.fullname,enterprise.name0 from users,enterprise where users.id=enterprise.user_id");
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
    
<td><b><?php echo htmlentities($row2['name0']);?></b></td>
<td><?php echo htmlentities($row2['fullname'])?></td>


<?php } }?>
                                               
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