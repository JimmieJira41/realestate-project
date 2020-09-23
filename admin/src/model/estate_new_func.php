<?php

    require '../../mysql/connect.php';

    $title_estate = $_POST['title_estate'];
    $img_estate = '';
    $price_estate = $_POST['price_estate'];
    $description_estate = $_POST['description_estate'];
    $environment_estate = $_POST['environment_estate'];
    $location_estate = $_POST['location_estate'];
    $q_new_detail_estate = "INSERT INTO estate (id_estate, title_estate, img_estate, price_estate, description_estate, environment_estate, location_estate, date_estate) VALUES ('', '$title_estate', '$img_estate', '$price_estate', '$description_estate', '$environment_estate', '$location_estate', NOW())";
    $result_new_detail_estate = mysqli_query($dbcon,$q_new_detail_estate);
    if($result_new_detail_estate){
        $notify_new_detail_estate = [
            'title' => 'Creating successful!',
            'text' => 'Create new detail a estate successful!',
            'icon' => 'success'
        ];
        echo json_encode($notify_new_detail_estate);
    }else{
        $notify_new_detail_estate = mysqli_error($dbcon);
        echo  $notify_new_detail_estate;
        // [
        //     'title' => 'Creating fail',
        //     'text' => 'Create new detail a estate fail!',
        //     'icon' => 'warning'
        // ]; 
        // echo json_encode($notify_new_detail_estate);
    }