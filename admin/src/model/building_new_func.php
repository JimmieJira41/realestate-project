<?php

require "../../mysql/connect.php";

// error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['id_type'])) {
    $id_type = $_POST['id_type'];
} else {
    $id_type = '';
}

if (isset($_POST['title_building'])) {
    $title_building = mysqli_real_escape_string($dbcon,$_POST['title_building']);
} else {
    $title_building = '';
}

if (isset($_FILES) AND !empty($_FILES['img_building']['name'][0])) {
    if (is_array($_FILES['img_building'])) {
        $img_building_list = array();
        foreach ($_FILES['img_building']['name'] as $name => $value) {
            // echo $name;
            $file_name = explode(".", $_FILES['img_building']['name'][$name]);
            $allowed_ext = array("jpg", "jpeg", "png", "gif");
            if (in_array($file_name[1], $allowed_ext)) {
                $new_name = substr(md5(rand()), 0, 8) . '.' . $file_name[1];
                $sourcePath = $_FILES['img_building']['tmp_name'][$name];
                // $sourcePathUser = $_FILES['img_building']['tmp_name'][$name];

                $targetPath = "../img/building/" . $new_name;
                $targetPathUser = "../../../src/img/building/" . $new_name;
                if (move_uploaded_file($sourcePath, $targetPath)) {
                    copy($targetPath, $targetPathUser);
                    // G:\Work\Website_work\Jobs\realestate-project\src\img\building
                    $img_building_list[$name] = $new_name;
                } else {
                    $img_building = "";
                }
            } else {
                $img_building = "none-img.jpg";
            }
        }
        $img_building_main = $img_building_list[0];
        $img_building = implode(",", $img_building_list);
    } else {
        $img_building_main = "none-img.jpg";
        $img_building = "none-img.jpg";
    }
} else {
    $img_building_main = "none-img.jpg";
    $img_building = "none-img.jpg";
}

if (isset($_POST['description_building'])) {
    $description_building = mysqli_real_escape_string($dbcon,$_POST['description_building']);
} else {
    $description_building = '';
}
if (isset($_POST['price_building_sale'])) {
    $price_building_sale = mysqli_real_escape_string($dbcon,$_POST['price_building_sale']);
} else {
    $price_building_sale = '';
}

if (isset($_POST['price_building_minimum'])) {
    $price_building_minimum = mysqli_real_escape_string($dbcon,$_POST['price_building_minimum']);
} else {
    $price_building_minimum = '';
}

if (isset($_POST['price_building_maximum'])) {
    $price_building_maximum = mysqli_real_escape_string($dbcon,$_POST['price_building_maximum']);
} else {
    $price_building_maximum = '';
}

if (isset($_POST['location_building'])) {
    $location_building = mysqli_real_escape_string($dbcon,$_POST['location_building']);
} else {
    $location_building = '';
}

if (isset($_POST['map_building'])) {
    $map_building = mysqli_real_escape_string($dbcon,$_POST['map_building']);
} else {
    $map_building = '';
}
$q_new_building = "INSERT INTO building (id_building, id_type, title_building, img_building, img_building_main, price_building_sale, price_building_minimum, price_building_maximum, description_building, location_building, map_building, date_update) VALUES ('' ,'$id_type' ,'$title_building' ,'$img_building', '$img_building_main', '$price_building_sale', '$price_building_minimum', '$price_building_maximum', '$description_building', '$location_building', '$map_building' ,NOW())";
$result_new_building = mysqli_query($dbcon, $q_new_building);
// echo mysqli_error($dbcon);
if ($result_new_building) {
    $notify_new_building = [
        'title' => 'Updating successful!',
        'text' => 'Updating detail a building successful!',
        'icon' => 'success'
    ];
    echo json_encode($notify_new_building);
} else {
    $notify_new_building = [
        'title' => 'Updating fail!',
        'text' => 'Updating detail a building fail!',
        'icon' => 'warning'
    ];
    echo json_encode($notify_new_building);
}
//     // }
