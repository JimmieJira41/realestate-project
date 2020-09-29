<?php
require './src/model/building_fetch_list_func.php';
?>
<div class="container py-4">
  <div class="jumbotron text-center">
    <h1 class="display-4">Building</h1>
    <hr class="my-4">
    <a class="btn btn-warning btn-create-building" href="./building_new_page.php">Create new detail building</a>
  </div>
  <div id="div1"></div>
  <div class="card m-0 p-0">
    <div class="card-body m-0 p-0">
      <table class="table table-bordered text-center shadow m-0">
        <thead>
          <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">Title building</th>
            <!-- <th scope="col">Image building</th> -->
            <th scope="col">Price building</th>
            <!-- <th scope="col">Description building</th> -->
            <!-- <th scope="col">Amenity building</th> -->
            <!-- <th scope="col">Location building</th> -->
            <th scope="col">Setting</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $number = 1;
          while ($row_list_building = mysqli_fetch_assoc($result_fetch_list_building)) {
          ?>
            <tr>
              <td scope="row"><?php echo $number; ?></td>
              <td scope="row"><?php echo $row_list_building['title_building']; ?></td>
              <!-- <td scope="row"><?php echo $row_list_building['img_building']; ?></td> -->
              <td scope="row"><?php echo $row_list_building['price_building']; ?></td>
              <!-- <td scope="row"><?php echo $row_list_building['description_building']; ?></td> -->
              <!-- <td scope="row"><?php echo $row_list_building['amenity_building']; ?></td> -->
              <!-- <td scope="row"><?php echo $row_list_building['location_building']; ?></td> -->
              <td class="text-center"><button class="btn btn-info btn-view-building mr-1" value="<?php echo $row_list_building['id_building']; ?>">View</button><a class="btn btn-warning btn-edit-building mr-1" href="building_edit_page.php?id_building=<?php echo $row_list_building['id_building'];?>" value="<?php echo $row_list_building['id_building']; ?>">Edit</a><button class="btn btn-danger btn-delete-building mr-1" value="<?php echo $row_list_building['id_building']; ?>">Delete</button></td>
            </tr>
          <?php
            $number = $number + 1;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="Modalbuilding" tabindex="-1" role="dialog" aria-labelledby="Modal building Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-building">
          
        </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>