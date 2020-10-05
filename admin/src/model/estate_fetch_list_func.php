<?php

    require './mysql/connect.php';

    $q_fetch_list_estate = "SELECT * FROM estate LEFT JOIN type ON estate.id_type = type.id_type";
    $result_fetch_list_estate = mysqli_query($dbcon,$q_fetch_list_estate);

?>