<?php
session_start();
include('includes/config.php');
error_reporting(0);
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

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
    
//Current Password hashing 
$password=$_POST['password'];
$options = ['cost' => 12];
$hashedpass=password_hash($password, PASSWORD_BCRYPT, $options);
$adminid=$_SESSION['login'];
// new password hashing 
$newpassword=$_POST['newpassword'];
$newhashedpass=password_hash($newpassword, PASSWORD_BCRYPT, $options);

if (empty($password)) {
    
    $error="กรุณากรอกรหัสผ่าน !!";
} else if (strlen($_POST['newpassword']) > 20 || strlen($_POST['newpassword']) < 5) {
    
    $error="รหัสผ่านใหม่ต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร'";
}else{

// date_default_timezone_set('Asia/Bangkok');// change according timezone
// $currentTime = date( 'd-m-Y h:i:s A', time () );
$sql=mysqli_query($con,"SELECT * FROM  users where id='$user_id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $dbpassword=$num['password'];

if (password_verify($password, $dbpassword)) {

 $con=mysqli_query($con,"update users set password='$newhashedpass' where id='$user_id'");
$msg="Password Changed Successfully !!";
}
}
else
{
$error="Old Password not match !!";
}
}
}

require_once 'includes/style.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Add Category</title>

        <!-- App css -->
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
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/header.php');?>
<!-- Top Bar End -->




            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">



<br>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>เปลี่ยนรหัสผ่าน</b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>เรียบร้อย!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>ผิดพลาด!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>





<div class="row">
<div class="col-md-10">
<form class="form-horizontal" name="chngpwd" method="post" onSubmit="return valid();">

<div class="form-group">
<label class="col-md-4 control-label">รหัสผ่านเดิม</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="password" required>
</div>
</div>
	                                     

<div class="form-group">
<label class="col-md-4 control-label">รหัสผ่านใหม่</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="newpassword" required>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">ยืนยัน รหัสผ่านใหม่</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="confirmpassword" required>
</div>
</div>

 <div class="form-group">
<label class="col-md-4 control-label">&nbsp;</label>
<div class="col-md-8">
                                                  
<button type="submit" class="btn btn-secondary" name="submit">
                                                    ตกลง
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>