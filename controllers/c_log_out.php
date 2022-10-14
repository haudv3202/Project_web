<?php
@session_start();
class c_log_out {
    public function log_out() {
        $_SESSION["logout_user"] = "Bạn đã đăng xuất thành công!";
        $this->unset_ss(["welcome_user","info"]);
        header("location:index.php");
    }


    function unset_ss($name_unsets = []){
        foreach($name_unsets as $value){
            unset($_SESSION["$value"]);
        }
    }
}