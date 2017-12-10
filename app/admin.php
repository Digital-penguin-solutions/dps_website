<?php
include "functions/functions.php";
session_start_custom();
include "partials/loading.php";
$no_admin_info = "1";
?>

<?php
$con = connect();
include "partials/head.php";
?>
<!DOCTYPE html>
<html lang="swe">
<head>
  <title>Admin</title>
</head>
<body class="wrapper">
<?php include "partials/nav.php" ?>

<section class="admin_page">
  <div class="admin_page_container">

    <?php
    if (isset($_GET['wrong'])) {
      echo "<h2 class = 'admin_header'> Wrong password, please try again </h2>";
    }

    if (isset($_SESSION['admin'])) {

      if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo "<h1 class = 'admin_message'>" . $message . "</h1>";
      }
      if (isset($_GET['change_password'])) {

        ?>
        <form class="login change_password_form" action="functions/login.php" method="post">
          <p>New password:</p>
          <input placeholder="New password" type="password" name="password"><br>
          <input placeholder="Repeat new password" type="password" name="password_repeat">
          <input type="submit" name="set_password" value="Change">
        </form>
        <?php
      }
    }
    ?>

    <?php
    if (isset($_SESSION['admin'])) {
      ?>
      <div class="a_btn_container col-xs-12">
        <a href="add_product.php" class="add_product_button col-xs-5 col-xs-offset-1">
          Add a new product
        </a>
        <a href="add_media.php" class="add_product_button col-xs-5 col-xs-offset-1">
          Add new media post
        </a>
        <a href="add_link.php" class="add_product_button col-xs-5 col-xs-offset-1">
          Add new link
        </a>
        <a href="admin?change_password=" class="add_product_button col-xs-5 col-xs-offset-1">
          Change password
        </a>
        <a href="functions/logout" class="add_product_button col-xs-5 col-xs-offset-1">
          Logout
        </a>
      </div>
      <?php
    } else {
      ?>
      <form class="login hidden-sm hidden-xs" action="functions/login.php" method="post">
        <p>PASSWORD:</p>
        <input type="password" name="password">
        <input type="submit" name="login" value="Login">
      </form>
      <?php
    }
    ?>


  </div>
</section>


</body>
</html>
