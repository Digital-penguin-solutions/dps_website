<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="MetSense - Complete sensor solutions for winter maintenance.">
    <title>MetSense Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Klimator">
<?php
include "Sideelem/head.php";
?>

</head>
<?php
/* including the seperat function file */
include "functions/functions.php";
$con = connect();
?>

<body id="wrapper" class="col-xs-12">
<?php
include "Sideelem/nav.php";
?>

<section class = "admin_page">
    <div class = "container-fluid full_height">
        <div class = "row full_height">
            <div class = "col-md-8 col-md-offset-2">
                <h1 class = "admin_header"> Admin page </h1>
            </div>
        </div>
    </div>
</section>

<?php
include "Sideelem/fotter.php";
?>
</body>
</html>