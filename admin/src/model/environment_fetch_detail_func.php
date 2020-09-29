<?php

    require '../../mysql/connect.php';

    $id_environment = $_POST['id_environment'];
    // $id_environment = 1;
    $q_fetch_detail_environment = "SELECT * FROM environment WHERE id_environment = '$id_environment'";
    $result_fetch_detail_environment = mysqli_query($dbcon,$q_fetch_detail_environment);
    if($result_fetch_detail_environment){
        $details = mysqli_fetch_assoc($result_fetch_detail_environment);
        $detail_environment = [
            'title_environment' => $details['title_environment']
        ];
        echo json_encode($detail_environment);
    }else{
        
    }
  
?>