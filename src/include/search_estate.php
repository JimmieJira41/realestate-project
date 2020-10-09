<?php

require './src/model/type_fetch_list_func.php';

?>
<div class="card my-3 shadow">
    <div class="card-header text-center">
        <h5 class="py-1">ตัวช่วยที่ทำให้การค้นหาง่ายขึ้น !</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-12 float-left">
                <div class="row">
                    <?php
                    while ($row_list_type = mysqli_fetch_assoc($result_fetch_list_type)) {
                        if ($row_list_type['id_type'] == 1) {
                    ?>
                            <div class="col-4">
                                <a class="btn btn-primary" href="estate_rent_page.php?estate_select_option=<?php echo $row_list_type['id_type']; ?>&title_type=<?php echo $row_list_type['title_type']; ?>" style="width:100%"><?php echo $row_list_type['title_type']; ?></a>
                            </div>
                        <?php
                        } else if ($row_list_type['id_type'] == 2) {
                        ?>
                            <div class="col-4">
                                <a class="btn btn-primary" href="estate_sale_page.php?estate_select_option=<?php echo $row_list_type['id_type']; ?>&title_type=<?php echo $row_list_type['title_type']; ?>" style="width:100%"><?php echo $row_list_type['title_type']; ?></a>
                            </div>
                        <?php
                        } else if ($row_list_type['id_type'] == 3) {
                        ?>
                            <div class="col-4">
                                <a class="btn btn-primary" href="estate_rentandsale_page.php?estate_select_option=<?php echo $row_list_type['id_type']; ?>&title_type=<?php echo $row_list_type['title_type']; ?>" style="width:100%"><?php echo $row_list_type['title_type']; ?></a>
                            </div>
                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>