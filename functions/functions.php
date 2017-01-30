<?php
//include all functions if the functions are included in the page
if(!isset($functions_included)){
    $functions_included = true;

    //include
    include "../db_connect.php";

    // secures a string, protects against SQL injections and other attacks
    function secure_str($data){
        $con = connect();
        //$data = stripslashes($data);
        $data = trim($data);
        $data = addslashes($data);
        $data = mysqli_real_escape_string($con, $data);
        $data = strip_tags($data);

        return $data;
    }

    //read in images for images sliders
    function read_slider_images($con, $index){

        global $slider_images_array;

        if(isset($_POST[$index])) {

            $images = $_POST[$index];

            for ($i = 0; $i < sizeof($images); $i++){

                $data = $images[$i];
                $split = explode("@)(@#!#!#", $data); // splits the data string into image_data, filename and image_id

                $data = $split[0]; // image data is one the first index
                $filename = $split[1];
                $image_id = $split[2];

                if ($data) {

                    $data = preg_replace('/^data:image\/(png|jpg|jpeg);base64,/', '', $data);
                    $data = mysqli_real_escape_string($con, base64_decode($data));

                    $info = array($data, $filename, $image_id);
                    $slider_images_array[] = $info;
                }
                else {
                }
            }
        }
        else {
            echo "not found";
        }

    }

    //read in images
    function read_image($con, $index, $result){

        $result;
        global $images_array;

        if(isset($_POST[$index])) {

            $data = $_POST[$index];

            $split = explode("@)(@#!#!#", $data); // splits the data string into image_data, filename and image_id

            $data = $split[0]; // image data is one the first index

            if ($data) {

                $data = preg_replace('/^data:image\/(png|jpg|jpeg);base64,/', '', $data);
                $data = mysqli_real_escape_string($con, base64_decode($data));
                //$image = file_put_contents($image_data);


                $result = $data;

                $info = array($data, $index);
                $images_array[] = $info;
            }
            else {
                $result = "empty";
            }
        }
        else {
            echo "not found single <br>";
        }

    }

    //logout all sesions
    function logout(){
        session_start();
        session_destroy();
    }

    //compress the images to fin in the database and optimice speed
    function compress($source, $destination, $quality,$image) {
        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg') {
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

    //Return the bytes of the imeges from the database
    function return_bytes($val) {
        $val = trim($val);
        $last = strtolower($val[strlen($val)-1]);
        switch($last) {
            // The 'G' modifier is available since PHP 5.1.0
            case 'g':
                $val *= 1024;
            case 'm':
                $val *= 1024;
            case 'k':
                $val *= 1024;
        }

        return $val;
    }

    //debugging broken code
    function debug_to_console( $data ) {

        if ( is_array( $data ) )
            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }
}