<?php

require '../../mysql/connect.php';

$q_fetch_list_amenity = "SELECT * FROM amenity";
$result_fetch_list_amenity = mysqli_query($dbcon, $q_fetch_list_amenity);

// $id_building = $_POST['id_building'];
$id_building = 83;
$q_fetch_detail_building = "SELECT * FROM building WHERE id_building = '$id_building'";
$result_fetch_detail_building = mysqli_query($dbcon, $q_fetch_detail_building);
if ($result_fetch_detail_building) {
    // $amenity_building_haved = [
    //     'title_amenity' => ''
    // ];
    $details = mysqli_fetch_assoc($result_fetch_detail_building);
    // $amenity_list_checked = explode(",", $details['amenity_building']);
    // print_r($amenity_list_checked);
    // while ($amenitys = mysqli_fetch_assoc($result_fetch_list_amenity)) {
    //     if (in_array($amenitys['id_amenity'], $amenity_list_checked)) {
    //         $amenity_building_haved['title_amenity'] =  $amenitys['title_amenity'];
    //     }
      
    // }
    $detail_building = [
        'title_building' => $details['title_building'],
        'price_building' => $details['price_building'],
        'description_building' => $details['description_building'],
        'amenity_building' => $details['amenity_building'],
        'location_building' => $details['location_building']
    ];

   
    echo json_encode($detail_building);
} else {
}
