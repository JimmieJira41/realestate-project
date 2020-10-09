<?php

require './mysql/connect.php';
$perpage = 10;
if (isset($_GET['page'])) {
    if ($_GET['page'] == 0) {
        $page = 1;
    }else if($_GET['page'] > $_SESSION['end_page']){
        $page = $_SESSION['end_page'];
    }else {
        $page = $_GET['page'];
    } 
} else {
    $page = 1;
}
$start = ($page * $perpage) - $perpage;

if (isset($_GET['building_select_option']) and isset($_GET['sort_type'])) {
    $id_type = $_GET['building_select_option'];
    $sort_type = $_GET['sort_type'];
    if ($sort_type == 1) {
        $q_fetch_list_building = "SELECT * FROM building WHERE id_type = '$id_type' ORDER BY date_update DESC LIMIT $start, $perpage";
    } else if ($_GET['sort_type'] == 2) {
        $q_fetch_list_building = "SELECT * FROM building WHERE id_type = '$id_type' ORDER BY price_building_minimum ASC LIMIT $start, $perpage";
    } else if ($_GET['sort_type'] == 3) {
        $q_fetch_list_building = "SELECT * FROM building WHERE id_type = '$id_type' ORDER BY price_building_minimum DESC LIMIT $start, $perpage";
    }
} else if (isset($_GET['building_select_option'])) {
    $id_type = $_GET['building_select_option'];
    $q_fetch_list_building = "SELECT * FROM building WHERE id_type = '$id_type' ORDER BY date_update DESC LIMIT 12";
    if(isset($_GET['page'])){
        $q_fetch_list_building = "SELECT * FROM building WHERE id_type = '$id_type' ORDER BY date_update DESC LIMIT $start, $perpage";
    }
} else {  
    $q_fetch_list_building = "SELECT * FROM building LIMIT $start, $perpage";
}
$result_fetch_list_building = mysqli_query($dbcon, $q_fetch_list_building);
