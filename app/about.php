<?php include "partials/load.php"; ?>
<?php include "partials/head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About us</title>
</head>

<body class="wrapper about">

<!-- Nav -->
<?php //include "partials/nav.php"; ?>

<!-- Welcome header -->
<section class="a_header">
  <div class="a_header_container">

  </div>
</section>

<!-- Short info about DPS -->
<section class="a_story">
  <div class="a_story_container">
    <h3>Our story</h3>
    <hr>
    <p>Digital penguin is a digital agency based in Sweden.
      The company consist of tow young entrepreneurs, studding at chalmers university.
      Our passion in life is creating beautiful and in depth computer programs.
      We take the time to understand our client's objectives and align these with their target audience,
      which allows us to produce exciting digital experiences that are engaging and effective.</p>
  </div>
</section>

<!-- Slider stuff -->
<section class="a_slider">
  <div class="slideshow a_slider_container">
    <div class="slideshow-image" style="background-image: url('img/About/Slider/1.jpg')"></div>
    <div class="slideshow-image" style="background-image: url('img/About/Slider/2.jpg')"></div>
    <div class="slideshow-image" style="background-image: url('img/About/Slider/3.jpg')"></div>
    <div class="slideshow-image" style="background-image: url('img/About/Slider/4.jpg')"></div>
    <div class="slideshow-image" style="background-image: url('img/About/Slider/5.jpg')"></div>
  </div>
</section>

<!-- SVG of what we love and hate -->
<?php include "views/a_i_about.php"; ?>

<!-- Video Footer  -->
<section class="a_footer">
  <div class="a_footer_container">
    <video autoplay loop>
      <source type="video/mp4" src="video/Love-Coding.mp4">
    </video>
    <a class="a_footer_overlay" href="work">
      <h3>Work</h3>

    </a>
  </div>
</section>

</body>
</html>
