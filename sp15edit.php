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

        $stmt1 = $db->query("SELECT * FROM sp15 WHERE user_id = $user_id");
        $stmt1->execute();
        $row = $stmt1->fetch(PDO::FETCH_ASSOC);
    }

if (isset($_REQUEST['update_id'])) {
    try {
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare('SELECT * FROM sp15 WHERE id = :id');
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

        $name015= $_REQUEST['name015'];
        $studentid015= $_REQUEST['studentid015'];
        $branch015= $_REQUEST['branch015'];
        $faculty015= $_REQUEST['faculty015'];
        $name115= $_REQUEST['name115'];
        $name215= $_REQUEST['name215'];
        $rank215= $_REQUEST['rank215'];
        $department215= $_REQUEST['department215'];
        $name315= $_REQUEST['name315'];
        $name415= $_REQUEST['name415'];


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

        

        if (!isset($errorMsg)) {
           
            $update_stmt = $db->prepare("UPDATE sp15 SET name015 =:name015 ,studentid015 =:studentid015 ,branch015 =:branch015 ,faculty015 =:faculty015 ,name115 =:name115
            ,name215 =:name215 ,rank215 =:rank215 ,department215 =:department215 ,name315 =:name315  ,name415 =:name415   
            ,d01 =:d01 ,d02 =:d02 ,d03 =:d03,d04 =:d04,d05 =:d05,d06 =:d06,d07 =:d07,d08 =:d08,d09 =:d09,d10 =:d10
            ,d11 =:d11,d12 =:d12,d13 =:d13,d14 =:d14 WHERE id = :id");

            $update_stmt->bindParam(':name015', $name015);
            $update_stmt->bindParam(':studentid015', $studentid015);
            $update_stmt->bindParam(':branch015', $branch015);
            $update_stmt->bindParam(':faculty015', $faculty015);
            $update_stmt->bindParam(':name115', $name115);
            $update_stmt->bindParam(':name215', $name215);
            $update_stmt->bindParam(':rank215', $rank215);
            $update_stmt->bindParam(':department215', $department215);
            $update_stmt->bindParam(':name315', $name315);
            $update_stmt->bindParam(':name415', $name415);

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
            <input type="text" class="form-control" name="name015" value="<?php echo $row['name015']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">รหัสประจำตัวนักศึกษา</label>
            <input type="text" class="form-control" name="studentid015" value="<?php echo $row['studentid015']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">สาขาวิชา</label>
            <input type="text" class="form-control" name="branch015" value="<?php echo $row['branch015']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">คณะ / วิทยาลัย </label>
            <input type="text" class="form-control" name="faculty015" value="<?php echo $row['faculty015']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อสถานประกอบการ</label>
            <input type="text" class="form-control" name="name115" value="<?php echo $row['name115']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุลผู้ประเมิน</label>
            <input type="text" class="form-control" name="name215" value="<?php echo $row['name215']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ตำแหน่ง</label>
            <input type="text" class="form-control" name="rank215" value="<?php echo $row['rank215']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">แผนก/ฝ่าย </label>
            <input type="text" class="form-control" name="department215" value="<?php echo $row['department215']; ?>" >
        </div>
        <h2>หัวข้อรายงาน /Report title </h2>
        <div class="mb-3">
            <label for="fullname" class="form-label">ภาษาไทย / Thai</label>
            <input type="text" class="form-control" name="name315" value="<?php echo $row['name315']; ?>" >
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">ภาษาอังกฤษ / English</label>
            <input type="text" class="form-control" name="name415" value="<?php echo $row['name415']; ?>" >
        </div>
        <hr> 
        <h2>หัวข้อประเมิน/Items</h2>
        <hr> 
        <h3>๑. กิตติกรรมประกาศ (Acknowledgement) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d01"  class="form-control" aria-describedby="d01"><br>
        <option value="<?php echo $row['d01']; ?>"><?php echo $row['d01']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๒. บทคัดย่อ (Abstract)  (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d02"  class="form-control" aria-describedby="d02"><br>
        <option value="<?php echo $row['d02']; ?>"><?php echo $row['d02']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๓. สารบัญ สารบัญรูปภาพ และสารบัญตาราง (Table of contents) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d03"  class="form-control" aria-describedby="d03"><br>
        <option value="<?php echo $row['d03']; ?>"><?php echo $row['d03']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๔. วัตถุประสงค์ (Objectives)  (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d04"  class="form-control" aria-describedby="d04"><br>
        <option value="<?php echo $row['d04']; ?>"><?php echo $row['d04']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๕. ขอบเขต (Limit) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d05"  class="form-control" aria-describedby="d05"><br>
        <option value="<?php echo $row['d05']; ?>"><?php echo $row['d05']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๖. ผลการศึกษา (Result) (๒๐ คะแนน)</h3>
        <div class="mb-3">
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
        <h3>๗. วิเคราะห์ผลการศึกษา (Analysis) (๑๐ คะแนน)</h3>
        <div class="mb-3">
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
        <h3>๘. สรุปผลการศึกษา (Conclusion) (๑๐ คะแนน)</h3>
        <div class="mb-3">
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
        <h3>๙. ข้อเสนอแนะ (Comment) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d09"  class="form-control" aria-describedby="d09"><br>
        <option value="<?php echo $row['d09']; ?>"><?php echo $row['d09']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๑๐. สำนวนการเขียน และการสื่อความหมาย (Report writing and meaning) (๑๐ คะแนน)</h3>
        <div class="mb-3">
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
        <h3>๑๑. ความถูกต้องตัวสะกด (Spelling) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d11"  class="form-control" aria-describedby="d11"><br>
        <option value="<?php echo $row['d11']; ?>"><?php echo $row['d11']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๑๒. รูปแบบ และความสวยงามของรูปเล่ม (Pattern) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d12"  class="form-control" aria-describedby="d12"><br>
        <option value="<?php echo $row['d12']; ?>"><?php echo $row['d12']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๑๓. เอกสารอ้างอิง (References) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d13"  class="form-control" aria-describedby="d13"><br>
        <option value="<?php echo $row['d13']; ?>"><?php echo $row['d13']; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select>
        </div>
        <h3>๑๔. ภาคผนวก (Appendix) (๕ คะแนน)</h3>
        <div class="mb-3">
        <select name="d14"  class="form-control" aria-describedby="d14"><br>
        <option value="<?php echo $row['d14']; ?>"><?php echo $row['d14']; ?></option>
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