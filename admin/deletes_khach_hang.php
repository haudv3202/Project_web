<?php
@session_start();
if (isset($_SESSION["admin"])) {
    include ("controllers/c_khach_hang.php");
    $khach_hang = new c_khach_hang();
    $khach_hang->deletes_khach_hang();
} else {
    $_SESSION["admin_error"] = "Xin lỗi bạn Vui lòng đăng nhập!";
    header("location:../sign_in.php");
}