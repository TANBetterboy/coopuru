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
        $stmt1 = $db->query("SELECT * FROM sp08 WHERE user_id = $user_id");
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
        $preschoolyear = $_REQUEST['preschoolyear'];
        $schoolyear = $_REQUEST['schoolyear'];

        $name0 = $_REQUEST['name0'];

        $title1 = $_REQUEST['title1'];
        $title2 = $_REQUEST['title2'];
        $title3 = $_REQUEST['title3'];
        $title4 = $_REQUEST['title4'];
        $title5 = $_REQUEST['title5'];
        $title6 = $_REQUEST['title6'];
        $title7 = $_REQUEST['title7'];
        $title8 = $_REQUEST['title8'];
        $title9 = $_REQUEST['title9'];
        $title10 = $_REQUEST['title10'];
        $title11 = $_REQUEST['title11'];
        $title12 = $_REQUEST['title12'];
        $date1 = $_REQUEST['date1'];
        $date2 = $_REQUEST['date2'];
        $date3 = $_REQUEST['date3'];
        $date4 = $_REQUEST['date4'];
        $date5 = $_REQUEST['date5'];
        $date6 = $_REQUEST['date6'];
        $date7 = $_REQUEST['date7'];
        $date8 = $_REQUEST['date8'];
        $date9 = $_REQUEST['date9'];
        $date10 = $_REQUEST['date10'];
        $date11 = $_REQUEST['date11'];
        $date12 = $_REQUEST['date12'];
        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE users SET fullname = :fullname, studentid = :studentid, faculty = :faculty, branch = :branch
            , preschoolyear = :preschoolyear, schoolyear = :schoolyear WHERE id = :id");
           
            $update_stmt->bindParam(':fullname', $fullname);
            $update_stmt->bindParam(':studentid', $studentid);
            $update_stmt->bindParam(':faculty', $faculty);
            $update_stmt->bindParam(':branch', $branch);
            $update_stmt->bindParam(':preschoolyear', $preschoolyear);
            $update_stmt->bindParam(':schoolyear', $schoolyear);
            $update_stmt->bindParam(':id', $user_id);
            
            $update_stmt1 = $db->prepare("UPDATE enterprise SET name0 = :name0 WHERE user_id = :id");
            $update_stmt1->bindParam(':name0', $name0);
            $update_stmt1->bindParam(':id', $user_id);
            $update_stmt1->execute();
            
            $update_stmt2 = $db->prepare("UPDATE sp08 SET title1 = :title1, title2 = :title2, title3 = :title3, title4 = :title4, title5 = :title5
            , title6 = :title6, title7 = :title7, title8 = :title8, title9 = :title9, title10 = :title10, title11 = :title11, title12 = :title12
            , date1 = :date1, date2 = :date2, date3 = :date3, date4 = :date4, date5 = :date5, date6 = :date6, date7 = :date7, date8 = :date8, date9 = :date9
            , date10 = :date10, date11 = :date11, date12 = :date12 WHERE user_id = :id");
            $update_stmt2->bindParam(':title1', $title1);
            $update_stmt2->bindParam(':title2', $title2);
            $update_stmt2->bindParam(':title3', $title3);
            $update_stmt2->bindParam(':title4', $title4);
            $update_stmt2->bindParam(':title5', $title5);
            $update_stmt2->bindParam(':title6', $title6);
            $update_stmt2->bindParam(':title7', $title7);
            $update_stmt2->bindParam(':title8', $title8);
            $update_stmt2->bindParam(':title9', $title9);
            $update_stmt2->bindParam(':title10', $title10);
            $update_stmt2->bindParam(':title11', $title11);
            $update_stmt2->bindParam(':title12', $title12);
            $update_stmt2->bindParam(':date1', $date1);
            $update_stmt2->bindParam(':date2', $date2);
            $update_stmt2->bindParam(':date3', $date3);
            $update_stmt2->bindParam(':date4', $date4);
            $update_stmt2->bindParam(':date5', $date5);
            $update_stmt2->bindParam(':date6', $date6);
            $update_stmt2->bindParam(':date7', $date7);
            $update_stmt2->bindParam(':date8', $date8);
            $update_stmt2->bindParam(':date9', $date9);
            $update_stmt2->bindParam(':date10', $date10);
            $update_stmt2->bindParam(':date11', $date11);
            $update_stmt2->bindParam(':date12', $date12);
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
        <h1 class="mt-4">sp08</h1>
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
        
        <h2>(ผู้ให้ข้อมูล: นักศึกษาร่วมกับผู้นิเทศงานสหกิจศึกษา)</h2>
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
            <label for="name0" class="form-label">ปฏิบัติงานสหกิจศึกษา ณ สถานประกอบการ</label>
            <input type="text" class="form-control" name="name0" value="<?php echo $row2['name0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="preschoolyear" class="form-label">ภาคการศึกษาที่</label>
            <input type="number" class="form-control" name="preschoolyear" value="<?php echo $row['preschoolyear']; ?>" >
        </div>
        <div class="mb-3">
            <label for="schoolyear" class="form-label">ปีการศึกษา</label>
            <input type="number" class="form-control" name="schoolyear" value="<?php echo $row['schoolyear']; ?>" >
        </div>
        <h2>แผนปฏิบัติงานสหกิจศึกษา</h2>
        <hr> 
        <h3>ลำดับงานที่1</h3><hr>
        <div class="mb-3">
            <label for="title1" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title1" value="<?php echo $row1['title1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date1" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date1" value="<?php echo $row1['date1']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่2</h3><hr>
        <div class="mb-3">
            <label for="title2" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title2" value="<?php echo $row1['title2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date2" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date2" value="<?php echo $row1['date2']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่3</h3><hr>
        <div class="mb-3">
            <label for="title3" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title3" value="<?php echo $row1['title3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date3" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date3" value="<?php echo $row1['date3']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่4</h3><hr>
        <div class="mb-3">
            <label for="title4" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title4" value="<?php echo $row1['title4']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date4" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date4" value="<?php echo $row1['date4']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่5</h3><hr>
        <div class="mb-3">
            <label for="title5" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title5" value="<?php echo $row1['title5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date5" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date5" value="<?php echo $row1['date5']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่6</h3><hr>
        <div class="mb-3">
            <label for="title6" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title6" value="<?php echo $row1['title6']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date6" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date6" value="<?php echo $row1['date6']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่7</h3><hr>
        <div class="mb-3">
            <label for="title7" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title7" value="<?php echo $row1['title7']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date7" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date7" value="<?php echo $row1['date7']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่8</h3><hr>
        <div class="mb-3">
            <label for="title8" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title8" value="<?php echo $row1['title8']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date8" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date8" value="<?php echo $row1['date8']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่9</h3><hr>
        <div class="mb-3">
            <label for="title9" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title9" value="<?php echo $row1['title9']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date9" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date9" value="<?php echo $row1['date9']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่10</h3><hr>
        <div class="mb-3">
            <label for="title10" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title10" value="<?php echo $row1['title10']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date10" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date10" value="<?php echo $row1['date10']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่11</h3><hr>
        <div class="mb-3">
            <label for="title11" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title11" value="<?php echo $row1['title11']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date11" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date11" value="<?php echo $row1['date11']; ?>" >
        </div><hr>
        <h3>ลำดับงานที่12</h3><hr>
        <div class="mb-3">
            <label for="title12" class="form-label">หัวข้องาน</label>
            <input type="text" class="form-control" name="title12" value="<?php echo $row1['title12']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date12" class="form-label">ระยะเวลาที่ปฏิบัติงาน (ระบุบเดือนและสัปดาห์ เช่น เดือนที่1สัปดาห์ที่1-3)</label>
            <input type="text" class="form-control" name="date12" value="<?php echo $row1['date12']; ?>" >
        </div><hr>
        
        
            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
        </form>
        
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php include('includes/footer.php');?>
</body>

</html>