<?php
@session_start();
if (isset($_SESSION["admin"])) {
    include ("controllers/c_thong_ke.php");
    $thong_ke = new c_thong_ke();
    $thong_ke->bieu_do();
} else {
    $_SESSION["admin_error"] = "Xin lỗi bạn Vui lòng đăng nhập!";
    header("location:../sign_in.php");
}