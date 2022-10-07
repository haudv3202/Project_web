<?php

require_once "database.php";

class m_hang_hoa extends database {
//    Xây dụng chức năng hàng hóa
    public function read_hang_hoa (){
        $sql = "SELECT * FROM hang_hoa";
        $this->setQuery($sql);

//        Lấy nhiều dữ liệu (Trả về 1 mảng dữ liệu)
        return $this->loadAllRows();
    }

//    Xây dựng chức năng mặt hàng yêu thích

    public function like_products(){
        $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
        $this->setQuery($sql);

//        Lấy nhiều dữ liệu (Trả về 1 mảng dữ liệu)
        return $this->loadAllRows();
    }


}
