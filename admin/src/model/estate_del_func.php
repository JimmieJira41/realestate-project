<?php

    require '../../mysql/connect.php';
    if($_POST['id_estate']){
        $id_estate = $_POST['id_estate'];
        $q_detail_estate = "SELECT img_estate FROM estate WHERE id_estate = '$id_estate'";
        $result_detail_estate = mysqli_query($dbcon,$q_detail_estate);
        $src_img = mysqli_fetch_assoc($result_detail_estate);
        $img_estate = explode(",",$src_img['img_estate']);
        $q_del_detail_estate = "DELETE FROM estate WHERE id_estate = '$id_estate'";
        $result_del_detail_estate = mysqli_query($dbcon,$q_del_detail_estate);
        if($result_del_detail_estate){
            foreach($img_estate as $img){
                unlink("../img/estate/".$img);
            }
            $notify_del_detail_estate = [
                'title' => 'Delet successful!',
                'text' => 'Delet detail a estate successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_del_detail_estate);
        }else{
            $notify_del_detail_estate = [
                'title' => 'Delet fail!',
                'text' => 'Delet detail a estate fail!',
                'icon' => 'warning'
            ];
            echo json_encode($notify_del_detail_estate);
        }
    }