<?php

class c_hang_hoa {
    public function index() {
        include ("models/m_hang_hoa.php");
        $m_hang_hoa = new m_hang_hoa();
        $hang_hoa_data = $m_hang_hoa ->read_hang_hoa();

        $view = "views/hang_hoa/v_hang_hoa.php";
        include ("templates/front-end/layout.php");
    }
}