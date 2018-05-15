<?php
include "partials/load.php";
include "partials/head.php";
include "functions/functions.php";
$con = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Digital penguin solutions Home</title>
  <meta name="description"
        content="Digital penguin solutions is a company that delivers a beautiful and functional design."/>
</head>

<body class="wrapper index">

<!-- Nav -->
<?php include "partials/Nav.php" ?>

<header class="i_header">
  <div class="bg"></div>
  <div class="i_header_container">


    <!-- Contact icon -->
    <?php include "views/index/i_contact.php" ?>

    <!-- Portfolio btn -->
    <a href="work" class="i_header_btn">Discover our work</a>

    <h2>We are a digital design and software agency based in Sweden.
      We have a mission in life to create innovative designs and software across digital media.</h2>
  </div>
</header>

</body>
</html>

