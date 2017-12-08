<?php
include "partials/load.php";
include "partials/head.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Digitalis">
    <title>Digitalis Home</title>
</head>
<body>

<?php
include "partials/nav.php";
//include "partials/language.php"
?>

<!-- Intro about us -->
<div class="about-intro">
    <div id="parallax_img"></div>
    <div class="about-intro-container-bg">
        <div class="about-intro-container col-xs-6 col-xs-offset-3">
            <h1>About us</h1>
            <p>
                ANMDalikhnfalhnsflajhwf pohjwpf jhawf
                'f jmawföl jmawföljm awf
                fawlknf ölkawn f
            </p>
        </div>
    </div>
</div>

<!-- Our story-->
<section class="container-fluid about_text" id="story content">
    <div class="row-fluid about_text">
        <div class="about_text col-xs-12">
            <div class="about_text_container">
                <div class="about_text_text_container col-xs-6 col-xs-offset-3">
                    <h1>OUR STORY</h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In auctor quam metus, ut condimentum enim maximus in. Aenean mi magna,
                        fermentum at bibendum id, hendrerit quis elit. Vivamus nec urna eget
                        eros dictum dignissim.
                        Praesent pellentesque consequat risus, quis vehicula nisi dictum id.
                        Donec et ullamcorper purus. Pellentesque tempor scelerisque rutrum.
                        Nullam fringilla augue sit amet scelerisque tempus. Praesent tincidunt
                        suscipit velit. Donec dapibus lorem quis massa iaculis, </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Slider -->
<section class="about_slider container-fluid item">
    <div class="row-fluid about_slider">
        <!--background slider -->
        <div class="slideshow hidden-md-down">
            <div class="slideshow-image" style="background-image: url('img/about/slider/1.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('img/about/slider/2.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('img/about/slider/3.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('img/about/slider/4.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('img/about/slider/5.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('img/about/slider/6.jpg')"></div>
        </div>
    </div>
</section>

<!-- Wat we do -->
<section class="container-fluid about_text" id="what">
    <div class="row-fluid about_text">
        <div class="about_text col-xs-12">
            <div class="about_text_container">
                <div class="about_text_text_container col-xs-6 col-xs-offset-3">
                    <h1>WHAT WE DO</h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In auctor quam metus, ut condimentum enim maximus in. Aenean mi magna,
                        fermentum at bibendum id, hendrerit quis elit. Vivamus nec urna eget
                        eros dictum dignissim.
                        Praesent pellentesque consequat risus, quis vehicula nisi dictum id.
                        Donec et ullamcorper purus. Pellentesque tempor scelerisque rutrum.
                        Nullam fringilla augue sit amet scelerisque tempus. Praesent tincidunt
                        suscipit velit. Donec dapibus lorem quis massa iaculis,
                        <a href="about#front-end">front end</a>
                        <a href="about#back-end">back end</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Front end -->
<section class="about_expertise container-fluid" id="front-end">
    <div class="row-fluid about_expertise">
        <div class="about_expertise col-xs-12 nopm">
            <div class="about_expertise_container nopm">

                <!--img-->
                <div class="about_expertise_left col-xs-12 col-md-6 nopm">
                    <div class="about_expertise_img_container col-xs-12 nopm">
                        <img src="img/about/front-end.jpg" alt="web design">
                    </div>
                </div>

                <!--text-->
                <div class="about_expertise_right col-xs-12 col-md-6">
                    <div class="about_expertise_text_container col-xs-10 col-xs-offset-1">
                        <h1>front end</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec risus nibh,
                            lobortis ac dolor sed,egestas tempor erat. Phasellus ullamcorper,
                            erat eget cursus molestie, quam ligula sollicitudin orci,
                        </p>
                        <form action="index#work" class="col-xs-4 col-xs-offset-5">
                            <button value="Read more about our prodjekts" type="submit" id="js-trigger-overlay">
                                Se what we done
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Back end -->
<section class="about_expertise container-fluid" id="back-end">
    <div class="row-fluid about_expertise">
        <div class="about_expertise col-xs-12 nopm">
            <div class="about_expertise_container nopm">

                <!--text-->
                <div class="about_expertise_right col-xs-12 col-md-6">
                    <div class="about_expertise_text_container col-xs-10 col-xs-offset-1">
                        <h1>Back end</h1>
                        <p>
                            We offer a wide range of services.
                            A website with backend development like a store or a website that you can edit text and images
                            after the final delivery.

                        </p>
                        <form action="index#work" class="col-xs-4 col-xs-offset-5">
                            <button value="Read more about our prodjekts" type="submit" id="js-trigger-overlay">
                                Se what we done
                            </button>
                        </form>
                    </div>
                </div>

                <!--img-->
                <div class="about_expertise_left col-xs-12 col-md-6 nopm">
                    <div class="about_expertise_img_container col-xs-12 nopm">
                        <img src="img/about/back-end.jpg" alt="web design">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Hex pattern to show wht we do -->
<section class="container-fluid about_skills" id="skills">
    <div class="row-fluid about_skills">
        <div class="col-xs-12 about_skills">
            <div class="about_skills_container">

                <div class="about_skills_hex">
                    <div class="hex-row even">
                        <div class="hex">
                            <div class="top"></div>
                            <div class="middle">
                                <p>Ai</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                        <div class="hex">
                            <div class="top">
                            </div><div class="middle">
                                <p>PS</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                    </div>
                    <div class="hex-row">
                        <div class="hex">
                            <div class="top"></div>
                            <div class="middle">
                                <p>PHP</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                        <div class="hex">
                            <div class="top"></div>
                            <div class="middle">
                                <p>HTML</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                        <div class="hex">
                            <div class="top"></div>
                            <div class="middle">
                                <p>CSS</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                    </div>
                    <div class="hex-row even">
                        <div class="hex">
                            <div class="top"></div>
                            <div class="middle">
                                <p>jQuery</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                        <div class="hex">
                            <div class="top">
                            </div><div class="middle">
                                <p>LESS</p>
                            </div>
                            <div class="bottom"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include "partials/footer.php" ?>
</body>
</html>