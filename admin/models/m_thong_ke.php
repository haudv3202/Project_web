<?php
include_once ("database.php");

class m_thong_ke extends database {

    public function read_lh(){
        $sql = "SELECT * FROM loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_hh_avg($id_loai){
        $sql = "SELECT AVG(don_gia)trung_binh FROM hang_hoa WHERE id_loai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_loai));
    }


    public function read_hh($id_loai){
        $sql = "SELECT * FROM hang_hoa WHERE id_loai = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loai));
    }

    public function max_price($id_loai){
        $sql = "SELECT COUNT(*)so_luong,MAX(don_gia)gia_max,MIN(don_gia)gia_min,AVG(don_gia)trung_binh FROM hang_hoa WHERE id_loai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_loai));
    }
}