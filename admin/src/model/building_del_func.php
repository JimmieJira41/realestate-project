<?php

require '../../mysql/connect.php';

if ($_POST['id_building']) {
    $id_building = $_POST['id_building'];
    $q_detail_building = "SELECT img_building, img_building_main FROM building WHERE id_building = '$id_building'";
    $result_detail_building = mysqli_query($dbcon, $q_detail_building);
    $q_del_building = "DELETE FROM building WHERE id_building = '$id_building'";
    $result_del_building = mysqli_query($dbcon, $q_del_building);
    if ($result_del_building) {
        $src_img_building = mysqli_fetch_assoc($result_detail_building);
        $src_img = "";
        $src_img = $src_img_building['img_building_main'];
        $check_noneimg = stripos($src_img, "noneimg");
        if ($check_noneimg != 0) {
            @unlink("..\\img\\building\\" . $src_img_building['img_building_main']);
            @unlink("..\\..\\..\\src\\img\\building\\" . $src_img_building['img_building_main']);
        }
        $img_building = explode(",", $src_img_building['img_building']);
        foreach ($img_building as $img) {
            $src_img = "";
            $src_img = $img;
            $check_noneimg_gallery = stripos($src_img, "noneimg");
            if ($check_noneimg_gallery != 0) {
                @unlink("..\\img\\building\\" . $img);
                @unlink("..\\..\\..\\src\\img\\building\\" . $img);
            }
        }
        $notify_del_building = [
            'title' => 'Deleting successful!',
            'text' => 'Delete detail a building successful!',
            'icon' => 'success'
        ];
        echo json_encode($notify_del_building);
    } else {
        $notify_del_building = [
            'title' => 'Deleting fail!',
            'text' => 'Delete detail a building fail!',
            'icon' => 'warning'
        ];
        echo json_encode($notify_del_building);
    }
}
