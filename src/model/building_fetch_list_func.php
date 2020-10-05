<?php

    require './mysql/connect.php';

    if(isset($_GET['building_select_option'])){
        $id_type = $_GET['building_select_option'];
        $q_fetch_list_building = "SELECT * FROM building WHERE id_type = '$id_type'";
    }else{
        $q_fetch_list_building = "SELECT * FROM building";
    }   
    $result_fetch_list_building = mysqli_query($dbcon,$q_fetch_list_building);

?>