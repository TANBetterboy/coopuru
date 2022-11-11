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
    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt1 = $db->query("SELECT * FROM sp07 WHERE user_id = $user_id");
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

        $name0 = $_REQUEST['name0'];
        $nameeng0 = $_REQUEST['nameeng0'];
        $housenumber0 = $_REQUEST['housenumber0'];
        $alley0 = $_REQUEST['alley0'];
        $road0 = $_REQUEST['road0'];
        $subdistrict0 = $_REQUEST['subdistrict0'];
        $district0 = $_REQUEST['district0'];
        $province0 = $_REQUEST['province0'];
        $postalcode0 = $_REQUEST['postalcode0'];
        $phone0 = $_REQUEST['phone0'];
        $fax0 = $_REQUEST['fax0'];
        $email0 = $_REQUEST['email0'];

        $name1 = $_REQUEST['name1'];
        $rank1 = $_REQUEST['rank1'];
        $phone1 = $_REQUEST['phone1'];
        $fax1 = $_REQUEST['fax1'];
        $email1 = $_REQUEST['email1'];
        $contact1 = $_REQUEST['contact1'];
        $name2 = $_REQUEST['name2'];
        $rank2 = $_REQUEST['rank2'];
        $department2 = $_REQUEST['department2'];
        $phone2 = $_REQUEST['phone2'];
        $fax2 = $_REQUEST['fax2'];
        $email2 = $_REQUEST['email2'];
        $name3 = $_REQUEST['name3'];
        $rank3 = $_REQUEST['rank3'];
        $department3 = $_REQUEST['department3'];
        $phone3 = $_REQUEST['phone3'];
        $fax3 = $_REQUEST['fax3'];
        $email3 = $_REQUEST['email3'];
       
        $jobposition4 = $_REQUEST['jobposition4'];
        $jobdescription4 = $_REQUEST['jobdescription4'];
        $name5 = $_REQUEST['name5'];
        $housenumber5 = $_REQUEST['housenumber5'];
        $alley5 = $_REQUEST['alley5'];
        $road5 = $_REQUEST['road5'];
        $subdistrict5 = $_REQUEST['subdistrict5'];
        $district5 = $_REQUEST['district5'];
        $province5 = $_REQUEST['province5'];
        $postalcode5 = $_REQUEST['postalcode5'];
        $phone5 = $_REQUEST['phone5'];
        $fax5 = $_REQUEST['fax5'];
        $email5 = $_REQUEST['email5'];
        
        
        if (!isset($errorMsg)) {
        
            $update_stmt = $db->prepare("UPDATE sp07 SET name1 = :name1, rank1 = :rank1, phone1 = :phone1
            , fax1 = :fax1, email1 = :email1, contact1 = :contact1, name2 = :name2
            , rank2 = :rank2, department2 = :department2, phone2 = :phone2, fax2 = :fax2
            , email2 = :email2, name3 = :name3, rank3 = :rank3, department3 = :department3, phone3 = :phone3 
            , fax3 = :fax3 , email3 = :email3, jobposition4 = :jobposition4, jobdescription4 = :jobdescription4, name5 = :name5, housenumber5 = :housenumber5
            , alley5 = :alley5, road5 = :road5, subdistrict5 = :subdistrict5, district5 = :district5, province5 = :province5
            , postalcode5 = :postalcode5, phone5 = :phone5, fax5 = :fax5, email5 = :email5 WHERE user_id = :id");
            $update_stmt->bindParam(':name1', $name1);
            $update_stmt->bindParam(':rank1', $rank1);
            $update_stmt->bindParam(':phone1', $phone1);
            $update_stmt->bindParam(':fax1', $fax1);
            $update_stmt->bindParam(':email1', $email1);
            $update_stmt->bindParam(':contact1', $contact1);
            $update_stmt->bindParam(':name2', $name2);
            $update_stmt->bindParam(':rank2', $rank2);
            $update_stmt->bindParam(':department2', $department2);
            $update_stmt->bindParam(':phone2', $phone2);
            $update_stmt->bindParam(':fax2', $fax2);
            $update_stmt->bindParam(':email2', $email2);
            $update_stmt->bindParam(':name3', $name3);
            $update_stmt->bindParam(':rank3', $rank3);
            $update_stmt->bindParam(':department3', $department3);
            $update_stmt->bindParam(':phone3', $phone3);
            $update_stmt->bindParam(':fax3', $fax3);
            $update_stmt->bindParam(':email3', $email3);
           
            $update_stmt->bindParam(':jobposition4', $jobposition4);
            $update_stmt->bindParam(':jobdescription4', $jobdescription4);
            $update_stmt->bindParam(':name5', $name5);
            $update_stmt->bindParam(':housenumber5', $housenumber5);
            $update_stmt->bindParam(':alley5', $alley5);
            $update_stmt->bindParam(':road5', $road5);
            $update_stmt->bindParam(':subdistrict5', $subdistrict5);
            $update_stmt->bindParam(':district5', $district5);
            $update_stmt->bindParam(':province5', $province5);
            $update_stmt->bindParam(':postalcode5', $postalcode5);
            $update_stmt->bindParam(':phone5', $phone5);
            $update_stmt->bindParam(':fax5', $fax5);
            $update_stmt->bindParam(':email5', $email5);
            $update_stmt->bindParam(':id', $user_id);

            
            $update_stmt1 = $db->prepare("UPDATE enterprise SET name0 = :name0,nameeng0 = :nameeng0, housenumber0 = :housenumber0
            , alley0 = :alley0, road0 = :road0, subdistrict0 = :subdistrict0, district0 = :district0, province0 = :province0
            , postalcode0 = :postalcode0,phone0 = :phone0,fax0 = :fax0,email0 = :email0 WHERE user_id = :id");
            $update_stmt1->bindParam(':name0', $name0);
            $update_stmt1->bindParam(':nameeng0', $nameeng0);
            $update_stmt1->bindParam(':housenumber0', $housenumber0);
            $update_stmt1->bindParam(':alley0', $alley0);
            $update_stmt1->bindParam(':road0', $road0);
            $update_stmt1->bindParam(':subdistrict0', $subdistrict0);
            $update_stmt1->bindParam(':district0', $district0);
            $update_stmt1->bindParam(':province0', $province0);
            $update_stmt1->bindParam(':postalcode0', $postalcode0);
            $update_stmt1->bindParam(':phone0', $phone0);
            $update_stmt1->bindParam(':fax0', $fax0);
            $update_stmt1->bindParam(':email0', $email0);
            $update_stmt1->bindParam(':id', $user_id);
            $update_stmt1->execute();

            $update_stmt2 = $db->prepare("UPDATE users SET fullname = :fullname, studentid = :studentid, faculty = :faculty, branch = :branch WHERE id = :id");
           
            $update_stmt2->bindParam(':fullname', $fullname);
            $update_stmt2->bindParam(':studentid', $studentid);
            $update_stmt2->bindParam(':faculty', $faculty);
            $update_stmt2->bindParam(':branch', $branch);
            $update_stmt2->bindParam(':id', $user_id);
            $update_stmt2->execute();

            if ($update_stmt->execute()) {
                $updateMsg = "ไฟล์ อัพเดทเรียบร้อยแล้ว...";
                header("refresh:1;splast.php");
            }
        }
        
    } catch(PDOException $e) {
        $e->getMessage();
    }
}
    if (isset($_REQUEST['btn_update'])) {
        try {
            
            $image_file = $_FILES['txt_file']['name'];
            $type = $_FILES['txt_file']['type'];
            $size = $_FILES['txt_file']['size'];
            $temp = $_FILES['txt_file']['tmp_name'];

            $path = "upload/map/".$image_file;
            $directory = "upload/map/"; // set uplaod folder path for upadte time previos file remove and new file upload for next use

            if ($image_file) {
                if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
                    if (!file_exists($path)) { // check file not exist in your upload folder path
                        if ($size < 5000000) { // check file size 5MB
                            unlink($directory.$row1['image']); // unlink functoin remove previos file
                            move_uploaded_file($temp,'upload/map/'.$image_file); // move upload file temperory directory to your upload folder
                        } else {
                            $errorMsg1 = "Your file to large please upload 5MB size";
                        }
                    } else {
                        $errorMsg1 = "ชิ่อไฟล์ใช้งานแล้ว.. โปรดเปลี่ยนชื่อไฟล์ของคุณ";
                    }
                } else {
                    $errorMsg1 = "Upload JPG, JPEG, PNG & GIF เท่านั้น...";
                }
            } else {
                $image_file = $row1['image']; // if you not select new image than previos image same it is it.
            }

            if (!isset($errorMsg)) {
                $update_stmt3 = $db->prepare("UPDATE sp07 SET image = :file_up WHERE user_id = :id");
                $update_stmt3->bindParam(':file_up', $image_file);
                $update_stmt3->bindParam(':id', $user_id);

                if ($update_stmt3->execute()) {
                    $updateMsg1 = "รูปภาพ อัพเดทเรียบร้อยแล้ว...";
                    // header("refresh:1;splast.php");
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
        <h1 class="mt-4">sp07</h1>
        <?php 
            if(isset($errorMsg)) {
        ?>
            <div class="alert alert-danger">
                <strong><?php echo $errorMsg; ?></strong>
                <strong><?php echo $errorMsg1; ?></strong>
            </div>
        <?php } ?>

        <?php 
            if(isset($updateMsg)) {
        ?>
            <div class="alert alert-success">
                <strong><?php echo $updateMsg; ?></strong>
                <strong><?php echo $updateMsg1; ?></strong>
            </div>
        <?php } ?>
        
        <hr>
        
        <h2>๑. ชื่อ ที่อยู่ ของสถานประกอบการ</h2>
        <hr>       
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name0" class="form-label">ชื่อ-นามสกุลของสถานประกอบการ(ภาษาไทย)</label>
            <input type="text" class="form-control" name="name0" value="<?php echo $row2['name0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="nameeng0" class="form-label">ชื่อ-นามสกุลภาษาอังกฤษของสถานประกอบการ(ตัวพิมพ์ใหญ่ทั้งหมด)</label>
            <input type="text" class="form-control" name="nameeng0" value="<?php echo $row2['nameeng0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="housenumber0" class="form-label">ที่อยู่เลขที่ </label>
            <input type="text" class="form-control" name="housenumber0" value="<?php echo $row2['housenumber0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="alley0" class="form-label">ซอย</label>
            <input type="text" class="form-control" name="alley0" value="<?php echo $row2['alley0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="roaroad0d" class="form-label">ถนน </label>
            <input type="text" class="form-control" name="road0" value="<?php echo $row2['road0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="subdistrict0" class="form-label">ตำบล/แขวง </label>
            <input type="text" class="form-control" name="subdistrict0" value="<?php echo $row2['subdistrict0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="district0" class="form-label">อำเภอ/เขต </label>
            <input type="text" class="form-control" name="district0" value="<?php echo $row2['district0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="province0" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="province0" value="<?php echo $row2['province0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="postalcode0" class="form-label">รหัสไปรษณีย์</label>
            <input type="number" class="form-control" name="postalcode0" value="<?php echo $row2['postalcode0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone0" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone0" value="<?php echo $row2['phone0']; ?>" >
        </div>  
        <div class="mb-3">
            <label for="fax0" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax0" value="<?php echo $row2['fax0']; ?>" >
        </div>   
        <div class="mb-3">
            <label for="email0" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email0" value="<?php echo $row2['email0']; ?>" >
        </div>
        <h2>๒. ผู้จัดการทั่วไป/ผู้จัดการโรงงาน และผู้ที่ได้รับมอบหมายให้ประสานงาน</h2>
        <hr>
        <div class="mb-3">
            <label for="name1" class="form-label">ชื่อผู้จัดการสถานประกอบการ</label>
            <input type="text" class="form-control" name="name1" value="<?php echo $row1['name1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="rank1" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="rank1" value="<?php echo $row1['rank1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone1" value="<?php echo $row1['phone1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fax1" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax1" value="<?php echo $row1['fax1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="email1" class="form-label">email</label>
            <input type="text" class="form-control" name="email1" value="<?php echo $row1['email1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="contact1" class="form-label">การติดต่อประสานงานกับมหาวิทยาลัยราชภัฏอุตรดิตถ์(การนิเทศงานนักศึกษา และอื่นๆ) ขอมอบให้</label>
            <input type="text" class="form-control" name="contact1" value="<?php echo $row1['contact1']; ?>" >
        </div> 
        <div class="mb-3">
            <label for="contact1" class="form-label">การติดต่อประสานงานกับมหาวิทยาลัยราชภัฏอุตรดิตถ์(การนิเทศงานนักศึกษา และอื่นๆ) ขอมอบให้</label>
        <select name="contact1"  class="form-control" aria-describedby="contact1"><br>
                <option value="1">ติดต่อกับผู้จัดการโดยตรง</option>
                <option value="2">หมอบหมายให้บุคคลต่อไปนี้ประสานงาน</option>
        </select>
        </div>   
        <div class="mb-3">
            <label for="name2" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name2" value="<?php echo $row1['name2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="rank2" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="rank2" value="<?php echo $row1['rank2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="department2" class="form-label">แผนก/ฝ่าย</label>
            <input type="text" class="form-control" name="department2" value="<?php echo $row1['department2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone2" value="<?php echo $row1['phone2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fax2" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax2" value="<?php echo $row1['fax2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="email2" class="form-label">email</label>
            <input type="text" class="form-control" name="email2" value="<?php echo $row1['email2']; ?>" >
        </div>
        <hr>
        <h2>๓. ผู้นิเทศงาน/พี่เลี้ยง</h2>
        <hr>
        <div class="mb-3">
            <label for="name3" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name3" value="<?php echo $row1['name3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="rank3" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="rank3" value="<?php echo $row1['rank3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="department3" class="form-label">แผนก/ฝ่าย</label>
            <input type="text" class="form-control" name="department3" value="<?php echo $row1['department3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone3" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone3" value="<?php echo $row1['phone3']; ?>" >
        </div>  
        <div class="mb-3">
            <label for="fax3" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax3" value="<?php echo $row1['fax3']; ?>" >
        </div>   
        <div class="mb-3">
            <label for="email3" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email3" value="<?php echo $row1['email3']; ?>" >
        </div>
            <hr>
        <h2>๔. งานที่มอบหมายให้นักศึกษา</h2>
        <hr>
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุลนักศึกษา</label>
            <input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname']; ?>" >
        </div>
        <div class="mb-3">
            <label for="studentid" class="form-label">รหัสนักศึกษา</label>
            <input type="text" class="form-control" name="studentid" value="<?php echo $row['studentid']; ?>" >
        </div>
        <div class="mb-3">
            <label for="faculty" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']; ?>" >
        </div>
        <div class="mb-3">
            <label for="branch" class="form-label">คณะ/วิทยาลัย</label>
            <input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>" >
        </div>
        <div class="mb-3">
            <label for="jobposition4" class="form-label">ตำแหน่งงานที่นักศึกษาปฏิบัติ</label>
            <input type="text" class="form-control" name="jobposition4" value="<?php echo $row1['jobposition4']; ?>" >
        </div>
        <hr>
        <div class="mb-3">
            <label for="jobdescription4" class="form-label">ลักษณะงานงานที่นักศึกษาปฏิบัติ</label>
            <input type="text" class="form-control" name="jobdescription4" value="<?php echo $row1['jobdescription4']; ?>" >
        </div>
            <hr>
        <h2>๕. ชื่อ ที่อยู่ ผู้ที่สามารถติดต่อได้กรณีฉุกเฉิน</h2>
        <hr>
        <div class="mb-3">
            <label for="name5" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name5" value="<?php echo $row1['name5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="housenumber5" class="form-label">บ้านเลขที่</label>
            <input type="text" class="form-control" name="housenumber5" value="<?php echo $row1['housenumber5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="alley5" class="form-label">ซอย</label>
            <input type="text" class="form-control" name="alley5" value="<?php echo $row1['alley5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="road5" class="form-label">ถนน</label>
            <input type="text" class="form-control" name="road5" value="<?php echo $row1['road5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="subdistrict5" class="form-label">ตำบล</label>
            <input type="text" class="form-control" name="subdistrict5" value="<?php echo $row1['subdistrict5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="district5" class="form-label">อำเภอ</label>
            <input type="text" class="form-control" name="district5" value="<?php echo $row1['district5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="province5" class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="province5" value="<?php echo $row1['province5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="postalcode5" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" name="postalcode5" value="<?php echo $row1['postalcode5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone5" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone5" value="<?php echo $row1['phone5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fax5" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax5" value="<?php echo $row1['fax5']; ?>" >
        </div>
        <hr>
        <div class="mb-3">
            <label for="email5" class="form-label">email</label>
            <input type="text" class="form-control" name="email5" value="<?php echo $row1['email5']; ?>" >
        </div>
        <div class="form-group">
            <div class="row">
            <label for="name" class="col-sm-3 control-label">รูป แผนที่ (รูปภาพจาก googlemap)</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file" class="form-control" value="<?php echo $row1['image']; ?>">
                
            </div>
            </div>
            <hr> <img src="upload/map/<?php echo $row1['image']; ?>" height="100" width="100" alt=""><hr>
        </div>
            <hr> 
            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
        </form>
        
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php include('includes/footer.php');?>
</body>

</html>