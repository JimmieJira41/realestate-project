<?php

require './src/model/building_fetch_list_func.php';

?>
<div class="building-list">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body shadow">
                    <div class="row">
                        <div class="col-12 badge badge-warning m-0 mb-3">
                            <h3>แนะนำ</h3>
                        </div>
                        <div class="col-12 card-list-building">
                            <?php
                            while ($row_building_list = mysqli_fetch_assoc($result_fetch_list_building)) {
                            ?>
                                <div class="card my-2 position-relative">
                                    <div class="position-absolute bg-danger" style="width: 20px; height: 40px; left:95%;z-index:1;"></div>
                                    <div class="card-body ">
                                        <a style="text-decoration:none; color: black;" href="./building_detail_page.php?id_building=<?php echo $row_building_list['id_building']; ?>" id="<?php echo $row_building_list['id_building']; ?>">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="img_estate" style="background: url('./src/img/intro.jpg') center center; background-size: 100% 100%;height:150px"></div>
                                                </div>
                                                <div class="col-8">
                                                    <h5><?php echo $row_building_list['title_building']; ?></h5>
                                                    <span><small>update : <?php echo $row_building_list['date_update']; ?></small></span>
                                                    <hr>
                                                    <p><?php echo $row_building_list['location_building']; ?></p>
                                                    <?php
                                                    if ($row_building_list['id_type'] == 1) {
                                                        echo "<p class='' style='color:green'>" . $row_building_list['price_building_minimum'] . " - " . $row_building_list['price_building_maximum'] . " บาทต่อเดือน</p>";
                                                    } else if ($row_building_list['id_type'] == 2) {
                                                        echo "<p class='' style='color:green'>" . $row_building_list['price_building_sale'] . " บาท</p>";
                                                    } else {
                                                        echo "<p class='' style='color:green'>" . $row_building_list['price_building_sale'] . " บาท</p>" .
                                                            "<p class='' style='color:green'>" . $row_building_list['price_building_minimum'] . " - " . $row_building_list['price_building_maximum'] . " บาทต่อเดือน</p>";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-3 p-auto">
            <div class="card">
                <div class="card-body">
                    Facebook Fanpage Plugin
                </div>
            </div>
        </div> -->
    </div>
</div>