<?php
$no_admin_info = "1";

ini_set('memory_limit', '-1');
include "functions/functions.php";
session_start();

$con = connect();

?>
  <!DOCTYPE html>
  <?php include "partials/head.php";?>
  <html lang="swe">
  <head>
    <title>Add link</title>
    <meta name="description" content="Tastaturen - Add link">
  </head>
<?php
if (!isset($_SESSION['admin'])) {
  header("Location: index.php");
}
?>

</html>
