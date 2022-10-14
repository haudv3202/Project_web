<?php
@session_start();
include("controllers/c_log_out.php");
if(isset($_SESSION["info"])){
    $c_log_out = new c_log_out();
    $c_log_out->log_out();
}else {
    $_SESSION["error_log_out"] = "Bạn không đăng nhập";
    header("Location:index.php");
}