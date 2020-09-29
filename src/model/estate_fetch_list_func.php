<?php

    require './mysql/connect.php';

    $q_fetch_list_estate = "SELECT * FROM estate";
    $result_fetch_list_estate = mysqli_query($dbcon,$q_fetch_list_estate);

?>