<?php
require '../../mysql/connect.php';
if (isset($_POST['id_estate'])) {
    $id_estate = $_POST['id_estate'];
    $q_fetch_detail_estate = "SELECT * FROM estate WHERE id_estate = '$id_estate'";
    $result_fetch_detail_estate = mysqli_query($dbcon, $q_fetch_detail_estate);
    // echo mysqli_error($dbcon);
    if ($result_fetch_detail_estate) {
        $details = mysqli_fetch_assoc($result_fetch_detail_estate);
        $detail_estate = [
            'id_type' => $details['id_type'],
            'title_estate' => $details['title_estate'],
            'price_estate_sale' => $details['price_estate_sale'],
            'price_estate_minimum' => $details['price_estate_minimum'],
            'price_estate_maximum' => $details['price_estate_maximum'],
            'description_estate' => $details['description_estate'],
            'location_estate' => $details['location_estate'],
            'map_estate' => $details['map_estate']
        ];
        echo json_encode($detail_estate);
    }
}
