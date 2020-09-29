<?php
require "./mysql/connect.php";
$title = "Amenity & Environment";
require './src/include/header.php';
require './src/include/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <?php
            require './src/view/amenity_list.php'
            ?>
        </div>
        <div class="col-6">
            <?php
            require './src/view/environment_list.php'
            ?>
        </div>
    </div>
</div>
<?php
require './src/include/footer.php';
?>