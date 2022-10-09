<?php
class c_khach_hang {
    public function index(){
        $view = "views/khach_hang/v_khach_hang.php";
        include ("templates/layout.php");
    }

    public function ds_kh(){
        $view = "views/khach_hang/v_danh_sach_kh.php";
        include ("templates/layout.php");
    }

    public function edit_kh(){
        $view = "views/khach_hang/v_edit_kh.php";
        include ("templates/layout.php");
    }
}