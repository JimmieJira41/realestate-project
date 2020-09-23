<div class="container">
    <form action="./src/model/building_new_func.php" method="POST">
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
            <textarea type="text" class="form-control description_building" name="description_building" style="width:100%;height:150px"></textarea>
        </div>
        <div class="form-group">
            <label for="amenity_building">Amenity building</label>
            <input type="text" class="form-control amenity_building" name="amenity_building">
        </div>
        <div class="form-group">
            <label for="location_building">Location building</label>
            <input type="text" class="form-control location_building" name="location_building">
        </div>
    </form>
</div>