<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Podcasts and Radio Music in Africa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/sleek-logo.jpg" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
body { background-color:; }
.highlight { background-color:green; color:#fff; text-align: center; padding: 15px; font-weight: 600; }
p { background-color:; 

  </style>
</head>
<body>

      <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
       <a href="index.html" class="logo me-auto me-sm-0"><img src="asset/img/sleek-logo.jpg" width="200" height="70" alt="" class="img-fluid"></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="">
            <a class="nav-link" href="index.html">HOME</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="about.html">ABOUT US</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="meet-the-aop.html">MEET THE OAPS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="shedule-1.html">BLOG</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="pod-cast.html">POD CAST</a>
              <a class="dropdown-item " href="shedule.html">SCHEDULE</a>
              <a class="dropdown-item " href="your-request.html">YOUR REQUEST</a>
              <a class="dropdown-item " href="rate-card.html">RATE CARD</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
        <div class="bgmusic">

         <!--VosCast.com Flash Player-->

           <script type="text/javascript" src="http://cdn.voscast.com/player/?key=24d63abb6fe79d10f34cc797236336cb"></script>

          <!--End Player-->
        </div>
         </nav><!-- End Header/Navbar -->


  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contact US</h1>
              <span class="color-text-a">If you have any questions or concerns, please feel free to send us a message using the form below to speak with a Sleek Fm.com representative.</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <img src='asset/img/contact-us.jpg' alt="logo" width="100%" height="100%" >
              </div>
            </div>
          </div>
                    <div class="col-sm-12 section-t8">
          <div class="row">
           <div class="col-md-7">
        <form action="handller.php" method="POST" class="form-horizontal" role="form"  enctype="multipart/form-data" class="php-email-form">
         <div class="Reg_form">
        <div class="row">
        <div class="col-md-6 mb-3">
         <div class="form-group">
          <input type="text" name="firstname" id="image" class="form-control form-control-lg form-control-a" placeholder="Enter First Name">
        </div>
          </div>
        <div class="col-md-6 mb-3">
          <div class="form-group">
          <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="Email">
         </div>
        </div>
       <div class="col-md-12 mb-3">
       <div class="form-group">
       <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
        </div>
          </div>
             <div class="col-md-12">
                <div class="form-group">
             <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
           </div>
              </div>
             <span style="" class="highlight">
             <?php
                     if(isset($_GET["msg"])&& !empty($_GET["msg"])){
                      echo $_GET["msg"];
                         }else{
                      echo"";
                      }
                  ?>
             </span>
     <div class="col-md-12 text-center">
          <button type="submit"  name="submit" class="btn btn-a">Send message</button>
      </div>
    </div>
      </div>
  </form>
        </div>
      </div>
            </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">GET IN TOUCH WITH US</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
               Stay Tuned For Top Charts, Events Podcasts and more.

                Visual Broadcast House
                After Emordi Street , Along Old Lagos-Asaba Road
                Owa Ekei, Delta State.
                Phone: 09130001019
                Email: info@sleekfm.com
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> 07069306039
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span>sleekfm@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Site Navigation</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i><a href="pod-cast.html">POD CAST</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i><a href="blog.html">SCHEDULE</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a  href="your-request.html">YOUR REQUEST</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i>  <a href="football-fever.html">RATE CARD</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
           <div class="widget-a">
           <a href="index.html" class="logo me-auto me-sm-0"><img src="asset/img/sleek-logo.jpg" width="200" height="70" alt="" class="img-fluid"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="about.html">About</a>
              </li>
              <li class="list-inline-item">
                <a href="meet-the-oap.html">Meet The OAP</a>
              </li>
              <li class="list-inline-item">
                <a href="blog.html">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="contact.html">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Sleek 101.9FM</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="#">VINDAD TECHNOLOGY ICT</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>