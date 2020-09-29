<?php

    require './src/model/estate_fetch_list_func.php';

?>
<div class="estate-list shadow">

    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 badge badge-warning m-0 mb-3">
                            <h3>แนะนำ</h3>
                        </div>
                        <?php
                        while ($row_estate_list = mysqli_fetch_assoc($result_fetch_list_estate)) {
                        ?>
                            <div class="col-12">
                                <div class="card card-list-estate">
                                    <div class="card-body">
                                        <a href="./estate_detail_page.php?id_estate=<?php echo $row_estate_list['id_estate'];?>" id="<?php echo $row_estate_list['id_estate']; ?>">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="img_estate" style="background: url('./src/img/intro.jpg') center center; background-size: 100% 100%;height:150px"></div>
                                                </div>
                                                <div class="col-8">
                                                    <p><?php echo $row_estate_list['title_estate']; ?></p>
                                                    <hr>
                                                    <p><?php echo $row_estate_list['location_estate']; ?></p>
                                                    <p><?php echo $row_estate_list['price_estate']; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 p-auto">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ab corrupti at eaque repellat aperiam autem hic officiis perferendis minima ad similique sequi dolore ut pariatur maxime tempora adipisci, dicta nisi perspiciatis veniam? Voluptatem placeat laboriosam magnam repellat id corporis ullam quia deserunt ad, tempore debitis amet ipsam, accusantium excepturi!
                </div>
            </div>
        </div>
    </div>
</div>