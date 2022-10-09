<?php
class c_danh_sach_hang {
    public function index() {
        $view = "views/quan_li_hang/v_ds_hang_hoa.php";
        include ("templates/layout.php");
    }

    public function hang_hoa() {
        $view = "views/quan_li_hang/v_them_hang_hoa.php";
        include ("templates/layout.php");

    }

    public function edit_hang_hoa() {
        $view = "views/quan_li_hang/v_edit_hang_hoa.php";
        include ("templates/layout.php");

    }
}