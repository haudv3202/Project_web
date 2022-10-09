<?php
@session_start();
if (isset($_SESSION["admin"])) {
    include ("controllers/c_binh_luan.php");
    $home = new c_binh_luan();
    $home->index();
} else {
    $_SESSION["admin_error"] = "Xin lỗi bạn Vui lòng đăng nhập!";
    header("location:../sign_in.php");
}