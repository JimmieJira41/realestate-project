<?php
// if (isset($_GET['building_select_option']) and (isset($_GET['title_type'])) and empty($_GET['page'])) {
// }
?>
<div class="building-list my-2">
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-body pt-1">
                    <div class="row">
                        <div class="col-12 badge badge-warning m-0 mb-3">
                            <h4 class="py-1">อาคารสำหรับ<?php echo $title_type; ?></h4>
                        </div>
                        <div class="col-12">
                            <label>การจัดเรียง : </label>
                            <a class="btn btn-outline-info" href="?building_select_option=<?php echo $_GET['building_select_option'] ?>&title_type=<?php echo $_GET['title_type'] ?>&sort_type=1">อัพเดตล่าสุด</a>
                            <a class="btn btn-outline-info" href="?building_select_option=<?php echo $_GET['building_select_option'] ?>&title_type=<?php echo $_GET['title_type'] ?>&sort_type=2">ราคาน้อย->มาก</a>
                            <a class="btn btn-outline-info" href="?building_select_option=<?php echo $_GET['building_select_option'] ?>&title_type=<?php echo $_GET['title_type'] ?>&sort_type=3">ราคามาก->น้อย</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-body pb-0">
                    <div class="row">
                        <?php
                        while ($row_building_list = mysqli_fetch_assoc($result_fetch_list_building)) {
                        ?>
                            <div class="col-lx-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card my-2 shadow position-relative">
                                    <div class="position-absolute bg-warning" style="width: 20px; height: 40px; left:92.5%;z-index:1;"></div>
                                    <div class="card-body p-2">
                                        <a style="text-decoration:none; color: black;" href="./building_detail_page.php?id_building=<?php echo $row_building_list['id_building']; ?>" id="<?php echo $row_building_list['id_building']; ?>">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="img_estate" style="background: url('./src/img/intro.jpg') center center; background-size: 100% 100%;height:125px"></div>
                                                </div>
                                                <div class="col-7">
                                                    <h5><?php echo $row_building_list['title_building']; ?></h5>
                                                    <span><small>update : <?php echo $row_building_list['date_update']; ?></small></span>
                                                    <hr>
                                                    <p><?php echo $row_building_list['location_building']; ?></p>
                                                    <p><?php echo $row_building_list['price_building_minimum']; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-12 mt-3">
                        <?php
                        require './src/include/pagenation_building.php';
                        ?>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <a class="btn btn-warning" href="building_page.php">กลับหน้าก่อนหน้า</a>
                </div>
            </div>
        </div>
    </div>
</div>