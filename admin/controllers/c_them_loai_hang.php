<?php
include ("models/m_loai_hang.php");
class c_them_loai_hang {

    public $loai_hang ;

    function __construct() {
        $this->loai_hang = new m_loai_hang();
    }

    public function index() {
        $this->add_loai_hang();

        $view = "views/quan_li_hang/v_them_loai_hang.php";
        include ("templates/layout.php");
    }
//ds loại hàng
    public function ds_loai_hang() {
        $ds_loai_hang = $this->loai_hang->ds_loai_hang();
        if(isset($_SESSION["update"])){
            $succes_update = $_SESSION["update"];
            echo " 
                    <script>alert('$succes_update')</script>
                    ";
            unset($_SESSION["update"]);
        }else if(isset($_SESSION["update_error"])){
            $error_update = $_SESSION["update_error"];
            echo " 
                    <script>alert('$error_update')</script>
                    ";
            unset($_SESSION["update_error"]);
        }else if(isset($_SESSION["delete"])){
            $delete = $_SESSION["delete"];
            echo " 
                    <script>alert('$delete')</script>
                    ";
            unset($_SESSION["delete"]);
        }
        $view = "views/quan_li_hang/v_ds_loai_hang.php";
        include ("templates/layout.php");

    }
//Xóa 1 Loại hàng
    public function delete_loai_hang(){
        $id = $_GET["id"] ;
        if(!empty($id)){
            $delete = $this->loai_hang->delete_loai_hang($id);
            if($delete){
                $_SESSION["delete"] = "Xóa thành công!";
                header("Location:ds_loai_hang.php");
            }else {
                echo " 
                    <script>alert('Delete Thất bại!')</script>
                    ";
            }
        }
    }

//    Xóa các loại hàng được tích
    public function deletes_loai_hang(){
        $id = $_GET["id"] ;
        if(!empty($id)){
            $ids = explode(',',$id);
            $delete = NULL;
            foreach($ids as $value) {
                $delete = $this->loai_hang->delete_loai_hang($value);
            }
            if($delete){
                $_SESSION["delete"] = "Xóa thành công!";
                header("Location:ds_loai_hang.php");
            }else {
                echo "
                    <script>alert('Delete Thất bại!')</script>
                    ";
            }
        }
    }
//   Cập nhật hàng hóa
    public function edit_loai_hang() {
        $id = $_GET["id"];
        if(!empty($id)){
            $loai_hang = $this->loai_hang->One_row_loai_hang($id);
            if(isset($_POST["update_loai"])){
                $name_update = $_POST["update_name_loai"];
                $result_up_loai = $this->loai_hang->update_loai_hang($id,$name_update);
                if($result_up_loai){
                    $_SESSION["update"] = "Update Thành công!";
                    header("Location:ds_loai_hang.php");
                }else {
                    echo " 
                    <script>alert('Update Thất bại!')</script>
                    ";
                }
            }
            if(empty($loai_hang)) {
                $_SESSION["update_error"] = "Mặt hàng không tồn tại";
                header("Location:ds_loai_hang.php");
            }

        }
        $view = "views/quan_li_hang/v_edit_loai_hang.php";
        include ("templates/layout.php");

    }
//   Thêm hàng hóa
    function add_loai_hang(){
        if(isset($_POST["add_loai_hang"])){
                $ten_loai_hang = $this->checkData("name_loai");
                $id = NULL;
                $add_loai_hang = $this->loai_hang ->Add_loai_hang($id,$ten_loai_hang);

                if($add_loai_hang){
                    echo " 
                    <script>alert('Thêm loại Thành công!')</script>
                    ";
                }else {
                    echo " 
                    <script>alert('Thêm loại Thất bại!')</script>
                    ";
                }
        }
    }



    function checkData($name_post){
        $namePost = $_POST["{$name_post}"] == "" ? "" : $_POST["{$name_post}"];
        return $namePost;
    }
}