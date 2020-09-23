<?php

    require '../../mysql/connect.php';

    $id_building = $_POST['id_building'];
    // $id_building = 1;
    $q_fetch_detail_building = "SELECT * FROM building WHERE id_building = '$id_building'";
    $result_fetch_detail_building = mysqli_query($dbcon,$q_fetch_detail_building);
    if($result_fetch_detail_building){
        $details = mysqli_fetch_assoc($result_fetch_detail_building);
        $detail_building = [
            'title_building' => $details['title_building'],
            'price_building' => $details['price_building'],
            'description_building' => $details['description_building'],
            'amenity_building' => $details['amenity_building'],
            'location_building' => $details['location_building']
        ];
        echo json_encode($detail_building);
    }else{
        
    }
  
?>