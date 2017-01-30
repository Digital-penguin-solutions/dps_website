<?php
/**
 * Created by IntelliJ IDEA.
 * User: olqeable
 * Date: 2016-12-12
 * Time: 17:09
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

    <!--======================================= CSS ===================================-->
    <link rel="stylesheet" href="css/main.css">

    <!--======================================= Font ===================================-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900i" rel="stylesheet">
    <!--======================================= /*Font ================================-->

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

    <!-- Latest compiled and minified JavaScript for bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!--======================================= /* JAVA SCRIPT ========================-->
    <!--icon-->
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
<?php
/* including the separate nav file */
include "include_pages/nav.php";
?>
<section class="container-fluid terms-and-concessions">
    <div class="row-fluid">
        <div class="col-xs-12">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="terms-and-concessions">
                    <h1>Privacy Policy</h1>
                    <h2>Our commitment to privacy</h2>
                    <p>Your privacy is important to us. To better protect your privacy we provide this notice explaining
                        our
                        information practices and the choices you can make about the way your information is collected
                        and
                        used. To make this notice easy to find, we make it available on every pages of our website.</p>

                    <h2>The information we collect</h2>
                    <p>This notice applies to all information collected or submitted on the Digitalis website or via
                        phone
                        with a Digitalis representative. The types of information collected are personal, billing and
                        project related. We might also collect information from you regarding third parties in relation
                        to
                        you (i.e. hosting company etc…).</p>

                    <h2>The way we use information</h2>
                    <p>We use the information you provide about yourself to provide services. We do not share this
                        information with outside parties except to the extent necessary to complete your request for our
                        services. Digitalis reserves the right to reveal this information pursuant to a valid subpoena
                        or
                        court order.</p>
                    <p>We use return email addresses to answer the email we receive for tech support, customer service,
                        tell-a-friend, email updates. Such addresses are not used for any other purpose and are not
                        shared
                        with outside parties.</p>
                    <p>We use return email addresses to answer the email we receive for tech support, customer service,
                        tell-a-friend, email updates. Such addresses are not used for any other purpose and are not
                        shared
                        with outside parties.</p>

                    <h2>Our commitment to data security</h2>
                    <p>To prevent unauthorized access, maintain data accuracy, and ensure the correct use of
                        information, we
                        have put in place appropriate physical, electronic, and managerial procedures to safeguard and
                        secure the information we collect online and offline.
                        All online credit card transactions are performed only on secure servers through a secure SSL
                        connection and comply with the latest standards in the industry. All billing information,
                        including
                        credit cards information, are deleted upon termination of the project with the client.</p>

                    <h2>Our commitment to children’s privacy</h2>
                    <p>Protecting the privacy of the very young is especially important. For that reason, we never
                        collect
                        or maintain information at our website from those we actually know are under 13, and no part of
                        our
                        website is structured to attract anyone under 13.</p>

                    <h2>Third-party websites</h2>
                    <p>This website may provide links to third-party websites. Any such links are provided solely as a
                        convenience to you. Digitalis has no control over these websites or their content and does not
                        assume any responsibility or liability for these websites.Digitalis does not endorse or make any
                        representations about these websites, or any information, materials, or products found thereon.
                        If
                        you access any of the third-party websites linked on this Web site, you do so at your own
                        risk.</p>

                    <h2>How you can access or correct your information</h2>
                    <p>At any time, you may later review or update the personal information we have collected online
                        from
                        you by contacting us at: oliver.gustavsson@digitalis.com</p>

                    <h2>How to contact us</h2>
                    <p>Should you have other questions or concerns about these privacy policies, please send us an email
                        at
                        oliver.gustavsson@digitalis.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/* including the seperat fotter to the page */
include "include_pages/fotter.php";
?>
</body>
</html>


