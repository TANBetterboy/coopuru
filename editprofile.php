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
    

    if (isset($_REQUEST['btn_update'])) {
        try {

            $fullname = $_REQUEST['fullname'];

            $image_file = $_FILES['txt_file']['name'];
            $type = $_FILES['txt_file']['type'];
            $size = $_FILES['txt_file']['size'];
            $temp = $_FILES['txt_file']['tmp_name'];

            $path = "upload/user/".$image_file;
            $directory = "upload/user/"; // set uplaod folder path for upadte time previos file remove and new file upload for next use

            if ($image_file) {
                if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
                    if (!file_exists($path)) { // check file not exist in your upload folder path
                        if ($size < 5000000) { // check file size 5MB
                            unlink($directory.$row['image']); // unlink functoin remove previos file
                            move_uploaded_file($temp, 'upload/user/'.$image_file); // move upload file temperory directory to your upload folder
                        } else {
                            $errorMsg = "Your file to large please upload 5MB size";
                        }
                    } else {
                        $errorMsg = "ชิ่อไฟล์ใช้งานแล้ว.. โปรดเปลี่ยนชื่อไฟล์ของคุณ";
                    }
                } else {
                    $errorMsg = "Upload JPG, JPEG, PNG & GIF เท่านั้น...";
                }
            } else {
                $image_file = $row['image']; // if you not select new image than previos image same it is it.
            }

            if (!isset($errorMsg)) {
                $update_stmt = $db->prepare("UPDATE users SET fullname = :name_up, image = :file_up WHERE id = :id");
                $update_stmt->bindParam(':name_up', $fullname);
                $update_stmt->bindParam(':file_up', $image_file);
                $update_stmt->bindParam(':id', $user_id);

                if ($update_stmt->execute()) {
                    $updateMsg = "ไฟล์ อัพเดทเรียบร้อยแล้ว...";
                    header("refresh:2;user.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    

    <div class="container text-center">
        <h1>หน้าแก้ไขโปรไฟล์</h1>
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
            <label for="name" class="col-sm-3 control-label">ชื่อ</label>
            <div class="col-sm-9">
                <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>">
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <label for="name" class="col-sm-3 control-label">รูป ProFile</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file" class="form-control" value="<?php echo $row['image']; ?>">
            </div>
            </div>
            <hr> <img src="upload/user/<?php echo $row['image']; ?>" height="100" width="100" alt=""><hr>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
                <a href="user.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>