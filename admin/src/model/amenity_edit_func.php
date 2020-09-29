<?php

    require '../../mysql/connect.php';

    if($_POST['id_amenity']){
        $id_amenity = $_POST['id_amenity'];
        $title_amenity = mysqli_real_escape_string($dbcon,$_POST['title_amenity']);
        $q_edit_detail_amenity = "UPDATE amenity SET title_amenity = '$title_amenity' WHERE id_amenity = '$id_amenity'";
        $result_edit_detail_amenity = mysqli_query($dbcon,$q_edit_detail_amenity);
        if($result_edit_detail_amenity){
            $notify_edit_detail_amenity = [
                'title' => 'Updating successful!',
                'text' => 'Updating detail a amenity successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_amenity);
        }else{
            $notify_edit_detail_amenity = [
                'title' => 'Updating fail!',
                'text' => 'Updating detail a amenity fail!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_amenity);
        }
    }