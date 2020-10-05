<?php

    require '../../mysql/connect.php';

    if(isset($_POST['id_type'])){
        $id_type = $_POST['id_type'];
    }else{
        $id_type = '';
    }
    
    if(isset($_POST['title_estate'])){
        $title_estate = $_POST['title_estate'];
    }else{
        $title_estate = '';
    }
    
    if(isset($_POST['img_estate'])){
        $img_estate = $_POST['img_estate'];
    }else{
        $img_estate = '';
    }
    
    if(isset($_POST['description_estate'])){
        $description_estate = $_POST['description_estate'];
    }else{
        $description_estate = '';
    }
    if(isset($_POST['price_estate_sale'])){
        $price_estate_sale = $_POST['price_estate_sale'];
    }else{
        $price_estate_sale = '';
    }
    
    if(isset($_POST['price_estate_minimum'])){
        $price_estate_minimum = $_POST['price_estate_minimum'];
    }else{
        $price_estate_minimum = '';
    }
    
    if(isset($_POST['price_estate_maximum'])){
        $price_estate_maximum = $_POST['price_estate_maximum'];
    }else{
        $price_estate_maximum = '';
    }
    
    if(isset($_POST['location_estate'])){
        $location_estate = $_POST['location_estate'];
    }else{
        $location_estate = '';
    }
    
    if(isset($_POST['map_estate'])){
        $map_estate = $_POST['map_estate'];
    }else{
        $map_estate = '';
    }
    
    $q_new_estate = "INSERT INTO estate (id_estate, id_type, title_estate, img_estate, price_estate_sale, price_estate_minimum, price_estate_maximum, description_estate, location_estate, map_estate, date_update) VALUES ('' ,'$id_type' ,'$title_estate' ,'$img_estate', '$price_estate_sale', '$price_estate_minimum', '$price_estate_maximum', '$description_estate', '$location_estate', '$map_estate' ,NOW())";
    $result_new_estate = mysqli_query($dbcon, $q_new_estate);
    if($result_new_estate){
        $notify_new_estate = [
            'title' => 'Creating successful!',
            'text' => 'Create new detail a estate successful!',
            'icon' => 'success'
        ];
        echo json_encode($notify_new_estate);
    }else{
        $notify_new_estate = 
        [
            'title' => 'Creating fail',
            'text' => 'Create new detail a estate fail!',
            'icon' => 'warning'
        ]; 
        echo json_encode($notify_new_estate);
    }
    // echo mysqli_error($dbcon);