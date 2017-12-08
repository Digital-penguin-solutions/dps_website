<<<<<<< HEAD
<?php
include "partials/load.php";
include "partials/head.php";

// Sets up an autoloading for the classes in DOCUMENT_ROOT/classes/
spl_autoload_register(function($class_name) {
  include  '/classes/' . $class_name . '.php';
});

?>
=======
<?php include "partials/load.php"; ?>
<?php include "partials/head.php"; ?>

>>>>>>> old_b/master
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
  <title>ison Home</title>
</head>

<body class="wrapper col-xs-12" id="page-top" class="index">

<?php
include "partials/nav.php";
//include "include_pages/language.php";
?>

<!-- Img slider top -->
<section class="intro container-fluid item" id="Home">
  <div class="row-fluid intro">
    <div class="intro-dartk-bg"></div>

    <!--background slider -->
    <div class="slideshow hidden-xs hidden-sm">
      <div class="slideshow-image slideshow-image1"></div>
      <div class="slideshow-image slideshow-image2"></div>
      <div class="slideshow-image slideshow-image3"></div>
      <div class="slideshow-image slideshow-image4"></div>
      <div class="slideshow-image slideshow-image5"></div>
      <div class="slideshow-image slideshow-image6"></div>
    </div>

    <div class="intro_mobil_bg"></div>

    <div class="intro_container">

      <!-- The text on the frontage -->
      <div class="intro-text">
        <h1>Hello!</h1>
        <h2>We are Digital Penguin we are Creative, functional and alluring.</h2>
      </div>

      <!--mouse croll animation-->
      <div class="intro-scroll">
        <span class="scroll-btn">
          <a href="#Service">
            <span class="mouse">
              <span></span>
            </span>
          </a>
          <p>FIND OUT MORE</p>
        </span>
      </div>

    </div>
  </div>
</section>

<!-- Service -->
<section class="service container-fluid" id="Service">
  <div class="service row-fluid">
    <div class="service col-xs-12">
      <div class="service_container">

        <div class="service_head">
          <h1>service</h1>
        </div>

        <div class="service_digital">
          <div class="service_digital_bg col-xs-11">
            <div class="service_digital_img_container col-md-6 hidden-xs hidden-sm ">
              <img class="col-xs-12" src="img/services/digital.jpg" alt="Digital">
            </div>
            <div class="service_digital_text_container col-md-4 col-md-offset-1 col-xs-12">
              <h1>DIGITAL</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin nec est vel mauris rutrum posuere nec ut risus.
                Pellentesque orci arcu, pellentesque id massa et,
                cursus hendrerit mi. Etiam orci erat, posuere id volutpat ac,
                blandit eget quam. Nulla nec faucibus est.
                Suspendisse felis tellus, facilisis vel dui sit amet
              </p>
              <a href="index#Work">Find out more</a>
            </div>
          </div>
        </div>

        <div class="service_branding">
          <div class="service_branding_bg col-xs-11 col-xs-offset-1">

            <div class="service_branding_text_container col-md-4 col-md-offset-1 col-xs-12">
              <h1>Branding</h1>
              <p>
                We att Digital Penguin sullies a wide range of branding work.
                If you need something small as a new logo,
                or a completely new look for your entire company images.
              </p>
              <a href="index#Work">Find out more</a>
            </div>

            <div class="service_branding_img_container col-md-offset-1 col-md-6 hidden-xs hidden-sm">
              <img class="col-xs-12" src="img/services/design.jpg" alt="Branding">
            </div>

          </div>
        </div>

        <div class="service_mobil">
          <div class="service_mobil_bg col-xs-11">

            <div class="service_mobil_img_container col-md-6 hidden-xs hidden-sm">
              <img class="col-xs-12" src="img/services/mobil.jpg" alt="Mobil aplication">
            </div>

            <div class="service_mobil_text_container col-md-4 col-md-offset-1 col-xs-12">
              <h1>Mobil application</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin nec est vel mauris rutrum posuere nec ut risus.
                Pellentesque orci arcu, pellentesque id massa et,
                cursus hendrerit mi. Etiam orci erat, posuere id volutpat ac,
                blandit eget quam. Nulla nec faucibus est.
                Suspendisse felis tellus, facilisis vel dui sit amet
              </p>
              <a href="index#Work">Find out more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="container-fluid work item" id="Work">
  <div class="row-fluid">
    <div class="col-xs-12 nopm">
      <div class="work-slider">

        <!-- Work page need more php -->
        <?php include "views/Index_Work.php"; ?>

      </div>
    </div>
  </div>
</section>

<!-- About section -->
<?php include "views/index_about.php"; ?>

<!-- Footer -->
<?php include "partials/footer.php"; ?>
</body>
</html>
=======
  <title>Digital penguin solutions Home</title>
</head>

<body class="wrapper index">

<!-- Nav -->
<?php //include "partials/Nav.php"?>

<header class="i_header">
  <div class="bg"></div>
  <div class="i_header_container">

    <!-- Logo -->
    <img src="img/Logo/Logo-dark_no_text.svg" alt="DPS logo" class="i_header_logo">

    <!-- Contact icon -->
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
      <g>
        <path d="M46.1,46.2C38.2,54.1,29,61.6,25.4,57.9c-5.2-5.2-8.4-9.7-19.8-0.6c-11.5,9.2-2.7,15.3,2.3,20.4
		      c5.8,5.8,27.4,0.4,48.9-20.9C78.2,35.6,83.7,14,78,8.1c-5-5-11.1-13.9-20.3-2.4c-9.2,11.4-4.7,14.6,0.4,19.8
		      C61.7,29.1,54.1,38.3,46.1,46.2z"/>
      </g>
    </svg>

    <!-- Portfolio btn -->
    <button class="i_header_btn">Discover our work</button>

    <h2>We are a digital design and software agency based in Sweden.
      We have a mission in life to create innovative designs and software across digital media.</h2>
  </div>
</header>

</body>
</html>

>>>>>>> old_b/master
