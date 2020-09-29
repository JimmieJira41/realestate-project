<?php

    require '../../mysql/connect.php';

    if($_POST['id_amenity']){
        $id_amenity = $_POST['id_amenity'];
        $q_del_amenity  = "DELETE FROM amenity WHERE id_amenity = '$id_amenity'";
        $result_del_amenity = mysqli_query($dbcon,$q_del_amenity);
        if($result_del_amenity){
            $notify_del_amenity = [
                'title' => 'Deleting successful!',
                'text' => 'Delete detail a amenity successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_del_amenity);
        }else{
            $notify_del_amenity = [
                'title' => 'Deleting fail!',
                'text' => 'Delete detail a amenity fail!',
                'icon' => 'warning'
            ];
            echo json_encode($notify_del_amenity);
        }
    }