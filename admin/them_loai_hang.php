<?php
@session_start();
if (isset($_SESSION["admin"])) {
    include ("controllers/c_them_loai_hang.php");
    $home = new c_them_loai_hang();
    $home->index();
} else {
    $_SESSION["admin_error"] = "Xin lỗi bạn Vui lòng đăng nhập!";
    header("location:../sign_in.php");
}