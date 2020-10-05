<?php
require "./mysql/connect.php";
$title = "New Building";
$id_building = $_GET['id_building'];
require './src/include/header.php';
require './src/include/navbar.php';
require './src/model/building_fetch_detail_func.php';
?>
<div class="container-fiuld text-center py-4" style="background: url(./src/img/header-new-building.jpeg) center center;">
    <h1 class="bg-warning" style="opacity:80%;">ประเภทการทำการค้า</h1>
    <div class="container text-center">
        <?php
        require './src/include/option_edit_building_bar.php';
        ?>
    </div>

</div>
<div class="container form-body">
    <?php
    require './src/view/building_edit_rentandsale_form.php';
    ?>

</div>
<?php
require './src/include/footer.php';
?>