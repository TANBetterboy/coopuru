<?php 

    session_start();
    require_once '../connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coopuru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h3 class="mt-4">สมัครสมาชิก</h3> 
        <hr>
        <form action="signupteacher_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>
            

            <div class="mb-3">
                <label for="nameprefix" class="form-label">คำนำหน้าชื่อ</label>
                <input type="text" class="form-control" name="nameprefix" aria-describedby="nameprefix">
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่่อ-นามสกุล</label>
                <input type="text" class="form-control" name="fullname" aria-describedby="fullname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <div class="mb-3">
            <label for="urole" class="form-label">หน้าที่</label><br>
            <select type="text" name="urole"  class="form-control" aria-describedby="urole"><br>
                <option value="อาจารย์ที่ปรึกษา">อาจารย์ที่ปรึกษา</option>
                <option value="อาจารย์นิเทศ">อาจารย์นิเทศ</option>
                <option value="ผู้นิเทศ">ผู้นิเทศ/พี่เลี้ยง</option>
                <option value="ประธานหลักสูตร">ประธานหลักสูตร</option>
                <option value="ประธานหลักสูตร">ผู้บริหาร</option>
            </select><br>
            </div>
            <div class="mb-3">
            <label for="phone" class="form-label">  เบอร์โทร </label><br>
            <input type="text" name="phone" placeholder="0xx-xxx-xxxx" class="form-control" aria-describedby="phone"><br>
            </div>
            <div class="mb-3">
            <label for="faculty" class="form-label"> คณะ</label><br>
            <select type="text" name="faculty"  class="form-control" aria-describedby="faculty"><br>
                <option value="เทคโนโลยีอุตสาหกรรม">เทคโนโลยีอุตสาหกรรม</option>
                <option value="วิทยาศาสตร์และเทคโนโลยี">วิทยาศาสตร์และเทคโนโลยี</option>
                <option value="ครุศาสตร์">ครุศาสตร์</option>
            </select><br>
            </div>
            <div class="mb-3">
            <label for="branch" class="form-label">สาขา</label><br>
            <input type="text" class="form-control" name="branch" aria-describedby="branch">
            </div>

            <input type="hidden" name="cmd" value="add">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
    </div>
    
</body>
</html>