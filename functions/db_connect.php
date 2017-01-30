<?php

function connect(){
    $con = mysqli_connect("146.185.150.217", "test", "daggmask1", "metsense");

    if (mysqli_connect_errno()){
        echo "Connection failed". mysqli_connect_error();
    }

    mysqli_set_charset($con, "utf-8");
    return $con;
}