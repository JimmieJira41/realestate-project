<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>สร้างข้อมูลที่ดินประเภท<strong class="badge badge-warning" style="font-size:1em;">เช่า-ขาย</strong>ของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form id="form-new-estate" action="" method="POST" enctype="multipart/form-data">
            <div class="card border-primary">
                <div class="card-body pb-0">
                    <div class="col-12">
                        <div class="border" id="preview" style="height: 250px; border-color:black;">
                            <div style="overflow: auto;height: 250px; font-size: 0px">
                                <div class="img_main_preview position-relative d-inline p-0 m-0" style="font-size: 0px">
                                </div>
                                <div class="gallery d-inline p-0 m-0" style="font-size: 0px">
                                </div>
                                <h3 class="sign-input-image position-absolute" style="top:50%;left:50%;transform: translate(-50%, -50%);">กรุณาเลือกรูปภาพ</h3>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="img_estate_main"><strong>รูปภาพหลัก</strong></label>
                            <input type="file" class="form-control-file img_estate_main" id="img_estate_main" name="img_estate_main">
                            <label for="img_estate"><strong>รูปภาพรวม</strong></label>
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
                    <label for="">ราคาขาย</label>
                    <input type="text" class="form-control price_estate_sale border-primary ml-2" name="price_estate_sale">
                </div>
            </div>
            <div class="form-group">
                <div class="form-inline">
                    <label class="mr-2" for="">ราคาเริ่มต้น</label>
                    <input type="text" class="form-control price_estate_minimum border-primary" name="price_estate_minimum">
                    <div class="input-group ml-2">
                        <label class="mr-2" for="">ราคาสูงสุด</label>
                        <input type="text" class="form-control price_estate_maximum border-primary" name="price_estate_maximum">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description_estate"><strong>รายละเอียด</strong></label>
                <textarea type="text" class="form-control description_estate border-primary" id="description_estate" name="description_estate" placeholder="รายละเอียดที่ดิน" style="width:100%;height:250px"></textarea>
            </div>
            <div class="form-group">
                <label for="location_estate"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_estate border-primary" name="location_estate" placeholder="ตำแหน่งที่ตั้งที่ดิน" style="width:100%;height:100px"></textarea>
            </div>
            <div class="form-group">
                <label for="map_estate"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_estate border-primary" placeholder="ลิ้งค์แผนที่ไปยังที่ดิน" name="map_estate">
            </div>
            <div class="text-right">
                <a type="cancel" href="./estate.php" class="btn btn-danger btn-cancel-new-record-estate text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-create-new-record-estate-rentandsale text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="id_type" value="3">
            </div>
        </form>
    </div>
</div>
<script src="./src/js/tinymce_estate.js"></script>