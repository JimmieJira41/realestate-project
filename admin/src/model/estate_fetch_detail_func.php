<?php

    require '../../mysql/connect.php';
    $id_estate = $_POST['id_estate'];
    // $id_estate = 1;
    $q_fetch_detail_estate = "SELECT * FROM estate WHERE id_estate = '$id_estate'";
    $result_fetch_detail_estate = mysqli_query($dbcon,$q_fetch_detail_estate);
    if($result_fetch_detail_estate){
        $details = mysqli_fetch_assoc($result_fetch_detail_estate);
        $detail_estate = [
            'title_estate' => $details['title_estate'],
            'price_estate' => $details['price_estate'],
            'description_estate' => $details['description_estate'],
            'location_estate' => $details['location_estate']
        ];
        echo json_encode($detail_estate);
    }else{
        
    }
  
?>