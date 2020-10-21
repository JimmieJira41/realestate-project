<?php
    require "./mysql/connect.php";
    $title = "HP Real Estate | Contact Page";
    require './src/include/header.php';
    require './src/include/navbar.php';
    ?>
    <div class="container bg-light">
    <?php
    require './src/view/contact_form.php';
    ?>
    </div>
    <?php 
    require './src/include/footage.php';
require './src/model/view_visit_func.php'; 
    require './src/include/footer.php';
?>