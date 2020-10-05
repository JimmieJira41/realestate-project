<?php

    require '../../mysql/connect.php';

    if($_POST['id_building']){
        $id_building = $_POST['id_building'];
        $id_type = $_POST['id_type'];
      
        if(isset($_POST['title_building'])){
            $title_building = $_POST['title_building'];
        }else{
            $title_building = '';
        }
        
        if(isset($_POST['img_building'])){
            $img_building = $_POST['img_building'];
        }else{
            $img_building = '';
        }
        
        if(isset($_POST['description_building'])){
            $description_building = $_POST['description_building'];
        }else{
            $description_building = '';
        }
        if(isset($_POST['price_building_sale'])){
            $price_building_sale = $_POST['price_building_sale'];
        }else{
            $price_building_sale = '';
        }
        
        if(isset($_POST['price_building_minimum'])){
            $price_building_minimum = $_POST['price_building_minimum'];
        }else{
            $price_building_minimum = '';
        }
        
        if(isset($_POST['price_building_maximum'])){
            $price_building_maximum = $_POST['price_building_maximum'];
        }else{
            $price_building_maximum = '';
        }
        
        if(isset($_POST['location_building'])){
            $location_building = $_POST['location_building'];
        }else{
            $location_building = '';
        }
        
        if(isset($_POST['map_building'])){
            $map_building = $_POST['map_building'];
        }else{
            $map_building = '';
        }
        $q_edit_detail_building = "UPDATE building SET id_type = '$id_type', title_building = '$title_building', price_building_sale = '$price_building_sale', price_building_minimum = '$price_building_minimum', price_building_maximum = '$price_building_maximum', description_building = '$description_building', location_building = '$location_building', map_building = '$map_building' WHERE id_building = '$id_building'";
        $result_edit_detail_building = mysqli_query($dbcon,$q_edit_detail_building);
        if($result_edit_detail_building){
            $notify_edit_detail_building = [
                'title' => 'Updating successful!',
                'text' => 'Updating detail a building successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_building);
        }else{
            $notify_edit_detail_building = [
                'title' => 'Updating fail!',
                'text' => 'Updating detail a building fail!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_building);
        }
    }