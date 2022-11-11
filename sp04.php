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
        $stmt1 = $db->query("SELECT * FROM sp04 WHERE user_id = $user_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        $stmt2 = $db->query("SELECT * FROM enterprise WHERE user_id = $user_id");
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

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
        $housenumber = $_REQUEST['housenumber'];
        $village = $_REQUEST['village'];
        $alley = $_REQUEST['alley'];
        $road = $_REQUEST['road'];
        $subdistrict = $_REQUEST['subdistrict'];
        $district = $_REQUEST['district'];
        $province = $_REQUEST['province'];
        $postalcode = $_REQUEST['postalcode'];
        $phone = $_REQUEST['phone'];
        $semester = $_REQUEST['semester'];
        $schoolyear = $_REQUEST['schoolyear'];

        $name0 = $_REQUEST['name0'];
        $address0 = $_REQUEST['address0'];
        $phone0 = $_REQUEST['phone0'];
        $email0 = $_REQUEST['email0'];
        $takename = $_REQUEST['takename'];

        $name1 = $_REQUEST['name1'];
        $name2 = $_REQUEST['name2'];
        $name3 = $_REQUEST['name3'];
        $studentid1 = $_REQUEST['studentid1'];
        $studentid2 = $_REQUEST['studentid2'];
        $studentid3 = $_REQUEST['studentid3'];
        $branch1 = $_REQUEST['branch1'];
        $branch2 = $_REQUEST['branch2'];
        $branch3 = $_REQUEST['branch3'];
        $faculty1 = $_REQUEST['faculty1'];
        $faculty2 = $_REQUEST['faculty2'];
        $faculty3 = $_REQUEST['faculty3'];


       
        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE users SET fullname = :fullname, yearclass = :yearclass
            , housenumber = :housenumber, studentid = :studentid, faculty = :faculty, branch = :branch
            , road = :road, subdistrict = :subdistrict, district = :district, province = :province
            , postalcode = :postalcode, phone = :phone, village = :village
            , alley = :alley, semester = :semester, schoolyear = :schoolyear WHERE id = :id");
        
            $update_stmt->bindParam(':fullname', $fullname);
            $update_stmt->bindParam(':yearclass', $yearclass);
            $update_stmt->bindParam(':studentid', $studentid);
            $update_stmt->bindParam(':faculty', $faculty);
            $update_stmt->bindParam(':branch', $branch);
            $update_stmt->bindParam(':village', $village);
            $update_stmt->bindParam(':alley', $alley);
            $update_stmt->bindParam(':semester', $semester);
            $update_stmt->bindParam(':schoolyear', $schoolyear);
            $update_stmt->bindParam(':housenumber', $housenumber);
            $update_stmt->bindParam(':road', $road);
            $update_stmt->bindParam(':subdistrict', $subdistrict);
            $update_stmt->bindParam(':district', $district);
            $update_stmt->bindParam(':province', $province);
            $update_stmt->bindParam(':postalcode', $postalcode);
            $update_stmt->bindParam(':phone', $phone);
            $update_stmt->bindParam(':id', $user_id);
            
            $update_stmt1 = $db->prepare("UPDATE sp04 SET name1 = :name1, name2 = :name2
            , name3 = :name3, studentid1 = :studentid1, studentid2 = :studentid2, studentid3 = :studentid3
            , branch1 = :branch1, branch2 = :branch2, branch3 = :branch3
            , faculty1 = :faculty1, faculty2 = :faculty2, faculty3 = :faculty3 WHERE user_id = :id");
            $update_stmt1->bindParam(':name1', $name1);
            $update_stmt1->bindParam(':name2', $name2);
            $update_stmt1->bindParam(':name3', $name3);
            $update_stmt1->bindParam(':studentid1', $studentid1);
            $update_stmt1->bindParam(':studentid2', $studentid2);
            $update_stmt1->bindParam(':studentid3', $studentid3);
            $update_stmt1->bindParam(':branch1', $branch1);
            $update_stmt1->bindParam(':branch2', $branch2);
            $update_stmt1->bindParam(':branch3', $branch3);
            $update_stmt1->bindParam(':faculty1', $faculty1);
            $update_stmt1->bindParam(':faculty2', $faculty2);
            $update_stmt1->bindParam(':faculty3', $faculty3);
            $update_stmt1->bindParam(':id', $user_id);
            $update_stmt1->execute();

            $update_stmt2 = $db->prepare("UPDATE enterprise SET name0 = :name0, address0 = :address0
            , phone0 = :phone0, email0 = :email0, takename = :takename WHERE user_id = :id");
            $update_stmt2->bindParam(':name0', $name0);
            $update_stmt2->bindParam(':address0', $address0);
            $update_stmt2->bindParam(':phone0', $phone0);
            $update_stmt2->bindParam(':email0', $email0);
            $update_stmt2->bindParam(':takename', $takename);    
            $update_stmt2->bindParam(':id', $user_id);
            $update_stmt2->execute();




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
        <h1 class="mt-4">sp4</h1>
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
            <label for="studentid" class="form-label">รหัสประจำตัวนักศึกษา</label>
            <input type="text" class="form-control" name="studentid" value="<?php echo $row['studentid']; ?>" >
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
            <label for="housenumber" class="form-label">ที่อยู่เลขที่</label>
            <input type="text" class="form-control" name="housenumber" value="<?php echo $row['housenumber']; ?>" >
        </div>
        <div class="mb-3">
            <label for="village" class="form-label">หมู่</label>
            <input type="text" class="form-control" name="village" value="<?php echo $row['village']; ?>" >
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
            <label for="semester" class="form-label">ภาคการศึกษาที่คาดว่าจะไปปฏิบัติงานสหกิจศึกษา ภาคการศึกษาที่ </label>
            <input type="number" class="form-control" name="semester" value="<?php echo $row['semester']; ?>" >
        </div>
        <div class="mb-3">
            <label for="schoolyear" class="form-label">ปีการศึกษา</label>
            <input type="number" class="form-control" name="schoolyear" value="<?php echo $row['schoolyear']; ?>" >
        </div>
        <hr>
        <h3>มีความประสงจะขอหนังสือขอความอนุเคราะสถานประกอบการเพื่อเข้าปฏิบัติงานสหกิจศึกษา รายระเอียดดังนี้</h3>
            <hr>
        <div class="mb-3">
            <label for="name0" class="form-label">ชื่อสถานประกอบการ</label>
            <input type="text" class="form-control" name="name0" value="<?php echo $row2['name0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="address0" class="form-label">ที่ตั้งของสถานประกอบการ</label>
            <input type="text" class="form-control" name="address0" value="<?php echo $row2['address0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone0" class="form-label">เบอร์โทรศัพท์ของสถานประกอบการ</label>
            <input type="text" class="form-control" name="phone0" value="<?php echo $row2['phone0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="email0" class="form-label">email</label>
            <input type="text" class="form-control" name="email0" value="<?php echo $row2['email0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="takename" class="form-label">ชื่อ-นามสกุล หรือตำแหน่งของผู้ที่รับหนังสือฉบับบนี้</label>
            <input type="text" class="form-control" name="takename" value="<?php echo $row2['takename']; ?>" >
        </div>
        <hr>
        <h3>หากมีนักศึกษาจะไปปฏิบัติงานสหกิจศึกษาที่สถานประกอบการเดียวกัน กรุณาใส่รายระเอียดดังนี้</h3>
            <hr>
        <h4>ลำดับ1</h4>
            <hr>
        <div class="mb-3">
            <label for="name1" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name1" value="<?php echo $row1['name1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="studentid1" class="form-label">รหัสประจำตัว</label>
            <input type="number" class="form-control" name="studentid1" value="<?php echo $row1['studentid1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="branch1" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch1" value="<?php echo $row1['branch1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="faculty1" class="form-label">คณะ</label>
            <input type="text" class="form-control" name="faculty1" value="<?php echo $row1['faculty1']; ?>" >
        </div>
            <hr>
        <h4>ลำดับ2</h4>
            <hr>
        <div class="mb-3">
            <label for="name2" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name2" value="<?php echo $row1['name2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="studentid2" class="form-label">รหัสประจำตัว</label>
            <input type="number" class="form-control" name="studentid2" value="<?php echo $row1['studentid2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="branch2" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch2" value="<?php echo $row1['branch2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="faculty2" class="form-label">คณะ</label>
            <input type="text" class="form-control" name="faculty2" value="<?php echo $row1['faculty2']; ?>" >
        </div>
            <hr>
        <h4>ลำดับ3</h4>
            <hr>
        <div class="mb-3">
            <label for="name3" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name3" value="<?php echo $row1['name3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="studentid3" class="form-label">รหัสประจำตัว</label>
            <input type="number" class="form-control" name="studentid3" value="<?php echo $row1['studentid3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="branch3" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch3" value="<?php echo $row1['branch3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="faculty3" class="form-label">คณะ</label>
            <input type="text" class="form-control" name="faculty3" value="<?php echo $row1['faculty3']; ?>" >
        </div>
            <hr>
            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
        </form>
        <hr>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php include('includes/footer.php');?>
</body>

</html>