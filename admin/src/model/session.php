<?php

session_start();

if(empty($_SESSION['id']) OR empty($_SESSION['username'])){
    header("location: login_page.php");
}

?>