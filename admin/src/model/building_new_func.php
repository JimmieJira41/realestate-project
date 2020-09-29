<?php

require "../../mysql/connect.php";

//  if(isset($_POST["submit_new_building"])){
$title_building = mysqli_real_escape_string($dbcon, $_POST['title_building']);
$img_building = "";
$price_building =  mysqli_real_escape_string($dbcon, $_POST['price_building']);
$description_building =  mysqli_real_escape_string($dbcon, $_POST['description_building']);
$amenity_building =  mysqli_real_escape_string($dbcon,$_POST['amenity_building']);
// $amenity_building = implode(',',$amenity_list);
$location_building =  mysqli_real_escape_string($dbcon, $_POST['location_building']);
$map_building = mysqli_real_escape_string($dbcon,$_POST['map_building']);
$q_new_building = "INSERT INTO building (id_building ,title_building ,img_building ,price_building ,description_building ,amenity_building ,location_building ,map_building ,date_update) VALUES ('' ,'$title_building' ,'$img_building', '$price_building', '$description_building', '$amenity_building', '$location_building', '$map_building' ,NOW())";
$result_new_building = mysqli_query($dbcon, $q_new_building);
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
    // }
