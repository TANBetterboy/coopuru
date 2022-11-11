<?php 
session_start();
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
    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt1 = $db->query("SELECT * FROM sp09 WHERE user_id = $user_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        $stmt2 = $db->query("SELECT * FROM enterprise WHERE user_id = $user_id");
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

        $stmt3 = $db->query("SELECT * FROM sp03 WHERE user_id = $user_id");
        $stmt3->execute();
        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
        
    }

if (isset($_REQUEST['update_id'])) {
    try {
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
        $select_stmt->bindParam(":id", $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } catch(PDOException $e) {
        $e->getMessage();
    }
} 

if (isset($_REQUEST['btn_update'])) {
    try {

        $fullname = $_REQUEST['fullname'];
        $studentid = $_REQUEST['studentid'];
        $faculty = $_REQUEST['faculty'];
        $branch = $_REQUEST['branch'];
        $sector = $_REQUEST['sector'];
        $semester = $_REQUEST['semester'];
        $schoolyear = $_REQUEST['schoolyear'];

        $name0 = $_REQUEST['name0'];

        $housenumber = $_REQUEST['housenumber'];
        $road = $_REQUEST['road'];
        $alley = $_REQUEST['alley'];
        $subdistrict = $_REQUEST['subdistrict'];
        $district = $_REQUEST['district'];
        $province = $_REQUEST['province'];
        $postalcode = $_REQUEST['postalcode'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];

        $title = $_REQUEST['title'];
        $titleeng = $_REQUEST['titleeng'];
        $detail = $_REQUEST['detail'];
        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE users SET fullname = :fullname, housenumber = :housenumber
            , studentid = :studentid, faculty = :faculty, branch = :branch
            , road = :road, alley = :alley, subdistrict = :subdistrict, district = :district, province = :province
            , postalcode = :postalcode, phone = :phone, email = :email, sector = :sector WHERE id = :id");
            $update_stmt->bindParam(':fullname', $fullname);
            $update_stmt->bindParam(':studentid', $studentid);
            $update_stmt->bindParam(':faculty', $faculty);
            $update_stmt->bindParam(':branch', $branch);
            $update_stmt->bindParam(':sector', $sector);
            $update_stmt->bindParam(':housenumber', $housenumber);
            $update_stmt->bindParam(':alley', $alley);
            $update_stmt->bindParam(':road', $road);
            $update_stmt->bindParam(':subdistrict', $subdistrict);
            $update_stmt->bindParam(':district', $district);
            $update_stmt->bindParam(':province', $province);
            $update_stmt->bindParam(':postalcode', $postalcode);
            $update_stmt->bindParam(':phone', $phone);
            $update_stmt->bindParam(':email', $email);
            $update_stmt->bindParam(':id', $user_id);
            
            $update_stmt1 = $db->prepare("UPDATE sp09 SET title = :title, titleeng = :titleeng, detail = :detail WHERE user_id = :id");
            $update_stmt1->bindParam(':title', $title);
            $update_stmt1->bindParam(':titleeng', $titleeng);
            $update_stmt1->bindParam(':detail', $detail);
            $update_stmt1->bindParam(':id', $user_id);
            $update_stmt1->execute();

            $update_stmt2 = $db->prepare("UPDATE enterprise SET name0 = :name0 WHERE user_id = :id");
            $update_stmt2->bindParam(':name0', $name0);
            $update_stmt2->bindParam(':id', $user_id);
            $update_stmt2->execute();
            if ($update_stmt->execute()) {
                $updateMsg = "File update successfully...";
                header("refresh:1;splast.php");
            }
        }
        
    } catch(PDOException $e) {
        $e->getMessage();
    }
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
<?php include('includes/header.php');?>
<section class="bg-light w-100">
    <div class="container py-5">
    <div class="alert alert-danger" role="alert">
<strong>คุณต้องมีชั่วโมงเตรียมความพร้อม 30 ชั่วโมง</strong>
</div>
        <h1 class="mt-4">sp01</h1>
        <?php 
            if(isset($errorMsg)) {
        ?>
            <div class="alert alert-danger">
                <strong><?php echo $errorMsg; ?></strong>
            </div>
        <?php } ?>

        <?php 
            if(isset($updateMsg)) {
        ?>
            <div class="alert alert-success">
                <strong><?php echo $updateMsg; ?></strong>
            </div>
        <?php } ?>
        
        <hr>
        
        <h2>ส่วนที่ ๑  ข้อมูลนักศึกษา (นักศึกษาจะต้องแนบผลการเรียน ณ วันที่ยื่นใบสมัคร)</h2>
        <hr>       
        <form action="" method="post">
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุล(ภาษาไทย)</label>
            <input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname']; ?>" >
        </div>
        <div class="mb-3">
            <label for="studentid" class="form-label">รหัสประจำตัว</label>
            <input type="number" class="form-control" name="studentid" value="<?php echo $row['studentid']; ?>" >
        </div>
        <div class="mb-3">
            <label for="branch" class="form-label">หลักสูตร/สาขาวิชา</label>
            <input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>" >
        </div>
        <div class="mb-3">
            <label for="faculty" class="form-label">คณะ/วิทยาลัย</label>
            <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']; ?>" >
        </div>
        <div class="mb-3">
            <label for="sector" class="form-label">ภาคปกติ/พิเศษ</label>
            <input type="text" class="form-control" name="sector" value="<?php echo $row['sector']; ?>" >
        </div>
        <div class="mb-3">
            <label for="name0" class="form-label">ปฏิบัติงานสหกิจศึกษา ณ สถานประกอบการ</label>
            <input type="text" class="form-control" name="name0" value="<?php echo $row2['name0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">ภาคการศึกษาที่คาดว่าจะไปปฏิบัติงานสหกิจศึกษา ภาคการศึกษาที่ </label>
            <input type="number" class="form-control" name="semester" value="<?php echo $row['semester']; ?>" >
        </div>
        <div class="mb-3">
            <label for="schoolyear" class="form-label">ปีการศึกษา</label>
            <input type="number" class="form-control" name="schoolyear" value="<?php echo $row['schoolyear']; ?>" >
        </div>
        <div class="mb-3">
            <label for="housenumber" class="form-label">ที่อยู่เลขที่ </label>
            <input type="text" class="form-control" name="housenumber" value="<?php echo $row['housenumber']; ?>" >
        </div>
        <div class="mb-3">
            <label for="alley" class="form-label">ตรอก/ซอย</label>
            <input type="text" class="form-control" name="alley" value="<?php echo $row['alley']; ?>" >
        </div>
        <div class="mb-3">
            <label for="road" class="form-label">ถนน </label>
            <input type="text" class="form-control" name="road" value="<?php echo $row['road']; ?>" >
        </div>
        <div class="mb-3">
            <label for="subdistrict" class="form-label">ตำบล/แขวง </label>
            <input type="text" class="form-control" name="subdistrict" value="<?php echo $row['subdistrict']; ?>" >
        </div>
        <div class="mb-3">
            <label for="district" class="form-label">อำเภอ/เขต </label>
            <input type="text" class="form-control" name="district" value="<?php echo $row['district']; ?>" >
        </div>
        <div class="mb-3">
            <label for="province" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="province" value="<?php echo $row['province']; ?>" >
        </div>
        <div class="mb-3">
            <label for="postalcode" class="form-label">รหัสไปรษณีย์</label>
            <input type="number" class="form-control" name="postalcode" value="<?php echo $row['postalcode']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fax" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax" value="<?php echo $row3['fax']; ?>" >
        </div>    
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" >
        </div>
        <h2>๒. หัวข้อรายงาน</h2>
        <hr>
        <div class="mb-3">
            <label for="title" class="form-label">ชื่อภาษาไทย</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row1['title']; ?>" >
        </div>
        <div class="mb-3">
            <label for="titleeng" class="form-label">ชื่อภาษาอังกฤษ</label>
            <input type="text" class="form-control" name="titleeng" value="<?php echo $row1['titleeng']; ?>" >
        </div>
            <hr>
        <h2>๓. รายละเอียดเนื้อหาของรายงาน</h2>
        <hr>
        <div class="mb-3">
            <label for="detail" class="form-label">รายละเอียดเนื้อหาของรายงาน</label>
            <input type="text" class="form-control" name="detail" value="<?php echo $row1['detail']; ?>" >
        </div>
        
            <hr>
        
            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
        </form>
        
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php include('includes/footer.php');?>
</body>

</html>