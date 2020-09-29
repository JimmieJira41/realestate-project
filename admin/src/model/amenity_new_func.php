<?php

require "../../mysql/connect.php";

//  if(isset($_POST["submit_new_amenity"])){
     $title_amenity = mysqli_real_escape_string($dbcon,$_POST['title_amenity']);
     $q_new_amenity = "INSERT INTO amenity (id_amenity ,title_amenity) VALUES ('' ,'$title_amenity')";
     $result_new_amenity = mysqli_query($dbcon,$q_new_amenity);
     if($result_new_amenity){
          $notify_new_amenity = [
              'title' => 'Updating successful!',
              'text' => 'Updating detail a amenity successful!',
              'icon' => 'success'
          ];
          echo json_encode($notify_new_amenity);
      }else{
          $notify_new_amenity = [
              'title' => 'Updating fail!',
              'text' => 'Updating detail a amenity fail!',
              'icon' => 'warning'
          ];
          echo json_encode($notify_new_amenity);
      }
    // }
