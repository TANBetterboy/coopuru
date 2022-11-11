<?php 
session_start();
require_once('connection.php');

    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

    if (isset($_SESSION['user_login'])) {
        $user_id = $_SESSION['user_login'];
        $update_id = $_GET['update_id'];
        $stmt = $db->query("SELECT * FROM teacherusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt1 = $db->query("SELECT * FROM sp12a WHERE id = $update_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    }

    if (isset($_REQUEST['btn_update'])) {
        try {

          
            $image_file1 = $_FILES['txt_file1']['name'];
            $type1 = $_FILES['txt_file1']['type'];
            $size1 = $_FILES['txt_file1']['size'];
            $temp1 = $_FILES['txt_file1']['tmp_name'];

            $image_file2 = $_FILES['txt_file2']['name'];
            $type2 = $_FILES['txt_file2']['type'];
            $size2 = $_FILES['txt_file2']['size'];
            $temp2 = $_FILES['txt_file2']['tmp_name'];

            $path = "upload/sp12/".$image_file1;
            $directory = "upload/sp12/"; // set uplaod folder path for upadte time previos file remove and new file upload for next use

            if ($image_file1) {
                if ($type1 == "image/jpg" || $type1 == 'image/jpeg' || $type1 == "image/png" || $type1 == "image/gif") {
                    if (!file_exists($path)) { // check file not exist in your upload folder path
                        if ($size1 < 5000000) { // check file size 5MB
                            unlink($directory.$row1['image1']); // unlink functoin remove previos file
                            unlink($directory.$row1['image2']); // unlink functoin remove previos file
                            move_uploaded_file($temp1, 'upload/sp12/'.$image_file1); // move upload file temperory directory to your upload folder
                            move_uploaded_file($temp2, 'upload/sp12/'.$image_file2); // move upload file temperory directory to your upload folder
                        } else {
                            $errorMsg = "Your file to large please upload 5MB size";
                        }
                    } else {
                        $errorMsg = "ชิ่อไฟล์ใช้งานแล้ว.. โปรดเปลี่ยนชื่อไฟล์ของคุณ";
                    }
                } else {
                    $errorMsg = "Upload JPG, JPEG, PNG & GIF เท่านั้น...";
                }
            } 
            else {
                $image_file = $row1['image1']; // if you not select new image than previos image same it is it.
                $image_file = $row1['image2'];
            }

            if (!isset($errorMsg)) {
                $update_stmt = $db->prepare("UPDATE sp12a SET image1 = :file_up1 ,image2 = :file_up2  WHERE id = :id");

                $update_stmt->bindParam(':file_up1', $image_file1);
                $update_stmt->bindParam(':file_up2', $image_file2);
                $update_stmt->bindParam(':id', $update_id);

                if ($update_stmt->execute()) {
                    $updateMsg = "ไฟล์ อัพเดทเรียบร้อยแล้ว...";
                    header("refresh:2;spimg.php");
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
                    <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spteac.php">ประวัติการกรอกข้อมูลเอกสารออนไลน์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spimg.php">ประวัติการอัพโหลดรูปภาพข้อมูลเอกสาร</a>
                        </li>

                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class=" nav-link" href="editPT.php "><i class='bx bx-cog bx-sm text-success'></i><?php echo mb_strimwidth( $row['fullname'], 0, 10, "..." ); ?> </a></i></a>
                    <a class=" nav-link" href="logout.php"><i class="btn btn-danger">ลงชื่อออก</a></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <div class="container text-center">
        <h1>หน้าแก้ไขรูปอัพโหลด</h1>
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

        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
            <label for="name" class="col-sm-3 control-label">รูป 1</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file1" class="form-control" >
                "<?php echo $update_id ?>"
                <hr> <img src="upload/sp12/<?php echo $row1['image1']; ?>" height="100" width="100" alt=""><hr>
            </div>
            </div>
           
        </div>
        <div class="form-group">
            <div class="row">
            <label for="name" class="col-sm-3 control-label">รูป 2</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file2" class="form-control" >
                <hr> <img src="upload/sp12/<?php echo $row1['image2']; ?>" height="100" width="100" alt=""><hr>
            </div>
            </div>
          
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
                <a href="teacheruser.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>