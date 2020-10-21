<?php
require "./mysql/connect.php";
$title = "HP Real Estate | Building Page";
require './src/include/header.php';
require './src/include/navbar.php';
?>
<div class="container-fiuld text-center position-relative m-auto" style="background: url(./src/img/header-new-building.jpeg) center center;background-size:cover;width:100%;height:400px;">
    <div class="position-absolute" style="padding:0;top:40%;width:100%;">
        <h1 class="display-3 bg-warning py-4" style="opacity:0.75;">อาคาร</h1>
    </div>
</div>
<div class="container pt-3">
    <div class="py-4 text-center">
        <h1 class="">Happieness Estate</h1>
    </div>
    <?php
    require './src/include/search_building.php';
    require './src/view/building_list.php';
    ?>
</div>
<?php
require './src/include/footage.php';
require './src/model/view_visit_func.php'; 
require './src/include/footer.php';
?>