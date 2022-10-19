<?php
include ("models/m_khach_hang.php");
class c_khach_hang {
    protected $kh ;
    function __construct() {
        $this->kh = new m_khach_hang();
    }
    public function index(){
        $ds_vai_tro =  $this->kh->read_vai_tro();
        $this->add_kh();
        $view = "views/khach_hang/v_khach_hang.php";
        include ("templates/layout.php");
    }

    public function ds_kh(){
        if(isset($_SESSION["add_kh"])){
            $add_kh =  $_SESSION["add_kh"];
            echo "<script>alert('$add_kh')</script>";
            unset($_SESSION["add_kh"]);
        }else if(isset($_SESSION["error_kh_pass"])){
            $add_kh =  $_SESSION["error_kh_pass"];
            echo "<script>alert('$add_kh')</script>";
            unset($_SESSION["error_kh_pass"]);
        }else if(isset($_SESSION["delete_kh"])){
            $del_kh =  $_SESSION["delete_kh"];
            echo "<script>alert('$del_kh')</script>";
            unset($_SESSION["delete_kh"]);
        }else if(isset($_SESSION["deletes_kh"])){
            $dels_kh =  $_SESSION["deletes_kh"];
            echo "<script>alert('$dels_kh')</script>";
            unset($_SESSION["deletes_kh"]);
        }else if(isset($_SESSION["update"])){
            $update_kh =  $_SESSION["update"];
            echo "<script>alert('$update_kh')</script>";
            unset($_SESSION["update"]);
        }

        $ds_kh = $this->kh->read_ds_kh();
        $view = "views/khach_hang/v_danh_sach_kh.php";
        include ("templates/layout.php");
    }
//   Cập nhật khach hang
    public function edit_kh(){
        $ds_vai_tro =  $this->kh->read_vai_tro();
        $id = $_GET["id"];
        if(!empty($id)){
            $khach_hang = $this->kh->One_row_khach_hang($id);
            if(isset($_POST["update_kh"])){
                $name = $this->checkData("name_usr_up");
                $pass = $this->checkData("pass_usr_up");
                $new_pass = $this->checkData("pass_usr_up");
                $re_pass = $this->checkData("re_pass_up");
                $email = $this->checkData("email_usr_up");
                $kich_hoat = $this->checkData("kich_hoat_up");
                $vai_tro = $this->checkData("vai_tro_up");
                $image = NULL;
                if(strtolower($vai_tro) == "cUser"){
                    $image = $this->uploadImage("image_user_up","../public/layout1/avatar_us/");
                }else {
                    $image = $this->uploadImage("image_user_up","public/theme-assets/avatar_admin/");
                }

                if(!empty($pass)){
                    if($khach_hang->mat_khau == md5($pass)){
                        if($new_pass == $re_pass){
                            $pass = $new_pass;
                        }
                    }
                }

                $result_up_kh = $this->kh->update_khach_hang($id,$name,$pass,$email,$image,$kich_hoat,$vai_tro);
                if($result_up_kh){
                    $_SESSION["update"] = "Update Thành công!";
                    header("Location:ds_khach_hang.php");
                }else {
                    echo " 
                    <script>alert('Update Thất bại!')</script>
                    ";
                }
            }

        }
        $view = "views/khach_hang/v_edit_kh.php";
        include ("templates/layout.php");
    }

    public function add_kh(){
        if(isset($_POST["add_kh"])){
            $id = NULL;
            $name = $this->checkData("name_usr");
            $pass = $this->checkData("pass_usr");
            $re_pass = $this->checkData("re_pass");
            $email = $this->checkData("email_usr");
            $kich_hoat = $this->checkData("kich_hoat");
            $vai_tro = $this->checkData("vai_tro");
            $image = NULL;
            if(strtolower($vai_tro) == "user"){
                $image = $this->uploadImage("image_user","../public/layout1/avatar_us/");
            }else {
                $image = $this->uploadImage("image_user","public/theme-assets/avatar_admin/");
            }
            if($pass == $re_pass){
                $result_kh = $this->kh->add_khach_hang($id,$name,$pass,$email,$image,$kich_hoat,$vai_tro);
                if($result_kh){
                    $_SESSION["add_kh"] = "Tạo khách hàng thành công!";
                    header("Location:ds_khach_hang.php");
                }
            }else {
                $_SESSION["error_kh_pass"] = "Mật khẩu không khớp";
                header("Location:ds_khach_hang.php");
            }

        }
    }

    public function delete_khach_hang(){
        $id = $_GET["id"] ;
        if(!empty($id)){
                $delete_kh = $this->kh->delete_khach_hang($id);
            if($delete_kh){
                $_SESSION["delete_kh"] = "Xóa khách hàng thành công!";
                header("Location:ds_khach_hang.php");
            }else {
                echo "
                    <script>alert('Delete Thất bại!')</script>
                    ";
            }
        }
    }

    public function deletes_khach_hang(){
        $id = $_GET["id"] ;
        if(!empty($id)){
            $ids = explode(',',$id);
            $delete = NULL;
            foreach($ids as $value) {
                $delete = $this->kh->delete_khach_hang($value);
            }
            if($delete){
                $_SESSION["deletes_kh"] = "Xóa ".count($ids). " khách hàng thành công!";
                header("Location:ds_khach_hang.php");
            }else {
                echo "
                    <script>alert('Delete Thất bại!')</script>
                    ";
            }
        }
    }

//upload ảnh trả về tên ảnh
    function uploadImage($imageCheck,$namesource){
        if($_FILES["{$imageCheck}"]['error'] == 0){
            $nameImage = ($_FILES["{$imageCheck}"]['error'] == 0) ? uniqid('admin-', true)
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
        $namepost = $_POST["{$name_post}"] == "" ? "" : $_POST["{$name_post}"];
        return $namepost;
    }

}