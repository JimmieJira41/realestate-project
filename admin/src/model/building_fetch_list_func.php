<?php

    require './mysql/connect.php';

    $q_fetch_list_building = "SELECT * FROM building LEFT JOIN type ON building.id_type = type.id_type";
    $result_fetch_list_building = mysqli_query($dbcon,$q_fetch_list_building);

?>