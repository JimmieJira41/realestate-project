<?php
require "./mysql/connect.php";
$title = "HP Real Estate | Building for Rent Page";
$title_type = $_GET['title_type'];
require './src/include/header.php';
require './src/include/navbar.php';
require './src/model/building_fetch_list_func.php';

?>
<div class="container-fiuld text-center position-relative m-auto" style="background: url(./src/img/header-new-building.jpeg) center center;background-size:cover;width:100%;height:400px;">
    <div class="position-absolute" style="padding:0;top:40%;width:100%;">
        <h1 class="display-3 bg-warning py-4" style="opacity:0.75;">อาคารสำหรับ<?php echo $title_type;?></h1>
    </div>
</div>
<div class="container">
    <?php
    require './src/view/building_for_select_list.php';
    ?>
</div>
<?php
require './src/include/footage.php';
require './src/include/footer.php';
?>