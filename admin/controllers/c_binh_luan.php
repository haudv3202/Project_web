<?php
include ("models/m_binh_luan.php");
class  c_binh_luan {
    protected $bl;
    protected $id_bl_sp;
    function __construct() {
        $this->bl = new m_binh_luan();
    }
    public function index() {

        $data_bls = $this->bl->read_sp();
        $new_date_comment = [];



        $date_total_comment = [];
        foreach($data_bls as $value){
            $date_total_comment["$value->id"] = $this->bl->date_total_comment("$value->id");
        }


        $view = "views/binh_luan/v_binh_luan.php";
        include ("templates/layout.php");
    }

    public function chi_tiet_bl() {
        if(isset($_SESSION["delete"])){
            $delete_bl = $_SESSION["delete"];
            echo "<script>alert('$delete_bl')</script>";
            unset($_SESSION["delete"]);
        }else if(isset($_SESSION["deletes_bls"])){
            $deletes_bl = $_SESSION["deletes_bls"];
            echo "<script>alert('$deletes_bl')</script>";
            unset($_SESSION["deletes_bls"]);
        }
        $this->id_bl_sp = $_GET["id"];

        $bls = [];
        $hh = NULL;
        $name_kh = [];
        if(isset($this->id_bl_sp)){
            $bls = $this->bl->read_bl_hh("$this->id_bl_sp");
            $hh = $this->bl->read_1hh("$this->id_bl_sp");
            foreach($bls as $value){
                $name_kh["$value->id_kh"] = $this->bl->read_kh("$value->id_kh");
            }
        }




        $view = "views/binh_luan/v_chi_tiet_bl.php";
        include ("templates/layout.php");
    }

//    Xóa 1 hàng hóa
    public function delete_binh_luan(){
        $id = $_GET["id_del"] ;
        $id_hh = $_GET["id_hh"] ;
        if(!empty($id)){
            $delete = $this->bl->delete_binh_luan($id);

            if($delete){
                $_SESSION["delete"] = "Xóa thành công!";
                header("Location:chi_tiet_bl.php?id=$id_hh");
            }else {
                echo " 
                    <script>alert('Delete Thất bại!')</script>
                    ";
            }
        }
    }

        //    Xóa các loại hàng được tích
    public function deletes_binh_luan(){
        $id = $_GET["id_del"] ;
        $id_hh = $_GET["id_hh"] ;
            if(!empty($id)){
                $ids = explode(',',$id);
                $delete = NULL;
                foreach($ids as $value) {
                    $delete = $this->bl->delete_binh_luan($value);
                }
                if($delete){
                    $_SESSION["deletes_bls"] = "Xóa thành công " . count($ids) . " Bình luận!" ;
                    header("Location:chi_tiet_bl.php?id=$id_hh");
                }else {
                    echo "
                    <script>alert('Delete Thất bại!')</script>
                    ";
                }
            }else {
                $_SESSION["error_delete"] = "Vui Lòng chọn sản phẩm cần xóa";
                header("Location:ds_hang.php");
            }
        }

}