<?php
require './src/model/building_fetch_list_func.php';
?>
<div class="container py-4">
  <div class="jumbotron bg-light text-center">
    <h1 class="display-4">อาคาร</h1>
    <hr class="my-4">
    <a class="btn btn-warning btn-create-building" href="./building_new_rent_page.php">สร้างข้อมูลอาคาร</a>
  </div>
  <div class="card m-0 p-0">
    <div class="card-body m-0 p-0">
      <table class="table table-bordered text-center shadow m-0">
        <thead>
          <tr class="row p-1 text-center">
            <th class="col-2 border-0" scope="col">No.</th>
            <th class="col-4 border-0" scope="col">ชื่ออาคาร</th>
            <th class="col-2 border-0" scope="col">ประเภท</th>
            <th class="col-4 border-0" scope="col">Setting</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-0" colspan="4">
              <div class="table-scrollbar p-2">
                <table class="table">
                  <tbody class="p-0">
                    <?php
                    $number = 1;
                    while ($row_list_building = mysqli_fetch_assoc($result_fetch_list_building)) {
                    ?>
                      <tr class='row p-1'>
                        <td class="col-2 px-0 " scope="row"><?php echo $number; ?></td>
                        <td class="col-4 px-0 " scope="row"><?php echo $row_list_building['title_building']; ?></td>
                        <td class="col-2 px-0 " scope="row"><div class="btn btn-primary"><?php echo $row_list_building['title_type']; ?></div></td>
                        <td class="col-4 px-0  border-right-0 text-center"><button class="btn btn-info btn-view-building mr-1" value="<?php echo $row_list_building['id_building']; ?>">View</button><a class="btn btn-warning btn-edit-building mr-1" href="building_edit_page.php?id_building=<?php echo $row_list_building['id_building']; ?>" value="<?php echo $row_list_building['id_building']; ?>">Edit</a><button class="btn btn-danger btn-delete-building mr-1" value="<?php echo $row_list_building['id_building']; ?>">Delete</button></td>
                      </tr>
                    <?php
                      $number = $number + 1;
                    } ?>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
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