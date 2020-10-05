<?php
require '../../mysql/connect.php';
if (isset($_POST['id_building'])) {
    $id_building = $_POST['id_building'];
    $q_fetch_detail_building = "SELECT * FROM building WHERE id_building = '$id_building'";
    $result_fetch_detail_building = mysqli_query($dbcon, $q_fetch_detail_building);
    // echo mysqli_error($dbcon);
    if ($result_fetch_detail_building) {
        $details = mysqli_fetch_assoc($result_fetch_detail_building);
        $detail_building = [
            'id_type' => $details['id_type'],
            'title_building' => $details['title_building'],
            'price_building_sale' => $details['price_building_sale'],
            'price_building_minimum' => $details['price_building_minimum'],
            'price_building_maximum' => $details['price_building_maximum'],
            'description_building' => $details['description_building'],
            'location_building' => $details['location_building'],
            'map_building' => $details['map_building']
        ];
        echo json_encode($detail_building);
    }
}
