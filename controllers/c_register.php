<?php
@session_start();
include ("models/m_khach_hang.php");
class c_register {
    protected $us_kh;
    function __construct() {
        $this->us_kh = new m_khach_hang();
    }

    public function index(){
        if(isset($_SESSION["error_email"])){
            $error_resgister = $_SESSION["error_email"];
            echo "<script>alert('$error_resgister')</script>";
            $this->unset_ss(["error_email"]);

        }


        $view = "views/register_login/v_register.php";
        include ("templates/login_resgister/layout.php");

        $this->addUser();
    }

    function addUser(){
        if(isset($_POST["register"])){
            $id = NULLL;
            $kich_hoat = 0;
            $vaitro = "User";
            $name = $this->checkData("name");
            $email = $this->checkData("email");
            $pass = $this->checkData("pass");
            $re_pass = $this->checkData("re_pass");
            $emailsv = $this->us_kh->check_email("$email");
           if($email != $emailsv->email){
               if($pass == $re_pass){
                   $nameImg = $this->uploadImage("image","public/layout/avatar_us/");
                   $account_us = new m_khach_hang();
                   $result = $account_us->resgister_user($id,$name,$pass,$email,$nameImg,$kich_hoat,$vaitro);
                   if($result){
                       echo "<script>alert('Chào mừng bạn')</script>";
                   }
               }else {
                   echo "<script>alert('Vui lòng nhập đúng mật khẩu')</script>";
               }
           }else {
               $_SESSION["error_email"] = "Email đã tồn tại vui lòng đăng kí email khác";
               header("Location:register.php");
           }
        }
    }

    function uploadImage($imageCheck,$namesource){
       if($_FILES["{$imageCheck}"]['error'] == 0){
           $nameImage = ($_FILES["{$imageCheck}"]['error'] == 0) ? uniqid('user-', true)
               . '.' . strtolower(pathinfo($_FILES["{$imageCheck}"]["name"], PATHINFO_EXTENSION)) :"";
           if ($nameImage != "") {
               //di chuyển hình ảnh vào thư mục source
               move_uploaded_file($_FILES["{$imageCheck}"]['tmp_name'],"{$namesource}".$nameImage);
           }
           echo "<script>alert('upload thành công')</script>";
           return $nameImage;
       }else {
           return "";
       }

    }

    function checkData($name_post){
        $namePost = $_POST["{$name_post}"] == "" ? "" : $_POST["{$name_post}"];
        return $namePost;
    }

//    function checkPass($pass){
//        // Gán Mật khẩu
//        $password = $pass;
//
//        // Xác thực độ mạnh của mật khẩu
//        $uppercase = preg_match('@[A-Z]@', $password);
//        $lowercase = preg_match('@[a-z]@', $password);
//        $number    = preg_match('@[0-9]@', $password);
//        $specialChars = preg_match('@[^\w]@', $password);
////        strlen trả về độ dài chuỗi
//        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
//            echo '<script>alert("Mật khẩu phải có độ dài ít nhất 8 ký tự và phải bao gồm ít nhất một chữ cái viết hoa, một số và một ký tự đặc biệt.")</script>';
//            return "";
//        }else{
//            return $password;
//        }
////        Nếu 1 trong các điều kiện bên trên false thì lập tức nhảy vào if luôn
//    }

    function unset_ss($name_unsets = []){
        foreach($name_unsets as $value){
            unset($_SESSION["$value"]);
        }
    }
}