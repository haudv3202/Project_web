<?php
class c_quan_li_loai_hang {
    public function index() {
        $view = "views/quan_li_hang/v_quan_li_loai_hang.php";
        include ("templates/layout.php");
    }

    public function ds_loai_hang() {
        $view = "views/quan_li_hang/v_ds_loai_hang.php";
        include ("templates/layout.php");

    }


    public function edit_loai_hang() {
        $view = "views/quan_li_hang/v_edit_loai_hang.php";
        include ("templates/layout.php");

    }
}