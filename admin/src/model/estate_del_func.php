<?php

require '../../mysql/connect.php';

if ($_POST['id_estate']) {
    $id_estate = $_POST['id_estate'];
    $q_detail_estate = "SELECT img_estate, img_estate_main FROM estate WHERE id_estate = '$id_estate'";
    $result_detail_estate = mysqli_query($dbcon, $q_detail_estate);
    $q_del_estate = "DELETE FROM estate WHERE id_estate = '$id_estate'";
    $result_del_estate = mysqli_query($dbcon, $q_del_estate);
    if ($result_del_estate) {
        $src_img_estate = mysqli_fetch_assoc($result_detail_estate);
        $src_img = "";
        $src_img = $src_img_estate['img_estate_main'];
        $check_noneimg = stripos($src_img, "noneimg");
        if ($check_noneimg == null) {
            @unlink("..\\img\\estate\\" . $src_img_estate['img_estate_main']);
            @unlink("..\\..\\..\\src\\img\\estate\\" . $src_img_estate['img_estate_main']);
        }
        $img_estate = explode(",", $src_img_estate['img_estate']);
        foreach ($img_estate as $img) {
            $src_img = "";
            $src_img = $img;
            $check_noneimg_gallery = stripos($src_img, "noneimg");
            if ($check_noneimg_gallery == null) {
                @unlink("..\\img\\estate\\" . $img);
                @unlink("..\\..\\..\\src\\img\\estate\\" . $img);
            }
        }
        $notify_del_estate = [
            'title' => 'Deleting successful!',
            'text' => 'Delete detail a estate successful!',
            'icon' => 'success'
        ];
        echo json_encode($notify_del_estate);
    } else {
        $notify_del_estate = [
            'title' => 'Deleting fail!',
            'text' => 'Delete detail a estate fail!',
            'icon' => 'warning'
        ];
        echo json_encode($notify_del_estate);
    }
}
