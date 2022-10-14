<?php

include_once ("database.php");

class m_loai_hang extends database {

    public function Add_loai_hang($id,$name_product){
        $sql = "INSERT INTO loai VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$name_product));
    }

    public function ds_loai_hang(){
        $sql = "SELECT * FROM loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function One_row_loai_hang($id){
        $sql = "SELECT * FROM loai WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function update_loai_hang($id,$name_loai){
        $sql = "UPDATE loai SET ten_loai = ? WHERE id = ? ";
        $this->setQuery($sql);
        return $this->execute(array($name_loai,$id));
    }

    public function delete_loai_hang($id){
        $sql = "DELETE FROM loai WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
