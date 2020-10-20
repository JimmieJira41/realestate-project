<?php

    require '../../mysql/connect.php';

    if($_POST['id_building']){
        $id_building = $_POST['id_building'];
        $q_detail_building = "SELECT img_building FROM building WHERE id_building = '$id_building'";
        $result_detail_building = mysqli_query($dbcon,$q_detail_building);
        $src_img = mysqli_fetch_assoc($result_detail_building);
        $img_building = explode(",",$src_img['img_building']);
        $q_del_building  = "DELETE FROM building WHERE id_building = '$id_building'";
        $result_del_building = mysqli_query($dbcon,$q_del_building);
        if($result_del_building){
            foreach($img_building as $img){
                unlink("../img/building/".$img);
                unlink("../../../src/img/building/".$img);
            }
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