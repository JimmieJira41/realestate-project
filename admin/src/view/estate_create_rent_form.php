<div class="card border-primary my-3">
    <div class="card-header text-center">
        <h2>สร้างข้อมูลที่ดินประเภทเช่าของคุณ!!</h2>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="img_estate"><strong>รูปภาพ</strong></label>
                <input type="file" class="form-control-file img_estate" name="img_estate" multiple>
            </div>
            <div class="form-group">
                <label for="title_estate"><strong>ชื่ออาคาร</strong></label>
                <input type="text" class="form-control title_estate border-primary" name="title_estate">
            </div>
            <div class="form-group">
                <label for="price_estate"><strong>ราคาอาคาร</strong></label>
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
                <textarea type="text" class="form-control description_estate border-primary" name="description_estate" style="width:100%;height:250px"></textarea>
            </div>
            <div class="form-group">
                <label for="location_estate"><strong>ตำแหน่งที่ตั้ง</strong></label>
                <textarea type="text" class="form-control location_estate border-primary" name="location_estate" style="width:100%;height:100px"></textarea>
            </div>
            <div class="form-group">
                <label for="map_estate"><strong>แผนที่</strong></label>
                <input type="text" class="form-control map_estate border-primary" name="map_estate">
            </div>
            <div class="text-right">
                <a type="cancel" href="./estate.php" class="btn btn-danger btn-cancel-new-record-estate text-uppercase">cancal</a>
                <a type="submit" class="btn btn-info btn-create-new-record-estate-rent text-light text-uppercase">submit</a>
                <input type="hidden" class="id_type" name="type-estate" value="1">
            </div>
        </form>
    </div>
</div>