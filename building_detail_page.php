<?php
require "./mysql/connect.php";
$title = "HP Real Estate | Estate Page";
require './src/include/header.php';
require './src/include/navbar.php';
?>
<div class="container my-4">
    <?php
    require './src/view/building_form_detail.php';
    ?>
</div>
<?php
require './src/include/footage.php';
require './src/include/footer.php';
?>