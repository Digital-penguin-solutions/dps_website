<?php
include "partials/load.php";
include "partials/head.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="Digitalis Admin page. the page to edit the pruduckts and the content of the website">
    <title>Admin page</title>
</head>

<body id="wrapper" class="col-xs-12">
<?php
//include "partials/nav.php";
session_start();
$con = connect();
$products = get_all_work($con);
?>

<section class = "container-fluid admin_page">
        <div class = "row-fluid admin_page">
            <div class = "col-md-8 col-md-offset-2 admin_page_container">
                <h1 class = "admin_header"> Admin page </h1>

                <?php
                if(isset($_GET['wrong'])){
                    echo "<h2 class = 'admin_header'> Wrong password, please try again </h2>";
                }

                if(isset($_SESSION['admin'])){

                    if(isset($_GET['logout'])){
                        session_destroy();
                        header("Location: admin.php");
                    }
                    if(isset($_GET['message'])){
                        $message = $_GET['message'];
                        echo "<h1 class = 'admin_message'>" . $message . "</h1>";

                    }

                    if(isset($_GET['change_password'])){

                        ?>
                        <form class="login change_password_form" action = "classes/login.php" method = "post">
                            <p>New password:</p>
                            <input placeholder = "New password" type = "password" name = "password"><br>
                            <input placeholder = "Repeat new password" type = "password" name = "password_repeat">
                            <input type = "submit" name = "set_password" value="Change">
                        </form>
                        <?php
                    }
                    ?>
                    <div class = "row admin_all_products_container">

                        <?php
                        $count = 0;
                        foreach ($products as $product) {
                            $name       = $product['name'];
                            $main_image = $product['main_image'];
                            $product_id = $product['product_id'];


                            if($count % 2 == 0) {
                                $offset = 1;
                            }
                            else {
                                $offset = 2;
                            }
                            ?>
                            <div class = "col-md-4 col-md-offset-<?php echo $offset ?> admin_product">
                                <h1> <?php echo $name ?></h1>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode( $main_image ); ?>" />

                                <!--- EDIT BUTTON-->
                                <a href = "add_product?product_id=<?php echo $product_id?>" class = "product_edit_button">
                                    <p>Edit</p>
                                </a>

                                <!--- DELETE BUTTON-->
                                <a href = "actions/delete_product?id=<?php echo $product_id?>" class = "product_delete_button">
                                    <p>Delete</p>
                                </a>

                            </div>
                            <?php
                            $count++;
                        }
                        ?>
                    </div>
                    <?php
                }

                if(isset($_SESSION['admin'])){
                    ?>
                    <a href = "add_product" class = "add_product_button center_horizontally_css">
                        Add a new product
                    </a>
                    <a href = "admin?change_password=" class = "add_product_button center_horizontally_css">
                        Change password
                    </a>
                    <a href = "admin?logout=" class = "add_product_button center_horizontally_css">
                        Logout
                    </a>
                    <?php
                }
                else {
                    ?>
                    <form class="login hidden-sm hidden-xs" action = "function/login.php" method = "post">
                        <p>PASSWORD:</p>
                        <input type = "password" name = "password">
                        <input type = "submit" name = "login" value="Login">
                    </form>
                    <?php
                }
                ?>

            </div>
        </div>
</section>
</body>
</html>