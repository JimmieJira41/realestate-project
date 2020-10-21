<?php
    require './mysql/connect.php';
    $q_check_date = "SELECT COUNT(*) c FROM view WHERE date_view = DATE(NOW())";
    $result_check_date = mysqli_query($dbcon,$q_check_date);
    $count = mysqli_fetch_assoc($result_check_date);
    if($count['c'] > 0){
        $q_view_visit = "UPDATE view SET view = view + 1 WHERE date_view = DATE(NOW())";
        $result_view_visit = mysqli_query($dbcon,$q_view_visit);
    }else{
        $q_view_visit = "INSERT INTO view (view, date_view) VALUES ( view+1, DATE(NOW()))";
        $result_view_visit = mysqli_query($dbcon,$q_view_visit);
    }
