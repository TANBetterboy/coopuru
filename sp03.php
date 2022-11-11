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
        $stmt1 = $db->query("SELECT * FROM sp03 WHERE user_id = $user_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        $stmt2 = $db->query("SELECT * FROM sp031 WHERE user_id = $user_id");
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

        $stmt3 = $db->query("SELECT * FROM enterprise WHERE user_id = $user_id");
        $stmt3->execute();
        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);

        $stmt4 = $db->query("SELECT * FROM sp03e WHERE user_id = $user_id");
        $stmt4->execute();
        $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);

        $stmt5 = $db->query("SELECT * FROM sp03l WHERE user_id = $user_id");
        $stmt5->execute();
        $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
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
        $name0 = $_REQUEST['name0'];
        $address0 = $_REQUEST['address0'];
        $work = $_REQUEST['work'];
        $workuntil = $_REQUEST['workuntil'];

        $fullname = $_REQUEST['fullname'];
        $fullnameeng = $_REQUEST['fullnameeng'];
        $studentid = $_REQUEST['studentid'];
        $course = $_REQUEST['course'];
        $faculty = $_REQUEST['faculty'];
        $branch = $_REQUEST['branch'];
        $yearclass = $_REQUEST['yearclass'];
        $teacher = $_REQUEST['teacher'];
        $gpa = $_REQUEST['gpa'];
        $gpax = $_REQUEST['gpax'];

        $cardno = $_REQUEST['cardno'];
        $at0 = $_REQUEST['at0'];
        $date0 = $_REQUEST['date0'];
        $race = $_REQUEST['race'];
        $nation = $_REQUEST['nation'];
        $religion = $_REQUEST['religion'];
        $birth = $_REQUEST['birth'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $height = $_REQUEST['height'];
        $weight0 = $_REQUEST['weight0'];
        $disease = $_REQUEST['disease'];
        $address00 = $_REQUEST['address00'];
        $phone = $_REQUEST['phone'];
        $mphone = $_REQUEST['mphone'];
        $fax = $_REQUEST['fax'];
        $email = $_REQUEST['email'];
        
        $name1 = $_REQUEST['name1'];
        $job1 = $_REQUEST['job1'];
        $placework1 = $_REQUEST['placework1'];
        $address1 = $_REQUEST['address1'];
        $phone1 = $_REQUEST['phone1'];
        $mphone1 = $_REQUEST['mphone1'];
        $fax1 = $_REQUEST['fax1'];
        $email1 = $_REQUEST['email1'];
        $name2 = $_REQUEST['name2'];
        $name3 = $_REQUEST['name3'];
        $age2 = $_REQUEST['age2'];
        $age3 = $_REQUEST['age3'];
        $job2 = $_REQUEST['job2'];
        $job3 = $_REQUEST['job3'];
        $address2 = $_REQUEST['address2'];
        $address3 = $_REQUEST['address3'];
        $phone2 = $_REQUEST['phone2'];
        $phone3 = $_REQUEST['phone3'];
        $norelative = $_REQUEST['norelative'];
        $noyou = $_REQUEST['noyou'];
        $name4 = $_REQUEST['name4'];
        $name5 = $_REQUEST['name5'];
        $name6 = $_REQUEST['name6'];

        $school1 = $_REQUEST['school1'];
        $school2 = $_REQUEST['school2'];
        $school3 = $_REQUEST['school3'];
        $school4 = $_REQUEST['school4'];
        $school5 = $_REQUEST['school5'];
        $year_att1 = $_REQUEST['year_att1'];
        $year_att2 = $_REQUEST['year_att2'];
        $year_att3 = $_REQUEST['year_att3'];
        $year_att4 = $_REQUEST['year_att4'];
        $year_att5 = $_REQUEST['year_att5'];
        $year_grad1 = $_REQUEST['year_grad1'];
        $year_grad2 = $_REQUEST['year_grad2'];
        $year_grad3 = $_REQUEST['year_grad3'];
        $year_grad4 = $_REQUEST['year_grad4'];
        $year_grad5 = $_REQUEST['year_grad5'];
        $certificate1 = $_REQUEST['certificate1'];
        $certificate2 = $_REQUEST['certificate2'];
        $certificate3 = $_REQUEST['certificate3'];
        $certificate4 = $_REQUEST['certificate4'];
        $certificate5 = $_REQUEST['certificate5'];
        $major1 = $_REQUEST['major1'];
        $major2 = $_REQUEST['major2'];
        $major3 = $_REQUEST['major3'];
        $major4 = $_REQUEST['major4'];
        $major5 = $_REQUEST['major5'];

        $listen1 = $_REQUEST['listen1'];
        $listen2 = $_REQUEST['listen2'];
        $listen3 = $_REQUEST['listen3'];
        $speaking1 = $_REQUEST['speaking1'];
        $speaking2 = $_REQUEST['speaking2'];
        $speaking3 = $_REQUEST['speaking3'];
        $writing1 = $_REQUEST['writing1'];
        $writing2 = $_REQUEST['writing2'];
        $writing3 = $_REQUEST['writing3'];
        $orther = $_REQUEST['orther'];
        
        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE users SET fullname = :fullname, fullnameeng = :fullnameeng, yearclass = :yearclass
            , studentid = :studentid, course = :course, faculty = :faculty, branch = :branch, teacher = :teacher
            , gpa = :gpa, gpax = :gpax WHERE id = :id");
            $update_stmt->bindParam(':fullname', $fullname);
            $update_stmt->bindParam(':fullnameeng', $fullnameeng);
            $update_stmt->bindParam(':studentid', $studentid);
            $update_stmt->bindParam(':course', $course);
            $update_stmt->bindParam(':faculty', $faculty);
            $update_stmt->bindParam(':branch', $branch);
            $update_stmt->bindParam(':yearclass', $yearclass);
            $update_stmt->bindParam(':teacher', $teacher);
            $update_stmt->bindParam(':gpa', $gpa);
            $update_stmt->bindParam(':gpax', $gpax);
            $update_stmt->bindParam(':id', $user_id);
            $update_stmt->execute();
            
            $update_stmt1 = $db->prepare("UPDATE enterprise SET name0 = :name0, address0 = :address0, work = :work, workuntil = :workuntil WHERE user_id = :id");
            $update_stmt1->bindParam(':name0', $name0);
            $update_stmt1->bindParam(':address0', $address0);
            $update_stmt1->bindParam(':work', $work);
            $update_stmt1->bindParam(':workuntil', $workuntil);
            $update_stmt1->bindParam(':id', $user_id);
            $update_stmt1->execute();

            $update_stmt2 = $db->prepare("UPDATE sp03 SET cardno = :cardno, at0 = :at0, date0 = :date0, race = :race, nation = :nation, religion = :religion
            , birth = :birth, age = :age, gender = :gender, height = :height, weight0 = :weight0, disease = :disease, address00 = :address00, phone = :phone
            , mphone = :mphone, fax = :fax, email = :email  WHERE user_id = :id");
            $update_stmt2->bindParam(':cardno', $cardno);
            $update_stmt2->bindParam(':at0', $at0);
            $update_stmt2->bindParam(':date0', $date0);
            $update_stmt2->bindParam(':race', $race);
            $update_stmt2->bindParam(':nation', $nation);
            $update_stmt2->bindParam(':religion', $religion);
            $update_stmt2->bindParam(':birth', $birth);
            $update_stmt2->bindParam(':age', $age);
            $update_stmt2->bindParam(':gender', $gender);
            $update_stmt2->bindParam(':height', $height);
            $update_stmt2->bindParam(':weight0', $weight0);
            $update_stmt2->bindParam(':disease', $disease);
            $update_stmt2->bindParam(':address00', $address00);
            $update_stmt2->bindParam(':phone', $phone);
            $update_stmt2->bindParam(':mphone', $mphone);
            $update_stmt2->bindParam(':fax', $fax);
            $update_stmt2->bindParam(':email', $email);
            $update_stmt2->bindParam(':id', $user_id);
            $update_stmt2->execute();

            $update_stmt3 = $db->prepare("UPDATE sp031 SET name1 = :name1, job1 = :job1, placework1 = :placework1, address1 = :address1, phone1 = :phone1
            , mphone1 = :mphone1, fax1 = :fax1, email1 = :email1, name2 = :name2, name3 = :name3
            , age2 = :age2, age3 = :age3, job2 = :job2, job3 = :job3, address2 = :address2, address3 = :address3, phone2 = :phone2, phone3 = :phone3
            , norelative = :norelative, noyou = :noyou, name4 = :name4, name5 = :name5, name6 = :name6 WHERE user_id = :id");
            $update_stmt3->bindParam(':name1', $name1);
            $update_stmt3->bindParam(':job1', $job1);
            $update_stmt3->bindParam(':placework1', $placework1);
            $update_stmt3->bindParam(':address1', $address1);
            $update_stmt3->bindParam(':phone1', $phone1);
            $update_stmt3->bindParam(':mphone1', $mphone1);
            $update_stmt3->bindParam(':fax1', $fax1);
            $update_stmt3->bindParam(':email1', $email1);
            $update_stmt3->bindParam(':name2', $name2);
            $update_stmt3->bindParam(':name3', $name3);
            $update_stmt3->bindParam(':age2', $age2);
            $update_stmt3->bindParam(':age3', $age3);
            $update_stmt3->bindParam(':job2', $job2);
            $update_stmt3->bindParam(':job3', $job3);
            $update_stmt3->bindParam(':address2', $address2);
            $update_stmt3->bindParam(':address3', $address3);
            $update_stmt3->bindParam(':phone2', $phone2);
            $update_stmt3->bindParam(':phone3', $phone3);
            $update_stmt3->bindParam(':norelative', $norelative);
            $update_stmt3->bindParam(':noyou', $noyou);
            $update_stmt3->bindParam(':name4', $name4);
            $update_stmt3->bindParam(':name5', $name5);
            $update_stmt3->bindParam(':name6', $name6);
            $update_stmt3->bindParam(':id', $user_id);
            $update_stmt3->execute();

            $update_stmt4 = $db->prepare("UPDATE sp03e SET school1 = :school1, school2 = :school2, school3 = :school3, school4 = :school4, school5 = :school5
            ,year_att1 = :year_att1, year_att2 = :year_att2, year_att3 = :year_att3, year_att4 = :year_att4, year_att5 = :year_att5
            ,year_grad1 = :year_grad1, year_grad2 = :year_grad2, year_grad3 = :year_grad3, year_grad4 = :year_grad4, year_grad5 = :year_grad5
            ,certificate1 = :certificate1, certificate2 = :certificate2, certificate3 = :certificate3, certificate4 = :certificate4, certificate5 = :certificate5
            ,major1 = :major1, major2 = :major2, major3 = :major3, major4 = :major4, major5 = :major5 WHERE user_id = :id");
            $update_stmt4->bindParam(':school1', $school1);
            $update_stmt4->bindParam(':school2', $school2);
            $update_stmt4->bindParam(':school3', $school3);
            $update_stmt4->bindParam(':school4', $school4);
            $update_stmt4->bindParam(':school5', $school5);
            $update_stmt4->bindParam(':year_att1', $year_att1);
            $update_stmt4->bindParam(':year_att2', $year_att2);
            $update_stmt4->bindParam(':year_att3', $year_att3);
            $update_stmt4->bindParam(':year_att4', $year_att4);
            $update_stmt4->bindParam(':year_att5', $year_att5);
            $update_stmt4->bindParam(':year_grad1', $year_grad1);
            $update_stmt4->bindParam(':year_grad2', $year_grad2);
            $update_stmt4->bindParam(':year_grad3', $year_grad3);
            $update_stmt4->bindParam(':year_grad4', $year_grad4);
            $update_stmt4->bindParam(':year_grad5', $year_grad5);
            $update_stmt4->bindParam(':certificate1', $certificate1);
            $update_stmt4->bindParam(':certificate2', $certificate2);
            $update_stmt4->bindParam(':certificate3', $certificate3);
            $update_stmt4->bindParam(':certificate4', $certificate4);
            $update_stmt4->bindParam(':certificate5', $certificate5);
            $update_stmt4->bindParam(':major1', $major1);
            $update_stmt4->bindParam(':major2', $major2);
            $update_stmt4->bindParam(':major3', $major3);
            $update_stmt4->bindParam(':major4', $major4);
            $update_stmt4->bindParam(':major5', $major5);
            $update_stmt4->bindParam(':id', $user_id);
            $update_stmt4->execute();

            $update_stmt5 = $db->prepare("UPDATE sp03l SET listen1 = :listen1, listen2 = :listen2, listen3 = :listen3, speaking1 = :speaking1, speaking2 = :speaking2
            , speaking3 = :speaking3, writing1 = :writing1, writing2 = :writing2, writing3 = :writing3, orther = :orther WHERE user_id = :id");
            $update_stmt5->bindParam(':listen1', $listen1);
            $update_stmt5->bindParam(':listen2', $listen2);
            $update_stmt5->bindParam(':listen3', $listen3);
            $update_stmt5->bindParam(':speaking1', $speaking1);
            $update_stmt5->bindParam(':speaking2', $speaking2);
            $update_stmt5->bindParam(':speaking3', $speaking3);
            $update_stmt5->bindParam(':writing1', $writing1);
            $update_stmt5->bindParam(':writing2', $writing2);
            $update_stmt5->bindParam(':writing3', $writing3);
            $update_stmt5->bindParam(':orther', $orther);
            $update_stmt5->bindParam(':id', $user_id);
            $update_stmt5->execute();

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
        <h1 class="mt-4">sp03</h1>
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
        <h2>ใบสมัครงานสหกิจศึกษา</h2>
        <hr>       
        <form action="" method="post">
        <div class="mb-3">
            <label for="name0" class="form-label">ชื่อสถานประกอบการ</label>
            <input type="text" class="form-control" name="name0" value="<?php echo $row3['name0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="address0" class="form-label">ข้อมลที่อยู่สถานประกอบการ</label>
            <input type="text" class="form-control" name="address0" value="<?php echo $row3['address0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="work" class="form-label">ระยะเวลาปฏิบัติงานสหกิจศึกษา เริ่มวันที่</label>
            <input type="text" class="form-control" name="work" value="<?php echo $row3['work']; ?>" >
        </div>
        <div class="mb-3">
            <label for="workuntil" class="form-label">ถึงวันที่</label>
            <input type="text" class="form-control" name="workuntil" value="<?php echo $row3['workuntil']; ?>" >
        </div>
       
        <h2>ข้อมูลส่วนตัวนักศึกษา</h2>
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
            <label for="studentid" class="form-label">รหัสประจำตัว</label>
            <input type="number" class="form-control" name="studentid" value="<?php echo $row['studentid']; ?>" >
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">หลักสูตร</label>
            <input type="text" class="form-control" name="course" value="<?php echo $row['course']; ?>" >
        </div>
        <div class="mb-3">
            <label for="faculty" class="form-label">คณะ/วิทยาลัย</label>
            <input type="text" class="form-control" name="faculty" value="<?php echo $row['faculty']; ?>" >
        </div>
        <div class="mb-3">
            <label for="branch" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>" >
        </div>
        <div class="mb-3">
            <label for="yearclass" class="form-label">ชั้นปี</label>
            <input type="text" class="form-control" name="yearclass" value="<?php echo $row['yearclass']; ?>" >
        </div>
        <div class="mb-3">
            <label for="teacher" class="form-label">อาจารย์ที่ปรึกษา</label>
            <input type="text" class="form-control" name="teacher" value="<?php echo $row['teacher']; ?>" >
        </div>
        <div class="mb-3">
            <label for="gpa" class="form-label">เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา</label>
            <input type="text" class="form-control" name="gpa" value="<?php echo $row['gpa']; ?>" >
        </div>
        <div class="mb-3">
            <label for="gpax" class="form-label">เกรดเฉลี่ยรวม</label>
            <input type="text" class="form-control" name="gpax" value="<?php echo $row['gpax']; ?>" >
        </div>
        <div class="mb-3">
            <label for="cardno" class="form-label">เลขบัตรประชาชน</label>
            <input type="text" class="form-control" name="cardno" value="<?php echo $row1['cardno']; ?>" >
        </div>
        <div class="mb-3">
            <label for="at0" class="form-label">ออกให้ ณ</label>
            <input type="text" class="form-control" name="at0" value="<?php echo $row1['at0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="date0" class="form-label">เมื่อวันที่</label>
            <input type="text" class="form-control" name="date0" value="<?php echo $row1['date0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="race" class="form-label">เชื่อชาติ</label>
            <input type="text" class="form-control" name="race" value="<?php echo $row1['race']; ?>" >
        </div>
        <div class="mb-3">
            <label for="nation" class="form-label">สัญชาติ</label>
            <input type="text" class="form-control" name="nation" value="<?php echo $row1['nation']; ?>" >
        </div>
        <div class="mb-3">
            <label for="religion" class="form-label">ศาสนา</label>
            <input type="text" class="form-control" name="religion" value="<?php echo $row1['religion']; ?>" >
        </div>
        <div class="mb-3">
            <label for="birth" class="form-label">วันเดือนปีเกิด</label>
            <input type="text" class="form-control" name="birth" value="<?php echo $row1['birth']; ?>" >
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">อายุ</label>
            <input type="text" class="form-control" name="age" value="<?php echo $row1['age']; ?>" >
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">เพศ</label>
            <input type="text" class="form-control" name="gender" value="<?php echo $row1['gender']; ?>" >
        </div><div class="mb-3">
            <label for="height" class="form-label">ส่วนสูง</label>
            <input type="text" class="form-control" name="height" value="<?php echo $row1['height']; ?>" >
        </div>
        <div class="mb-3">
            <label for="weight0" class="form-label">น้ำหนัก</label>
            <input type="text" class="form-control" name="weight0" value="<?php echo $row1['weight0']; ?>" >
        </div>
        <div class="mb-3">
            <label for="disease" class="form-label">โรคประจำตัว ระบุ</label>
            <input type="text" class="form-control" name="disease" value="<?php echo $row1['disease']; ?>" >
        </div>
        <div class="mb-3">
            <label for="address00" class="form-label">ที่พักในภาคการศึกษานี้</label>
            <input type="text" class="form-control" name="address00" value="<?php echo $row1['address00']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $row1['phone']; ?>" >
        </div>
        <div class="mb-3">
            <label for="mphone" class="form-label">โทรศัพท์มือถือ</label>
            <input type="text" class="form-control" name="mphone" value="<?php echo $row1['mphone']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fax" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax" value="<?php echo $row1['fax']; ?>" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">อีเมล์</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row1['email']; ?>" >
        </div>
        <h2>บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน</h2>
        <hr> 
        <div class="mb-3">
            <label for="name1" class="form-label">ชื่อ-สกุลและความเกี่ยวข้อง</label>
            <input type="text" class="form-control" name="name1" value="<?php echo $row2['name1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="job1" class="form-label">อาชีพ</label>
            <input type="text" class="form-control" name="job1" value="<?php echo $row2['job1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="placework1" class="form-label">สถานที่ทำงาน</label>
            <input type="text" class="form-control" name="placework1" value="<?php echo $row2['placework1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="address1" class="form-label">ที่อยู่</label>
            <input type="text" class="form-control" name="address1" value="<?php echo $row2['address1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone1" value="<?php echo $row2['phone1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="mphone1" class="form-label">โทรศัพท์มือถือ</label>
            <input type="text" class="form-control" name="mphone1" value="<?php echo $row2['mphone1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fax1" class="form-label">โทรสาร</label>
            <input type="text" class="form-control" name="fax1" value="<?php echo $row2['fax1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="email1" class="form-label">อีเมล์</label>
            <input type="text" class="form-control" name="email1" value="<?php echo $row2['email1']; ?>" >
        </div>
        <h2>ข้อมูลครอบครัว</h2>
        <hr>
        <div class="mb-3">
            <label for="name2" class="form-label">ชื่อบิดา</label>
            <input type="text" class="form-control" name="name2" value="<?php echo $row2['name2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="age2" class="form-label">อายุ</label>
            <input type="text" class="form-control" name="age2" value="<?php echo $row2['age2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="job2" class="form-label">อาชีพ</label>
            <input type="text" class="form-control" name="job2" value="<?php echo $row2['job2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="address2" class="form-label">ที่อยู่</label>
            <input type="text" class="form-control" name="address2" value="<?php echo $row2['address2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone2" value="<?php echo $row2['phone2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="name3" class="form-label">ชื่อมารดา</label>
            <input type="text" class="form-control" name="name3" value="<?php echo $row2['name3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="age3" class="form-label">อายุ</label>
            <input type="text" class="form-control" name="age3" value="<?php echo $row2['age3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="job3" class="form-label">อาชีพ</label>
            <input type="text" class="form-control" name="job3" value="<?php echo $row2['job3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="address3" class="form-label">ที่อยู่</label>
            <input type="text" class="form-control" name="address3" value="<?php echo $row2['address3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="phone3" class="form-label">โทรศัพท์</label>
            <input type="text" class="form-control" name="phone3" value="<?php echo $row2['phone3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="norelative" class="form-label">จำนวนที่น้อง</label>
            <input type="number" class="form-control" name="norelative" value="<?php echo $row2['norelative']; ?>" >
        </div>
        <div class="mb-3">
            <label for="noyou" class="form-label">เป็นบุตรคนที่</label>
            <input type="number" class="form-control" name="noyou" value="<?php echo $row2['noyou']; ?>" >
        </div>
        <div class="mb-3">
            <label for="name4" class="form-label">พี่น้องลำดับที่1</label>
            <input type="text" class="form-control" name="name4" value="<?php echo $row2['name4']; ?>" >
        </div>
        <div class="mb-3">
            <label for="name5" class="form-label">พี่น้องลำดับที่2</label>
            <input type="text" class="form-control" name="name5" value="<?php echo $row2['name5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="name6" class="form-label">พี่น้องลำดับที่3</label>
            <input type="text" class="form-control" name="name6" value="<?php echo $row2['name6']; ?>" >
        </div>
            <hr>
            <h2>ประวัติการศึกษา</h2>
        <hr>
        <h3>ระดับประถม</h3><hr>
        <div class="mb-3">
            <label for="school1" class="form-label">สถานที่ศึกษา</label>
            <input type="text" class="form-control" name="school1" value="<?php echo $row4['school1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_att1" class="form-label">ปีที่เริ่ม</label>
            <input type="text" class="form-control" name="year_att1" value="<?php echo $row4['year_att1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_grad1" class="form-label">ปีที่จบ</label>
            <input type="text" class="form-control" name="year_grad1" value="<?php echo $row4['year_grad1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="certificate1" class="form-label">วุติการศึกษา</label>
            <input type="text" class="form-control" name="certificate1" value="<?php echo $row4['certificate1']; ?>" >
        </div>
        <div class="mb-3">
            <label for="major1" class="form-label">วิชาเอก</label>
            <input type="text" class="form-control" name="major1" value="<?php echo $row4['major1']; ?>" >
        </div>
        <hr>
        <h3>ระดับมัธยมต้น</h3><hr>
        <div class="mb-3">
            <label for="school2" class="form-label">สถานที่ศึกษา</label>
            <input type="text" class="form-control" name="school2" value="<?php echo $row4['school2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_att2" class="form-label">ปีที่เริ่ม</label>
            <input type="text" class="form-control" name="year_att2" value="<?php echo $row4['year_att2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_grad2" class="form-label">ปีที่จบ</label>
            <input type="text" class="form-control" name="year_grad2" value="<?php echo $row4['year_grad2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="certificate2" class="form-label">วุติการศึกษา</label>
            <input type="text" class="form-control" name="certificate2" value="<?php echo $row4['certificate2']; ?>" >
        </div>
        <div class="mb-3">
            <label for="major2" class="form-label">วิชาเอก</label>
            <input type="text" class="form-control" name="major2" value="<?php echo $row4['major2']; ?>" >
        </div>
        <hr>
        <h3>ระดับมัธยมปลาย</h3><hr>
        <div class="mb-3">
            <label for="school3" class="form-label">สถานที่ศึกษา</label>
            <input type="text" class="form-control" name="school3" value="<?php echo $row4['school3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_att3" class="form-label">ปีที่เริ่ม</label>
            <input type="text" class="form-control" name="year_att3" value="<?php echo $row4['year_att3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_grad3" class="form-label">ปีที่จบ</label>
            <input type="text" class="form-control" name="year_grad3" value="<?php echo $row4['year_grad3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="certificate3" class="form-label">วุติการศึกษา</label>
            <input type="text" class="form-control" name="certificate3" value="<?php echo $row4['certificate3']; ?>" >
        </div>
        <div class="mb-3">
            <label for="major3" class="form-label">วิชาเอก</label>
            <input type="text" class="form-control" name="major3" value="<?php echo $row4['major3']; ?>" >
        </div>
        <hr>
        <h3>ระดับอนุปริญญา</h3><hr>
        <div class="mb-3">
            <label for="school4" class="form-label">สถานที่ศึกษา</label>
            <input type="text" class="form-control" name="school4" value="<?php echo $row4['school4']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_att4" class="form-label">ปีที่เริ่ม</label>
            <input type="text" class="form-control" name="year_att4" value="<?php echo $row4['year_att4']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_grad4" class="form-label">ปีที่จบ</label>
            <input type="text" class="form-control" name="year_grad4" value="<?php echo $row4['year_grad4']; ?>" >
        </div>
        <div class="mb-3">
            <label for="certificate4" class="form-label">วุติการศึกษา</label>
            <input type="text" class="form-control" name="certificate4" value="<?php echo $row4['certificate4']; ?>" >
        </div>
        <div class="mb-3">
            <label for="major4" class="form-label">วิชาเอก</label>
            <input type="text" class="form-control" name="major4" value="<?php echo $row4['major4']; ?>" >
        </div>
        <hr>
        <h3>ระดับมหาวิทยาลัย</h3><hr>
        <div class="mb-3">
            <label for="school5" class="form-label">สถานที่ศึกษา</label>
            <input type="text" class="form-control" name="school5" value="<?php echo $row4['school5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_att5" class="form-label">ปีที่เริ่ม</label>
            <input type="text" class="form-control" name="year_att5" value="<?php echo $row4['year_att5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="year_grad5" class="form-label">ปีที่จบ</label>
            <input type="text" class="form-control" name="year_grad5" value="<?php echo $row4['year_grad5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="certificate5" class="form-label">วุติการศึกษา</label>
            <input type="text" class="form-control" name="certificate5" value="<?php echo $row4['certificate5']; ?>" >
        </div>
        <div class="mb-3">
            <label for="major5" class="form-label">วิชาเอก</label>
            <input type="text" class="form-control" name="major5" value="<?php echo $row4['major5']; ?>" >
        </div>
        <hr>
        <h2>ความสามารถทางภาษา</h2>
        <hr>
        <h3>ภาษาอังกฤษ</h3><hr>
        <div class="mb-3">
            <label for="fullname" class="form-label">ฟัง</label>
        <select name="listen1"  class="form-control" aria-describedby="listen1"><br>
        <option value="<?php echo $row5['listen1']; ?>"><?php echo $row5['listen1']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">พูด</label>
        <select name="speaking1"  class="form-control" aria-describedby="speaking1"><br>
        <option value="<?php echo $row5['speaking1']; ?>"><?php echo $row5['speaking1']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">เขียน</label>
        <select name="writing1"  class="form-control" aria-describedby="writing1"><br>
        <option value="<?php echo $row5['writing1']; ?>"><?php echo $row5['writing1']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <hr>
        <h3>ภาษาจีน</h3><hr>
        <div class="mb-3">
            <label for="fullname" class="form-label">ฟัง</label>
        <select name="listen2"  class="form-control" aria-describedby="listen2"><br>
        <option value="<?php echo $row5['listen2']; ?>"><?php echo $row5['listen2']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">พูด</label>
        <select name="speaking2"  class="form-control" aria-describedby="speaking2"><br>
        <option value="<?php echo $row5['speaking2']; ?>"><?php echo $row5['speaking2']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">เขียน</label>
        <select name="writing2"  class="form-control" aria-describedby="writing2"><br>
        <option value="<?php echo $row5['writing2']; ?>"><?php echo $row5['writing2']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <hr>
        <h3>ภาษาอื่นๆ</h3><hr>
        <div class="mb-3">
            <label for="orther" class="form-label">ระบุ</label>
            <input type="text" class="form-control" name="orther" value="<?php echo $row5['orther']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ฟัง</label>
        <select name="listen3"  class="form-control" aria-describedby="listen3"><br>
        <option value="<?php echo $row5['listen3']; ?>"><?php echo $row5['listen3']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">พูด</label>
        <select name="speaking3"  class="form-control" aria-describedby="speaking3"><br>
        <option value="<?php echo $row5['speaking3']; ?>"><?php echo $row5['speaking3']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">เขียน</label>
        <select name="writing3"  class="form-control" aria-describedby="writing3"><br>
        <option value="<?php echo $row5['writing3']; ?>"><?php echo $row5['writing3']; ?></option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
        </select>
        </div>


            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
        </form>
        
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <?php include('includes/footer.php');?>
</body>

</html>