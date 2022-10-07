<?php
require_once "database.php";
class m_khach_hang extends database {

    public function resgister_user($id,$fullname,$password,$email,$image,$kich_hoat,$vaitro){
            $sql = "INSERT INTO khach_hang VALUES (?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$fullname,md5($password),$email,$image,$kich_hoat,$vaitro));
    }
}