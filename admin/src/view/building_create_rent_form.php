<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>สร้างข้อมูลอาคารประเภทเช่าของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="img_building"><strong>รูปภาพ</strong></label>
                <input type="file" class="form-control-file img_building" name="img_building" multiple>
            </div>
            <div class="form-group">
                <label for="title_building"><strong>ชื่ออาคาร</strong></label>
                <input type="text" class="form-control title_building border-primary" name="title_building">
            </div>
            <div class="form-group">
                <label for="price_building"><strong>ราคาอาคาร</strong></label>
                <div class="form-inline">
                    <label class="mr-2" for="">ราคาเริ่มต้น</label>
                    <input type="text" class="form-control price_building_minimum border-primary" name="price_building_minimum">
                    <div class="input-group ml-2">
                        <label class="mr-2" for="">ราคาสูงสุด</label>
                        <input type="text" class="form-control price_building_maximum border-primary" name="price_building_maximum">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description_building"><strong>รายละเอียด</strong></label>
                <textarea type="text" class="form-control description_building border-primary" name="description_building" style="width:100%;height:250px"></textarea>
            </div>
            <div class="form-group">
                <label for="location_building"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_building border-primary" name="location_building" style="width:100%;height:100px"></textarea>
            </div>
            <div class="form-group">
                <label for="map_building"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_building border-primary" name="map_building">
            </div>
            <div class="text-right">
                <a type="cancel" href="./building.php" class="btn btn-danger btn-cancel-new-record-building text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-create-new-record-building-rent text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="type-building" value="1">
            </div>
        </form>
    </div>
</div>