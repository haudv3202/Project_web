<?php
include_once ("database.php");
class m_loai_hang extends database {

    public function read_lh(){
        $sql = "SELECT * FROM loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}