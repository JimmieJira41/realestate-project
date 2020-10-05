<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>แก้ไขข้อมูลที่ดินประเภทขายของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="img_estate"><strong>รูปภาพ</strong></label>
                <input type="file" class="form-control-file img_estate border-primary" value="<?php echo $details['img_estate']; ?>" name="img_estate" multiple>
            </div>
            <div class="form-group">
                <label for="title_estate"><strong>ชื่ออาคาร</strong></label>
                <input type="text" class="form-control title_estate border-primary" value="<?php echo $details['title_estate']; ?>" name="title_estate">
            </div>
            <div class="form-group">
                <label for="price_estate"><strong>ราคาอาคาร</strong></label>
                <div class="form-inline">
                    <label class="mr-2" for="">ราคาขาย</label>
                    <input type="text" class="form-control price_estate_sale border-primary" value="<?php echo $details['price_estate_sale']; ?>" name="price_estate_sale">
                </div>
            </div>
            <div class="form-group">
                <label for="description_estate"><strong>รายละเอียด</strong></label>
                <textarea type="text" class="form-control description_estate border-primary" name="description_estate" style="width:100%;height:250px"><?php echo $details['description_estate']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="location_estate"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_estate border-primary" name="location_estate" style="width:100%;height:100px"><?php echo $details['location_estate']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="map_estate"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_estate border-primary" value="<?php echo $details['map_estate']; ?>" name="map_estate">
            </div>
            <div class="text-right">
                <a type="cancel" href="./estate.php" class="btn btn-danger btn-cancel-new-record-estate text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-save-record-estate-sale text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="type-estate" value="2">
                <input type="hidden" class="id_estate" name="id_estate" value="<?php echo $details['id_estate'];?>">
            </div>
        </form>
    </div>
</div>