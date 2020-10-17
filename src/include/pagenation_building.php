<?php
$q_fetch_building_for_count = "SELECT * FROM building";
$result_fetch_building_for_count = mysqli_query($dbcon, $q_fetch_building_for_count);
$total_row = mysqli_num_rows($result_fetch_building_for_count);
$total_page = ceil($total_row / $perpage);
$prepage = $page - 1;
$nextpage = $page + 1;


if ($page == 1 or $page % 5 == 0) {
  $_SESSION['start_page'] = $page;
  if ($page == 1) {
    $_SESSION['end_page'] = $page + 4;
  }
  if ($page % 5 == 0) {
    $_SESSION['end_page'] = $page + 5;
  }
}
if ($page == $_SESSION['end_page']) {
  $SESSION['start_page'] = $page;
}
if ($page < $_SESSION['start_page']) {
  if ($_SESSION['start_page'] / 5 == 1) {
    $_SESSION['start_page'] = 1;
    $_SESSION['end_page'] = $_SESSION['start_page'] + 4;
  } else if ($_SESSION['start_page'] / 5 != 1 and $_SESSION['start_page'] % 5 == 0) {
    $num_page = $_SESSION['start_page'] / 5;
    $_SESSION['start_page'] = ($num_page - 1) * 5;
    $_SESSION['end_page'] = $_SESSION['start_page'] + 5;
  }
}
if ($page == 0) {
  $_SESSION['start_page'] = 1;
}
if ($page > $total_page) {
  $page = $total_page;
}
?>

<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <?php
      if ($page == 1) {
      ?>
        <a class="page-link disable" href="javascript:void(0);" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      <?php
      } else {
      ?>
        <a class="page-link" href="<?php echo $_SESSION['url_main']; ?>page=<?php echo $prepage; ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      <?php
      }
      ?>
    </li>
    <?php
    for ($i = $_SESSION['start_page']; $i <= $_SESSION['end_page']; $i++) {
      if ($i <= $total_page) {
        if ($i == $page) {
    ?>
          <li class="page-item active"><a class="page-link" href="<?php echo $_SESSION['url_main']; ?>page=<?php echo $i; ?>"><?php echo $i ?></a></li>
        <?php
        } else {
        ?>
          <li class="page-item"><a class="page-link" href="<?php echo $_SESSION['url_main']; ?>page=<?php echo $i; ?>"><?php echo $i ?></a></li>
        <?php
        }
        ?>
    <?php
      } else {
        break;
      }
    }
    ?>
    <li class="page-item">
      <?php
      if ($page == $total_page) {
      ?>
        <a class="page-link disable" href="javascript:void(0);" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      <?php
      } else {
      ?>
        <a class="page-link" href="<?php echo $_SESSION['url_main']; ?>page=<?php echo $nextpage; ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      <?php
      }
      ?>
    </li>
  </ul>
</nav>