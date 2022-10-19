<?php
@session_start();
include("controllers/c_user.php");
if(isset($_SESSION["info"])){
    $c_log_out = new c_user();
    $c_log_out->update_info();
}else {
    $_SESSION["error_log_out"] = "Bạn không đăng nhập";
    header("Location:index.php");
}