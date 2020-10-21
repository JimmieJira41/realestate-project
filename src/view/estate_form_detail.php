<?php

require './src/model/estate_fetch_detail_func.php';

?>
<div class="shadow">
    <div id="carouselExampleControls" style="height:450px;" class="carousel slide mb-3" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active" style="width:100%; height:450px ;background: url(./src/img/estate/<?php echo $details['img_estate_main'] ?>) center center; background-repeat: cover; background-size: auto;">
            </div>
            <?php
            $img_estate = explode(",", $details['img_estate']);
            foreach ($img_estate as $img) {
            ?>
                <div class="carousel-item" style="width:100%; height:450px ;background: url(./src/img/estate/<?php echo $img; ?>) center center; background-repeat: cover; background-size: auto;">
                </div>
            <?php
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <div class="card mt-2">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    <h4><i class="fas fa-map-marker-alt text-danger"></i>&nbsp;<?php echo $details['title_estate']; ?></h4>
                    <span>update : <?php echo $details['date_update']; ?></span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 col-12">
                            <h4><strong class="badge badge-warning">ตำแหน่งที่ตั้ง</strong></h4>
                            <p class="pl-3"><?php echo $details['location_estate']; ?></p>
                            <hr>
                            <h4><strong class="badge badge-warning">ราคา</strong></h4>
                            <?php
                            if ($details['id_type'] == 1) {
                                if ($details['price_estate_minimum'] == 0 && $details['price_estate_maximum'] == 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>กรุณาติดต่อเจ้าหน้าที่</p>";
                                } else if ($details['price_estate_minimum'] != 0 and $details['price_estate_maximum'] == 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>ราคาเช่าเริ่มต้นที่ : " . $details['price_estate_minimum'] . " บาทต่อเดือน</p>";
                                } else {
                                    echo "<p class='px-3 text-left' style='color:green'>ราคาเช่า : " . $details['price_estate_minimum'] . " - " . $details['price_estate_maximum'] . " บาทต่อเดือน</p>";
                                }
                                // echo "<p class='px-3' style='color:green'>ราคาเช่า : " . $details['price_estate_minimum'] . " - " . $details['price_estate_maximum'] . " บาทต่อเดือน</p>";
                            } else if ($details['id_type'] == 2) {
                                if ($details['price_estate_sale'] == 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>กรุณาติดต่อเจ้าหน้าที่</p>";
                                } else {
                                    echo "<p class='px-3 text-left' style='color:green'>ราคาขาย : " . $details['price_estate_sale'] . " บาท</p>";
                                }
                                // echo "<p class='px-3 text-left' style='color:green'>ราคาขาย :  " . $details['price_estate_sale'] . " บาท</p>";
                            } else {
                                if ($details['price_estate_sale'] != 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>ราคาขาย : " . $details['price_estate_sale'] . " บาท</p>";
                                } else if ($details['price_estate_sale'] == 0){
                                    echo "<p class='px-3 text-left' style='color:green'>กรุณาติดต่อเจ้าหน้าที่</p>";
                                }
                                if ($details['price_estate_minimum'] == 0 && $details['price_estate_maximum'] == 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>กรุณาติดต่อเจ้าหน้าที่</p>";
                                } else if ($details['price_estate_minimum'] != 0 && $details['price_estate_maximum'] == 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>ราคาเช่าเริ่มต้นที่ : " . $details['price_estate_minimum'] . " บาทต่อเดือน</p>";
                                } else if ($details['price_estate_minimum'] != 0 && $details['price_estate_maximum'] != 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>ราคาเช่า : " . $details['price_estate_minimum'] . " - " . $details['price_estate_maximum'] . " บาทต่อเดือน</p>";
                                } else if ($details['price_estate_minimum'] == 0 && $details['price_estate_maximum'] != 0) {
                                    echo "<p class='px-3 text-left' style='color:green'>กรุณาติดต่อเจ้าหน้าที่</p>";
                                } 
                            }   

                            ?>
                            <hr>
                            <h4><strong class="badge badge-warning">ช่องทางติดต่อ</strong></h4>
                            <strong class="pl-3"><a href="tel:+0826369782" target="_blank" style="text-decoration:none;color:black"><i class="fas fa-phone-square text-primary"></i>&nbsp; 082-636-9782 </a></strong><br>
                            <strong class="pl-3"><a href="http://line.me/ti/p/~pongpet19" target="_blank" style="text-decoration:none;color:black"><i class="fab fa-line text-success"></i></i>&nbsp; pongpet19 </a></strong>
                            <hr>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12 col-12 badge-warninged-left ">
                            <h4><strong class="badge badge-warning">รายละเอียด</strong></h4>
                            <p class="pl-3"><?php echo $details['description_estate']; ?></p>
                        </div>
                        <div class="col-12 my-2">
                            <a class="btn btn-primary d-block text-decoraction-none" href="https://www.facebook.com/Happinessestate" target="_blank">ติดต่อเจ้าหน้าที่</a>
                        </div>
                    </div>
                    <div class="col-12 mt-2 px-0">
                        <a class="btn btn-warning" onClick="window.history.back()">กลับหน้าก่อนหน้า</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>