<?php

    require '../../mysql/connect.php';

    if($_POST['id_building']){
        $id_building = $_POST['id_building'];
        $q_del_building  = "DELETE FROM building WHERE id_building = '$id_building'";
        $result_del_building = mysqli_query($dbcon,$q_del_building);
        if($result_del_building){
            $notify_del_building = [
                'title' => 'Deleting successful!',
                'text' => 'Delete detail a building successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_del_building);
        }else{
            $notify_del_building = [
                'title' => 'Deleting fail!',
                'text' => 'Delete detail a building fail!',
                'icon' => 'warning'
            ];
            echo json_encode($notify_del_building);
        }
    }