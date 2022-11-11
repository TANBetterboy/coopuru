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
        $stmt = $db->query("SELECT * FROM teacherusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        $stmt1 = $db->query("SELECT * FROM sp12 WHERE user_id = $user_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
        $result = ($row1['d01']+$row1['d02']+$row1['d03'] +$row1['d04']+$row1['d05']+$row1['d06']+$row1['d07']+$row1['d08']
        +$row1['d09']+$row1['d10']+$row1['d11']+$row1['d12']+$row1['d13']+$row1['d14']+$row1['d15']+$row1['d16']
        +$row1['d17']+$row1['d18']+$row1['d19']+$row1['d20']+$row1['d21']+$row1['d22']+$row1['d23']+$row1['d24']
        +$row1['d25']+$row1['d26']+$row1['d27']+$row1['d28']+$row1['d29']+$row1['d30']+$row1['d31']+$row1['d32']
        +$row1['d33']+$row1['d34']+$row1['d35']+$row1['d36']+$row1['d37']+$row1['d38']+$row1['d39']+$row1['d40']
        )/5 ;
        $stmt2 = $db->query("SELECT * FROM sp13 WHERE user_id = $user_id");
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

        $stmt3 = $db->query("SELECT * FROM sp14 WHERE user_id = $user_id");
        $stmt3->execute();
        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);

        $stmt4 = $db->query("SELECT * FROM sp15 WHERE user_id = $user_id");
        $stmt4->execute();
        $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
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
     <!-- table -->
    <div class="container text-center">
        <h1>สก.12</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>วันที่</td>
                    <td>ผลประเมินนักศึกษา</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    $select_stmt = $db->prepare("SELECT * FROM sp12 WHERE user_id = $user_id"); 
                    $select_stmt->execute();
                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $row['date12']; ?></td>                        
                        <td><?php echo $result; ?>
                        <td><a href="sp12edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>                        
                        <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- close table -->
  
     <!-- table -->
     <div class="container text-center">
        <h1>สก.15</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>วันที่</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $select_stmt = $db->prepare("SELECT * FROM sp15 WHERE user_id = $user_id"); 
                    $select_stmt->execute();
                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $row['date15']; ?></td>                        
                    
                        <td><a href="sp15edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>                        
                        <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- close table -->



 



<?php
require_once 'includes/footer.php';
?>



</body>
</html>