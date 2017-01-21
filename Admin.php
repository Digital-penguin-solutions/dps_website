<?php
/**
 *
	* Admin Page
	* 
	* A page for the system admin to edit/delete and and prducts to the main page
	*
	* @param author Digitalis
*/
?>
<!DOCTYPE html>
<html lang="en">

    <!DOCTYPE html>
    <html>
        <head>
            <meta name="description" content="MetSense - Complete sensor solutions for winter maintenance.">
            <title>MetSense Home</title>


            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="author" content="Klimator">

            <!--======================================= CSS ===================================-->
            <link href="css/style.css" rel="stylesheet">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

            <!-- Optional theme  FOR BOOTSTRAP-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
            <!--======================================= /*CSS==================================-->

            <!--======================================= Font ===================================-->
            <!--Font awsome-->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900i" rel="stylesheet">
            <!--======================================= /*Font ================================-->

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
                $(document).ready(function(e) {
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
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

            <!--======================================= /* JAVA SCRIPT ========================-->
            <!--icon-->
            <link rel="shortcut icon" href="/site01/img/logo/icontop.png" type="image/x-icon" />

            <!-- Latest compiled and minified JavaScript for bootstrap -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity=		"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


        </head>
        <?php
        /* including the seperat function file */
        include "functions/functions.php";
        ?>

        <body id="wrapper" class="col-xs-12">
            <?php
            /* including the seperat nav file */
            /*include "Sideelem/nav.php";*/
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

        </body>
    </html>