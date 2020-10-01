<?php

require '../../mysql/connect.php';

$q_fetch_list_amenity = "SELECT * FROM amenity";
$result_fetch_list_amenity = mysqli_query($dbcon, $q_fetch_list_amenity);
$id_building = $_POST['id_building'];
$q_fetch_detail_building = "SELECT * FROM building WHERE id_building = '$id_building'";
$result_fetch_detail_building = mysqli_query($dbcon, $q_fetch_detail_building);
if ($result_fetch_detail_building) {
    $details = mysqli_fetch_assoc($result_fetch_detail_building);
    $detail_building = [
        'title_building' => $details['title_building'],
        'price_building' => $details['price_building'],
        'description_building' => $details['description_building'],
        'location_building' => $details['location_building'],
        'map_building' => $details['map_building']
    ];

   
    echo json_encode($detail_building);
} else {
}
