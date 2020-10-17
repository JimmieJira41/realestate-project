<?php

require './src/model/estate_fetch_list_func.php';

?>

<div class="estate-list">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pt-1 shadow">
                    <div class="row">
                        <div class="col-12 badge badge-warning m-0 mb-3">
                            <h3>แนะนำ</h3>
                        </div>
                        <?php
                        while ($row_estate_list = mysqli_fetch_assoc($result_fetch_list_estate)) {
                        ?>
                            <div class="col-lx-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card my-2 shadow position-relative">
                                    <div class="position-absolute bg-warning" style="width: 20px; height: 40px; left:92.5%;z-index:1;"></div>
                                    <div class="card-body p-2">
                                        <a style="text-decoration:none; color: black;" href="./estate_detail_page.php?id_estate=<?php echo $row_estate_list['id_estate']; ?>" id="<?php echo $row_estate_list['id_estate']; ?>">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="img_estate" style="background: url('./src/img/estate/<?php echo $row_estate_list['img_estate_main']; ?>') center center; background-size: 100% 100%;height:125px"></div>
                                                </div>
                                                <div class="col-7">
                                                    <p><strong><?php echo $row_estate_list['title_estate']; ?></strong></p>
                                                    <span><small>update : <?php echo $row_estate_list['date_update']; ?></small></span>
                                                    <hr>
                                                    <p><?php echo $row_estate_list['location_estate']; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col-12 mt-3 text-center">
                            <?php
                            require './src/include/pagenation_estate.php'
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>