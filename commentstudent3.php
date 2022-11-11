<?php 

    session_start();
    require_once 'connection.php';
    $id=$_GET['id'];
    if (isset($_POST['signup'])) {
        $id = $_POST['id'];
        $sp = $_POST['sp'];
        $comment = $_POST['comment'];

        $stmt = $db->prepare("INSERT INTO comment(user_id, sp, comment) 
        VALUES(:id, :sp, :comment)");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":sp", $sp);
        $stmt->bindParam(":comment", $comment);
        $stmt->execute();
        
        header("location: teacheruser.php");
    }

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
        <h3 class="mt-4">comment</h3>
        <hr>
        <form action="" method="post">
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
                <label for="sp" class="form-label">ชื่่อหัวข้อสก.</label>
                <input type="text" class="form-control" name="sp" aria-describedby="sp">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">คอมเมนต์นักศึกษา</label>
                <input type="text" class="form-control" name="comment" aria-describedby="comment">
            </div>
        
            <input type="hidden" class="form-control" name="id" value="<?php echo $id?>" aria-describedby="id">

            <button type="submit" name="signup" class="btn btn-primary">OK</button>
        </form>
        <hr>

    </div>
    
</body>
</html>