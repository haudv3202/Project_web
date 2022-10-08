<?php
include("models/m_khach_hang.php");
@session_start();
class c_user {
//    public function checkLogin() {
//        if (isset($_POST['login'])) {
//            $username = $_POST['username'];
//            $password = $_POST['password'];
//            $this->saveLoginSession($username,$password);
//            if (isset($_SESSION['user'])) {
//                //nhảy vào trang index // kiểm tra có session mới cho nhảy
//                //xử lý nút đăng xuất
//                header("location:home.php");
//            }  else {
//                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
//                header("location:login.php");
//            }
////            $sql = "select * from nguoi_dung where ten_dang_nhap = $username and mat_khau = $password";
////            echo $sql;
//            //gọi và xử lý tính năng đăng nhập nếu thành công thì hiển thị ra 123 rồi dừng
//            //nếu không thành công quay trở lại trang login và hiển thị ra bạn đã sai tài khoản
//        }
//    }

    public function logout() {
        $_SESSION["logout_admin"] = "Bạn đã đăng xuất thành công!";
        $this->unset_ss(["user","admin","error_login","admin_error"]);
        header("location:../sign_in.php");
    }

//    public function saveLoginSession($username,$password) {
//        $m_user = new m_khachhang();
//        $user = $m_user->read_user_by_id_pass($username,$password);
//        if(!empty($user)) {
//              $_SESSION['user'] = $user;
//        }
//    }


    function unset_ss($name_unsets = []){
        foreach($name_unsets as $value){
            unset($_SESSION["$value"]);
        }
    }
}