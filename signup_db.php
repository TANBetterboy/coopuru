<?php 

    session_start();
    require_once 'connection.php';

    if (isset($_POST['signup'])) {
        $fullname = $_POST['fullname'];
        $fullnameeng = $_POST['fullnameeng'];
        $nameprefix = $_POST['nameprefix'];
        $phone = $_POST['phone'];
        $faculty = $_POST['faculty'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $studentid = $_POST['studentid'];
        $yearclass = $_POST['yearclass'];
        $teacher = $_POST['teacher'];
        $urole = 'user';
        $hoursactivity = '0';

        if (empty($fullname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: signup.php");
        } else if (empty($fullnameeng)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อภาษาอังกฤษ';
            header("location: signup.php");
        } else if (empty($nameprefix)) {
            $_SESSION['error'] = 'กรุณากรอกคำนำหน้าชื่อ';
            header("location: signup.php");
        } else if (empty($phone)) {
            $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
            header("location: signup.php");
        } else if (empty($faculty)) {
            $_SESSION['error'] = 'กรุณากรอกคณะ';
            header("location: signup.php");
        } else if (empty($branch)) {
            $_SESSION['error'] = 'กรุณากรอกสาขา';
            header("location: signup.php");
        } else if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: signup.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: signup.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: signup.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: signup.php");
        } else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header("location: signup.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: signup.php");
        } else {
            try {

                $check_email = $db->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='signin.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signup.php");
                } else if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $db->prepare("INSERT INTO users(fullname, email, password, urole, nameprefix, phone, faculty, branch, studentid, fullnameeng, yearclass, hoursactivity, teacher) 
                                            VALUES(:fullname, :email, :password, :urole, :nameprefix, :phone, :faculty, :branch, :studentid, :fullnameeng, :yearclass, :hoursactivity, :teacher)");
                    
                    $stmt->bindParam(":fullname", $fullname);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->bindParam(":nameprefix", $nameprefix);
                    $stmt->bindParam(":phone", $phone);
                    $stmt->bindParam(":faculty", $faculty);
                    $stmt->bindParam(":branch", $branch);
                    $stmt->bindParam(":studentid", $studentid);
                    $stmt->bindParam(":fullnameeng", $fullnameeng);
                    $stmt->bindParam(":yearclass", $yearclass);
                    $stmt->bindParam(":hoursactivity", $hoursactivity);
                    $stmt->bindParam(":teacher", $teacher);
                    $stmt->execute();

                    $db->exec($stmt);
                    $last_id = $db->lastInsertId();
                   
                    $stmt1 = $db->prepare("INSERT INTO sp01(user_id) VALUES('".$last_id."')");
                    $stmt1->execute();
                    $stmt3 = $db->prepare("INSERT INTO sp03(user_id) VALUES('".$last_id."')");
                    $stmt3->execute();
                    $stmt4 = $db->prepare("INSERT INTO sp04(user_id) VALUES('".$last_id."')");
                    $stmt4->execute();
                    $stmt7 = $db->prepare("INSERT INTO sp07(user_id) VALUES('".$last_id."')");
                    $stmt7->execute();
                    $stmt8 = $db->prepare("INSERT INTO sp08(user_id) VALUES('".$last_id."')");
                    $stmt8->execute();
                    $stmt9 = $db->prepare("INSERT INTO sp09(user_id) VALUES('".$last_id."')");
                    $stmt9->execute();
                    // $stmt12 = $db->prepare("INSERT INTO sp12(user_id) VALUES('".$last_id."')");
                    // $stmt12->execute();
                    // $stmt13 = $db->prepare("INSERT INTO sp13(user_id) VALUES('".$last_id."')");
                    // $stmt13->execute();
                    // $stmt14 = $db->prepare("INSERT INTO sp14(user_id) VALUES('".$last_id."')");
                    // $stmt14->execute();
                    // $stmt15 = $db->prepare("INSERT INTO sp15(user_id) VALUES('".$last_id."')");
                    // $stmt15->execute();
                    $stmt16 = $db->prepare("INSERT INTO sp03e(user_id) VALUES('".$last_id."')");
                    $stmt16->execute();
                    $stmt17 = $db->prepare("INSERT INTO sp03l(user_id) VALUES('".$last_id."')");
                    $stmt17->execute();
                    $stmt18 = $db->prepare("INSERT INTO sp031(user_id) VALUES('".$last_id."')");
                    $stmt18->execute();
                    $stmt16 = $db->prepare("INSERT INTO enterprise(user_id) VALUES('".$last_id."')");
                    $stmt16->execute();
                    

                          
                           
                    
                   

                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='signin.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signup.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: signup.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

   
?>