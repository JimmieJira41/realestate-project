<?php

require './mysql/connect.php';

$q_fetch_list_amenity = "SELECT * FROM amenity";
$result_fetch_list_amenity = mysqli_query($dbcon, $q_fetch_list_amenity);

$q_fetch_list_environment = "SELECT * FROM environment";
$result_fetch_list_environment = mysqli_query($dbcon, $q_fetch_list_environment);

?>
<div class="container">
    <div class="card my-3">
        <div class="card-header">
            <h2>Create a new building record</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="img_building">Image building</label>
                    <input type="file" class="form-control-file img_building" name="img_building" multiple>
                </div>
                <div class="form-group">
                    <label for="title_building">Title building</label>
                    <input type="text" class="form-control title_building" name="title_building">
                </div>
                <div class="form-group">
                    <label for="price_building">Price building</label>
                    <input type="text" class="form-control price_building" name="price_building">
                </div>
                <div class="form-group">
                    <label for="description_building">Description building</label>
                    <textarea type="text" class="form-control description_building" name="description_building" style="width:100%;height:250px"></textarea>
                </div>
                <div class="form-group">
                    <label for="location_building">Location building</label>
                    <!-- <input type="text" class="form-control location_building" name="location_building"> -->
                    <textarea type="text" class="form-control location_building" name="location_building" style="width:100%;height:100px"></textarea>
                </div>
                <div class="form-group">
                    <label for="map_building">Map building</label>
                    <input type="text" class="form-control map_building" name="map_building">
                </div>
                <div class="text-right">
                    <button type="cancel" href="./src/building.php" class="btn btn-danger btn-cancel-new-record-building text-uppercase">cancal</button>
                    <a type="submit" class="btn btn-info btn-create-new-record-building text-uppercase">submit</a>
                </div>
            </form>
        </div>
    </div>
</div>