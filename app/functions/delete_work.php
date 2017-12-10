<?php
session_start();
if(isset($_SESSION['admin'])){
  include "../functions/functions.php";
  $con    = connect();
  $id     = secure_str($_GET["id"]);

  header("Location: ../admin?view=products&message=work has been deleted");
}
else{
  header("Location: ../index");
}
?>
