<?php
include "partials/load.php";
include "partials/head.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <meta name="description"
        content="We develop website and programs for many different company here you can se all finished project"/>
</head>

<body class="wrapper">

<?php include "partials/nav.php"; ?>

<!-- Case nav -->
<div class="w_nav">
  <div class="w_nav_container">
    <div class="w_nav__indicator"></div>
    <a href="#Tastaturen section1">Tastaturen</a>
    <a href="#Metsense section3">Metsense</a>
    <a href="#Klimator section2">Klimator</a>
  </div>
</div>

<section class="work" data-midnight="nav-light">
  <div class="work_container" id="fullpage">

    <!-- Cases -->
    <div class="w_case section" id="Tastaturen section1" style="background: url('img/Work/Tastaturen-bg.jpg')">
      <div class="w_case_container" style="background: rgba(43,43,43,0.6);">
        <h2 class="w_case_header">Tastaturen</h2>
        <p class="w_case_details">UI / UX Design , Web Development & Backend administration</p>
        <a href="work_details" class="w_case_a">view Case
          <hr align="right">
        </a>
      </div>
    </div>

    <div class="w_case section" id="Klimator section2" style="background: url('img/Work/Klimator-bg.jpg')">
      <div class="w_case_container" style="background: rgba(123,24,48,0.6);">
        <h2 class="w_case_header">Klimator</h2>
        <p class="w_case_details">UI / UX Design & Web Development</p>
        <a href="work_details" class="w_case_a">view Case
          <hr align="right">
        </a>
      </div>
    </div>

    <div class="w_case section" id="Metsense section3" style="background: url('img/Work/Metsense-bg.jpg')">
      <div class="w_case_container" style="background: 	rgba(0,48,87,0.5);">
        <h2 class="w_case_header">Metsense</h2>
        <p class="w_case_details">UI / UX Design , Web Development & Backend administration</p>
        <a href="work_details" class="w_case_a">view Case
          <hr align="right">
        </a>
      </div>
    </div>

  </div>
</section>

</body>
</html>
