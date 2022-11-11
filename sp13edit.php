<?php 
session_start();
require_once('connection.php');

    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $db->query("SELECT * FROM visitusers WHERE id = $user_id");
        $stmt->execute();
        $row0 = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt1 = $db->query("SELECT * FROM sp13 WHERE user_id = $user_id");
        $stmt1->execute();
        $row = $stmt1->fetch(PDO::FETCH_ASSOC);
    }

if (isset($_REQUEST['update_id'])) {
    try {
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare('SELECT * FROM sp13 WHERE id = :id');
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

        $name013= $_REQUEST['name013'];
        $studentid013= $_REQUEST['studentid013'];
        $branch013= $_REQUEST['branch013'];
        $faculty013= $_REQUEST['faculty013'];
        $name113= $_REQUEST['name113'];
        $name213= $_REQUEST['name213'];
        $rank213= $_REQUEST['rank213'];
        $department213= $_REQUEST['department213'];

        $d01= $_REQUEST['d01'];
        $d02= $_REQUEST['d02'];
        $d03= $_REQUEST['d03'];
        $d04= $_REQUEST['d04'];
        $d05= $_REQUEST['d05'];
        $d06= $_REQUEST['d06'];
        $d07= $_REQUEST['d07'];
        $d08= $_REQUEST['d08'];
        $d09= $_REQUEST['d09'];
        $d10= $_REQUEST['d10'];
        $d11= $_REQUEST['d11'];
        $d12= $_REQUEST['d12'];
        $d13= $_REQUEST['d13'];
        $d14= $_REQUEST['d14'];
        $d15= $_REQUEST['d15'];
        $d16= $_REQUEST['d16'];
        $d17= $_REQUEST['d17'];
        $d18= $_REQUEST['d18'];
        $d19= $_REQUEST['d19'];
        $d20= $_REQUEST['d20'];

        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE sp13 SET name013 =:name013 ,studentid013 =:studentid013 ,branch013 =:branch013 ,faculty013 =:faculty013 ,name113 =:name113
            ,name213 =:name213 ,rank213 =:rank213 ,department213 =:department213  
            ,d01 =:d01 ,d02 =:d02 ,d03 =:d03,d04 =:d04,d05 =:d05,d06 =:d06,d07 =:d07,d08 =:d08,d09 =:d09,d10 =:d10
            ,d11 =:d11,d12 =:d12,d13 =:d13,d14 =:d14,d15 =:d15,d16 =:d16,d17 =:d17,d18 =:d18,d19 =:d19,d20 =:d20 WHERE id = :id");

            $update_stmt->bindParam(':name013', $name013);
            $update_stmt->bindParam(':studentid013', $studentid013);
            $update_stmt->bindParam(':branch013', $branch013);
            $update_stmt->bindParam(':faculty013', $faculty013);
            $update_stmt->bindParam(':name113', $name113);
            $update_stmt->bindParam(':name213', $name213);
            $update_stmt->bindParam(':rank213', $rank213);
            $update_stmt->bindParam(':department213', $department213);

            $update_stmt->bindParam(':d01', $d01);
            $update_stmt->bindParam(':d02', $d02);
            $update_stmt->bindParam(':d03', $d03);
            $update_stmt->bindParam(':d04', $d04);
            $update_stmt->bindParam(':d05', $d05);
            $update_stmt->bindParam(':d06', $d06);
            $update_stmt->bindParam(':d07', $d07);
            $update_stmt->bindParam(':d08', $d08);
            $update_stmt->bindParam(':d09', $d09);
            $update_stmt->bindParam(':d10', $d10);
            $update_stmt->bindParam(':d11', $d11);
            $update_stmt->bindParam(':d12', $d12);
            $update_stmt->bindParam(':d13', $d13);
            $update_stmt->bindParam(':d14', $d14);
            $update_stmt->bindParam(':d15', $d15);
            $update_stmt->bindParam(':d16', $d16);
            $update_stmt->bindParam(':d17', $d17);
            $update_stmt->bindParam(':d18', $d18);
            $update_stmt->bindParam(':d19', $d19);
            $update_stmt->bindParam(':d20', $d20);

            $update_stmt->bindParam(':id', $id);
            
            if ($update_stmt->execute()) {
                $updateMsg = "File update successfully...";
                header("refresh:1;spteac.php");
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
                        
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class=" nav-link" href="editPT.php "><i class='bx bx-cog bx-sm text-success'></i><?php echo mb_strimwidth( $row0['fullname'], 0, 10, "..." ); ?> </a></i></a>
                    <a class=" nav-link" href="logout.php"><i class="btn btn-danger">ลงชื่อออก</a></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
<section class="bg-light w-100">
    <div class="container py-5">

        <h1 class="mt-4">แบบประเมินผลนักศึกษาสหกิจศึกษา</h1>
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
        
        <h2>ข้อมูลทั่วไป / Work Term Information</h2>
        <hr>       
        <form action="" method="post">
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุลนักศึกษา</label>
            <input type="text" class="form-control" name="name013" value="<?php echo $row['name013']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">รหัสประจำตัว </label>
            <input type="text" class="form-control" name="studentid013" value="<?php echo $row['studentid013']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch013" value="<?php echo $row['branch013']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">คณะ / วิทยาลัย</label>
            <input type="text" class="form-control" name="faculty013" value="<?php echo $row['faculty013']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อสถานประกอบการ </label>
            <input type="text" class="form-control" name="name113" value="<?php echo $row['name113']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุลผู้ประเมิน </label>
            <input type="text" class="form-control" name="name213" value="<?php echo $row['name213']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="rank213" value="<?php echo $row['rank213']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">แผนก/ฝ่าย </label>
            <input type="text" class="form-control" name="department213" value="<?php echo $row['department213']; ?>" >
        </div>
        <hr> 
        <h2>ผลสำเร็จของงาน/ Work Achievement </h2>
        <hr> 
        <h3>๑. ปริมาณงาน(Quantity of work)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ความสนใจเรียนรู้ ศึกษา กฎระเบียบ นโยบายต่างๆ และปฏิบัติตามโดยเต็มใจการปฏิบัติตามระเบียบบริหารงานบุคคล (การเข้างาน ลางาน) 
                ปฏิบัติตามกฎการรักษา ความปลอดภัยในโรงงาน การควบคุมคุณภาพ๕ ส และอื่น ๆ (20 คะแนน)</label>
        <select name="d01"  class="form-control" aria-describedby="d01"><br>
        <option value="<?php echo $row['d01']; ?>"><?php echo $row['d01']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
        </select>
        </div>
        <h3>๒. คุณภาพงาน (Quality of work)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ทำงานได้ถูกต้องครบถ้วนสมบูรณ์ มีความประณีตเรียบร้อย มีความรอบคอบ ไม่เกิดปัญหาติดตามมา 
งานไม่ค้างคา ทำงานเสร็จทันเวลาหรือก่อนเวลาที่กำหนด (20 คะแนน) </label>
        <select name="d02"  class="form-control" aria-describedby="d02"><br>
        <option value="<?php echo $row['d02']; ?>"><?php echo $row['d02']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
        </select>
        </div>
        <h3>๓. ความรู้ความสามารถทางวิชาการ  (Academic Ability)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">นักศึกษามีความรู้ทางวิชาการเพียงพอ  ที่จะทำงานตามที่ได้รับมอบหมาย ในระดับที่นักศึกษาจะปฏิบัติได้ (10 คะแนน) </label>
        <select name="d03"  class="form-control" aria-describedby="d03"><br>
        <option value="<?php echo $row['d03']; ?>"><?php echo $row['d03']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๔. ความสามารถในการเรียนและประยุกต์วิชาการ  (Ability to learn and apply knowledge )</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ความรวดเร็วในการเรียนรู้ เข้าใจข้อมูล ข่าวสาร และวิธีการทำงานตลอดจนการนำความรู้ไปประยุกต์ (10 คะแนน) </label>
        <select name="d04"  class="form-control" aria-describedby="d04"><br>
        <option value="<?php echo $row['d04']; ?>"><?php echo $row['d04']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๕. ความรู้ความชำนาญด้านปฏิบัติการ (Practical ability)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">เช่น การปฏิบัติงานในภาคสนาม ในห้องปฏิบัติการ</label>
        <select name="d05"  class="form-control" aria-describedby="d05"><br>
        <option value="<?php echo $row['d05']; ?>"><?php echo $row['d05']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๖.  วิจารณญาณและการตัดสินใจ  (Judgement and decision making)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ตัดสินใจได้ดี ถูกต้อง รวดเร็ว มีการวิเคราะห์ ข้อมูลและปัญหาต่างๆอย่างรอบคอบ
ก่อนการตัดสินใจ สามารถแก้ปัญหาเฉพาะหน้า สามารถไว้วางใจให้ตัดสินใจได้ด้วยตนเอง</label>
        <select name="d06"  class="form-control" aria-describedby="d06"><br>
        <option value="<?php echo $row['d06']; ?>"><?php echo $row['d06']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๗.  การจัดการและวางแผน  (Organization and planning)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">สามารถจัดการและวางแผนการทำงานให้สำเร็จตามเป้าหมาย</label>
        <select name="d07"  class="form-control" aria-describedby="d07"><br>
        <option value="<?php echo $row['d07']; ?>"><?php echo $row['d07']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๘.  ทักษะการสื่อสาร  (Communication skill)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ความสามารถในการติดต่อสื่อสารการพูด การเขียน และการนำเสนอ  (Presentation)
สามารถสื่อให้เข้าใจได้ง่าย เรียบร้อย ชัดเจน ถูกต้อง รัดกุม  มีลำดับขั้นตอนที่ดี
ไม่ก่อให้เกิดความสับสนต่อการทำงาน รู้จักสอบถาม รู้จักชี้แจงผลการปฏิบัติงานและข้อขัดข้องให้ทราบ</label>
        <select name="d08"  class="form-control" aria-describedby="d08"><br>
        <option value="<?php echo $row['d08']; ?>"><?php echo $row['d08']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๙.  การพัฒนาด้านภาษาและวัฒนธรรมต่างประเทศ (Foreign language and cultural development ) </h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">เช่น ภาษาอังกฤษ การทำงานกับชาวต่างชาติ</label>
        <select name="d09"  class="form-control" aria-describedby="d09"><br>
        <option value="<?php echo $row['d09']; ?>"><?php echo $row['d09']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๐.  ความเหมาะสมต่อตำแหน่งงานที่ได้รับมอบหมาย  (Suitability  for  Job position )</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">สามารถพัฒนาตนเองให้ปฏิบัติงานตาม  Job position  และ  Job description  ที่มอบหมาย
ได้อย่างเหมาะสมหรือตำแหน่งงานนี้เหมาะสมกับนักศึกษาคนนี้หรือไม่เพียงใด</label>
        <select name="d10"  class="form-control" aria-describedby="d10"><br>
        <option value="<?php echo $row['d10']; ?>"><?php echo $row['d10']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h2>ความรับผิดชอบต่อหน้าที่  /  Responsibility</h2>
        <h3>๑๑. ความรับผิดชอบและเป็นผู้ที่ไว้วางใจได้ (Responsibility and  dependability)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ดำเนินงานให้สำเร็จลุล่วงโดยคำนึงถึงเป้าหมาย และความสำเร็จของงานเป็นหลัก
ยอมรับผลที่เกิดจากการทำงานอย่างมีเหตุผล สามารถปล่อยให้ทำงาน (กรณีงานประจำ) 
ได้โดยไม่ต้องควบคุมมากจนเกินไป ความจำเป็นในการตรวจสอบขั้นตอนและผลงานตลอดเวลา
 สามารถไว้วางใจให้รับผิดชอบงานที่มากกว่าเวลาประจำ สามารถไว้ว่างใจแถบทุกสถานการณ์ หรือในสถานการณ์ปกติเท่านั้น </label>
        <select name="d11"  class="form-control" aria-describedby="d11"><br>
        <option value="<?php echo $row['d11']; ?>"><?php echo $row['d11']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๒. ความสนใจ อุตสาหะในการทำงาน (Interest in work) </h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ความสนใจและความกระตือรือร้นในการทำงาน มีความอุตสาหะ ความพยายาม 
ความตั้งใจที่จะทำงานได้สำเร็จ ความมานะบากบั่น ไม่ย่อท้อต่ออุปสรรคและปัญหา</label>
        <select name="d12"  class="form-control" aria-describedby="d12"><br>
        <option value="<?php echo $row['d12']; ?>"><?php echo $row['d12']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๓. ความสามารถเริ่มต้นทำงานได้ด้วยตนเอง (Initiative or self starter) </h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">เมื่อได้รับคำชี้แนะ สามารถเริ่มทำงานได้เอง โดยไม่ต้องรอคำสั่ง (กรณีงานประจำ) เสนอตัวเข้า
 ช่วยงานแทบทุกอย่าง มาขอรับงานใหม่ๆ ไปทำไม่ปล่อยเวลาว่างให้ล่วงเลยไปโดยเปล่าประโยชน์</label>
        <select name="d13"  class="form-control" aria-describedby="d13"><br>
        <option value="<?php echo $row['d13']; ?>"><?php echo $row['d13']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๔. การตอบสนองต่อการสั่งการ (Response to supervision)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ยินดีรับคำสั่ง คำแนะนำ คำวิจารณ์ ไม่แสดงความอึดอัดใจ เมื่อได้รับคำติเตือนและวิจารย์
 ความรวดเร็วในการปฏิบัติตามคำสั่ง การปรับตัวปฏิบัติตามคำแนะนำ ข้อเสนอแนะและวิจารณ์</label>
        <select name="d14"  class="form-control" aria-describedby="d14"><br>
        <option value="<?php echo $row['d14']; ?>"><?php echo $row['d14']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h2>ลักษณะส่วนบุคคล / Personality</h2>
        <h3>๑๕. บุคลิกภาพและการวางตัว (Personality) </h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">มีบุคลิกภาพและวางตัวได้เหมาะสม เช่น ทัศนคติ วุฒิภาวะ ความอ่อนน้อมถ่อมตน การแต่งกาย กิริยาวาจา
การตรงต่อเวลา และอื่น ๆ</label>
        <select name="d15"  class="form-control" aria-describedby="d15"><br>
        <option value="<?php echo $row['d15']; ?>"><?php echo $row['d15']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๖. มนุษยสัมพันธ์ (Interpersonal skills) </h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">สามารถร่วมงานกับผู้อื่นการทำงานเป็นทีม สร้างมนุษยสัมพันธ์ได้ดี เป็นที่รักใคร่ ชอบพอของผุ้ร่วมงาน
เป็นผู้ช่วยก่อให้เกิดความร่วมมือประสานงาน </label>
        <select name="d16"  class="form-control" aria-describedby="d16"><br>
        <option value="<?php echo $row['d16']; ?>"><?php echo $row['d16']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๗. ความมีระเบียบวินัย ปฏิบัติตามวัฒนธรรมขององค์กร(Discipline and adaptability to formal organization)</h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">ความสนใจเรียนรู้ ศึกษา กฎระเบียบ นโยบายต่างๆ และปฏิบัติตามโดยเต็มใจการปฏิบัติตามระเบียบบริหาร
งานบุคคล (การเข้างาน ลางาน) ปฏิบัติตามกฎการรักษา ความปลอดภัยในโรงงาน การควบคุมคุณภาพ ๕ ส และอื่น ๆ</label>
        <select name="d17"  class="form-control" aria-describedby="d17"><br>
        <option value="<?php echo $row['d17']; ?>"><?php echo $row['d17']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>๑๘. คุณธรรมและจริยธรรม (Ethics and morality) </h3>
        <div class="mb-3">
            <label for="fullname" class="form-label">มีความซื่อสัตย์ สุจริต มีจิตใจสะอาด รู้จักเสียสละ ไม่เห็นแก่ตัว เอื้อเฟื้อช่วยเหลือผู้อื่น</label>
        <select name="d18"  class="form-control" aria-describedby="d18"><br>
        <option value="<?php echo $row['d18']; ?>"><?php echo $row['d18']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>
        </div>
        <h3>งานที่นักศึกษาผู้นี้ทำมีประโยชน์กับสถานประกอบการของท่านหรือไม่
         The student employment is useful for your organization or not? </h3>
        <div class="mb-3">
        <select name="d19"  class="form-control" aria-describedby="d19"><br>
        <option value="<?php echo $row['d19']; ?>"><?php echo $row['d19']; ?></option>
                <option value="yes">รับ/yes</option>
                <option value="no">ไม่รับ/no</option>
        </select>
        </div>
        <h3> กรณีที่นักศึกษาผู้นี้สำเร็จการศึกษาแล้ว ท่านจะรับเข้าทำงานในสถานประกอบการนี้หรือไม่ (ในกรณีที่มีตำแหน่งงานว่าง)                  
         Once this student graduates, will you be interested to offer him/her a job? </h3>
        <div class="mb-3">
        <select name="d20"  class="form-control" aria-describedby="d20"><br>
        <option value="<?php echo $row['d20']; ?>"><?php echo $row['d20']; ?></option>
                <option value="yes">รับ/yes</option>
                <option value="no">ไม่รับ/no</option>
        </select>
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