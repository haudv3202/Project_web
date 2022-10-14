<?php
include ("models/m_thong_ke.php");
class c_thong_ke {
    protected $tk;
    function __construct() {
        $this->tk = new m_thong_ke();
    }
    public function index() {
//        loại hàng
        $loais = $this->tk->read_lh();
//        Lấy tất cả sản phẩm có id
        $price_max_min_total = [];
        foreach($loais as $value){
            $price_max_min_total["$value->id"] = $this->tk->max_price("$value->id");
        }


        $view = "views/thong_ke/v_thong_ke.php";
        include ("templates/layout.php");
    }

    public function bieu_do() {
        $loais = $this->tk->read_lh();
        $avg = [];
        $ten_lh = [];
        foreach($loais as $value){
            $avg[] = $this->tk->read_hh_avg("$value->id")->trung_binh;
            $ten_lh[] = $value->ten_loai;
        }



        $view = "views/thong_ke/v_bieu_do.php";
        include ("templates/layout.php");
    }
}