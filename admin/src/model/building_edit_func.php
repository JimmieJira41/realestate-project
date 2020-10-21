<?php

require '../../mysql/connect.php';


if ($_POST['id_building']) {
    $id_building = $_POST['id_building'];

    $q_img_building = "SELECT img_building, img_building_main FROM building WHERE id_building = '$id_building'";
    $result_img_building = mysqli_query($dbcon, $q_img_building);
    $src_img_building = mysqli_fetch_assoc($result_img_building);

    $id_type = $_POST['id_type'];

    if (isset($_POST['title_building'])) {
        $title_building = mysqli_real_escape_string($dbcon, $_POST['title_building']);
    } else {
        $title_building = '';
    }

    if (isset($_FILES['img_building_main']) and !empty($_FILES['img_building_main']['name'])) {
        $img_main_name = explode(".", $_FILES['img_building_main']['name']);
        $allowed_ext = array("jpg", "jpeg", "png", "gif");
        if (in_array($img_main_name[1], $allowed_ext)) {
            $new_name = substr(md5(rand()), 0, 8) . '.' . $img_main_name[1];
            $sourcePath = $_FILES['img_building_main']['tmp_name'];
            $targetPath = "..\\img\\building\\" . $new_name;
            $targetPathUser = "..\\..\\..\\src\\img\\building\\" . $new_name;
            if (move_uploaded_file($sourcePath, $targetPath)) {
                copy($targetPath, $targetPathUser);
                $src_img = "";
                $src_img = $src_img_building['img_building_main'];
                $check_noneimg = stripos($src_img, "noneimg");
                if ($check_noneimg == null OR $check_noneimg != 0) {
                    @unlink("..\\img\\building\\" . $src_img_building['img_building_main']);
                    @unlink("..\\..\\..\\src\\img\\building\\" . $src_img_building['img_building_main']);
                }
                $img_building_main = $new_name;
            } else {
                $img_building_main = $src_img_building['img_building_main'];
            }
        } else {
            $img_building_main = $src_img_building['img_building_main'];
        }
    } else {
        $img_building_main = $src_img_building['img_building_main'];
    }

    if (isset($_FILES) and !empty($_FILES['img_building']['name'][0])) {
        if (is_array($_FILES['img_building'])) {
            $img_building_list = array();
            foreach ($_FILES['img_building']['name'] as $name => $value) {
                $file_name = explode(".", $_FILES['img_building']['name'][$name]);
                $allowed_ext = array("jpg", "jpeg", "png", "gif");
                if (in_array($file_name[1], $allowed_ext)) {
                    $new_name = substr(md5(rand()), 0, 8) . '.' . $file_name[1];
                    $sourcePath = $_FILES['img_building']['tmp_name'][$name];
                    $targetPath = "..\\img\\building\\" . $new_name;
                    $targetPathUser = "..\\..\\..\\src\\img\\building\\" . $new_name;
                    if (move_uploaded_file($sourcePath, $targetPath)) {
                        copy($targetPath, $targetPathUser);
                        $img_building_old = explode(",", $src_img_building['img_building']);
                        foreach ($img_building_old as $img_old) {
                            $src_img = "";
                            $src_img = $img_old;
                            $check_noneimg = stripos($src_img, "noneimg");
                            if ($check_noneimg == null AND $check_noneimg != 0) {
                                @unlink("..\\img\\building\\" . $img_old);
                                @unlink("..\\..\\..\\src\\img\\building\\" . $img_old);
                            }
                        }
                        $img_building_list[$name] = $new_name;
                    } else {
                        $img_building = "";
                    }
                } else {
                    $img_building = $src_img_building['img_building'];
                }
            }
            $img_building = implode(",", $img_building_list);
        } else {
            $img_building = $src_img_building['img_building'];
        }
    } else {
        $img_building = $src_img_building['img_building'];
    }

    if (isset($_POST['description_building'])) {
        $description_building = mysqli_real_escape_string($dbcon, $_POST['description_building']);
    } else {
        $description_building = '';
    }
    if (isset($_POST['price_building_sale'])) {
        $price_building_sale = mysqli_real_escape_string($dbcon, $_POST['price_building_sale']);
    } else {
        $price_building_sale = '';
    }

    if (isset($_POST['price_building_minimum'])) {
        $price_building_minimum = mysqli_real_escape_string($dbcon, $_POST['price_building_minimum']);
    } else {
        $price_building_minimum = '';
    }

    if (isset($_POST['price_building_maximum'])) {
        $price_building_maximum = mysqli_real_escape_string($dbcon, $_POST['price_building_maximum']);
    } else {
        $price_building_maximum = '';
    }

    if (isset($_POST['location_building'])) {
        $location_building = mysqli_real_escape_string($dbcon, $_POST['location_building']);
    } else {
        $location_building = '';
    }

    if (isset($_POST['map_building'])) {
        $map_building = mysqli_real_escape_string($dbcon, $_POST['map_building']);
    } else {
        $map_building = '';
    }
    $q_edit_detail_building = "UPDATE building SET id_type = '$id_type', title_building = '$title_building', img_building = '$img_building', img_building_main = '$img_building_main', price_building_sale = '$price_building_sale', price_building_minimum = '$price_building_minimum', price_building_maximum = '$price_building_maximum', description_building = '$description_building', location_building = '$location_building', map_building = '$map_building' WHERE id_building = '$id_building'";
    $result_edit_detail_building = mysqli_query($dbcon, $q_edit_detail_building);
    // echo mysqli_error($dbcon);
    if ($result_edit_detail_building) {
        $notify_edit_detail_building = [
            'title' => 'Updating successful!',
            'text' => 'Updating detail a building successful!',
            'icon' => 'success'
        ];
        echo json_encode($notify_edit_detail_building);
    } else {
        $notify_edit_detail_building = [
            'title' => 'Updating fail!',
            'text' => 'Updating detail a building fail!',
            'icon' => 'success'
        ];
        echo json_encode($notify_edit_detail_building);
    }
}
