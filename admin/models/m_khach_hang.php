<?php

include_once("database.php");

class m_khach_hang extends database {
    public function add_khach_hang($id,$name,$password,$email,$hinh,$kich_hoat,$vai_tro){
        $sql = "INSERT INTO khach_hang VALUES (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$name,md5($password),$email,$hinh,$kich_hoat,$vai_tro));
    }

    public function read_vai_tro(){
        $sql = "SELECT * FROM vai_tro";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_ds_kh(){
        $sql = "SELECT * FROM khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function delete_khach_hang($id){
        $sql = "DELETE FROM khach_hang WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function One_row_khach_hang($id){
        $sql = "SELECT * FROM khach_hang WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function update_khach_hang($id,$name,$password,$email,$hinh,$kich_hoat,$vai_tro){
        $sql = "UPDATE khach_hang SET ho_ten = ?,mat_khau = ?,email = ?,hinh = ? ,kich_hoat = ?,vai_tro = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name,md5($password),$email,$hinh,$kich_hoat,$vai_tro,$id));
    }
}