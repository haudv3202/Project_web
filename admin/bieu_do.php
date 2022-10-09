<?php
@session_start();
if (isset($_SESSION["admin"])) {
    include ("controllers/c_thong_ke.php");
    $home = new c_thong_ke();
    $home->bieu_do();
} else {
    $_SESSION["admin_error"] = "Xin lỗi bạn Vui lòng đăng nhập!";
    header("location:../sign_in.php");
}