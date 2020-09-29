<?php

    require './mysql/connect.php';
    $list_amenity = array();
    $q_fetch_list_amenity = "SELECT * FROM amenity";
    $result_fetch_list_amenity = mysqli_query($dbcon,$q_fetch_list_amenity);
?>