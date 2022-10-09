<?php

class  c_binh_luan {
    public function index() {
        $view = "views/binh_luan/v_binh_luan.php";
        include ("templates/layout.php");
    }

    public function chi_tiet_bl() {
        $view = "views/binh_luan/v_chi_tiet_bl.php";
        include ("templates/layout.php");
    }
}