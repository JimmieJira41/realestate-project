<?php
require './src/model/environment_fetch_list_func.php';
?>
<div class="container py-4">
  <div class="jumbotron text-center">
    <h1 class="display-4">Environment</h1>
    <hr class="my-4">
    <button class="btn btn-warning btn-create-environment" data-toggle="modal" data-target="#Newenvironment">Create new detail environment</button>
  </div>
  <div id="div1"></div>
  <div class="card m-0 p-0">
    <div class="card-body m-0 p-0">
      <table class="table table-bordered text-center shadow m-0">
        <thead>
          <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">Title environment</th>
            <th scope="col">Setting</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $number = 1;
          while ($row_list_environment = mysqli_fetch_assoc($result_fetch_list_environment)) {
          ?>
            <tr>
              <td scope="row"><?php echo $number; ?></td>
              <td scope="row"><?php echo $row_list_environment['title_environment']; ?></td>
              <td class="text-center"><button class="btn btn-info btn-view-environment mr-1" value="<?php echo $row_list_environment['id_environment']; ?>">View</button><button class="btn btn-warning btn-edit-environment mr-1" value="<?php echo $row_list_environment['id_environment']; ?>">Edit</button><button class="btn btn-danger btn-delete-environment mr-1" value="<?php echo $row_list_environment['id_environment']; ?>">Delete</button></td>
            </tr>
          <?php
            $number = $number + 1;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="Modalenvironment" tabindex="-1" role="dialog" aria-labelledby="Modal environment Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-environment">
          
        </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>