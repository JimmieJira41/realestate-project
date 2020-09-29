<?php

    require '../../mysql/connect.php';

    if($_POST['id_building']){
        $id_building = $_POST['id_building'];
        $title_building = mysqli_real_escape_string($dbcon,$_POST['title_building']);
        $price_building = mysqli_real_escape_string($dbcon,$_POST['price_building']);
        $description_building = mysqli_real_escape_string($dbcon,$_POST['description_building']);
        $amenity_building =  mysqli_real_escape_string($dbcon,$_POST['amenity_building']);
        $location_building = mysqli_real_escape_string($dbcon,$_POST['location_building']);
        $map_building = mysqli_real_escape_string($dbcon,$_POST['map_building']);
        $q_edit_detail_building = "UPDATE building SET title_building = '$title_building', price_building = '$price_building', description_building = '$description_building', amenity_building = '$amenity_building', location_building = '$location_building', map_building = '$map_building' WHERE id_building = '$id_building'";
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