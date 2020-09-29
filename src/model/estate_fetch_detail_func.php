<?php

    require './mysql/connect.php';
    $id_estate = $_GET['id_estate'];
    // $id_estate = 1;
    $q_fetch_detail_estate = "SELECT * FROM estate WHERE id_estate = '$id_estate'";
    $result_fetch_detail_estate = mysqli_query($dbcon,$q_fetch_detail_estate);
    $details = mysqli_fetch_assoc($result_fetch_detail_estate);
  
?>