<?php

    require './mysql/connect.php';

    $q_fetch_list_environment = "SELECT * FROM environment";
    $result_fetch_list_environment = mysqli_query($dbcon,$q_fetch_list_environment);

?>