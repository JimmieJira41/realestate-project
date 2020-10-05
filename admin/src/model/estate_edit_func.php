<?php

    require '../../mysql/connect.php';
    
    if($_POST['id_estate']){
        $id_estate = $_POST['id_estate'];
        $id_type = $_POST['id_type'];
      
        if(isset($_POST['title_estate'])){
            $title_estate = $_POST['title_estate'];
        }else{
            $title_estate = '';
        }
        
        if(isset($_POST['img_estate'])){
            $img_estate = $_POST['img_estate'];
        }else{
            $img_estate = '';
        }
        
        if(isset($_POST['description_estate'])){
            $description_estate = $_POST['description_estate'];
        }else{
            $description_estate = '';
        }
        if(isset($_POST['price_estate_sale'])){
            $price_estate_sale = $_POST['price_estate_sale'];
        }else{
            $price_estate_sale = '';
        }
        
        if(isset($_POST['price_estate_minimum'])){
            $price_estate_minimum = $_POST['price_estate_minimum'];
        }else{
            $price_estate_minimum = '';
        }
        
        if(isset($_POST['price_estate_maximum'])){
            $price_estate_maximum = $_POST['price_estate_maximum'];
        }else{
            $price_estate_maximum = '';
        }
        
        if(isset($_POST['location_estate'])){
            $location_estate = $_POST['location_estate'];
        }else{
            $location_estate = '';
        }
        
        if(isset($_POST['map_estate'])){
            $map_estate = $_POST['map_estate'];
        }else{
            $map_estate = '';
        }
        $q_edit_detail_estate = "UPDATE estate SET id_type = '$id_type', title_estate = '$title_estate', price_estate_sale = '$price_estate_sale', price_estate_minimum = '$price_estate_minimum', price_estate_maximum = '$price_estate_maximum', description_estate = '$description_estate', location_estate = '$location_estate', map_estate = '$map_estate' WHERE id_estate = '$id_estate'";
        $result_edit_detail_estate = mysqli_query($dbcon,$q_edit_detail_estate);
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