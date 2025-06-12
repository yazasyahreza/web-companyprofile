<!DOCTYPE html>
<html lang="en">

<?php 
    $hal = @$_GET['hal'];
    $header = "hal/header.php";
    $p = "hal/$hal.php";
    if(!empty($hal) && file_exists($p)){
      include "$p";
    }else{
      include "$header";
    }
?>

<body>
 

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="">
        <a href="index.html">
        <img src="./assets/img/logo-official-blue-removebg.png" width="150" height="70" style="margin-top: 10px;">
        </a>
      </a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="index.php">Beranda</a></li>
          <li><a class="nav-link" href="about.php">Profil</a></li>
          <li><a class="nav-link" href="berita.php">Berita</a></li>
          <li><a class="nav-link" href="agenda.php">Agenda</a></li>
          <li><a class="nav-link" href="galery.php">Gallery</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Onlenkan</span></h1>
      <h2>Perluas jangkauan bisnis anda dengan website</h2>
      <div class="d-flex">
        <a href="https://api.whatsapp.com/send/?phone=6285735066367&text&type=phone_number&app_absent=0" class="btn-get-started scrollto">Hubungi Kami</a>
      </div>
      
    </div>
</section><!-- End Hero -->

<main id="main">


<!-- ======= Page Beranda ======= -->
<?php 
    $hal = @$_GET['hal'];
    $beranda = "hal/index.php";
    $p = "hal/$hal.php";
    if(!empty($hal) && file_exists($p)){
      include "$p";
    }else{
      include "$beranda";
    }
?>
<!-- ======= End Page Beranda ======= -->


<!-- ======= Page Contact ======= -->
<?php 
    $hal = @$_GET['hal'];
    $contact = "hal/contact.php";
    $p = "hal/$hal.php";
    if(!empty($hal) && file_exists($p)){
      include "$p";
    }else{
      include "$contact";
    }
?>
<!-- ======= End Page Contact ======= -->


</main><!-- End #main -->


<!-- ======= Page Testimoni ======= -->
<?php 
    $hal = @$_GET['hal'];
    $behavior = "hal/behavior.php";
    $p = "hal/$hal.php";
    if(!empty($hal) && file_exists($p)){
      include "$p";
    }else{
      include "$behavior";
    }
?> 
<!-- ======= End Page Testimoni ======= -->
      

<!-- ======= Footer ======= -->
<?php 
    $hal = @$_GET['hal'];
    $footer = "hal/footer.php";
    $p = "hal/$hal.php";
    if(!empty($hal) && file_exists($p)){
      include "$p";
    }else{
      include "$footer";
    }
?> 
<!-- ======= End Footer ======= -->


<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>