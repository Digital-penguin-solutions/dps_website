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
    <meta name="description" content="Digitalis">
    <title>Digitalis Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Digital Internet Solutions">
    <?php
    include "Sideelem/head.php";
    ?>
</head>
<?php
/* including the separate function file */
include "functions/functions.php";

$con = connect();
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
