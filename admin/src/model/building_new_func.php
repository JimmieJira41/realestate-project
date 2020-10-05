<?php

require "../../mysql/connect.php";

if(isset($_POST['id_type'])){
    $id_type = $_POST['id_type'];
}else{
    $id_type = '';
}

if(isset($_POST['title_building'])){
    $title_building = $_POST['title_building'];
}else{
    $title_building = '';
}

if(isset($_POST['img_building'])){
    $img_building = $_POST['img_building'];
}else{
    $img_building = '';
}

if(isset($_POST['description_building'])){
    $description_building = $_POST['description_building'];
}else{
    $description_building = '';
}
if(isset($_POST['price_building_sale'])){
    $price_building_sale = $_POST['price_building_sale'];
}else{
    $price_building_sale = '';
}

if(isset($_POST['price_building_minimum'])){
    $price_building_minimum = $_POST['price_building_minimum'];
}else{
    $price_building_minimum = '';
}

if(isset($_POST['price_building_maximum'])){
    $price_building_maximum = $_POST['price_building_maximum'];
}else{
    $price_building_maximum = '';
}

if(isset($_POST['location_building'])){
    $location_building = $_POST['location_building'];
}else{
    $location_building = '';
}

if(isset($_POST['map_building'])){
    $map_building = $_POST['map_building'];
}else{
    $map_building = '';
}

// $id_type = $_POST['id_type'];
// if (isset($_POST['id_type']) == '1') {
//     // $id_type = mysqli_real_escape_string($dbcon, $_POST['id_type']);
//     $img_building = "";
//     $title_building = mysqli_real_escape_string($dbcon, $_POST['title_building']);
//     $description_building =  mysqli_real_escape_string($dbcon, $_POST['description_building']);
//     $location_building =  mysqli_real_escape_string($dbcon, $_POST['location_building']);
//     $map_building = mysqli_real_escape_string($dbcon, $_POST['map_building']);
//     $price_building_sale = 0;
//     $price_building_minimum =  mysqli_real_escape_string($dbcon, $_POST['price_building_minimum']);
//     $price_building_maximum =  mysqli_real_escape_string($dbcon, $_POST['price_building_maximum']);
// } else if (isset($_POST['id_type']) == 2) {
//     $id_type = mysqli_real_escape_string($dbcon, $_POST['id_type']);
//     $title_building = mysqli_real_escape_string($dbcon, $_POST['title_building']);
//     $description_building =  mysqli_real_escape_string($dbcon, $_POST['description_building']);
//     $location_building =  mysqli_real_escape_string($dbcon, $_POST['location_building']);
//     $map_building = mysqli_real_escape_string($dbcon, $_POST['map_building']);
//     $price_building_sale = mysqli_real_escape_string($dbcon, $_POST['price_building_sale']);
//     $price_building_minimum =  0;
//     $price_building_maximum =  0;

// } else if (isset($_POST['id_type']) == 3) {
//     $id_type = mysqli_real_escape_string($dbcon, $_POST['id_type']);
//     $title_building = mysqli_real_escape_string($dbcon, $_POST['title_building']);
//     $description_building =  mysqli_real_escape_string($dbcon, $_POST['description_building']);
//     $location_building =  mysqli_real_escape_string($dbcon, $_POST['location_building']);
//     $map_building = mysqli_real_escape_string($dbcon, $_POST['map_building']);
//     $price_building_sale = mysqli_real_escape_string($dbcon, $_POST['price_building_sale']);
//     $price_building_minimum =  mysqli_real_escape_string($dbcon, $_POST['price_building_minimum']);
//     $price_building_maximum =  mysqli_real_escape_string($dbcon, $_POST['price_building_maximum']);

// $id_type = mysqli_real_escape_string($dbcon, $_POST['id_type']);
// $img_building = '';
// $title_building = mysqli_real_escape_string($dbcon, $_POST['title_building']);
// $description_building =  mysqli_real_escape_string($dbcon, $_POST['description_building']);
// $location_building =  mysqli_real_escape_string($dbcon, $_POST['location_building']);
// $map_building = mysqli_real_escape_string($dbcon, $_POST['map_building']);
// $price_building_sale = mysqli_real_escape_string($dbcon, $_POST['price_building_sale']);
// $price_building_minimum =  mysqli_real_escape_string($dbcon, $_POST['price_building_minimum']);
// $price_building_maximum =  mysqli_real_escape_string($dbcon, $_POST['price_building_maximum']);
$q_new_building = "INSERT INTO building (id_building, id_type, title_building, img_building, price_building_sale, price_building_minimum, price_building_maximum, description_building, location_building, map_building, date_update) VALUES ('' ,'$id_type' ,'$title_building' ,'$img_building', '$price_building_sale', '$price_building_minimum', '$price_building_maximum', '$description_building', '$location_building', '$map_building' ,NOW())";
$result_new_building = mysqli_query($dbcon, $q_new_building);
// echo mysqli_error($dbcon);
if ($result_new_building) {
    $notify_new_building = [
        'title' => 'Updating successful!',
        'text' => 'Updating detail a building successful!',
        'icon' => 'success'
    ];
    echo json_encode($notify_new_building);
} else {
    $notify_new_building = [
        'title' => 'Updating fail!',
        'text' => 'Updating detail a building fail!',
        'icon' => 'warning'
    ];
    echo json_encode($notify_new_building);
}
//     // }
