<?php 

    session_start();
    require_once 'connection.php';

    if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

      
        if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: signinvisit.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: signinvisit.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: signinvisit.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: signinvisit.php");
        } else {
            try {


                $check_data1 = $db->prepare("SELECT * FROM visitusers WHERE email = :email");
                $check_data1->bindParam(":email", $email);
                $check_data1->execute();
                $row1 = $check_data1->fetch(PDO::FETCH_ASSOC);
            
                
////////////////////////////////////////////////////////
                if ($check_data1->rowCount() > 0) {

                    if ($email == $row1['email']) {
                        if (password_verify($password, $row1['password'])) {
                            if ($row1['urole'] == 'ผู้นิเทศ') {
                                $_SESSION['user_login'] = $row1['id'];
                                header("location: visituser.php");
                            }
                        } else {
                            $_SESSION['error'] = 'รหัสผ่านผิด';
                            header("location: signinvisit.php");
                        }
                    } else {
                        $_SESSION['error'] = 'อีเมลผิด';
                        header("location: signinvisit.php");
                    }
                } else {
                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
                    header("location: signinvisit.php");
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>