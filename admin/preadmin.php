<?php 

    session_start();
    require_once 'connection.php';

    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }
    if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
            $select_stmt->bindParam(":id", $id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    } 
  
    if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
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
                $topic = $_REQUEST['topic'];
                $detail = $_REQUEST['detail'];
                $hoursactivity = $_REQUEST['hoursactivity'];
                
        
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE preproject SET topic = :topic, detail = :detail, hoursactivity = :hoursactivity WHERE id = :id");
           
                    $update_stmt->bindParam(':topic', $fullname);
                    $update_stmt->bindParam(':detail', $fullnameeng);
                    $update_stmt->bindParam(':hoursactivity', $hoursactivity);
                    $update_stmt->execute();

                    
                        $updateMsg = "File update successfully...";
                        header("refresh:1;admin.php");
                    
                } 
            }catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pre insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">pre insert Page</h1>
       <h3 class="mt-4">Welcome, <?php echo $row['fullname'] ?></h3>
        <a href="logout.php" class="btn btn-danger">Logout</a>            
        
        <h3 class="mt-4">เพิ่มโครงการเตรียมความพร้อม</h3>
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
        <a class="mt-4" href="preadmin.php?update_id=<?php echo $row['id']; ?>">เพิ่มเตรียมความพร้อม</a>
        <a class="mt-4" href="preedit.php?update_id=<?php echo $row['id']; ?>">แก้ไขเตรียมความพร้อม</a>
        <h2>ส่วนที่ ๑  ข้อมูลกิจกรรม</h2>
        <hr>       
        <form action="" method="post">
        <div class="mb-3">
            <label for="topic" class="form-label">topic</label>
            <input type="text" class="form-control" name="topic"  >
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">detail</label>
            <input type="text" class="form-control" name="detail"  >
        </div>
        <div class="mb-3">
            <label for="hoursactivity" class="form-label">hoursactivity</label>
            <input type="number" class="form-control" name="hoursactivity" >
        </div>
    
            
            
        
            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
        </form>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    
</body>
</html>