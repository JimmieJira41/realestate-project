<?php
require "./mysql/connect.php";
$title = "HP Real Estate | Building Page";
require './src/include/header.php';
require './src/include/navbar.php';
?>
<div class="container pt-3">
    <?php
    require './src/include/search.php';
    require './src/view/building_list.php';
    ?>
</div>
<?php
require './src/include/footer.php';
?>