<?php

require './src/model/estate_fetch_detail_func.php';
// require './src/model/amenity_fetch_list_func.php';

?>

<div id="carouselExampleControls" style="width:100%; height:auto;" class="carousel slide mb-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="width:100%; height:450px; background: url(./src/img/test6.jpg)center center; background-repeat: cover; background-size: auto;">
        </div>
        <div class="carousel-item" style="width:100%; height:450px; background: url(./src/img/test7.jpg)center center; background-repeat: cover; background-size: auto;">
            <!-- <img class="d-block w-100" style="width:100%; height:450px; background: url(./src/img/test1.jpg)center center; background-repeat: cover; background-size: auto;"    src="./src/img/test7.jpg" alt="Second slide"> -->
        </div>
        <div class="carousel-item" style="width:100%; height:450px; background: url(./src/img/test8.jpg)center center; background-repeat: cover; background-size: auto;">
            <!-- <img class="d-block w-100 background-repeat: no-repeat; background-size: auto;" src="./src/img/test8.jpg" alt="Third slide"> -->
        </div>
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
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 col-12">
                        <h4><strong class="badge badge-warning">ตำแหน่งที่ตั้ง</strong></h4>
                        <p class="pl-3"><?php echo $details['location_estate']; ?></p>
                        <hr>
                        <h4><strong class="badge badge-warning">ราคา</strong></h4>
                        <h4 class="pl-3" style="color:green"><?php echo $details['price_estate']; ?></h4>
                        <hr>
                        <h4><strong class="badge badge-warning">ช่องทางติดต่อ</strong></h4>
                        <h4 class="pl-3"><i class="fas fa-phone-square text-primary"></i>&nbsp;<?php echo '0901325797' ?></h4>
                        <h4 class="pl-3"><i class="fab fa-line text-success"></i>&nbsp;<?php echo 'jjimcmax' ?></h4>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 col-12">
                        <h4><strong class="badge badge-warning">รายละเอียด</strong></h4>
                        <p class="pl-3"><?php echo $details['description_estate']; ?></p>
                        <h4 class='mb-3'><strong class="badge badge-warning">สถานที่ใกล้เคียง</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>