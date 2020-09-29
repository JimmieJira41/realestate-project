<?php

    require './mysql/connect.php';

    $id_building = $_GET['id_building'];
    // $id_building = 1;
    $q_fetch_detail_building = "SELECT * FROM building WHERE id_building = '$id_building'";
    $result_fetch_detail_building = mysqli_query($dbcon,$q_fetch_detail_building);
    if($result_fetch_detail_building){
        $details = mysqli_fetch_assoc($result_fetch_detail_building);        
    }
  
?>