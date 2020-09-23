<div class="container">
    <form action="./src/model/estate_new_func.php" method="POST">
        <div class="form-group">
            <label for="img_estate">Image estate</label>
            <input type="file" class="form-control-file" name="img_estate" multiple>
        </div>
        <div class="form-group">
            <label for="title_estate">Title estate</label>
            <input type="text" class="form-control title_estate" name="title_estate">
        </div>
        <div class="form-group">
            <label for="price_estate">Price estate</label>
            <input type="text" class="form-control price_estate" name="price_estate">
        </div>
        <div class="form-group">
            <label for="description_estate">Description estate</label>
            <textarea type="text" class="form-control description_estate" name="description_estate" style="width:100%;height:150px"></textarea>
        </div>
        <div class="form-group">
            <label for="environment_estate">Environment estate</label>
            <input type="text" class="form-control environment_estate" name="environment_estate">
        </div>
        <div class="form-group">
            <label for="location_estate">Location estate</label>
            <input type="text" class="form-control location_estate" name="location_estate">
        </div>
    </form>
</div>