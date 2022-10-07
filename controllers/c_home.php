<?php
class c_home {
    public function __construct()
    {
    }

    public function index() {
        include ("models/m_hang_hoa.php");
        $m_hang_hoa = new m_hang_hoa();
        $like_products = $m_hang_hoa->like_products();

        $view = "views/home/v_home.php";
        include ("templates/front-end/layout.php");
    }
}
?>