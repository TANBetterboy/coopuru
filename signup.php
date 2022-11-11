<?php 

    session_start();
    require_once 'connection.php';

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
        <form action="signup_db.php" method="post">
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
            <label for="nameprefix" class="form-label"> คำนำหน้าชื่อ</label><br>
            <select type="text"  name="nameprefix"  class="form-control" aria-describedby="nameprefix"><br>
                <option value="นาย">นาย</option>
                <option value="นางสาว">นางสาว</option>
                <option value="นาง">นาง</option>
            </select><br>
            
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่่อ-นามสกุล</label>
                <input type="text" class="form-control" name="fullname" aria-describedby="fullname">
            </div>
            <div class="mb-3">
                <label for="fullnameeng" class="form-label">ชื่่อ-นามสกุลภาษอังกฤษ(ตัวพิมพ์ใหญ่ทั้งหมด)</label>
                <input type="text" class="form-control" name="fullnameeng" aria-describedby="fullnameeng">
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
                <label for="studentid" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="studentid" aria-describedby="studentid">
            </div>
            <div class="mb-3">
            <label for="phone" class="form-label">  เบอร์โทร </label><br>
            <input type="text" name="phone" placeholder="0xx-xxx-xxxx" class="form-control" aria-describedby="phone"><br>
            </div>
            <div class="mb-3">
            <label for="faculty" class="form-label"> คณะ</label><br>
            <select type="text" name="faculty"  class="form-control" aria-describedby="faculty"><br>
                <option value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะเทคโนโลยีอุตสาหกรรม">คณะเทคโนโลยีอุตสาหกรรม</option>
                <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
            </select><br>
            </div>
            <div class="mb-3">
            <label for="branch" class="form-label">สาขา</label><br>
            <input type="text" class="form-control" name="branch" aria-describedby="branch">
            </div>
            <div class="mb-3">
            <label for="yearclass" class="form-label">ชั้นปี</label><br>
            <select name="yearclass"  class="form-control" aria-describedby="yearclass"><br>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select><br>
            </div>
            <div class="mb-3">
            <label for="teacher" class="form-label">อาจารย์ ที่ปรึกษา</label><br>
            <input type="text" class="form-control" name="teacher" aria-describedby="teacher">
            </div>
            <input type="hidden" name="cmd" value="add">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
    </div>
    
</body>
</html>