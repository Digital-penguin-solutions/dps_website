<?php
/**
 * Home page
 *
 * The main home page for our own website
 *
 * author Digitalis
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="MetSense - Complete sensor solutions for winter maintenance.">
    <title>Webföretag home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Digital Internet Solutions">
    <!--main css style sheat-->
    <link rel="stylesheet" href="css/main.css">
    <!--Font for the website-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900i" rel="stylesheet">
    <!--======================================= JAVA SCRIPT ===========================-->
    <!--JQuery-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!--Velocity -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.js" type="text/javascript"></script>
    <script src="js/jquery.color.js"></script>
    <!--treeline bakround slider-->
    <script src="js/backgroundslider.js"></script>

    <!-- JavaScript -->
    <script src="js/scripts.js"></script>
    <!-- Smooth scoll-->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
        var smoothScroll;
        smoothScroll.init();
    </script>
    <script src="js/jquery.stellar.js"></script>
    <script>
        $(document).ready(function (e) {
            $(window).stellar();
        });
    </script>
    <!--Fade in-->
    <script src="js/fade.in.js"></script>
    <!--slide in-->
    <script src="js/slide.in.js"></script>

    <!-- Latest compiled and magnified JavaScript for bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <!--======================================= /* JAVA SCRIPT ========================-->
    <!--icon for top of document-->
    <link rel="shortcut icon" href="/img/logo/icontop.png" type="image/x-icon"/>

    <!-- Latest compiled and minified JavaScript for bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
</head>

<?php
/* including the separate function file */
include "functions/functions.php";
?>

<body class="wrapper col-xs-12">

<!-- Page 1 top of page -->
<section class="intro container-fluid item" id="indexp1">
    <div class="row-fluid">
        <!--background slider -->
        <div class="background-slider col-xs-12 no_padding no_margin"></div>
        <!-- The text on the frontage -->
        <div class="intro-text white center_css">
            <h1>Creative design</h1>
            <h2>The web design you deserve</h2>
        </div>
    </div>
</section>


<?php
// Nav
include "Sideelem/nav.php";

// Work page
include "work.php";

// About
include "aboute.php";

// including the seperat fotter to the page
include "Sideelem/fotter.php";
?>
</body>
</html>
