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
        $stmt = $db->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
$hours = $row['hoursactivity']*100/30;
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
section {text-align: center;}
</style>
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
<?php
require_once 'includes/header.php';
?>
<!-- Start Our Work -->
<section class="bg-light w-100">

  <section  class="container py-5 center" >
  <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4 recent-work card border-5 shadow-lg py-3" href="pre-register.php" role="button">ลงทะเบียนเตรียมความพร้อมสหกิจศึกษา</a>
  </section>
<section class="container py-3">

<h1>รายการโครงการเตรียมความพร้อม</h1>
<div class="row projects gx-lg-5 ">

<?php 
if (isset($_GET['pageno'])) {
      $pageno = $_GET['pageno'];
  } else {
      $pageno = 1;
  }
  $no_of_records_per_page = 9;
  $offset = ($pageno-1) * $no_of_records_per_page;


  $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
  $result = mysqli_query($con,$total_pages_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.evendate,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.status=0 and tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

                <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
                    <div class="service-work overflow-hidden card mx-2 mx-sm-0 mb-2 team-member">

                        <img class="card-img-top team-member-img img-fluid rounded p-3" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="...">
                        <div class="card-body">
                            <h5 class="card-title light-300 text-dark"><?php echo htmlentities($row['posttitle']);?></h5>
                            <p class="card-text light-300 text-dark">
                                วันที่จัดกิจกรรม(ปี/เดือน/วัน):<?php echo htmlentities($row['evendate']);?><br>
                                วันที่สิ้นสุดกิจกรรม(ปี/เดือน/วัน):<?php echo htmlentities($row['evendate']);?>
                            </p>
                            
                        </div>
                    </div>
                </a>

                <?php } ?> 
                  
    </section>
    <!-- End Our Work -->
        <!-- Pagination -->
        <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
          <ul class="pagination justify-content-center mb-4">
          <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
          <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
          </li>
          <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
          </li>
          <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
          </ul>
        </div>

  </section>
  </section>
 


<?php
require_once 'includes/footer.php';
?>
<?php
require_once 'includes/script.php';
?>
<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>