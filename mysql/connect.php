<?php

    require "config.php";
    $dbcon = mysqli_connect($hostname,$username,$password,$dbname);
    mysqli_set_charset($dbcon,"utf-8");
    

?>