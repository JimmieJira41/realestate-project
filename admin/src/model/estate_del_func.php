<?php

    require '../../mysql/connect.php';
    if($_POST['id_estate']){
        $id_estate = $_POST['id_estate'];
        $q_del_detail_estate = "DELETE FROM estate WHERE id_estate = '$id_estate'";
        $result_del_detail_estate = mysqli_query($dbcon,$q_del_detail_estate);
        if($result_del_detail_estate){
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