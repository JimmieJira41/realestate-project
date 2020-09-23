<?php

    require '../../mysql/connect.php';
    
    if($_POST['id_estate']){
        $id_estate =  $_POST['id_estate'];
        $title_estate =  $_POST['title_estate'];
        $price_estate =  $_POST['price_estate'];
        $description_estate =  $_POST['description_estate'];
        $environment_estate =  $_POST['environment_estate'];
        $location_estate =  $_POST['location_estate'];
        $q_edit_detail_estate= "UPDATE estate SET title_estate = '$title_estate', price_estate = '$price_estate', description_estate = '$description_estate', environment_estate = '$environment_estate', location_estate = '$location_estate' WHERE id_estate = '$id_estate'";
        $result_edit_detail_estate = mysqli_query($dbcon,$q_edit_detail_estate);
        if($result_edit_detail_estate){
            $notify_edit_detail_estate = [
                'title' => 'Updating successful!',
                'text' => 'Updating detail estate successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_estate);
        }else{
            $notify_edit_detail_estate = [
                'title' => 'Updating fail!',
                'text' => 'Updating detail estate fail!',
                'icon' => 'warning'
            ];
            echo json_encode($notify_edit_detail_estate);
        }
    }