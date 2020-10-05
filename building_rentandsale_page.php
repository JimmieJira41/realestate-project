<?php
require "./mysql/connect.php";
$title = "HP Real Estate | Building for Rent & Sale Page";
require './src/include/header.php';
require './src/include/navbar.php';
require './src/model/building_fetch_list_func.php';

?>
<div class="container">
    <?php
    require './src/view/building_for_select_list.php';
    ?>
</div>
<?php
require './src/include/footer.php';
?>