<?php
if (!isset($no_admin_info)) {
  include "functions/functions.php";
  session_start_custom();

  if (isset($_SESSION['admin'])) {
    ?>

    <div class="admin_info_container">

    </div>

    <?php
  }
}
?>
