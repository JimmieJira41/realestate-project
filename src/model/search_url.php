<?php
  $URL = $_SERVER['REQUEST_URI'];
//   echo $URL;
  $URL_list = explode('/',$URL);
 if(isset($_GET['building_select_option']) AND (isset($_GET['title_type'])) AND empty($_GET['page']) ){
    $URL_main = $URL_list[2];
    $_SESSION['url_main'] = $URL_main."&";
}else if(!isset($_GET['page']) AND empty($_GET['page'])){
    $URL_main = $URL_list[2];
    $_SESSION['url_main'] = $URL_main."?";
}
    // echo $_SESSION['url_main'];
