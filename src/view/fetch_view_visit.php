<?php
require './mysql/connect.php';

$q_fetch_view_day = "SELECT SUM(view) sum_day FROM view WHERE DAY(date_view) = DAY(NOW()) AND MONTH(date_view) = MONTH(NOW()) AND YEAR(date_view) = YEAR(NOW()) GROUP BY DAY(date_view), YEAR(date_view), MONTH(date_view)";
$result_fetch_view_day = mysqli_query($dbcon, $q_fetch_view_day);
$sum_day =  mysqli_fetch_assoc($result_fetch_view_day);
$q_fetch_view_month = "SELECT SUM(view) sum_month FROM view WHERE MONTH(date_view) = MONTH(NOW()) AND YEAR(date_view) = YEAR(NOW()) GROUP BY YEAR(date_view), MONTH(date_view)";
$result_fetch_view_month = mysqli_query($dbcon, $q_fetch_view_month);
$sum_month =  mysqli_fetch_assoc($result_fetch_view_month);
$q_fetch_view_year = "SELECT SUM(view) sum_year FROM view WHERE YEAR(date_view) = YEAR(NOW()) GROUP BY YEAR(date_view) ";
$result_fetch_view_year = mysqli_query($dbcon, $q_fetch_view_year);
$sum_year =  mysqli_fetch_assoc($result_fetch_view_year);
?>

<div class="card m-0 p-0">
    <div class="card-body m-0 p-0">
        <table class="table table-bordered table-striped text-center m-0 p-0">
            <thead>
                <tr>
                    <td colspan="2" class="text-uppercase"><strong>static of view</strong></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>view of today</td>
                    <td><?php echo $sum_day['sum_day'] ?></td>
                </tr>
                <tr>
                    <td>view of month</td>
                    <td><?php echo $sum_month['sum_month'] ?></td>
                </tr>
                <tr>
                    <td>view of year</td>
                    <td><?php echo $sum_year['sum_year'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>