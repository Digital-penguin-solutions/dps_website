<?php include "partials/load.php"; ?>
<?php include "partials/head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio details</title>
  <meta name="description"
        content="We develop website and programs for many different companys heare you can se som details about them"/>
</head>

<body class="wrapper about">

<?php
include "partials/nav.php";

// Head
include "views/wd/wd_head.php";

//work problem and solution view
include "views/wd/wd_problem.php";

// Desktop images
include "views/wd/wd_desktop.php";

// Tablet images
include "views/wd/wd_tablet.php";

// Mobile images
include "views/wd/wd_mobile.php";

// Details
include "views/wd/wd_details.php";
?>

</body>
</html>
