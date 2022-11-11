<?php 
session_start();
require_once('connection.php');

    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $stmt = $db->query("SELECT * FROM teacherusers WHERE id = $user_id");
        $stmt->execute();
        $row0 = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt1 = $db->query("SELECT * FROM sp12 WHERE user_id = $user_id");
        $stmt1->execute();
        $row = $stmt1->fetch(PDO::FETCH_ASSOC);
    }

if (isset($_REQUEST['update_id'])) {
    try {
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare('SELECT * FROM sp12 WHERE id = :id');
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

        $name012= $_REQUEST['name012'];
        $term012= $_REQUEST['term012'];
        $schoolyear012= $_REQUEST['schoolyear012'];

        $name112= $_REQUEST['name112'];
        $branch112= $_REQUEST['branch112'];

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
        $d21= $_REQUEST['d21'];
        $d22= $_REQUEST['d22'];
        $d23= $_REQUEST['d23'];
        $d24= $_REQUEST['d24'];
        $d25= $_REQUEST['d25'];
        $d26= $_REQUEST['d26'];
        $d27= $_REQUEST['d27'];
        $d28= $_REQUEST['d28'];
        $d29= $_REQUEST['d29'];
        $d30= $_REQUEST['d30'];
        $d31= $_REQUEST['d31'];
        $d32= $_REQUEST['d32'];
        $d33= $_REQUEST['d33'];
        $d34= $_REQUEST['d34'];
        $d35= $_REQUEST['d35'];
        $d36= $_REQUEST['d36'];
        $d37= $_REQUEST['d37'];
        $d38= $_REQUEST['d38'];
        $d39= $_REQUEST['d39'];
        $d40= $_REQUEST['d40'];

        $result = ($d01+$d02+$d03+$d04+$d05+$d06+$d07+$d08+$d09+$d10+$d11+$d12+$d13+$d14+$d15+$d16+$d17
        +$d18+$d19+$d20+$d21+$d22+$d23+$d24+$d25+$d26+$d27+$d28+$d29+$d30+$d31+$d32
        +$d33+$d34+$d35+$d36+$d37+$d38+$d39+$d40)/5;

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE sp12 SET name012 =:name012 ,term012 =:term012 ,schoolyear012 =:schoolyear012 ,name112 =:name112 ,branch112 =:branch112 
            ,d01 =:d01 ,d02 =:d02 ,d03 =:d03,d04 =:d04,d05 =:d05,d06 =:d06,d07 =:d07,d08 =:d08,d09 =:d09,d10 =:d10
            ,d11 =:d11,d12 =:d12,d13 =:d13,d14 =:d14,d15 =:d15,d16 =:d16,d17 =:d17,d18 =:d18,d19 =:d19,d20 =:d20,d21 =:d21,d22 =:d22,d23 =:d23,d24 =:d24,d25 =:d25
            ,d26 =:d26,d27 =:d27,d28 =:d28,d29 =:d29,d30 =:d30,d31 =:d31,d32 =:d32,d33 =:d33,d34 =:d34,d35 =:d35,d36 =:d36,d37 =:d37,d38 =:d38,d39 =:d39,d40 =:d40,result =:result WHERE id = :id");

            
            $update_stmt->bindParam(':name012', $name012);
            $update_stmt->bindParam(':term012', $term012);
            $update_stmt->bindParam(':schoolyear012', $schoolyear012);
            $update_stmt->bindParam(':name112', $name112);
            $update_stmt->bindParam(':branch112', $branch112);

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
            $update_stmt->bindParam(':d21', $d21);
            $update_stmt->bindParam(':d22', $d22);
            $update_stmt->bindParam(':d23', $d23);
            $update_stmt->bindParam(':d24', $d24);
            $update_stmt->bindParam(':d25', $d25);
            $update_stmt->bindParam(':d26', $d26);
            $update_stmt->bindParam(':d27', $d27);
            $update_stmt->bindParam(':d28', $d28);
            $update_stmt->bindParam(':d29', $d29);
            $update_stmt->bindParam(':d30', $d30);
            $update_stmt->bindParam(':d31', $d31);
            $update_stmt->bindParam(':d32', $d32);
            $update_stmt->bindParam(':d33', $d33);
            $update_stmt->bindParam(':d34', $d34);
            $update_stmt->bindParam(':d35', $d35);
            $update_stmt->bindParam(':d36', $d36);
            $update_stmt->bindParam(':d37', $d37);
            $update_stmt->bindParam(':d38', $d38);
            $update_stmt->bindParam(':d39', $d39);
            $update_stmt->bindParam(':d40', $d40);
            $update_stmt->bindParam(':result', $result);
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
            <a class="navbar-brand h1" href="teacheruser.php">
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
        
        <h2>ส่วนที่ ๑  แบบสอบถามนักศึกษาเกี่ยวกับสถานประกอบการ (สำหรับการนิเทศครั้งสุดท้ายเท่านั้น และ ๑ แผ่นสำหรับนักศึกษา ๑ ราย)</h2>
        <hr>       
        <form action="" method="post">
        <div class="mb-3">
            <label for="name012" class="form-label">ชื่อสถานประกอบการ</label>
            <input type="text" class="form-control" name="name012" value="<?php echo $row['name012']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">นักศึกษาปฏิบัติงานสหกิจศึกษา ภาคเรียนที่</label>
            <input type="text" class="form-control" name="term012" value="<?php echo $row['term012']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ปีการศึกษา</label>
            <input type="text" class="form-control" name="schoolyear012" value="<?php echo $row['schoolyear012']; ?>" >
        </div>
        <h2>๑. ความเข้าใจในปรัชญาของสหกิจศึกษา </h2>
        <div class="alert alert-danger" role="alert">
        <strong>หมายเหตุ >>>  มากที่สุด (๕) // มาก (๔) // ปานกลาง (๓) // น้อย (๒) // น้อยที่สุด (๑)  <<< </strong>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๑ เจ้าหน้าที่ระดับบริหาร และฝ่ายบุคคล</label>
        <select name="d01"  class="form-control" aria-describedby="d01" ><br>
                <option value="<?php echo $row['d01']; ?>"><?php echo $row['d01']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๒ อาจารย์นิเทศงาน</label>
        <select name="d02"  class="form-control" aria-describedby="d02"><br>
                <option value="<?php echo $row['d02']; ?>"><?php echo $row['d02']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h2>๒. การจัดการ และสนับสนุนการปฏิบัติงานสหกิจศึกษา</h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒. ๑ การประสานงานด้านการจัดการดูแลนักศึกษาภายในสถานประกอบการระหว่างฝ่ายบุคคลและผู้นิเทศนิเทศงาน</label>
        <select name="d03"  class="form-control" aria-describedby="d03"><br>
        <option value="<?php echo $row['d03']; ?>"><?php echo $row['d03']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๒ การให้คำแนะนำดูแลนักศึกษาของฝ่ายบริหารบุคคล(การปฐมนิเทศ การแนะนำระเบียบวินัย การลางาน สวัสดิการ)</label>
        <select name="d04"  class="form-control" aria-describedby="d04"><br>
        <option value="<?php echo $row['d04']; ?>"><?php echo $row['d04']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๓ บุคลากรในสถานประกอบการให้ความสนใจสนับสนุนและให้ความเป็นกันเองกับนักศึกษา</label>
        <select name="d05"  class="form-control" aria-describedby="d05"><br>
        <option value="<?php echo $row['d05']; ?>"><?php echo $row['d05']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๔ ความพร้อมของอุปกรณ์เครื่องมือสำหรับนักศึกษา</label>
        <select name="d06"  class="form-control" aria-describedby="d06"><br>
        <option value="<?php echo $row['d06']; ?>"><?php echo $row['d06']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๕ มีค่าตอบแทนให้นักศึกษาอย่างเหมาะสม</label>
        <select name="d07"  class="form-control" aria-describedby="d07"><br>
        <option value="<?php echo $row['d07']; ?>"><?php echo $row['d07']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๖ จัดสวัสดิการ (ที่พัก อาหาร รถรับส่ง ฯลฯ) ให้นักศึกษาอย่างเหมาะสม</label>
        <select name="d08"  class="form-control" aria-describedby="d08"><br>
        <option value="<?php echo $row['d08']; ?>"><?php echo $row['d08']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h2>๓. ลักษณะงานที่มอบหมายให้นักศึกษาปฏิบัติ </h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๑ ปริมาณงานมีความเหมาะสม </label>
        <select name="d09"  class="form-control" aria-describedby="d09"><br>
        <option value="<?php echo $row['d09']; ?>"><?php echo $row['d09']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๒ ความเหมาะสมของคุณลักษณะงาน (Job description) </label>
        <select name="d10"  class="form-control" aria-describedby="d10"><br>
        <option value="<?php echo $row['d10']; ?>"><?php echo $row['d10']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๓ งานที่ได้รับมอบหมายตรงกับสาขาวิชาเอกของนักศึกษา </label>
        <select name="d11"  class="form-control" aria-describedby="d11"><br>
        <option value="<?php echo $row['d11']; ?>"><?php echo $row['d11']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๔ งานที่ได้รับมอบหมายตรงกับที่บริษัทฯ เสนอไว้ </label>
        <select name="d12"  class="form-control" aria-describedby="d12"><br>
        <option value="<?php echo $row['d12']; ?>"><?php echo $row['d12']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๕ งานที่ได้รับมอบหมายตรงกับความสนใจของนักศึกษา </label>
        <select name="d13"  class="form-control" aria-describedby="d13"><br>
        <option value="<?php echo $row['d13']; ?>"><?php echo $row['d13']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h2>๔. การมอบหมายงานและนิเทศงาน ของผู้นิเทศงาน </h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">๔.๑ มีผู้นิเทศงานดูแลนักศึกษาตลอดระยะเวลาการปฏิบัติงาน </label>
        <select name="d14"  class="form-control" aria-describedby="d14"><br>
        <option value="<?php echo $row['d14']; ?>"><?php echo $row['d14']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๔.๒ ความรู้และประสบการณ์วิชาชีพของผู้นิเทศงาน</label>
        <select name="d15"  class="form-control" aria-describedby="d15"><br>
        <option value="<?php echo $row['d15']; ?>"><?php echo $row['d15']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๔.๓ เวลาที่ผู้นิเทศงานให้แก่นักศึกษาด้านการปฏิบัติงาน </label>
        <select name="d16"  class="form-control" aria-describedby="d16"><br>
        <option value="<?php echo $row['d16']; ?>"><?php echo $row['d16']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๔.๔ ความสนใจของผุ้นิเทศงานต่อการสอนงานและสั่งงาน </label>
        <select name="d17"  class="form-control" aria-describedby="d17"><br>
        <option value="<?php echo $row['d17']; ?>"><?php echo $row['d17']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๔.๕ การให้ความสำคัญต่อการประเมินผลการปฏิบัติงานและเขียนรายงานของผุ้นิเทศงาน</label>
        <select name="d18"  class="form-control" aria-describedby="d18"><br>
        <option value="<?php echo $row['d18']; ?>"><?php echo $row['d18']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๔.๖ การจัดทำแผนปฏิบัติงานตลอดระยะเวลาของการปฏิบัติงาน </label>
        <select name="d19"  class="form-control" aria-describedby="d19"><br>
        <option value="<?php echo $row['d19']; ?>"><?php echo $row['d19']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        
        <h2>๕. สรุปคุณภาพโดยรวมของสถานประกอบการนี้สำหรับสหกิจศึกษา</h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">๕. สรุปคุณภาพโดยรวมของสถานประกอบการนี้สำหรับสหกิจศึกษา</label>
        <select name="d20"  class="form-control" aria-describedby="d20"><br>
        <option value="<?php echo $row['d20']; ?>"><?php echo $row['d20']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
            <hr>
            <hr>
        <h2>ส่วนที่ ๒ สำหรับการประเมินนักศึกษา (สำหรับการนิเทศทุกครั้ง ๑ แผ่นสำหรับนักศึกษา ๑ ราย )</h2>
        <hr>       
        <form action="" method="post">
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อนักศึกษา</label>
            <input type="text" class="form-control" name="name112" value="<?php echo $row['name112']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch112" value="<?php echo $row['branch112']; ?>" >
        </div>
        <hr>
        <h2>๑. ความรับผิดชอบต่อหน้าที่</h2>
        <div class="alert alert-danger" role="alert">
        <strong>หมายเหตุ >>>  มากที่สุด (๕) // มาก (๔) // ปานกลาง (๓) // น้อย (๒) // น้อยที่สุด (๑)  <<< </strong>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๑  มีความรับผิดชอบต่องานที่ได้รับมอบหมาย</label>
        <select name="d21"  class="form-control" aria-describedby="d21"><br>
        <option value="<?php echo $row['d21']; ?>"><?php echo $row['d21']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๒ ปฏิบัติงานด้วยความกระตือรือร้น </label>
        <select name="d22"  class="form-control" aria-describedby="d22"><br>
        <option value="<?php echo $row['d22']; ?>"><?php echo $row['d22']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๓  มีการปรับปรุงคุณภาพงานที่ปฏิบัติอยู่เสมอ</label>
        <select name="d23"  class="form-control" aria-describedby="d23"><br>
        <option value="<?php echo $row['d23']; ?>"><?php echo $row['d23']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๔ ใช้เวลาในการทำงานให้เกิดประโยชน์สูงสุด</label>
        <select name="d24"  class="form-control" aria-describedby="d24"><br>
        <option value="<?php echo $row['d24']; ?>"><?php echo $row['d24']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๑.๕  มีการรายงานผลการปฏิบัติงาน</label>
        <select name="d25"  class="form-control" aria-describedby="d25"><br>
        <option value="<?php echo $row['d25']; ?>"><?php echo $row['d25']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h2>๒. ปฏิบัติงานโดยใช้ความรู้ ความสามารถที่มีอยู่อย่างเต็มที่</h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๑ มีความสามารถในการประยุกต์ใช้ความรู้</label>
        <select name="d26"  class="form-control" aria-describedby="d26"><br>
        <option value="<?php echo $row['d26']; ?>"><?php echo $row['d26']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๒ มีความชำนาญในการปฏิบัติการ</label>
        <select name="d27"  class="form-control" aria-describedby="d27"><br>
        <option value="<?php echo $row['d27']; ?>"><?php echo $row['d27']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๓ มีความสามารถในการวางแผน จัดลำดับความสำคัญของงาน</label>
        <select name="d28"  class="form-control" aria-describedby="d28"><br>
        <option value="<?php echo $row['d28']; ?>"><?php echo $row['d28']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๒.๔ ใฝ่รู้ สนใจศึกษาหาความรู้ใหม่ๆ เพิ่มเติม </label>
        <select name="d29"  class="form-control" aria-describedby="d29"><br>
        <option value="<?php echo $row['d29']; ?>"><?php echo $row['d29']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h2>๓. คุณลักษณะส่วนบุคคล</h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๑ ปฏิบัติตามกฎ ระเบียบหรือข้อบังคับขององค์กรโดยเคร่งครัด </label>
        <select name="d30"  class="form-control" aria-describedby="d30"><br>
        <option value="<?php echo $row['d30']; ?>"><?php echo $row['d30']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๒ เข้างานตรงเวลา ไม่เคยขาด ไม่เคยสาย </label>
        <select name="d31"  class="form-control" aria-describedby="d31"><br>
        <option value="<?php echo $row['d31']; ?>"><?php echo $row['d31']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๓ ให้ความเคารพเชื่อฟังผู้บังคับบัญชา</label>
        <select name="d32"  class="form-control" aria-describedby="d32"><br>
        <option value="<?php echo $row['d32']; ?>"><?php echo $row['d32']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๔ มีความขยัน อดทน สู้ งาน</label>
        <select name="d33"  class="form-control" aria-describedby="d33"><br>
        <option value="<?php echo $row['d33']; ?>"><?php echo $row['d33']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๕ มีคุณธรรม จริยธรรม เช่น ซื่อสัตย์ สุจริต รักษาความลับองค์กร </label>
        <select name="d34"  class="form-control" aria-describedby="d34"><br>
        <option value="<?php echo $row['d34']; ?>"><?php echo $row['d34']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๖ มีความคิดริเริ่ม สร้างสรรค์ </label>
        <select name="d35"  class="form-control" aria-describedby="d35"><br>
        <option value="<?php echo $row['d35']; ?>"><?php echo $row['d35']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๗ มีความมั่นใจในตนเอง กล้าสอบถาม และเสนอความคิดเห็น </label>
        <select name="d36"  class="form-control" aria-describedby="d36"><br>
        <option value="<?php echo $row['d36']; ?>"><?php echo $row['d36']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๘ มีบุคลิกภาพ และวางตัวเหมาะสม เช่น การแต่งกาย กิริยาวาจา วุฒิภาวะ </label>
        <select name="d37"  class="form-control" aria-describedby="d37"><br>
        <option value="<?php echo $row['d37']; ?>"><?php echo $row['d37']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๙ มีความสามารถในการทำงานเป็นทีมร่วมกับผู้อื่น </label>
        <select name="d38"  class="form-control" aria-describedby="d38"><br>
        <option value="<?php echo $row['d38']; ?>"><?php echo $row['d38']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">๓.๑๐ ใช้ทรัพยากรขององค์กรอย่างรู้คุณค่า เช่นน ไฟฟ้า วัสดุสิ้นเปลืองต่างๆ </label>
        <select name="d39"  class="form-control" aria-describedby="d39"><br>
        <option value="<?php echo $row['d39']; ?>"><?php echo $row['d39']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h2>๔. สรุปคุณภาพโดยรวมของนักศึกษาคนนี้</h2>
        <div class="mb-3">
        <label for="fullname" class="form-label">๔. สรุปคุณภาพโดยรวมของนักศึกษาคนนี้</label>
        <select name="d40"  class="form-control" aria-describedby="d40"><br>
        <option value="<?php echo $row['d40']; ?>"><?php echo $row['d40']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
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