<?php

    require '../../mysql/connect.php';

    if($_POST['id_environment']){
        $id_environment = $_POST['id_environment'];
        $title_environment = mysqli_real_escape_string($dbcon,$_POST['title_environment']);
        $q_edit_detail_environment = "UPDATE environment SET title_environment = '$title_environment' WHERE id_environment = '$id_environment'";
        $result_edit_detail_environment = mysqli_query($dbcon,$q_edit_detail_environment);
        if($result_edit_detail_environment){
            $notify_edit_detail_environment = [
                'title' => 'Updating successful!',
                'text' => 'Updating detail a environment successful!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_environment);
        }else{
            $notify_edit_detail_environment = [
                'title' => 'Updating fail!',
                'text' => 'Updating detail a environment fail!',
                'icon' => 'success'
            ];
            echo json_encode($notify_edit_detail_environment);
        }
    }