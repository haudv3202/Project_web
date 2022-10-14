<?php

include_once ("database.php");

class m_hang_hoa extends database {

    public function All_hang_hoa(){
        $sql = "SELECT * FROM hang_hoa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function One_row_hang_hoa($id){
        $sql = "SELECT * FROM hang_hoa WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function update_hang_hoa($id,$ten,$don_gia,$sale,$image,$id_loai_hang,$dac_biet,$ngay_nhap,$view,$description){
        $sql = "UPDATE hang_hoa SET ten_hh = ?,don_gia = ?,sale = ?,hinh = ?,ngay_nhap = ?,id_loai = ?,dac_biet = ?,mo_ta = ?,so_luot_xem = ? WHERE id = ? ";
        $this->setQuery($sql);
        return $this->execute(array($ten,$don_gia,$sale,$image,$ngay_nhap,$id_loai_hang,$dac_biet,$description,$view,$id));
    }

    public function delete_hang_hoa($id){
        $sql = "DELETE FROM hang_hoa WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function add_hang_hoa($id,$ten,$don_gia,$sale,$image,$id_loai_hang,$dac_biet,$ngay_nhap,$view,$description){
        $sql = "INSERT INTO hang_hoa VALUES (?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten,$don_gia,$sale,$image,$ngay_nhap,$id_loai_hang,$dac_biet,$description,$view));
    }

    public function read_loai_hang(){
        $sql = "SELECT * FROM loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}