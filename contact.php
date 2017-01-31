<!doctype html>
<html lang="en">

<head>
    <meta name="description" content="Digitalis">
    <title>Digitalis Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Digital Internet Solutions">

    <link href="css/main.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900i" rel="stylesheet">

    <!--======================================= JAVA SCRIPT ===========================-->
    <!--JQuery-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!--Velocity -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.js" type="text/javascript"></script>
    <script src="js/jquery.color.js"></script>

    <!-- JavaScript -->
    <script src="js/scripts.js"></script>
    <script>
        smoothScroll.init();
    </script>
    <script src="js/jquery.stellar.js"></script>
    <script>
        $(document).ready(function () {
            $(window).stellar();
        });
    </script>
    <!-- Smooth scoll-->
    <script src="js/smooth-scroll.min.js"></script>
    <!--Fade in-->
    <script src="js/fade.in.js"></script>
    <!--slide in-->
    <script src="js/slide.in.js"></script>

    <!-- Latest compiled and minified JavaScript for bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!--icon-->
    <link rel="shortcut icon" href="/img/logo/icontop.png" type="image/x-icon" />

</head>
<body>
<?php
include "include_pages/nav.php";
?>

<section class="container-fluid contact_intro">
    <div class="row-fluid">
        <div class="col-xs-12 nopm">
            <div class="contact_intro_container">
                <img src="img/contact/contact_us.jpg" alt="contact us">
            </div>
        </div>
    </div>
</section>

<section class="container-fluid contact_cont">
    <div class="row-fluid">
        <div class="col-xs-12">
            <div class="contact_cont_container">
                <div class="contact_cont_text_top col-xs-2 col-xs-offset-2">
                    <h1>Contacts</h1>
                    <p>+46 7221 594949</p>
                    <p>info@digitalis.se</p>
                </div>
                <div class="contact_cont_fom">
                    <form class="col-xs-6" action="include_pages/contact_form.php" method="post">
                        <span title="Your Name"></span>
                        <input id="name" type="text" name="name" title="name">
                        <span title="Your Email"></span>
                        <input id="email" type="text" name="email" title="email">
                        <span title="Subject"></span>
                        <input id="subject" type="text" name="subject" title="subject">
                        <span title="Your Message"></span>
                        <input id="message" type="text" name="message" title="message">
                        <input class="submitbtn" type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include "include_pages/footer.php";
?>
</body>
</html>