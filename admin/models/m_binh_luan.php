<?php
include_once ("database.php");

class m_binh_luan extends database {
    public function read_bl($id){
        $sql = "SELECT * FROM binh_luan WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_bl_hh($id){
        $sql = "SELECT * FROM binh_luan WHERE id_hh = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_1hh($id){
        $sql = "SELECT * FROM hang_hoa WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_kh($id){
        $sql = "SELECT ho_ten FROM khach_hang WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_sp(){
        $sql = "SELECT * FROM hang_hoa ORDER BY ngay_nhap DESC ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }



    public function date_total_comment($id){
        $sql = "SELECT COUNT(*)so_luot,MAX(ngay_bl)new_date,MIN(ngay_bl)old_date FROM binh_luan WHERE id_hh = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }


    public function delete_binh_luan($id){
        $sql = "DELETE FROM binh_luan WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}