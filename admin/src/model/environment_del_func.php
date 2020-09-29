<?php

    require '../../mysql/connect.php';
    if($_POST['id_environment']){
        $id_environment = $_POST['id_environment'];
        $q_del_detail_environment = "DELETE FROM environment WHERE id_environment = '$id_environment'";
        $result_del_detail_environment = mysqli_query($dbcon,$q_del_detail_environment);
        if($result_del_detail_environment){
            $notify_del_detail_environment = [
                'title' => 'Delet successful!',
                'text' => 'Delet detail a environment successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_del_detail_environment);
        }else{
            $notify_del_detail_environment = [
                'title' => 'Delet fail!',
                'text' => 'Delet detail a environment fail!',
                'icon' => 'warning'
            ];
            echo json_encode($notify_del_detail_environment);
        }
    }