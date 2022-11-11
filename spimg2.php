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
        $stmt = $db->query("SELECT * FROM visitusers WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt1 = $db->query("SELECT * FROM sp12a WHERE user_id = $user_id");
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        $stmt2 = $db->query("SELECT * FROM sp13a WHERE user_id = $user_id");
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

        $stmt3 = $db->query("SELECT * FROM sp14a WHERE user_id = $user_id");
        $stmt3->execute();
        $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);

        $stmt4 = $db->query("SELECT * FROM sp15a WHERE user_id = $user_id");
        $stmt4->execute();
        $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
    }

    // // Code for deletion
    // if($_GET['action']=='del1' && $_GET['delete_id'])
    // {
    //     $id=intval($_GET['delete_id']);
    //     $query=mysqli_query($con,"delete from sp12a where id='$id'");
    //     $delmsg="รูปภาพอัพโหลด ได้ถูกลบแล้ว";
    // }
    //     // Code for deletion
    // if($_GET['action']=='del2' && $_GET['delete_id'])
    // {
    //     $id=intval($_GET['delete_id']);
    //     $query=mysqli_query($con,"delete from sp13a where id='$id'");
    //     $delmsg="รูปภาพอัพโหลด ได้ถูกลบแล้ว";
    // }
    // if($_GET['action']=='del3' && $_GET['delete_id'])
    // {
    //     $id=intval($_GET['delete_id']);
    //     $query=mysqli_query($con,"delete from sp14a where id='$id'");
    //     $delmsg="รูปภาพอัพโหลด ได้ถูกลบแล้ว";
    // }
    // if($_GET['action']=='del4' && $_GET['delete_id'])
    // {
    //     $id=intval($_GET['delete_id']);
    //     $query=mysqli_query($con,"delete from sp15a where id='$id'");
    //     $delmsg="รูปภาพอัพโหลด ได้ถูกลบแล้ว";
    // }

  
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
            <a class="navbar-brand h1" href="visituser.php">
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
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spteac2.php">ประวัติการกรอกข้อมูลเอกสารออนไลน์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spimg2.php">ประวัติการอัพโหลดรูปภาพข้อมูลเอกสาร</a>
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

    <!-- <?php if($delmsg){ ?>
    <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
    <?php } ?> -->


    
     <!-- table -->
     <div class="container text-center">
        <h1>สก.13</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>รูปภาพ1</td>
                    <td>รูปภาพ2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $select_stmt = $db->prepare("SELECT * FROM sp13a WHERE user_id = $user_id"); 
                    $select_stmt->execute();
                    while ($row2 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><img src="upload/sp13/<?php echo $row2['image1']; ?>" width="100px" height="100px" alt=""></td>                        
                        <td><img src="upload/sp13/<?php echo $row2['image2']; ?>" width="100px" height="100px" alt=""></td>      
                        <td><a href="sp13upedit.php?update_id=<?php echo $row2['id']; ?>" class="btn btn-warning">Edit</a></td>                        
                        <td><a href="spimg.php?delete_id=<?php echo $row2['id']; ?>&&action=del2" class="btn btn-danger">Delete</a></td>                       
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- close table -->
     <!-- table -->
     <div class="container text-center">
        <h1>สก.14</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                <td>รูปภาพ1</td>
                    <td>รูปภาพ2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $select_stmt = $db->prepare("SELECT * FROM sp14a WHERE user_id = $user_id"); 
                    $select_stmt->execute();
                    while ($row3 = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><img src="upload/sp14/<?php echo $row3['image1']; ?>" width="100px" height="100px" alt=""></td>                        
                        <td><img src="upload/sp14/<?php echo $row3['image2']; ?>" width="100px" height="100px" alt=""></td>      
                        <td><a href="sp14upedit.php?update_id=<?php echo $row3['id']; ?>" class="btn btn-warning">Edit</a></td>                        
                        <td><a href="spimg.php?delete_id=<?php echo $row3['id']; ?>&&action=del3" class="btn btn-danger">Delete</a></td>                       
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
