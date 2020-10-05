<?php
require "./mysql/connect.php";
$title = "Edit Estate";
$id_estate = $_GET['id_estate'];
require './src/include/header.php';
require './src/include/navbar.php';
require './src/model/estate_fetch_detail_func.php';
?>
<div class="container-fiuld text-center py-4" style="background: url(./src/img/header-estate.jpg) center center;">
    <h1 class="bg-warning" style="opacity:80%;">ประเภทการทำการค้า</h1>
    <div class="container text-center">
        <?php
        require './src/include/option_edit_estate_bar.php';
        ?>
    </div>

</div>
<div class="container form-body">
    <?php
    if( $details['id_type'] == 1 ){
        require './src/view/estate_edit_rent_form.php';
    }else if( $details['id_type'] == 2 ){
        require './src/view/estate_edit_sale_form.php';
    }else{
        require './src/view/estate_edit_rentandsale_form.php';
    }
    ?>

</div>
<?php
require './src/include/footer.php';
?>