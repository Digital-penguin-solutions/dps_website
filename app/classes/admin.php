<?php
$con = connect();
session_start_custom();


class admin{

  function login(){

  }

  //logout from admin page
  function logout(){
    session_start();
    session_destroy();
  }

}
