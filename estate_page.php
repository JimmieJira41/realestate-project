<?php
require "./mysql/connect.php";
$title = "HP Real Estate | Estate Page";
require './src/include/header.php';
require './src/include/navbar.php';
?>
<div class="container pt-3">
    <?php
    require './src/include/search.php';
    require './src/view/estate_list.php';
    ?>
</div>
<?php
require './src/include/footer.php';
?>