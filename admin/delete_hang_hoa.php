<?php
@session_start();
if (isset($_SESSION["admin"])) {
    include("controllers/c_danh_sach_hang.php");
    $hang_hoa = new c_danh_sach_hang();
    $hang_hoa->delete_hang_hoa();
} else {
    $_SESSION["admin_error"] = "Xin lỗi bạn Vui lòng đăng nhập!";
    header("location:../sign_in.php");
}