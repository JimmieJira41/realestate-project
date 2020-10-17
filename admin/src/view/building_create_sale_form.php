<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>สร้างข้อมูลอาคารประเภท<strong class="badge badge-warning" style="font-size:1em;">ขาย</strong>ของคุณ!!</h2>
    </div>
    <div class="card-body">
        <div class="card border-primary">
            <div class="card-body pb-0">
                <div class="col-12">
                    <div class="border" id="preview" style="height: 250px; border-color:black;">
                        <div class="gallery position-relative" style="overflow: auto;height: 250px;">
                            <h3 class="position-absolute" style="top:50%;left:50%;transform: translate(-50%, -50%);">กรุณาเลือกรูปภาพ</h3>
                        </div>
                    </div>
                </div>
                <hr>
                <form id="form-new-building" action="./src/model/building_new_func.php" method="POST" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="img_building"><strong>รูปภาพ</strong></label>
                            <input type="file" class="form-control-file img_building" id="img_building" name="img_building[]" multiple>
                        </div>
                    </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <label for="title_building"><strong>ชื่ออาคาร</strong></label>
            <input type="text" class="form-control title_building border-primary" name="title_building" placeholder="ชื่ออาคาร">
        </div>
        <div class="form-group">
            <label for="price_building"><strong>ราคาอาคาร</strong></label>
            <div class="form-inline">
                <label class="mr-2" for="">ราคาขาย</label>
                <input type="text" class="form-control price_building_sale border-primary" name="price_building_sale" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="description_building"><strong>รายละเอียด</strong></label>
            <textarea type="text" class="form-control description_building border-primary" id="description_building" name="description_building" placeholder="รายละเอียดอาคาร" style="width:100%;height:250px"></textarea>
        </div>
        <div class="form-group">
            <label for="location_building"><strong>ตำแหน่งที่ตั้ง</strong></label>
            <textarea type="text" class="form-control location_building border-primary" name="location_building" placeholder="ตำแหน่งที่ตั้งอาคาร" style="width:100%;height:100px"></textarea>
        </div>
        <div class="form-group">
            <label for="map_building"><strong>แผนที่</strong></label>
            <input type="text" class="form-control map_building border-primary" name="map_building" placeholder="ลิ้งค์แผนที่ไปยังอาคาร">
        </div>
        <div class="text-right">
            <a type="cancel" href="./building.php" class="btn btn-danger btn-cancel-new-record-building text-uppercase">cancal</a>
            <a type="submit" href="javascript:void(0)" class="btn btn-info btn-create-new-record-building-sale text-light text-uppercase">submit</a>
            <input type="hidden" class="id_type" name="id_type" value="2">
        </div>
        </form>
    </div>
</div>
<script src="./src/js/tinymce_building.js"></script>