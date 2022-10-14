<?php
@session_start();
include ("models/m_khach_hang.php");
if(isset($_SESSION["admin_error"])){
    $error_login_admin = $_SESSION["admin_error"];
    echo "<script>
            alert('$error_login_admin')
        </script>";
    unset($_SESSION["admin_error"]);
}else if(isset($_SESSION["logout_admin"])){
    $logout_admin = $_SESSION["logout_admin"];
    echo "<script>
            alert('$logout_admin')
        </script>";
    unset($_SESSION["logout_admin"]);
}

class c_sign_in {
    protected $info = NULL;
    public function index(){
        $view = "views/register_login/v_sign_in.php";
        include ("templates/login_resgister/layout.php");
    }

    public function sign_in(){
        if(isset($_POST["signin"])){
            $email = $this->checkData("your_email");
            $pass = $this->checkData("your_pass");

            $this->saveLoginSession($email,$pass);

            if(isset($_SESSION['info'])){
                $this->info = $_SESSION['info'];
                echo strtolower($this->info->vai_tro);
                if(strtolower($this->info->vai_tro) == "user"){
                    $this->unset_ss("logout_admin");
                    $_SESSION["welcome_user"] = "Chào mừng bạn đến với Adada Shop";
                    $_SESSION["avatar_us"] = $this->info->hinh;
                    header("location:index.php");
                }else if(strtolower($this->info->vai_tro) == "manager" || strtolower($this->info->vai_tro) == "membership") {
                    $_SESSION["admin"] = strtolower($this->info->vai_tro);
                    $_SESSION["avatar_ad"] = $this->info->hinh;
                    $_SESSION["name_ad"] = $this->info->ho_ten;
                    $_SESSION["id_ad"] = $this->info->id;
                    header("location:admin");
                }
            }else {
                echo "lỗi";
                $_SESSION['error_login'] = "Sai mật khẩu hoặc email vui lòng nhập lại";
                header("location:sign_in.php");
            }

        }

        $view = "views/register_login/v_sign_in.php";
        include ("templates/login_resgister/layout.php");
    }



    public function log_out(){
        $this->unset_ss(["user","error_login"]);
        header("location:login.php");
    }

    function saveLoginSession($email,$password) {
        $m_user = new m_khach_hang();
        $user = $m_user->sign_in($email,$password);
        if(!empty($user)) {
            $_SESSION['info'] = $user;
        }
    }

    function checkData($name_post){
        $namePost = $_POST["{$name_post}"] == "" ? "" : $_POST["{$name_post}"];
        return $namePost;
    }

//    unset_ss có tác dụng remove session truyền vào bằng mảng và unset
    function unset_ss($name_unsets = []){
        foreach($name_unsets as $value){
            unset($_SESSION["$value"]);
        }
    }
}