<?php
include("models/m_khach_hang.php");
@session_start();
class c_user {
    public function logout() {
        $_SESSION["logout_admin"] = "Bạn đã đăng xuất thành công!";
        $this->unset_ss(["user","admin","error_login","admin_error","avatar_ad","id_ad"]);
        header("location:../sign_in.php");
    }

    function unset_ss($name_unsets = []){
        foreach($name_unsets as $value){
            unset($_SESSION["$value"]);
        }
    }
}