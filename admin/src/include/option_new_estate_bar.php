<?php

require './src/model/type_fetch_list_func.php';

?>
<div class="card my-3 shadow">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-12 float-left">
                <div class="row">
                    <?php
                    $num = mysqli_num_rows($result_fetch_list_type);
                    $option[] = [
                        'id_type' => '',
                        'title_type' => ''
                    ];
                    for ($i = 1; $i <= $num; $i++) {
                        $row_list_type = mysqli_fetch_assoc($result_fetch_list_type);
                        $option[$i]['id_type'] = $row_list_type['id_type'];
                        $option[$i]['title_type'] = $row_list_type['title_type'];
                    }
                    ?>
                    <div class="col-4">
                        <a class="btn btn-outline-primary btn-type-<?php echo $option[1]['id_type']; ?>" href="./estate_new_rent_page.php" style="width:100%"><?php echo $option[1]['title_type']; ?></a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-outline-primary btn-type-<?php echo $option[2]['id_type']; ?>" href="./estate_new_sale_page.php" style="width:100%"><?php echo $option[2]['title_type']; ?></a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-outline-primary btn-type-<?php echo $option[3]['id_type']; ?>" href="./estate_new_rentandsale_page.php" style="width:100%"><?php echo $option[3]['title_type']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>