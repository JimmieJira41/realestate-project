<?php

    require '../../mysql/connect.php';

    $id_amenity = $_POST['id_amenity'];
    // $id_amenity = 1;
    $q_fetch_detail_amenity = "SELECT * FROM amenity WHERE id_amenity = '$id_amenity'";
    $result_fetch_detail_amenity = mysqli_query($dbcon,$q_fetch_detail_amenity);
    if($result_fetch_detail_amenity){
        $details = mysqli_fetch_assoc($result_fetch_detail_amenity);
        $detail_amenity = [
            'title_amenity' => $details['title_amenity']
        ];
        echo json_encode($detail_amenity);
    }else{
        
    }
  
?>