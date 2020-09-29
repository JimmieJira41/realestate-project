<?php

    require './mysql/connect.php';

    $q_fetch_list_building = "SELECT * FROM building";
    $result_fetch_list_building = mysqli_query($dbcon,$q_fetch_list_building);

?>