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
        $stmt1 = $db->query("SELECT * FROM sp01 WHERE user_id = $user_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
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
        $fullnameeng = $_REQUEST['fullnameeng'];
        $yearclass = $_REQUEST['yearclass'];
        $studentid = $_REQUEST['studentid'];
        $faculty = $_REQUEST['faculty'];
        $branch = $_REQUEST['branch'];
        $sector = $_REQUEST['sector'];
        $gpa = $_REQUEST['gpa'];
        $gpax = $_REQUEST['gpax'];
        $preschoolyear = $_REQUEST['preschoolyear'];
        $schoolyear = $_REQUEST['schoolyear'];

        $housenumber = $_REQUEST['housenumber'];
        $road = $_REQUEST['road'];
        $subdistrict = $_REQUEST['subdistrict'];
        $district = $_REQUEST['district'];
        $province = $_REQUEST['province'];
        $postalcode = $_REQUEST['postalcode'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];

        $housenumber1 = $_REQUEST['housenumber1'];
        $road1 = $_REQUEST['road1'];
        $subdistrict1 = $_REQUEST['subdistrict1'];
        $district1 = $_REQUEST['district1'];
        $province1 = $_REQUEST['province1'];
        $postalcode1 = $_REQUEST['postalcode1'];
        $phone1 = $_REQUEST['phone1'];
        $email1 = $_REQUEST['email1'];

        $name2 = $_REQUEST['name2'];
        $relation2 = $_REQUEST['relation2'];
        $housenumber2 = $_REQUEST['housenumber2'];
        $road2 = $_REQUEST['road2'];
        $subdistrict2 = $_REQUEST['subdistrict2'];
        $district2 = $_REQUEST['district2'];
        $province2 = $_REQUEST['province2'];
        $postalcode2 = $_REQUEST['postalcode2'];
        $phone2 = $_REQUEST['phone2'];
        $email2 = $_REQUEST['email2'];
        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE users SET fullname = :fullname, fullnameeng = :fullnameeng, yearclass = :yearclass
            , housenumber = :housenumber, studentid = :studentid, faculty = :faculty, branch = :branch
            , road = :road, subdistrict = :subdistrict, district = :district, province = :province
            , postalcode = :postalcode, phone = :phone, email = :email, sector = :sector, gpa = :gpa
            , gpax = :gpax, preschoolyear = :preschoolyear, schoolyear = :schoolyear WHERE id = :id");
           
            $update_stmt->bindParam(':fullname', $fullname);
            $update_stmt->bindParam(':fullnameeng', $fullnameeng);
            $update_stmt->bindParam(':yearclass', $yearclass);
            $update_stmt->bindParam(':studentid', $studentid);
            $update_stmt->bindParam(':faculty', $faculty);
            $update_stmt->bindParam(':branch', $branch);
            $update_stmt->bindParam(':sector', $sector);
            $update_stmt->bindParam(':gpa', $gpa);
            $update_stmt->bindParam(':gpax', $gpax);
            $update_stmt->bindParam(':preschoolyear', $preschoolyear);
            $update_stmt->bindParam(':schoolyear', $schoolyear);
            $update_stmt->bindParam(':housenumber', $housenumber);
            $update_stmt->bindParam(':road', $road);
            $update_stmt->bindParam(':subdistrict', $subdistrict);
            $update_stmt->bindParam(':district', $district);
            $update_stmt->bindParam(':province', $province);
            $update_stmt->bindParam(':postalcode', $postalcode);
            $update_stmt->bindParam(':phone', $phone);
            $update_stmt->bindParam(':email', $email);
            $update_stmt->bindParam(':id', $user_id);
            
            $update_stmt1 = $db->prepare("UPDATE sp01 SET housenumber1 = :housenumber1, road1 = :road1
            , subdistrict1 = :subdistrict1, district1 = :district1, province1 = :province1
            , postalcode1 = :postalcode1, phone1 = :phone1, email1 = :email1
            ,name2 = :name2,relation2 = :relation2,housenumber2 = :housenumber2
            , road2 = :road2, subdistrict2 = :subdistrict2, district2 = :district2, province2 = :province2
            , postalcode2 = :postalcode2, phone2 = :phone2, email2 = :email2 WHERE user_id = :id");
            $update_stmt1->bindParam(':housenumber1', $housenumber1);
            $update_stmt1->bindParam(':road1', $road1);
            $update_stmt1->bindParam(':subdistrict1', $subdistrict1);
            $update_stmt1->bindParam(':district1', $district1);
            $update_stmt1->bindParam(':province1', $province1);
            $update_stmt1->bindParam(':postalcode1', $postalcode1);
            $update_stmt1->bindParam(':phone1', $phone1);
            $update_stmt1->bindParam(':email1', $email1);
            $update_stmt1->bindParam(':name2', $name2);
            $update_stmt1->bindParam(':relation2', $relation2);
            $update_stmt1->bindParam(':housenumber2', $housenumber2);
            $update_stmt1->bindParam(':road2', $road2);
            $update_stmt1->bindParam(':subdistrict2', $subdistrict2);
            $update_stmt1->bindParam(':district2', $district2);
            $update_stmt1->bindParam(':province2', $province2);
            $update_stmt1->bindParam(':postalcode2', $postalcode2);
            $update_stmt1->bindParam(':phone2', $phone2);
            $update_stmt1->bindParam(':email2', $email2);
            $update_stmt1->bindParam(':id', $user_id);
            $update_stmt1->execute();
            
            if ($update_stmt->execute()) {
                $updateMsg = "File update successfully...";
                header("refresh:1;spfirst.php");
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
            <label for="fullnameeng" class="form-label">ชื่อ-นามสกุลภาษาอังกฤษ(ตัวพิมพ์ใหญ่ทั้งหมด)</label>
            <input type="text" class="form-control" name="fullnameeng" value="<?php echo $row['fullnameeng']; ?>" >
        </div>
        <div class="mb-3">
            <label for="yearclass" class="form-label">ชั้นปี</label>
            <input type="text" class="form-control" name="yearclass" value="<?php echo $row['yearclass']; ?>" >
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
            <label for="gpa" class="form-label">จำนวยหน่วยกิตที่สอบได้</label>
            <input type="text" class="form-control" name="gpa" value="<?php echo $row['gpa']; ?>" >
        </div>
        <div class="mb-3">
            <label for="gpax" class="form-label">หน่วยกิต ระดับคะแนนเฉลี่ยรวม</label>
            <input type="text" class="form-control" name="gpax" value="<?php echo $row['gpax']; ?>" >
        </div>
        <div class="mb-3">
            <label for="preschoolyear" class="form-label">ภาคการศึกษาที่คาดว่าจะไปปฏิบัติงานสหกิจศึกษา ภาคการศึกษาที่ </label>
            <input type="number" class="form-control" name="preschoolyear" value="<?php echo $row['preschoolyear']; ?>" >
        </div>
        <div class="mb-3">
            <label for="schoolyear" class="form-label">ปีการศึกษา</label>
            <input type="number" class="form-control" name="schoolyear" value="<?php echo $row['schoolyear']; ?>" >
        </div>
        <h2>๒. ที่อยู่เลขที่ </h2>
        <hr> 
        <div class="mb-3">
            <label for="housenumber" class="form-label">ที่อยู่เลขที่ </label>
            <input type="text" class="form-control" name="housenumber" value="<?php echo $row['housenumber']; ?>" >
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
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" >
        </div>
        <h2>๓. ที่พักในภาคการศึกษานี้ (สำหรับกรณีเร่งด่วน)</h2>
        <hr>
        <div class="mb-3">
            <label for="housenumber1" class="form-label">ที่อยู่เลขที่ </label>
            <input type="text" class="form-control" name="housenumber1" value="<?php echo $row1['housenumber1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="road1" class="form-label">ถนน </label>
            <input type="text" class="form-control" name="road1" value="<?php echo $row1['road1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="subdistrict1" class="form-label">ตำบล/แขวง </label>
            <input type="text" class="form-control" name="subdistrict1" value="<?php echo $row1['subdistrict1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="district1" class="form-label">อำเภอ/เขต </label>
            <input type="text" class="form-control" name="district1" value="<?php echo $row1['district1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="province1" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="province1" value="<?php echo $row1['province1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="postalcode1" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" name="postalcode1" value="<?php echo $row1['postalcode1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone1" value="<?php echo $row1['phone1']; ?>" >
        </div>    
        <div class="mb-3">
            <label for="email1" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email1" value="<?php echo $row1['email1']; ?>" >
        <h2>๔. ผู้ปกครองนักศึกษาหรือผู้ที่สามารถติดต่อได้ (กรณีที่ปิดภาคการศึกษา)</h2>
        <hr>
        <div class="mb-3">
            <label for="name2" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name2" value="<?php echo $row1['name2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="relation2" class="form-label">ความสัมพันธ์กับนักศึกษา</label>
            <input type="text" class="form-control" name="relation2" value="<?php echo $row1['relation2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="housenumber2" class="form-label">ที่อยู่เลขที่ </label>
            <input type="text" class="form-control" name="housenumber2" value="<?php echo $row1['housenumber2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="road2" class="form-label">ถนน </label>
            <input type="text" class="form-control" name="road2" value="<?php echo $row1['road2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="subdistrict2" class="form-label">ตำบล/แขวง </label>
            <input type="text" class="form-control" name="subdistrict2" value="<?php echo $row1['subdistrict2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="district2" class="form-label">อำเภอ/เขต </label>
            <input type="text" class="form-control" name="district2" value="<?php echo $row1['district2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="province2" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="province2" value="<?php echo $row1['province2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="postalcode2" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" name="postalcode2" value="<?php echo $row1['postalcode2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone2" value="<?php echo $row1['phone2']; ?>" >
        </div>    
        <div class="mb-3">
            <label for="email2" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email2" value="<?php echo $row1['email2']; ?>" >
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