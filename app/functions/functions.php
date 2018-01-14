<?php
if(!isset($functions_included)) {
  $functions_included = true;

  //include connect page
  include "db_connect.php";
  function session_start_custom()
  {
    global $session_started;
    if (!$session_started) {
      session_start();
      $session_started = true;
    }
  }

  // secures a string, protects against SQL injections and other attacks
  function secure_str($data){
    $con = connect();
    $data = trim($data);
    $data = mysqli_real_escape_string($con, $data);
    $data = strip_tags($data);
    return $data;
  }

  //compress images
  function compress($source, $destination, $quality) {
    $info = getimagesize($source);
    if ($info['mime']     == 'image/jpeg') {
      $image = imagecreatefromjpeg($source);
    }
    elseif ($info['mime'] == 'image/gif'){
      $image = imagecreatefromgif($source);
    }
    elseif ($info['mime'] == 'image/png') {
      $image = imagecreatefrompng($source);
    }
    imagejpeg($image, $destination, $quality);
    return $destination;
  }

  //
  function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) {
      // The 'G' modifier is available since PHP 5.1.0
      case 'g':$val *= 1024;
      case 'm':$val *= 1024;
      case 'k':$val *= 1024;
    }
    return $val;
  }

  //debugging website in console
  function debug_to_console( $data ) {
    if ( is_array( $data ) )
      $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
      $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
    echo $output;
  }
}
?>
