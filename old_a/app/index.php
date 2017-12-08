<?php
include "partials/load.php";
include "partials/head.php";

// Sets up an autoloading for the classes in DOCUMENT_ROOT/classes/
spl_autoload_register(function($class_name) {
  include  '/classes/' . $class_name . '.php';
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
