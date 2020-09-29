<?php
require './src/model/amenity_fetch_list_func.php';
?>
<div class="container py-4">
  <div class="jumbotron text-center">
    <h1 class="display-4">Amenity</h1>
    <hr class="my-4">
    <button class="btn btn-warning btn-create-amenity" data-toggle="modal" data-target="#Newamenity">Create new detail amenity</button>
  </div>
  <div id="div1"></div>
  <div class="card m-0 p-0">
    <div class="card-body m-0 p-0">
      <table class="table table-bordered text-center shadow m-0">
        <thead>
          <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">Title amenity</th>
            <th scope="col">Setting</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $number = 1;
          while ($row_list_amenity = mysqli_fetch_assoc($result_fetch_list_amenity)) {
          ?>
            <tr>
              <td scope="row"><?php echo $number; ?></td>
              <td scope="row"><?php echo $row_list_amenity['title_amenity']; ?></td>
              <td class="text-center"><button class="btn btn-warning btn-edit-amenity mr-1" value="<?php echo $row_list_amenity['id_amenity']; ?>">Edit</button><button class="btn btn-danger btn-delete-amenity mr-1" value="<?php echo $row_list_amenity['id_amenity']; ?>">Delete</button></td>
            </tr>
          <?php
            $number = $number + 1;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="Modalamenity" tabindex="-1" role="dialog" aria-labelledby="Modal amenity Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-amenity">
          
        </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>