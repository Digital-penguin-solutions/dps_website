<?php
/*
//all variables for the wok page

include "functions/functions.php";

$con = connect();

// text
$work_name = $work['name'];
$work_description = $work['description'];
$work_date = $work['date'];

//icon
$work_coffee = $work['coffee'];
$work_tag = $work['tag'];

//image
$work_bg = $work['bg'];
$work_main_img = $work['main_image'];

/*
$slider_images = get_product_images_by_id($con, $product_id);
$key_features = get_key_features_by_id($con, $product_id);
$tech_table_array = get_tech_table_by_id($con, $product_id);
*/

?>
<section class="container-fluid work item" id="indexp3">
    <div class="row-fluid">
        <div class="col-xs-12 nopm">
            <!--left page visual of the project-->
            <div class="col-xs-9 work-left-container nopm">
                <div class="col-xs-12 nopm">
                    <a href="#">
                    <img class="work-left-backround nopm" src="img/workbg/BG.jpg" alt="backround left side">
                    </a>
                </div>
            </div>

            <!--right side information about the project-->
            <div class="col-xs-3 work-right-container nopm">

                <!--navigation for projects-->
                <div class="work-nav col-xs-12 ">
                    <div class="work-arrow-left col-xs-2 nopm">
                        <img src="img/icon/left.svg" alt="left arow">
                    </div>
                    <h1 class="col-xs-8 nopm"> Project name </h1>
                    <div class="work-arrow-right col-xs-2 nopm">
                        <img src="img/icon/right.svg" alt="right arow">
                    </div>
                </div>

                <!-- about the projects -->
                <div class="work-about col-xs-12 nomp">
                    <h2 class="work-h2">About</h2>
                    <hr>
                    <p class="work-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus quis mi nec imperdiet.
                        Quisque ut metus vitae neque imperdiet aliquam. Duis odio urna, ullamcorper sed leo eu,
                        porttitor vulputate turpis. </p>
                </div>

                <!--Date the projects started and end-->
                <div class="work-date col-xs-12 nomp">
                    <h2 class="work-h2">Project Date</h2>
                    <hr>
                    <p class="work-p">December 2016 - january 2017</p>
                </div>

                <!--amount of coffee consumed during work of the projects-->
                <div class="work-coffee col-xs-12 nopm">
                    <h2 class="work-h2">Coffee Consumed</h2>
                    <hr>
                    <img src="img/icon/coffee.svg" alt=" coffe cup">

                    <p class="work-p"></p>
                </div>

                <!--What tags where used in the projects like php angular and so on-->
                <div class="work-tag col-xs-12 nopm">
                    <h2 class="work-h2">Tags</h2>
                    <hr>
                    <ul>
                        <li class="work-tag-li">php</li>
                        <li class="work-tag-li">Html</li>
                        <li class="work-tag-li">css</li>
                        <li class="work-tag-li">jq</li>
                        <li class="work-tag-li">less</li>
                    </ul>
                    <div class="work-tag-styling">
                        <p ></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>