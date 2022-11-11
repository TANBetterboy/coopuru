<!-- <?php 
session_start();
include('includes/config.php');
?> -->
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

 
<?php
require_once 'includes/style.php';
?>
</head>
<body>
 <!-- Header -->
 <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.php">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <span class="text-dark h4">CWIE</span> <span class="text-success h4">URU</span>
                <span class="text-dark h5"><br>สหกิจศึกษาและการศึกษา<br>เชิงบูรณาการกับการทำงาน<br></span> <span class="text-success h5">มหาวิทยาลัยราชภัฏอุตรดิตถ์</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                     <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="pre.php">เตรียมความพร้อม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="spfirst.php">สมัครสหกิจศึกษา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-6" href="splast.php">โครงการสหกิจศึกษา</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                <a href="signin.php" class="btn btn-secondary">ลงชื่อสำหรับนักศึกษา</a>
                    <!-- <a class="nav-link" href="signin.php"><i class="btn btn-success">ลงชื่อสำหรับนักศึกษา</a></i></a> -->

                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
 <!-- Bootstrap -->
 <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>
     <!-- Start Recent Work -->
     <section class="bg-light w-100">
      <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
    <div class="recent-work-header row text-center  text-light ">
                <h5 class="h4 semi-bold-600 py-5">สหกิจศึกษาและการศึกษาเชิงบูรณาการกับการทำงาน มหาวิทยาลัยราชภัฏอุตรดิตถ์ ยินดีต้อนรับ</h5> 
    </div>
  
</div>
  <div class="container py-3">
    
            <!-- <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">สหกิจศึกษา</h2>
            </div> -->
            <div class="row gy-1 g-lg-1 mb-1">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="signin.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/s1.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="signinteacher.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/s2.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="signinent.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/s3.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                   <!-- Start Recent Work -->
                   <div class="col-md-4 mb-1">
                    <a href="signinvisit.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/s4.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->


                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="spfirst.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/n1.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="pre.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/n2.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-1">
                    <a href="dataenterprise.php" class="recent-work card border-1 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="images/n3.png" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
                
                
            </div>

             
        </div>
        
        
        </div>
        
    </section>   
               <!-- Start Feature Work -->
               <section class="bg-light py-5">
        <div class="feature-work container my-1 ">
            <div class="row d-flex d-flex align-items-center ">
                
                
                    <div class="row">
                        <a class="col recent-work card border-5 shadow-lg py-3" data-type="image" data-fslightbox="gallery" href="images/5.png">
                            <img class="img-fluid" src="images/5.png">
                        </a>
                       
                    </div>
                    
                
            </div><hr>
            <div class="row d-flex d-flex align-items-center">
            
                    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.3652937852107!2d100.0930440843475!3d17.632849602684697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30df303aeba49521%3A0xf0346c6d9b33160!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lit4Li44LiV4Lij4LiU4Li04LiV4LiW4LmM!5e0!3m2!1sth!2sth!4v1660835028083!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                
            </div><hr>
            
        </div>
        
    </section>
    <!-- End Feature Work -->

<?php require_once 'includes/footer.php';?>
<?php require_once 'includes/script.php';?>
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