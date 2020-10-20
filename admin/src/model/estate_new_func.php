<?php

require '../../mysql/connect.php';

if (isset($_POST['id_type'])) {
    $id_type = $_POST['id_type'];
} else {
    $id_type = '';
}

if (isset($_POST['title_estate'])) {
    $title_estate = mysqli_real_escape_string($dbcon, $_POST['title_estate']);
} else {
    $title_estate = '';
}

if (isset($_FILES['img_estate_main']) and !empty($_FILES['img_estate_main']['name'])) {
    $img_main_name = explode(".", $_FILES['img_estate_main']['name']);
    $allowed_ext = array("jpg", "jpeg", "png", "gif");
    if (in_array($img_main_name[1], $allowed_ext)) {
        $new_name = substr(md5(rand()), 0, 8) . '.' . $img_main_name[1];
        $sourcePath = $_FILES['img_estate_main']['tmp_name'];
        $targetPath = "../img/estate/" . $new_name;
        $targetPathUser = "../../../src/img/estate/" . $new_name;
        if (move_uploaded_file($sourcePath, $targetPath)) {
            copy($targetPath, $targetPathUser);
            $img_estate_main = $new_name;
        } else {
            $img_estate_main = 'none-img.jpg';
        }
    } else {
        $img_estate_main = 'none-img.jpg';
    }
} else {
    $img_estate_main = 'none-img.jpg';
}

if (isset($_FILES) and !empty($_FILES['img_estate']['name'][0])) {
    if (is_array($_FILES['img_estate'])) {
        $img_estate_list = array();
        foreach ($_FILES['img_estate']['name'] as $name => $value) {
            // echo $name;
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
                $img_estate = "none-img.jpg";
            }
        }
        $img_estate = implode(",", $img_estate_list);
    } else {
        $img_estate = "none-img.jpg";
    }
} else {
    $img_estate = "none-img.jpg";
}


if (isset($_POST['description_estate'])) {
    $description_estate = mysqli_real_escape_string($dbcon, $_POST['description_estate']);
} else {
    $description_estate = '';
}
if (isset($_POST['price_estate_sale'])) {
    $price_estate_sale = mysqli_real_escape_string($dbcon, $_POST['price_estate_sale']);
} else {
    $price_estate_sale = '';
}

if (isset($_POST['price_estate_minimum'])) {
    $price_estate_minimum = mysqli_real_escape_string($dbcon, $_POST['price_estate_minimum']);
} else {
    $price_estate_minimum = '';
}

if (isset($_POST['price_estate_maximum'])) {
    $price_estate_maximum = mysqli_real_escape_string($dbcon, $_POST['price_estate_maximum']);
} else {
    $price_estate_maximum = '';
}

if (isset($_POST['location_estate'])) {
    $location_estate = mysqli_real_escape_string($dbcon, $_POST['location_estate']);
} else {
    $location_estate = '';
}

if (isset($_POST['map_estate'])) {
    $map_estate = mysqli_real_escape_string($dbcon, $_POST['map_estate']);
} else {
    $map_estate = '';
}

$q_new_estate = "INSERT INTO estate (id_estate, id_type, title_estate, img_estate, img_estate_main, price_estate_sale, price_estate_minimum, price_estate_maximum, description_estate, location_estate, map_estate, date_update) VALUES ('' ,'$id_type' ,'$title_estate' ,'$img_estate', '$img_estate_main', '$price_estate_sale', '$price_estate_minimum', '$price_estate_maximum', '$description_estate', '$location_estate', '$map_estate' ,NOW())";
$result_new_estate = mysqli_query($dbcon, $q_new_estate);
if ($result_new_estate) {
    $notify_new_estate = [
        'title' => 'Creating successful!',
        'text' => 'Create new detail a estate successful!',
        'icon' => 'success'
    ];
    echo json_encode($notify_new_estate);
} else {
    $notify_new_estate =
        [
            'title' => 'Creating fail',
            'text' => 'Create new detail a estate fail!',
            'icon' => 'warning'
        ];
    echo json_encode($notify_new_estate);
}
    // echo mysqli_error($dbcon);