<?php

class lang{

  function get_lang(){
    if(isset($_SESSION['lang'])){
      return $_SESSION['lang'];
    }
    else {
      return "sv";
    }
  }

  function translate($obj, $field){
    $value = "";
    if(get_lang() == "dk"){
      $value = $obj[$field . "_dk"];
    }
    else {
      $value = $obj[$field];
    }
    if($field == "price" && $value == ""){
      if(get_lang() == "dk"){
        $value = "Kontakt os for priser";
      }
      else {
        $value = "Kontakta oss för prisuppgifter";
      }
    }
    else if ($field == "price"){
      if(get_lang() == "dk"){
        $value = "Fra " .$value . "Dkr";
      }
      else {
        $value = "Från " .$value . "kr";
      }
    }
    return $value;
  }

}
