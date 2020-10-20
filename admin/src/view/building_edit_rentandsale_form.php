<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>แก้ไขข้อมูลอาคารประเภท<strong class="badge badge-warning" style="font-size:1em;">เช่า-ขาย</strong>ของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form id="form-edit-building" action="./src/model/building_edit_func.php" method="POST" enctype="multipart/form-data">
            <div class="card border-primary">
                <div class="card-body pb-0">
                    <div class="col-12">
                        <div class="border" id="preview" style="height: 250px; border-color:black;">
                            <div style="overflow: auto;height: 250px; font-size: 0px">
                                <div class="img_main_preview position-relative d-inline p-0 m-0" style="font-size: 0px">
                                    <?php
                                    ?>
                                    <div class="position-absolute bg-warning" style="left:90%; width: 15px; height: 15px; z-index:1;"></div>
                                    <img src="<?php echo "./src/img/building/" . $details['img_building_main']; ?>" class="img-to-upload col-lx-4 col-lg-4 col-md-6 col-sm-12 col-12 m-0 p-0" style="font-size: 0; height: 100%;" />
                                    <?php
                                    ?>
                                </div>
                                <div class="gallery d-inline p-0 m-0" style="font-size: 0px">
                                    <?php
                                    $gallery = explode(",", $details['img_building']);
                                    foreach ($gallery as $img) {
                                    ?>
                                        <img src="<?php echo "./src/img/building/" . $img; ?>" class="img-to-upload col-lx-4 col-lg-4 col-md-6 col-sm-12 col-12 m-0 p-0" style="font-size: 0; height: 100%;">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="img_building_main"><strong>รูปภาพหลัก</strong></label>
                            <input type="file" class="form-control-file img_building_main" id="img_building_main" name="img_building_main">
                            <label for="img_building"><strong>รูปภาพรวม</strong></label>
                            <input type="file" class="form-control-file img_building" id="img_building" name="img_building[]" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="title_building"><strong>ชื่ออาคาร</strong></label>
                <input type="text" class="form-control title_building border-primary" value="<?php echo $details['title_building']; ?>" name="title_building">
            </div>
            <div class="form-group">
                <label for="price_building"><strong>ราคาอาคาร</strong></label>
                <div class="form-inline">
                    <label for="">ราคาขาย</label>
                    <input type="text" class="form-control price_building_sale border-primary ml-2" value="<?php echo $details['price_building_sale']; ?>" name="price_building_sale">
                </div>
            </div>
            <div class="form-group">
                <div class="form-inline">
                    <label class="mr-2" for="">ราคาเริ่มต้น</label>
                    <input type="text" class="form-control price_building_minimum border-primary" value="<?php echo $details['price_building_minimum']; ?>" name="price_building_minimum">
                    <div class="input-group ml-2">
                        <label class="mr-2" for="">ราคาสูงสุด</label>
                        <input type="text" class="form-control price_building_maximum border-primary" value="<?php echo $details['price_building_maximum']; ?>" name="price_building_maximum">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description_building"><strong>รายละเอียด</strong></label>
                <textarea type="text" class="form-control description_building border-primary" id="description_building" name="description_building" style="width:100%;height:250px"><?php echo $details['description_building']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="location_building"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_building border-primary" value="<?php echo $details['location_building']; ?>" name="location_building" style="width:100%;height:100px"><?php echo $details['location_building']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="map_building"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_building border-primary" value="<?php echo $details['map_building']; ?>" name="map_building">
            </div>
            <div class="text-right">
                <a type="cancel" href="./building.php" class="btn btn-danger btn-cancel-new-record-building text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-save-record-building-rentandsale text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="id_type" value="3">
                <input type="hidden" class="id_building" name="id_building" value="<?php echo $details['id_building']; ?>">
            </div>
        </form>
    </div>
</div>
<script src="./src/js/tinymce_building.js"></script>