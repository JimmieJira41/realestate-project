<?php

require "../../mysql/connect.php";

//  if(isset($_POST["submit_new_environment"])){
     $title_environment = mysqli_real_escape_string($dbcon,$_POST['title_environment']);
     $q_new_environment = "INSERT INTO environment (id_environment ,title_environment) VALUES ('' ,'$title_environment')";
     $result_new_environment = mysqli_query($dbcon,$q_new_environment);
     if($result_new_environment){
          $notify_new_environment = [
              'title' => 'Updating successful!',
              'text' => 'Updating detail a environment successful!',
              'icon' => 'success'
          ];
          echo json_encode($notify_new_environment);
      }else{
          $notify_new_environment = [
              'title' => 'Updating fail!',
              'text' => 'Updating detail a environment fail!',
              'icon' => 'warning'
          ];
          echo json_encode($notify_new_environment);
      }
    // }
