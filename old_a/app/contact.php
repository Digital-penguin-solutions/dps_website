<?php
//loading page
include "partials/load.php";
//functions
include "partials/head.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="Digitalis">
    <title>Contact us</title>
</head>
<body>

<?php
include "partials/nav.php";
//include "partials/language.php"
?>

<!--contact content-->
<section class="container-fluid contact_cont">
    <div class="row-fluid contact_cont">
        <div class="col-xs-12 contact_cont">
            <div class="contact_cont_container">
                <div class="contact_cont_top">
                    <div class="contact_cont_info col-xs-10 col-xs-offset-1">
                        <div class="contact_cont_info_headline col-xs-12">
                            <h1>Contact Us</h1>
                            <h2>Questions or Comments
                                Get in touch with us!</h2>
                        </div>
                        <div class="contact_cont_info_stuff col-xs-12">
                            <div class="col-xs-4">
                                <i class="fa fa-phone"></i>
                                <h3>Talk to uss</h3>
                                <p>If you have anny questions or just what to talk call us</p>
                                <p class="contact_cont_info_stuff_p">+46 - 722159494</p>
                            </div>
                            <div class="col-xs-4">
                                <i class="fa fa-briefcase"></i>
                                <h3>Start a project</h3>
                                <p>We are ready for the challenge</p>
                                <p class="contact_cont_info_stuff_p">hello@digitalis.se</p>
                            </div>
                            <div class="col-xs-4">
                                <i class="fa fa-user"></i>
                                <h3>Employment</h3>
                                <p>We are always looking for talent.</p>
                                <p class="contact_cont_info_stuff_p">info@digitalis.se</p>
                            </div>
                        </div>
                        <div class="contact_cont_info_hide_btn col-xs-12">
                            <p>Writ to Us</p>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                    </div>

                </div>
                <!--form -->
                <div class="contact_cont_container_togel">
                    <!--contact form-->
                    <div class="contact_cont_fom">
                        <form class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1" action="functions/contact_form.php" method="post">
                            <!--left side-->
                            <div class="col-xs-6">
                                <div class="col-xs-12">
                                    <input id="name" type="text" name="name" title="name" placeholder="Your Name">
                                </div>
                                <div class="col-xs-12">
                                    <input id="email" type="email" name="email" title="email" placeholder="Your E-mail address">
                                </div>
                                <div class="col-xs-12">
                                    <input id="number" type="tel" name="number" title="number" placeholder="Contact number">
                                </div>
                                <div class="col-xs-12">
                                    <input id="c-name" type="text" name="company" title="company" placeholder="Company name">
                                </div>
                            </div>

                            <!--right side-->
                            <div class="col-xs-6">
                                <div class="col-xs-12">
                                    <textarea rows="4" cols="50" id="brief" name="brief" placeholder="Project brief"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <input id="budget" type="number" name="budget" title="budget" placeholder="Your Budget">
                                </div>
                            </div>


                            <h1>I Need Help With:</h1>

                            <div class="col-xs-6">

                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="new-website" value="new-website" title="new-website"><label>New Website</label>
                                </div>
                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="update-website" value="update-website" title="update-website"><label>Update old website</label>
                                </div>
                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="e-commerce" value="e-commerce" title="e-commerce"><label>E-commerce</label>
                                </div>
                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="info-page" value="info-page" title="info-page"><label>Information-page</label>
                                </div>
                            </div>

                            <div class="col-xs-6">

                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="branding" value="branding" title="branding"><label>Branding</label>
                                </div>
                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="mobil-app" value="mobil-app" title="mobil-app"><label>Mobil Application</label>
                                </div>
                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="support" value="support" title="support"><label>Support</label>
                                </div>
                                <div class="col-xs-12 check">
                                    <input class="checkbox" type="checkbox" name="other" value="other" title="other"><label>Other</label>
                                </div>
                            </div>

                            <!--submit btn-->
                            <div class="col-xs-12">
                                <input class="submitbtn" type="submit" value="Send">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "partials/footer.php" ?>
</body>
</html>