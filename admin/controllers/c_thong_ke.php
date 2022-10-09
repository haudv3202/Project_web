<?php
class c_thong_ke {
    public function index() {
        $view = "views/thong_ke/v_thong_ke.php";
        include ("templates/layout.php");
    }

    public function bieu_do() {
        $view = "views/thong_ke/v_bieu_do.php";
        include ("templates/layout.php");
    }
}