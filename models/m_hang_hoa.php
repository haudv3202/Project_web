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


    public function comments_products($id){
        $sql = "SELECT COUNT(*)view_products FROM binh_luan WHERE id_hh = ?";
        $this->setQuery($sql);

        return $this->loadRow(array($id));
    }

    public function detail_product($id){
        $sql = "SELECT * FROM hang_hoa WHERE id = ?";
        $this->setQuery($sql);

        return $this->loadRow(array($id));
    }

    public function read_lh($id){
        $sql = "SELECT ten_loai FROM loai WHERE id = ?";
        $this->setQuery($sql);

        return $this->loadRow(array($id));
    }




}
