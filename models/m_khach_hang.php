<?php
require_once "database.php";
class m_khach_hang extends database {

    public function resgister_user($id,$fullname,$password,$email,$image,$kich_hoat,$vaitro){
            $sql = "INSERT INTO khach_hang VALUES (?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$fullname,md5($password),$email,$image,$kich_hoat,$vaitro));
    }

    public function sign_in($email,$password){
            $sql = "SELECT * FROM khach_hang WHERE email = ? AND mat_khau = ?";

            $this->setQuery($sql);
            return $this->loadRow(array($email,md5($password)));
    }

    public function check_email($email){
        $sql = "SELECT * FROM khach_hang WHERE email = ? ";

        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function update_user($id,$fullname,$password,$email,$image){
        $sql = "UPDATE khach_hang SET ho_ten = ?,mat_khau = ?,email = ?,hinh = ? WHERE id = ?";

        $this->setQuery($sql);
        return $this->execute(array($fullname,md5($password),$email,$image,$id));
    }

    public function read_user($id){
        $sql = "SELECT * FROM khach_hang WHERE id = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}