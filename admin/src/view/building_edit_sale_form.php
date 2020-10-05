<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>แก้ไขข้อมูลอาคารประเภทขายของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="img_building"><strong>รูปภาพ</strong></label>
                <input type="file" class="form-control-file img_building border-primary" value="<?php echo $details['img_building']; ?>" name="img_building" multiple>
            </div>
            <div class="form-group">
                <label for="title_building"><strong>ชื่ออาคาร</strong></label>
                <input type="text" class="form-control title_building border-primary" value="<?php echo $details['title_building']; ?>" name="title_building">
            </div>
            <div class="form-group">
                <label for="price_building"><strong>ราคาอาคาร</strong></label>
                <div class="form-inline">
                    <label class="mr-2" for="">ราคาขาย</label>
                    <input type="text" class="form-control price_building_sale border-primary" value="<?php echo $details['price_building_sale']; ?>" name="price_building_sale">
                </div>
            </div>
            <div class="form-group">
                <label for="description_building"><strong>รายละเอียด</strong></label>
                <textarea type="text" class="form-control description_building border-primary" name="description_building" style="width:100%;height:250px"><?php echo $details['description_building']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="location_building"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_building border-primary" name="location_building" style="width:100%;height:100px"><?php echo $details['location_building']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="map_building"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_building border-primary" value="<?php echo $details['map_building']; ?>" name="map_building">
            </div>
            <div class="text-right">
                <a type="cancel" href="./building.php" class="btn btn-danger btn-cancel-new-record-building text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-save-record-building-sale text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="type-building" value="2">
                <input type="hidden" class="id_building" name="id_building" value="<?php echo $details['id_building'];?>">
            </div>
        </form>
    </div>
</div>