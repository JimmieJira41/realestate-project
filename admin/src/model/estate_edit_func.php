<?php

require '../../mysql/connect.php';

if ($_POST['id_estate']) {
    $id_estate = $_POST['id_estate'];
    $q_img_estate = "SELECT img_estate, img_estate_main FROM estate WHERE id_estate = '$id_estate'";
    $result_img_estate = mysqli_query($dbcon, $q_img_estate);
    $src_img_estate = mysqli_fetch_assoc($result_img_estate);
    $id_type = $_POST['id_type'];

    if (isset($_POST['title_estate'])) {
        $title_estate = mysqli_real_escape_string($dbcon,$_POST['title_estate']);
    } else {
        $title_estate = '';
    }

    if (isset($_FILES) and !empty($_FILES['img_estate']['name'][0])) {
        if (is_array($_FILES['img_estate'])) {
            if ($src_img_estate['img_estate'] != '' and $src_img_estate['img_estate'] != 'none-img.jpg') {
                $img_estate_old = explode(",", $src_img_estate['img_estate']);
                foreach ($img_estate_old as $img_old) {
                    unlink("../img/estate/" . $img_old);
                }
            }
            $img_estate_list = array();
            foreach ($_FILES['img_estate']['name'] as $name => $value) {

                $file_name = explode(".", $_FILES['img_estate']['name'][$name]);
                $allowed_ext = array("jpg", "jpeg", "png", "gif");
                if (in_array($file_name[1], $allowed_ext)) {
                    $new_name = substr(md5(rand()), 0, 8) . '.' . $file_name[1];
                    $sourcePath = $_FILES['img_estate']['tmp_name'][$name];
                    $targetPath = "../img/estate/" . $new_name;
                    $targetPathUser = "../../../src/img/estate/" . $new_name;
                    if (move_uploaded_file($sourcePath, $targetPath)) {
                        copy($targetPath, $targetPathUser);
                        $img_estate_list[$name] = $new_name;
                    } else {
                        $img_estate = "";
                    }
                } else {
                    $img_estate_main = $src_img_estate['img_estate_main'];
                    $img_estate = $src_img_estate['img_estate'];
                }
            }
            $img_estate_main = $img_estate_list[0];
            $img_estate = implode(",", $img_estate_list);
        } else {
            $img_estate_main = $src_img_estate['img_estate_main'];
            $img_estate = "not array";
        }
    } else {
        $img_estate_main = $src_img_estate['img_estate_main'];
        $img_estate = $src_img_estate['img_estate'];
    }


    if (isset($_POST['description_estate'])) {
        $description_estate = mysqli_real_escape_string($dbcon,$_POST['description_estate']);
    } else {
        $description_estate = '';
    }
    if (isset($_POST['price_estate_sale'])) {
        $price_estate_sale = mysqli_real_escape_string($dbcon,$_POST['price_estate_sale']);
    } else {
        $price_estate_sale = '';
    }

    if (isset($_POST['price_estate_minimum'])) {
        $price_estate_minimum = mysqli_real_escape_string($dbcon,$_POST['price_estate_minimum']);
    } else {
        $price_estate_minimum = '';
    }

    if (isset($_POST['price_estate_maximum'])) {
        $price_estate_maximum = mysqli_real_escape_string($dbcon,$_POST['price_estate_maximum']);
    } else {
        $price_estate_maximum = '';
    }

    if (isset($_POST['location_estate'])) {
        $location_estate = mysqli_real_escape_string($dbcon,$_POST['location_estate']);
    } else {
        $location_estate = '';
    }

    if (isset($_POST['map_estate'])) {
        $map_estate = mysqli_real_escape_string($dbcon,$_POST['map_estate']);
    } else {
        $map_estate = '';
    }
    $q_edit_detail_estate = "UPDATE estate SET id_type = '$id_type', title_estate = '$title_estate', img_estate = '$img_estate', img_estate_main = '$img_estate_main', price_estate_sale = '$price_estate_sale', price_estate_minimum = '$price_estate_minimum', price_estate_maximum = '$price_estate_maximum', description_estate = '$description_estate', location_estate = '$location_estate', map_estate = '$map_estate' WHERE id_estate = '$id_estate'";
    $result_edit_detail_estate = mysqli_query($dbcon, $q_edit_detail_estate);
    // echo mysqli_error($dbcon);
    if($result_edit_detail_estate){
        $notify_edit_detail_estate = [
            'title' => 'Updating successful!',
            'text' => 'Updating detail estate successful!',
            'icon' => 'success'
        ];
        echo json_encode($notify_edit_detail_estate);
    }else{
        $notify_edit_detail_estate = [
            'title' => 'Updating fail!',
            'text' => 'Updating detail estate fail!',
            'icon' => 'warning'
        ];
        echo json_encode($notify_edit_detail_estate);
    }
}
