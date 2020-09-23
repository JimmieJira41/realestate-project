<?php
require './src/model/estate_fetch_list_func.php';
?>
<div class="container pt-4">
    <div class="jumbotron text-center">
        <h1 class="display-4">Estate</h1>
        <hr class="my-4">
        <button class="btn btn-warning btn-create-estate" data-toggle="modal" data-target="#Newbuilding">Create new record estate</button>
    </div>
    <div class="card m-0 p-0">
        <div class="card-body m-0 p-0">
            <table class="table table-bordered m-0 p-0">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Title estate</th>
                        <!-- <th scope="col">Image estate</th> -->
                        <th scope="col">Price estate</th>
                        <!-- <th scope="col">Description estate</th> -->
                        <!-- <th scope="col">Amenity estate</th> -->
                        <!-- <th scope="col">Location estate</th> -->
                        <th scope="col">Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    while ($row_list_estate = mysqli_fetch_assoc($result_fetch_list_estate)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $number; ?></td>
                            <td scope="row"><?php echo $row_list_estate['title_estate']; ?></td>
                            <!-- <td scope="row"><?php echo $row_list_estate['img_estate']; ?></td> -->
                            <td scope="row"><?php echo $row_list_estate['price_estate']; ?></td>
                            <!-- <td scope="row"><?php echo $row_list_estate['description_estate']; ?></td> -->
                            <!-- <td scope="row"><?php echo $row_list_estate['amenity_estate']; ?></td> -->
                            <!-- <td scope="row"><?php echo $row_list_estate['location_estate']; ?></td> -->
                            <td class="text-center"><button class="btn btn-info btn-view-estate mr-1" value="<?php echo $row_list_estate['id_estate']; ?>">View</button><button class="btn btn-warning btn-edit-estate mr-1" value="<?php echo $row_list_estate['id_estate']; ?>">Edit</button><button class="btn btn-danger btn-delete-estate mr-1" value="<?php echo $row_list_estate['id_estate']; ?>">Delete</button></td>
                        </tr>
                    <?php
                        $number = $number + 1;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="Modalestate" tabindex="-1" role="dialog" aria-labelledby="Modal estate Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="modal-estate"></div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>