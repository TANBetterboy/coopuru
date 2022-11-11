<?php 

    session_start();
    require_once '../connection.php';

    if (isset($_POST['signup'])) {
        $fullname = $_POST['fullname'];
        $nameprefix = $_POST['nameprefix'];
        $phone = $_POST['phone'];
        $faculty = $_POST['faculty'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $studentid = $_POST['studentid'];
        $urole = $_POST['urole'];


        if (empty($fullname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: signupteacher.php");
        } else if (empty($nameprefix)) {
            $_SESSION['error'] = 'กรุณากรอกคำนำหน้าชื่อ';
            header("location: signupteacher.php");
        } else if (empty($phone)) {
            $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
            header("location: signupteacher.php");
        } else if (empty($faculty)) {
            $_SESSION['error'] = 'กรุณากรอกคณะ';
            header("location: signupteacher.php");
        } else if (empty($branch)) {
            $_SESSION['error'] = 'กรุณากรอกสาขา';
            header("location: signupteacher.php");
        } else if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: signupteacher.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: signupteacher.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: signupteacher.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: signupteacher.php");
        } else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header("location: signupteacher.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: signupteacher.php");
        } else {
            try {

                $check_email = $db->prepare("SELECT email FROM teacherusers WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='signin.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signupteacher.php");
                } else if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $db->prepare("INSERT INTO teacherusers(fullname, email, password, urole, nameprefix, phone, faculty, branch) 
                                            VALUES(:fullname, :email, :password, :urole, :nameprefix, :phone, :faculty, :branch)");
                    
                    $stmt->bindParam(":fullname", $fullname);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->bindParam(":nameprefix", $nameprefix);
                    $stmt->bindParam(":phone", $phone);
                    $stmt->bindParam(":faculty", $faculty);
                    $stmt->bindParam(":branch", $branch);
                    $stmt->execute();

                    $db->exec($stmt);
        
                    $last_id = $db->lastInsertId();

                    $stmt12 = $db->prepare("INSERT INTO sp12(user_id) VALUES('".$last_id."')");
                    $stmt12->execute();
                    $stmt13 = $db->prepare("INSERT INTO sp13(user_id) VALUES('".$last_id."')");
                    $stmt13->execute();
                    $stmt14 = $db->prepare("INSERT INTO sp14(user_id) VALUES('".$last_id."')");
                    $stmt14->execute();
                    $stmt15 = $db->prepare("INSERT INTO sp15(user_id) VALUES('".$last_id."')");
                    $stmt15->execute();

                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='signin.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signupteacher.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: signupteacher.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

   
?>