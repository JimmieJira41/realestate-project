<?php

require './src/model/environment_fetch_list_func.php';
require './src/model/amenity_fetch_list_func.php';

?>
<div class="card my-3 shadow">
    <div class="card-header text-center p-1">
        <h5>ตัวช่วยที่ทำให้การค้นหาง่ายขึ้น !</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-12 float-left">
                <div class="row">
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="ค้นหาชื่อที่พัก ย่าน ถนน หรือสถานที่ใกล้เคียง" />
                    </div>
                    <div class="col-2 ">
                        <button class="btn btn-primary " style="width:100%">เช่า</button>
                    </div>
                    <div class="col-2 ">
                        <button class="btn btn-primary" style="width:100%">ขาย</button>
                    </div>
                </div>

            </div>
            <div class="col-6 my-1">
                <div class="btn btn-outline-secondary d-block" data-toggle="modal" data-target="#EvironmentFilterModal">ค้นหาจากสถานที่ใกล้เคียง</div>
            </div>
            <div class="col-6 my-1">
                <div class="btn btn-outline-secondary btn-amenity d-block" data-toggle="modal" data-target="#AmenityFilterModal">ค้นหาจากสิ่งอำนวยความสะดวก</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EvironmentFilterModal" tabindex="-1" role="dialog" aria-labelledby="EvironmentFilterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EvironmentFilterModalLabel">สถานที่ใกล้เคียง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                while ($environment = mysqli_fetch_assoc($result_fetch_list_environment)) {
                ?>
                    <div class="form-check form-inline">
                        <input class="form-check-input" type="checkbox" name="amenity_building" value="<?php echo $environment['title_environment']; ?>">
                        <label class="form-check-label"><?php echo $environment['title_environment']; ?></label>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AmenityFilterModal" tabindex="-1" role="dialog" aria-labelledby="AmenityFilterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AmenityFilterModalLabel">สิ่งอำนวยความสะดวก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                while ($amenity = mysqli_fetch_assoc($result_fetch_list_amenity)) {
                ?>
                    <div class="form-check form-inline">
                        <input class="form-check-input" type="checkbox" name="amenity_building" value="<?php echo $amenity['title_amenity']; ?>">
                        <label class="form-check-label"><?php echo $amenity['title_amenity']; ?></label>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="FilterModal" tabindex="-1" role="dialog" aria-labelledby="FilterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>