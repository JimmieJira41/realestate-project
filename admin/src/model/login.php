<?php
session_start();
require '../../mysql/connect.php';
$alert = "";
if(isset($_POST['username']) != '' AND isset($_POST['password']) != ''){
    $username_user = $_POST['username'];
    $password_user = $_POST['password'];
    $q_user = "SELECT id_user,username_user FROM user WHERE username_user = '$username_user' AND password_user = '$password_user'";
    $result_user = mysqli_query($dbcon,$q_user);
    $user_num_row = mysqli_num_rows($result_user);
    if($user_num_row > 0){
        $user_in_row = mysqli_fetch_assoc($result_user);
        $_SESSION['id'] = $user_in_row['id_user'];
        $_SESSION['username'] = $user_in_row['username_user'];
        header("Location: ../../building.php");
    }else{
        $_SESSION['alert'] = "กรุณาเข้าสู่ระบบอีกครั้ง";
        header("Location: ../../login_page.php");
        return $alert;
        exit(0);
    }
}else{
    $_SESSION['alert'] = "<div class='alert alert-warning'>กรุณาเข้าสู่ระบบอีกครั้ง</div>";
    header("Location: ../../login_page.php");
    return $alert;
    exit(0);
}



?>