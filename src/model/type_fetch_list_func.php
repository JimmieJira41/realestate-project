<?php

    require './mysql/connect.php';
    $q_fetch_list_type = "SELECT * FROM type";
    $result_fetch_list_type = mysqli_query($dbcon,$q_fetch_list_type);
?>