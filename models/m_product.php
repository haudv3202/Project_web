<?php
require_once ("database.php");
class m_product extends database
{
    public function read_product() {
        $sql = "SELECT * FROM hang_hoa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_commets($id){
        $sql = "SELECT * FROM binh_luan WHERE id_hh = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_user($id){
        $sql = "SELECT * FROM khach_hang WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_view_commets($id){
        $sql = "SELECT COUNT(*)views FROM binh_luan WHERE id_hh = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function new_commets($id,$noidung,$id_kh,$id_hh){
        $sql = "INSERT INTO binh_luan VALUES (?,?,?,?,CURRENT_TIMESTAMP)";
        $this->setQuery($sql);
        return $this->execute(array($id,$noidung,$id_kh,$id_hh));
    }

    public function read_related_product($id){
        $sql = "SELECT * FROM hang_hoa WHERE id_loai = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function review_product_related($id){
        $sql = "SELECT COUNT(*)review FROM binh_luan WHERE id_hh = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
}