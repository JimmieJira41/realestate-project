<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>สร้างข้อมูลที่ดินประเภทขายของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form id="form-new-estate" action="" method="POST" enctype="multipart/form-data">
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
                    <div class="col-12">
                        <div class="form-group">
                            <label for="img_estate"><strong>รูปภาพ</strong></label>
                            <input type="file" class="form-control-file img_estate" id="img_estate" name="img_estate[]" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="title_estate"><strong>ชื่ออาคาร</strong></label>
                <input type="text" class="form-control title_estate border-primary" name="title_estate" placeholder="ชื่อที่ดิน">
            </div>
            <div class="form-group">
                <label for="price_estate"><strong>ราคาอาคาร</strong></label>
                <div class="form-inline">
                    <label class="mr-2" for="">ราคาขาย</label>
                    <input type="text" class="form-control price_estate_sale border-primary" name="price_estate_sale">
                </div>
            </div>
            <div class="form-group">
                <label for="description_estate"><strong>รายละเอียด</strong></label>
                <textarea type="text" class="form-control description_estate border-primary" name="description_estate" placeholder="รายละเอียดที่ดิน" style="width:100%;height:250px"></textarea>
            </div>
            <div class="form-group">
                <label for="location_estate"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_estate border-primary" name="location_estate" placeholder="ตำแหน่งที่ตั้งที่ดิน" style="width:100%;height:100px"></textarea>
            </div>
            <div class="form-group">
                <label for="map_estate"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_estate border-primary" name="map_estate" placeholder="ลิ้งค์แผนที่ไปยังที่ดิน">
            </div>
            <div class="text-right">
                <a type="cancel" href="./estate.php" class="btn btn-danger btn-cancel-new-record-estate text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-create-new-record-estate-sale text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="id_type" value="2">
            </div>
        </form>
    </div>
</div>