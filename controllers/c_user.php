<?php
@session_start();
include ("models/m_loai_hang.php");
include ("models/m_khach_hang.php");
class c_user {
    protected $loai_hang;
    protected $khach_hang;
    public function __construct()
    {
        $this->loai_hang = new m_loai_hang();
        $this->khach_hang = new m_khach_hang();
    }
    public function update_info(){
        $loai_hang = $this->loai_hang->read_lh();
        $info_user_old = NULL;
        if(isset($_GET["id_user"])){
            $id_user = $_GET["id_user"];
            $info_user_old = $this->khach_hang->read_user("$id_user");
            if(isset($_POST['update_user'])){
                $fullname = $this->checkData("fullname_up_us");
                $email = $this->checkData("email_up_us");
                $pass_old = $this->checkData("pass_old");
                $pass = $this->checkData("passnew");
                $re_pass = $this->checkData("resspass");
                $image = $this->uploadImage("file_up_us","public/layout1/avatar_us/");
                $pass_new = NULL;
                if(md5($pass_old) == $_SESSION["info"]->mat_khau){
                    if($pass == $re_pass){
                        $pass_new = $pass;
                    }
                }
                $result_update_user = $this->khach_hang->update_user($id_user,$fullname,$pass_new,$email,$image);
                if($result_update_user){
                    $_SESSION["update_user"] = "Cập nhật thành công";
                    header("Location:index.php");
                }
            }
        }


        $view = "views/users/v_update_info.php";
        include ("templates/front-end/layout.php");
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
            return $_SESSION["info"]->hinh;
        }

    }


    function checkData($name_post){
        $namePost = $_POST["{$name_post}"] == "" ? "" : $_POST["{$name_post}"];
        return $namePost;
    }
}